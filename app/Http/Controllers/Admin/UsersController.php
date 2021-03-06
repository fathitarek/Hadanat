<?php

namespace App\Http\Controllers\Admin;

use App\Profiles;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data=$request->input();
        $search=$request->input('search');
        if($search){
            $users=User::where('name','LIKE',"%$search%")->orderBy('id','DESC')->where('id','!=',Auth::user()->id)->where('id','!=',1)->paginate(100);
            $users->User(['search'=>$search]);
        }else{
            $users=User::orderBy('system_users.id','DESC')->where('id','!=',Auth::user()->id)->where('id','!=',1)->get();
        }
        return view('auth.users.view',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $profiles=Profiles::where('active',1)->get();
        return view('auth.users.add',compact('profiles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->input();
        $validator = Validator::make($request->all(),
            array(
                'profile_id'=>'required',
                'name'=>'required',
                'email'=>'required|unique:system_users,email',
                'username'=>'required|unique:system_users,username',
                'password'=>'required',
                'confirm_password'=>'required|same:password',
            ));
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }else {
            $active=(isset($data['active']))?1:0;
            $users=new User();
            $users->profile_id=$data['profile_id'];
            $users->name=$data['name'];
            $users->email=$data['email'];
            $users->username=$data['username'];
            $users->password=Hash::make($data['password']);
            if(Input::hasFile('image')){
                $validator = Validator::make($request->all(),array(
                    'image' => 'required|mimes:jpeg,bmp,png'
                ));
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator->errors())->withInput();
                }else{
                    $file=$request->file('image');
                    $image=FileImage($file,'Users');
                    $users->img=$image['img'];
                    $users->img_dir=$image['img_dir'];
                }
            }
            $users->active=$active;
            if($active==1){
                $users->active_by=Auth::user()->id;
                $users->active_date=date("Y-m-d H:i:s");
            }
            if($active==0){
                $users->unactive_by=Auth::user()->id;
                $users->unactive_date=date("Y-m-d H:i:s");
            }
            $users->add_by=Auth::user()->id;
            $users->add_date=date("Y-m-d H:i:s");
            if($users->save()){
                Session::flash('success', Lang::get('main.insert').Lang::get('main.users'));
                return Redirect::to('admin/users/create');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post=User::where('id','!=',Auth::user()->id)->where('id','!=',1)->find($id);
        if(count($post)){
            $post=makeDefaultImage($post,'Users');
            $profiles=Profiles::get();
            return view('auth.users.edit',compact('post','profiles'));
        }else{
            return abort(404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=$request->input();
        $users= User::find($id);
        if(count($users)){
            $validator = Validator::make($request->all(),
                array(
                    'name'=>'required',
                    'email'=>'required|unique:system_users,email,'.$id,
                    'username'=>'required|unique:system_users,username,'.$id,
                ));
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }else {
                if(!empty($data['password'])){
                    $validator = Validator::make($request->all(),
                        array(
                            'password'=>'required|min:6',
                            'confirm_password'=>'required|same:password',
                        ));
                    if ($validator->fails()) {
                        return redirect()->back()->withErrors($validator->errors())->withInput();
                    }else {
                        $users->password=$data['password'];
                    }
                }
                if(Input::hasFile('image')){
                    $validator = Validator::make($request->all(),array(
                        'image' => 'required|mimes:jpeg,bmp,png'
                    ));
                    if ($validator->fails()) {
                        return redirect()->back()->withErrors($validator->errors())->withInput();
                    }else{
                        if(file_exists(public_path().$users->img_dir.$users->img)&&!empty($users->img_dir)){
                            unlink(public_path().$users->img_dir.$users->img);
                        }
                        if(file_exists(public_path().$users->img_dir.'thumbnail/thumbnail_'.$users->img)&&!empty($users->img_dir)){
                            unlink(public_path().$users->img_dir.'thumbnail/thumbnail_'.$users->img);
                        }
                        $file=$request->file('image');
                        $image=FileImage($file,'Users');
                        $users->img=$image['img'];
                        $users->img_dir=$image['img_dir'];
                    }
                }
                $active=(isset($data['active']))?1:0;
                $users->profile_id=$data['profile_id'];
                $users->name=$data['name'];
                $users->email=$data['email'];
                $users->username=$data['username'];
                if($active==1&&$users->active==0){
                    $users->active_by=Auth::user()->id;
                    $users->active_date=date("Y-m-d H:i:s");
                }
                if($active==0&&$users->active==1){
                    $users->unactive_by=Auth::user()->id;
                    $users->unactive_date=date("Y-m-d H:i:s");
                }

                $users->active=$active;
                $users->lastedit_by=Auth::user()->id;
                $users->lastedit_date=date("Y-m-d H:i:s");
                if($users->save()){
                    Session::flash('success', Lang::get('main.update').Lang::get('main.users'));
                    return Redirect::to('admin/users/'.$id.'/edit');
                }
            }
        }else{
            return abort(404);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $users=User::find($id);
        if(count($users)){
            $users->deleted_by=Auth::user()->id;
            $users->save();
            if($users->delete()){

            }
        }
    }
    public function activation(Request $request){
        if($request->ajax()){
            $id=$request->input('id');
            $active=$request->input('active');
            $users=User::find($id);
            if ($active == 0) {
                $users->active = 0;
                $users->unactive_by = Auth::user()->id;
                $users->unactive_date = date("Y-m-d H:i:s");
            } elseif ($active == 1) {
                $users->active = 1;
                $users->active_by = Auth::user()->id;
                $users->active_date = date("Y-m-d H:i:s");
            }
            $users->save();
        }else{
            return redirect(404);
        }
    }
}

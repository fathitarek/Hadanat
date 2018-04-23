<?php

namespace App\Http\Controllers\Admin;

use App\Profiles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;

class ProfilesController extends Controller
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
            $profiles=Profiles::where('name','LIKE',"%$search%")->orderBy('id','DESC')->paginate(100);
            $profiles->Profiles(['search'=>$search]);
        }else{
            $profiles=Profiles::orderBy('system_profiles.id','DESC')->get();
        }
        return view('auth.profiles.view',compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('auth.profiles.add');

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
                'name'=>'required',
                'permissions'=>'required'
            ));
        $permissions=(!isset($data['permissions']))?[]:$data['permissions'];
        $arr=[];
        foreach($GLOBALS['permissions_settings'] as $pr){
            if(in_array($pr,$permissions)){
                $arr[$pr]=1;
            }else{
                $arr[$pr]=0;
            }
        }
        $perm=json_encode($arr);
        $validator->after(function()use($validator,$data,$perm){
            $per=json_decode($perm);
            $report=array();
            $y=1;
            foreach($GLOBALS['sup_permissions'] as $sup=>$val){
                if($per->$sup){
                    foreach($val as $v){
                        if($per->$v){
                            $report[$sup][]=1;
                        }else{
                            $report[$sup][]=0;
                        }
                        $y++;
                    }
                }
            }
            if(!count($report)){
                $validator->errors()->add('error_permissions',Lang::get('main.error_profiles_child_select_message'));
            }
            foreach($report as $re){
                if(!in_array('1',$re)){
                    $validator->errors()->add('error_permissions',Lang::get('main.error_profiles_parent_select_message'));
                   break;
                }
            }
        });
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }else {
            $active=(isset($data['active']))?1:0;
            $profiles=new Profiles();
            $profiles->name=$data['name'];
            $profiles->permissions=$perm;
            $profiles->active=$active;
            if($active==1){
                $profiles->active_by=Auth::user()->id;
                $profiles->active_date=date("Y-m-d H:i:s");
            }
            if($active==0){
                $profiles->unactive_by=Auth::user()->id;
                $profiles->unactive_date=date("Y-m-d H:i:s");
            }
            $profiles->add_by=Auth::user()->id;
            $profiles->add_date=date("Y-m-d H:i:s");
            if($profiles->save()){
                Session::flash('success', Lang::get('main.insert').Lang::get('main.profiles'));
                return Redirect::to('admin/profiles/create');
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
        $post=Profiles::find($id);
        if(count($post)){
            $post=makeDefaultImage($post,'profiles');
            return view('auth.profiles.edit',compact('post'));
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
        $profiles= Profiles::find($id);
        if(count($profiles)){
            $validator = Validator::make($request->all(),
                array(
                    'name'=>'required',
                    'permissions'=>'required',
                ));
            $permissions=(!isset($data['permissions']))?[]:$data['permissions'];
            $arr=[];
            foreach($GLOBALS['permissions_settings'] as $pr){
                if(in_array($pr,$permissions)){
                    $arr[$pr]=1;
                }else{
                    $arr[$pr]=0;
                }
            }
            $perm=json_encode($arr);
            $validator->after(function()use($validator,$data,$perm){
                $per=json_decode($perm);
                $report=array();
                $y=1;
                foreach($GLOBALS['sup_permissions'] as $sup=>$val){
                    if($per->$sup){
                        foreach($val as $v){
                            if($per->$v){
                                $report[$sup][]=1;
                            }else{
                                $report[$sup][]=0;
                            }
                            $y++;
                        }
                    }
                }
                if(!count($report)){
                    $validator->errors()->add('error_permissions',Lang::get('main.error_profiles_child_select_message'));
                }
                foreach($report as $re){
                    if(!in_array('1',$re)){
                        $validator->errors()->add('error_permissions',Lang::get('main.error_profiles_parent_select_message'));
                        break;
                    }
                }
            });
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }else {
                $active=(isset($data['active']))?1:0;
                $profiles->name=$data['name'];
                $profiles->permissions=$perm;
                if($active==1&&$profiles->active==0){
                    $profiles->active_by=Auth::user()->id;
                    $profiles->active_date=date("Y-m-d H:i:s");
                }
                if($active==0&&$profiles->active==1){
                    $profiles->unactive_by=Auth::user()->id;
                    $profiles->unactive_date=date("Y-m-d H:i:s");
                }
                $profiles->active=$active;
                $profiles->lastedit_by=Auth::user()->id;
                $profiles->lastedit_date=date("Y-m-d H:i:s");
                if($profiles->save()){
                    Session::flash('success', Lang::get('main.update').Lang::get('main.profiles'));
                    return Redirect::to('admin/profiles/'.$id.'/edit');
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
        $profiles=Profiles::find($id);
        if(count($profiles)){
            if($profiles->delete()){
                $profiles->deleted_by=Auth::user()->id;
                $profiles->save();
            }
        }
    }
    public function activation(Request $request){
        if($request->ajax()){
            $id=$request->input('id');
            $active=$request->input('active');
            $profiles=Profiles::find($id);
            if ($active == 0) {
                $profiles->active = 0;
                $profiles->unactive_by = Auth::user()->id;
                $profiles->unactive_date = date("Y-m-d H:i:s");
            } elseif ($active == 1) {
                $profiles->active = 1;
                $profiles->active_by = Auth::user()->id;
                $profiles->active_date = date("Y-m-d H:i:s");
            }
            $profiles->save();
        }else{
            return redirect(404);
        }
    }
}

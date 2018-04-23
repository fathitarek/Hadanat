<?php
function convertToDateTimeLocal($date){
    return (!empty($date)&&$date!='0000-00-00 00:00:00')?date("Y-m-d",strtotime($date)).'T'.date("H:i:s",strtotime($date)):'';
}
function PerUser($val){
    $UserPermissionsData=\Illuminate\Support\Facades\Request::get('UserPermissionsData');
    return(isset($UserPermissionsData->$val)&&$UserPermissionsData->$val)?true:false;
}
function timeAgo ($time)
{
    $time=strtotime($time);
    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );
    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }
}
function makeDefaultImage($post,$name){
    if(!(!empty($post->img_dir)&&!empty($post->img)&&file_exists(public_path($post->img_dir.$post->img)))){
        $post->img_dir='/img/'.$name.'/';
        $post->img='default_image.png';
    }
    return$post;
}
function userSystem(){
    $system=\App\UsersSystems::where('user_id',Auth::user()->id)->first();
    if(!count($system)){
        $system=new \App\UsersSystems();
        $system->user_id=Auth::user()->id;
        $system->backend_lang='en';
        $system->save();
    }
    return$system;
}
function getUserSystem($pars){
    $userSystemData=\Illuminate\Support\Facades\Request::get('UserSystem');
    return (isset($userSystemData->$pars))?$userSystemData->$pars:'';
}
function byUser($user_id,$string=null){
    $user=DB::table('users')->where('id',$user_id)->first();

    if(count($user)){
        if($user->img_dir==''||$user->img==''){
            $user->img_dir='img/Users/';
            $user->img='default_user.png';
        }
        return'<div class="zoom_img"><img class="img-polaroid " src="'.asset($user->img_dir.$user->img).'" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.$string.$user->name.'"></div>';
    }
    return Lang::get('main.no_image');
}
function byAppUser($user_id,$string=null){
    $user=\App\AppUsers::find($user_id);
    if(count($user)){
        if($user->img_dir==''&&$user->img==''){
            $user->img_dir='img/Users/';
            $user->img='default_user.png';
        }
        return'<div class="zoom_img"><img class="img-polaroid " src="'.asset($user->img_dir.$user->img).'" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.$string.' { '.Lang::get('main.'.$user->type).' } '.$user->name.'"></div>';
    }
    return Lang::get('main.no_image');
}
function FileImage($file,$folder_name,$input_name='image'){
    $path = '/img/'.$folder_name.'/' . date('Y/m/d').'/';
    if (!file_exists(public_path() . $path)) {
        File::makeDirectory(public_path() . $path, $mode = 0777, true, true);
    }
    if (!file_exists(public_path() . $path.'thumbnail')) {
        File::makeDirectory(public_path() . $path.'thumbnail', $mode = 0777, true, true);
    }
    //file new name
    $namefile = $folder_name.'_' . rand(0000, 9999) . '_' . time();
    //file extension
    $ext = $file->getClientOriginalExtension();
    //file old name
    $old_name = $file->getClientOriginalName();
    //convert the size of the file
    //$size = ImageUploader::GetSize($file->getSize());
    //get the mime type of the file
    $mimtype = $file->getMimeType();
    //making the new name with extension
    $mastername = $namefile . '.' . $ext;
    list($width, $height, $type, $attr) = getimagesize($_FILES[$input_name]['tmp_name']);
    $width_per=round(($width*10)/100);
    $height_per=round(($height*10)/100);
    $file->move(public_path() . $path, $mastername);
    Image::make(public_path() . $path  . $mastername, array(
        'width' => $width_per,
        'height' => $height_per,
    ))->save(public_path() . $path . 'thumbnail/thumbnail_' . $mastername);
    return array('img'=>$mastername,'img_dir'=>$path);
}
function FileImages($file,$folder_name,$x,$input_name='images'){
    $path = '/img/'.$folder_name.'/' . date('Y/m/d').'/';
    if (!file_exists(public_path() . $path)) {
        File::makeDirectory(public_path() . $path, $mode = 0777, true, true);
    }
    if (!file_exists(public_path() . $path.'thumbnail')) {
        File::makeDirectory(public_path() . $path.'thumbnail', $mode = 0777, true, true);
    }
    //file new name
    $namefile = $folder_name.'_' . rand(0000, 9999) . '_' . time();
    //file extension
    $ext = $file->getClientOriginalExtension();
    //file old name
    $old_name = $file->getClientOriginalName();
    //convert the size of the file
    //$size = ImageUploader::GetSize($file->getSize());
    //get the mime type of the file
    $mimtype = $file->getMimeType();
    //making the new name with extension
    $mastername = $namefile . '.' . $ext;
    list($width, $height, $type, $attr) = getimagesize($_FILES[$input_name]['tmp_name'][$x]);
    $width_per=round(($width*10)/100);
    $height_per=round(($height*10)/100);
    $file->move(public_path() . $path, $mastername);
    switch($folder_name){
        case'hotels':
            $imagesResize=[
                0=>['width'=>60,'height'=>60],
                1=>['width'=>260,'height'=>180],
                2=>['width'=>400,'height'=>200],
            ];
            break;
        case'flights':
            $imagesResize=[
                0=>['width'=>60,'height'=>60],
                1=>['width'=>260,'height'=>180],
                2=>['width'=>400,'height'=>200],
            ];
            break;
        default:
            $imagesResize=[];
            break;
    }
    foreach($imagesResize as $imageSize){
        $widthS=$imageSize['width'];
        $heightS=$imageSize['height'];
        Image::make(public_path() . $path  . $mastername, array(
            'width' => $widthS,
            'height' => $heightS,
        ))->save(public_path() . $path . 'thumbnail/'.$widthS.'_'.$heightS.'_' . $mastername);
    }
    Image::make(public_path() . $path  . $mastername, array(
        'width' => $width_per,
        'height' => $height_per,
    ))->save(public_path() . $path . 'thumbnail/thumbnail_' . $mastername);
    return array('img'=>$mastername,'img_dir'=>$path);
}
function tableCount($table){
    if(Schema::hasTable($table)){
        $section=DB::table($table)->count();
        return $section;
    }
   return 0;
}
function getDaysName(){
    $timestamp = strtotime('next Sunday');
    $days = array();
    for ($i = 0; $i < 7; $i++) {
        $days[] = strtolower(strftime('%A', $timestamp));
        $timestamp = strtotime('+1 day', $timestamp);
    }
    return$days;
}

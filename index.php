<?php
//判断数组中是否包含指定属性 array_key_exists('PATH_INFO',$_SERVER)
$dir='main';//默认文件夹名称
$filename='index';//默认文件名
//判断路径是否存在
if(array_key_exists('PATH_INFO', $_SERVER)){
  $path=$_SERVER['PATH_INFO'];//获取URL中的路径
  $str=substr($path, 1);//去掉第一个斜杠
  $arr=explode('/', $str);//按照斜杠分割目录名称和文件名称
  if(count($arr)==2){
    //覆盖默认的目录名称
    $dir=$arr[0];
    //覆盖默认的文件名称
    $filename=$arr[1];
  }else{
    //跳转到登陆页面
    $filename='login';
  }

}
include('./views/'.$dir.'/'.$filename.'.html');

	// include('./views/main/index.html');
 ?>
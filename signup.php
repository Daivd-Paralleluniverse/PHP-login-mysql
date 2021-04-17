<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("错误执行");
    }//判断是否有submit操作



    $name=$_POST['name'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password
    $pasl=md5($password);
    $idc=date("Ymdhis");
    include('connect.php');//链接数据库
   //mysqli_select_db($conn, 'test' );
    $q="insert into user(id,username,passd) values('$idc','$name','$pasl')";//向数据库插入表单传来的值的sql
    //$conn->query($q);//执行sql
    mysqli_query($conn,$q);//执行sql

    //$res=mysqli_query($conn,$q);
    //if(!$res){
    //   echo "提交失败!";
    //}else{
    //   echo "提交成功！";
    //}
    include('ans.php');



    mysqli_close($conn);//关闭数据库

?>

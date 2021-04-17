<head>
    <link rel="stylesheet" href="style1.css">
</head>
<?php
   header("Content-Type: text/html; charset=utf8");
   if(!isset($_POST['submit'])){
    exit("错误执行");
   }//判断是否有submit操作
   session_start();
   $name=$_POST['usrn'];//post获取表单里的name
   $password=$_POST['pasd'];//post获取表单里的password
   $passwod=md5($password);
   
   include('connect.php');
      if($name&&$password){
         $sql = "select * from user where username ='$name' and passd='$passwod'";//检测数据库是否有对应的username和password的sql
         $rest = mysqli_query($conn,$sql);//执行sql   
         $ro=mysqli_num_rows($rest);
         //print($ro);
         if($ro){
             $_SESSION["name"] = $name;
             echo "您的账户和密码正确";
             header('Location: secr.php');
         }else{
            echo "<div>您的输入不正确，请检查后继续</div>";
         }
         

      }else{
         echo "<div>您必须输入有效的用户名和密码才能登陆！</div>";
      }  
   
   
         
       
   mysqli_close($conn);
?>
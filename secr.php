<?php
          session_start();      //打开SESSION。
      /*
      *   定点提示跳转
      */
          function jian($ce,$dizhi) {
             echo ("<script type='text/javascript'> alert('{$ce}');location=('{$dizhi}');</script>");
             exit;
          }      //第一个参数是提示信息，第二个参数是跳转地址
       
          if ($_SESSION["name"] == "") {
              jian('对不起，请您登陆后再访问!','login.html');
          }else{
            header("Content-Type: text/html; charset=utf8");
            include('connect.php');
            $sec="SELECT * FROM user";
            $res=mysqli_query($conn,$sec);
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>用户名</th>";
            echo "<th>MD5密钥</th>";
            echo "</tr>";

            //var_dump($res);
            while($row = mysqli_fetch_array($res))
            	{
	             	echo "<tr>";
		            echo "<td>".$row['id']."</td>";
		            echo "<td>".$row['username']."</td>";
		            echo "<td>".$row['passd']."</td>";
		            echo "</tr>";
	            }
	          echo "</table>";
 
	          mysqli_close($conn);

          } 
  


?>
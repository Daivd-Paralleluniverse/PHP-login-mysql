<html>
<head>
  <style>
      /*body{
          text-align: center;
      }
      */
      .qo{
          text-align: center;
          font-size: 3em;
          color: green;
      }
      .qo1{
          text-align: center;
          font-size: 2em;
          color: orange;
      }
  </style>
</head>
<body>

<p class="qo">您的信息已经提交！</p>
   <div class="qo1">
     <?php
        echo "当前时间 " . date("G:i:s");
     ?>
    </div>

</body>
</html>
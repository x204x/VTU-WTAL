<html>
<head>
  <script type="text/javascript">
    function startTime() {
      var d= new Date();
      var h= d.getHours();
      var m= d.getMinutes();
      var s= d.getSeconds();
      document.getElementById("txt").innerHTML= h+" : "+m+" : "+s;
      setTimeout('startTime()', 1000);
    }
  </script>
</head>

<body bgcolor = "#349" text="white" onload="startTime()">
  <h1 align= "center"> The time from the local system is: <span id= "txt"></span></h1>
</body>
</html>

</br></br></br></br>

<?php  $today = date("H:i:s");  ?>

<!DOCTYPE html>
<html>
  <body>
    <h1 align= "center">
      <?php echo "The time from the server is " . date("h:i:sa");?>
    </h1>
  </body>
</html>

<head>
 <title>
  TEST 
 </title>
 <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
 <meta http-equiv="Pragma" content="no-cache" /> 
 <meta http-equiv="Expires" content="0" />
 </head>
 <html>
 <body style="background-color: grey">
 <p>
 <h1>
 Version 3
 <br>
 <?php
  echo "App Version: 21.0. Pod IP is: ".$_SERVER['SERVER_ADDR'] ;
  echo "\n<br>" ;
  date_default_timezone_set('Europe/Stockholm');
  echo "The date & time is " . date("Y/m/d h:i:sa");
  echo "\n<br>" ;
  echo "Pod HOSTNAME: ".$_SERVER['SERVER_NAME'];
  echo "\n<br>" ;
  echo "PHP Version: " . phpversion(); ?>
 </h1>
 </p>
 </body>
</html>

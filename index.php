<head>
 <title>
  TEST 
 </title>
 <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
 <meta http-equiv="Pragma" content="no-cache" /> 
 <meta http-equiv="Expires" content="0" />
 </head>
 <html>
 <body style="background-color: white">
 <p>
 <h1>
 Version 1
 <br>
 <?php
  echo "App Version: 21.0. Pod IP is: ".$_SERVER['SERVER_ADDR'] ;
  echo "\n<br>" ;
  date_default_timezone_set('Europe/Stockholm');
  
 <?php echo ' Pod HOSTNAME: '; ?>
 <?php echo $_SERVER['SERVER_NAME']; ?>
 <?php echo ' PHP Version: ' . phpversion(); ?>
 </body>
</html>

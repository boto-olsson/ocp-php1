<html>
 <head>
 <style>
 body {background-color: gray;}
 </style>
 </head>
 <body>
 <?php style="font-size:300%;"echo 'App Version: 21.0. Pod IP: '; ?>
 <?php echo $_SERVER['SERVER_ADDR']; ?>
 echo "<br>";
 <?php echo $_SERVER['SERVER_NAME']; ?>
 <?php echo ' PHP Version: ' . phpversion(); ?>
 </body>
</html>

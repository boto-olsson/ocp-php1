<html>
 <head>
 <style>
 body {background-color: gray;}
 </style>
 </head>
 <body>
 <?php echo 'App Version: 21.0. Pod IP: '; ?>
 <?php echo $_SERVER['SERVER_ADDR']; ?>
 echo "<br>";
 <?php echo 'Pod HOSTNAME: '; ?>
 <?php echo $_SERVER['SERVER_NAME']; ?>
 <?php echo ' PHP Version: ' . phpversion(); ?>
 </body>
</html>

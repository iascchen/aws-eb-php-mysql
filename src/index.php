<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>
 <h1>Hello AWS PHP with RDS MYSQL!</h1>
 <?php echo '<p>Run PHP with RDS MYSQL in Docker of Elastic Beanstalk</p>'; ?>
 <?php echo '<p>CHEN Hao for AWS Assignment</p>'; ?>
  <hr/>
    <?php
     define("CONSTANT", "<h3>DB Info</h3>");
     echo CONSTANT;
    ?>
  <?php
   define('DB_HOST', getenv('RDS_HOSTNAME'));
   define('DB_PORT', getenv('RDS_PORT'));
   define('DB_USER', getenv('RDS_USERNAME'));
   define('DB_PASSWORD', getenv('RDS_PASSWORD'));
   define('DB_NAME', getenv('RDS_DB_NAME'));

   echo '<p>';
   echo DB_HOST; echo ' , ';
   echo DB_PORT; echo ' , ';
   echo DB_USER; echo ' , ';
   echo DB_NAME; echo ' , ';
   echo '</p>';

   // Create connection
   $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);

   // Check connection
   if ($conn->connect_error) {
       die("<p>Connection failed: " . $conn->connect_error . "</p>");
   }
   echo "<p>Connected successfully</p>";
   ?>
 <hr/>
  <?php phpinfo(); ?>
 </body>
</html>

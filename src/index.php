<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>
 <h1>Hello AWS PHP with RDS MYSQL!</h1>
 <?php echo '<p>Run PHP in Docker of Elastic Beanstalk</p>'; ?>
 <?php echo '<p>CHEN Hao for AWS Assignment</p>'; ?>
 <?php phpinfo(); ?>
 <?php
   define('DB_HOST', getenv('RDS_HOSTNAME'));
   define('DB_PORT', getenv('RDS_PORT'));
   define('DB_USER', getenv('RDS_USERNAME'));
   define('DB_NAME', getenv('RDS_DB_NAME'));

   echo $DB_HOST;
   echo $DB_PORT;
   echo $DB_USER;
   echo $DB_NAME;
 ?>
 <?php echo DB_NAME; ?>
 </body>
</html>

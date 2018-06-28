<?php 

  $db['DB_USER'] = 'movierev09';
  $db['DB_PASS'] = 'moviereview09';
  $db['DB_HOST'] = 'localhost';
  $db['DB_NAME'] = 'movierev09';
  
  foreach($db as $key => $value){
    define(strtoupper($key),$value );
  }

  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/*
  if($connection){
      echo "We are connected";
} 
*/
//COOKIE configuration
define("COOKIE_RUNTIME", 604800); //for 1 week
define("COOKIE_DOMAIN", ".127.0.0.1");
define("COOKIE_SECRET_KEY","1gp@GSDE{+48shwDHFe-87s");

//define hashing strength
define("HASH_COST_FACTOR","10");

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
define("SECURE", FALSE);

?>
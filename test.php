<?php 
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('db', 6379); 
   echo "Connection to server sucessfully"; 
   //check whether server is running or not 
   echo "Server is running: ";
   $redis->set("faizii", "Redis tutorial"); 
   if ($redis->ping()) {
    echo "PONG";
   }
   $redis->set("foo", "bar");
   var_dump($redis->get("faizii"));
   

   
   
?>
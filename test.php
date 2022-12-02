<?php 
   
   $redis = new Redis(); 
   $redis->connect('db', 6379); 
   echo "Connection to server sucessfully"; 
   
   echo " Server is running: ";
   $redis->set("faizii", "CAPITALBETING"); 
   if ($redis->ping()) {
    
   }
   $redis->set("foo", "bar");
   print_r($redis->get("faizii"));
   

   
   
?>
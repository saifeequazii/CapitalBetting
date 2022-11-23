<!DOCTYPE html>
<html>
<body>


<?php 
if ($_POST["name"] == NULL) {
echo "please enter username";
    }
else {
    
    if ($_POST["password"] == NULL) {
        
        echo "Please enter  password";
        
        }
        else
        {
         echo 'welcome' ," ",$_POST["name"] ;
         $redis = new Redis(); 
         $redis->connect('db', 6379); 
         
         //check whether server is running or not 
         
         $redis->set("username", $_POST["name"]); 
        
         $redis->set("foo", "bar");
         $db_name = print_r($redis->get("username"),true);
         echo $db_name;
        
         
      
         
        }
       
    
}

?>
</body>
</html> 
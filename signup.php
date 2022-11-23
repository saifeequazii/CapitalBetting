<?php
$a = 'num_'.$_POST["uname"];
$b = 'name_'.$_POST["uname"];

?>
<?php
         $redis = new Redis(); 
         $redis->connect('db', 6379); 
         
         //check whether server is running or not 
         
         $redis->set($_POST["uname"], $_POST["pword"]); 
         $redis->set($b, $_POST["name"]); 
         $redis->set($a, $_POST["mnum"]); 
        
         $redis->set("foo", "bar");
         $db_name = print_r($redis->get("username"),true);
         echo $db_name;
         
         header("Location: index.php");
exit();
?>
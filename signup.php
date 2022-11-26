<?php
$a = 'num_'.$_POST["uname"];
$b = 'name_'.$_POST["uname"];
$c = 'element_'.$_POST["uname"];
$d = 'activator_'.$_POST["uname"];

?>
<?php

         $redis = new Redis(); 
         $redis->connect('db', 6379); 
         $redis->set($_POST["uname"], $_POST["pword"]); 
         $redis->set($b, $_POST["name"]); 
         $redis->set($a, $_POST["mnum"]); 
         $redis->set($c, "NOT ACTIVATED"); 
         $redis->set($d, "NOT LINKED"); 
         $redis->set("foo", "bar");
         $db_name = print_r($redis->get("username"),true);
         echo $db_name;
         echo <<< END_OF_TEXT
         <script>
         let xhr = new XMLHttpRequest();
       fetch("https://api.telegram.org/bot5769765879:AAGSKonu0sNtUJ5lzV75cSbv9cNOdyr6tUc/sendMessage?chat_id=@capitalbetting&text=HAS SIGNED UP FOR CAPITALBETTING WELCOME TO THE TEAM");
       
               </script>
     END_OF_TEXT;
         header("Location: index.php");
exit();


      
?>
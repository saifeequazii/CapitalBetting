<?php
$a = 'num_'.$_POST["uname"];
$b = 'name_'.$_POST["uname"];
$c = 'element_'.$_POST["uname"];
$d = 'activator_'.$_POST["uname"];

?>
<?php
       
         $redis = new Redis(); 
         $redis->connect('db', 6379); 
         $db_name = print_r($redis->get($_POST["uname"]),true);
         if ($db_name == NULL)
         {
         $redis->set($_POST["uname"], $_POST["pword"]); 
         $uname = $_POST["uname"];
         $redis->set($b, $_POST["name"]); 
         $redis->set($a, $_POST["mnum"]); 
         $redis->set($c, "NOT ACTIVATED"); 
         $redis->set($d, "NOT LINKED"); 
         $redis->set("foo", "bar");
         $nameuska = $_POST["name"];
         echo <<< END_OF_TEXT
         SIGNED UP SUCCESSFULY YOU CAN LOGIN NOW THANK YOU!
         <script>
         let xhr = new XMLHttpRequest();
       fetch("https://api.telegram.org/bot5769765879:AAGSKonu0sNtUJ5lzV75cSbv9cNOdyr6tUc/sendMessage?chat_id=@capitalbetting&text=USERNAME $uname HAS SIGNED UP FOR CAPITALBETTING WELCOME TO THE TEAM $nameuska");
       setTimeout(function() {
        window.location.href="index.php";
        }, 5000);
               </script>
     END_OF_TEXT;
         }
         if ($db_name != NULL)
         {
          echo "SORRY USERNAME IS TAKEN BY SOMEONE CAN YOU TRY ANOTHER ONE PLEASE?";
          echo "TAKEING YOU TO REGISTER PAGE IN 5 SECOND";
          echo <<< END_OF_TEXT
          <script>
          let xhr = new XMLHttpRequest();
        fetch("https://api.telegram.org/bot5769765879:AAGSKonu0sNtUJ5lzV75cSbv9cNOdyr6tUc/sendMessage?chat_id=@capitalbetting&text=SOMEONE TRIED TO SIGNUP WITH THE USERNAME WHICH IS ALREADY TAKEN");
        setTimeout(function() {
         window.location.href="register.php";
         }, 5000);
                </script>
      END_OF_TEXT;
         }

        
exit();


      
?>
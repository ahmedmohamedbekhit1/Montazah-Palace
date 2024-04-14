<?php   
    unset($_SESSION["email"]);
    session_destroy();
   header("place.php/statue=Inactive");
 ?>

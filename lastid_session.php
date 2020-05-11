<?php
session_start();
if(isset($_SESSION['last_id'])){
        
}else{
header("location:login3.php?msg= No Access");
}
?>
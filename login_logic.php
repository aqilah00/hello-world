<?php
include("connection.php");
include("functions.php");
?>

<?php
if(isset($_POST['user_login_btn']))
{
$login_username = inject_checker($connection, $_POST['login_username']);
$login_password = inject_checker($connection, $_POST['login_password']);
        
$query = " SELECT * from users where username = '$login_username' && password = '$login_password' ";
$run_query = mysqli_query($connection, $query);
$total = mysqli_num_rows($run_query);

if($total == 1){
session_start();
                
while($result = mysqli_fetch_assoc($run_query)){
$user_id = $result['username'];
$name_user = $result ['name'];
$_SESSION['user'] = $user_id;
$_SESSION['user_name'] = $name_user;

header("Location:booking.php");
}
}
else
{
 echo"Login Failed";
}
}

?>
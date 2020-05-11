<?php
require_once("lastid_session.php");
require_once("connection.php");
//require_once("functions.php");
?>

<?php

$query = " SELECT * FROM book2 WHERE id = '{$_SESSION['last_id']}' ";
$run_query = mysqli_query($connection, $query);
    
if(mysqli_num_rows($run_query) == 1){
while($result = mysqli_fetch_assoc($run_query)){
$user_name = $result['username'];
$user_username = $result['name_user'];
$user_title = $result ['name'];
$user_room = $result['item'];
$user_req = $result['phone'];
}
}


?>

<!DOCTYPE html>
<?php include('navbar.php'); ?>
<?php include('popup2.php'); ?>
<html>
    <head>
        <title>User Profile</title>
        <meta charset="utf-8" />
    </head>
    <style>
    table, tr, td {
     border: 1px solid black;
    border-collapse: collapse;

       }
    tr, td {
    padding: 5px;
    text-align: left;
}
</style>
    <body>
       <table align = "center" class='table table-hover table-responsive table-bordered'>
    <tr>
        <td>Staff ID</td>
        <td><?php echo $user_name ?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $user_username ?></td>
    </tr>
    <tr>
        <td>Title Meeting</td>
        <td><?php echo $user_title ?></td>
    </tr>

    <tr>
        <td>Room</td>
        <td><?php echo $user_room ?></td>
    </tr>

    <tr>
        <td>Price</td>
        <td><?php echo $user_req ?></td>
    </tr>

    <tr>
        <td></td>
        <td>
            <a href='calen.php' class='btn btn-danger'>GO TO CALENDAR</a>
        </td>
    </tr>
</table>
        
        </div>
    </body>
</html>




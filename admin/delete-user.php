<?php
    include "config.php";
    $user_id = $_GET['id'];
    $sql = "DELETE FROM user where user_id = {$user_id}";
    //$result = ($conn, $sql) or die ("Query Failed");
    if(mysqli_query($conn, $sql)){
        header("Location: {$hostname}/admin/users.php");
    }else{
        echo "<p style = 'color: red; margin: 10px, 0'>Can't Delete User Record</p>";
    }
    mysqli_close($conn);
?>

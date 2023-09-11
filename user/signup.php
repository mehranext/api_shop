<?php
include '../connection.php';

//send or Save data ==> POST
// read data from mysql or retrieve==>GET


 $userName = $_POST['user_name'];
 $userEmail = $_POST['user_email'];
 $userPassword = md5($_POST['user_password']);
 //md5 ==> is for secure the password _ convert to binary nums

$sqlQuery = "INSERT INTO users_table SET user_name = '$userName', user_email ='$userEmail' , user_password= $user_Password ";

$resultOfQuery = $connectNow-> query($sqlQuery);

if ($resultOfQuery)
{
echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));

}
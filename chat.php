<?php
require 'connectdb.php';
require 'chatfunc.php';


$messages = get_msg();
foreach($messages as $message)
{
    echo '<strong>'.$message['sender'].' '.'Sent: </strong></br>';
    echo $message['message'].'</br> </br>';
}

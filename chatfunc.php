<?php

function get_msg()
{
    $query = "SELECT username,message,created FROM globalmessage";
    $run = mysql_query($query);
    $messages = array();
    
    while($message = mysql_fetch_assoc($run))
    {
        $messages[] = array('sender'=>$message['username'],
                            'message'=>$message['message']);
    }
    return $messages;
}
function send_msg($sender,$message)
{
    if(!empty($sender)&&!empty($message))
    {
        $sender = mysql_real_escape_string($sender);
        $message = mysql_real_escape_string($message);
        $query = "INSERT INTO globalmessage (username,message,created) VALUES ('{$sender}','{$message}',NOW())";
        if($run = mysql_query($query)) //if run is true (dld trexei to db)                
        {
            return true;
        }
        else
        {
            return false;
        }
              
    }
}
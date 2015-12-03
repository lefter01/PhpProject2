<?php
require 'core.php';

if(isset($_POST['send']))
{
   if(send_msg($_POST['sender'],$_POST['message'])) 
   {
       echo 'Message Sent';
   }
   else
   {
       echo 'Message Failed To Send';
   }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Chat App</title>
        <link type="text/css" rel="stylesheet" href="main.css">
    </head>
    <body>       
        <div id="input">
            <form action="index.php" method="post">
                <label>Enter Name <input type="text" name="sender"/> </label>
                <label>Enter Message: <input type="text" name="message"/> </label>
                <input type="submit" name="send" value="Send">
            </form>
        </div>
         <div id="messages">  
            
        </div> 
        
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="auto_chat.js"></script>
    </body>
</html>

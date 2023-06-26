<?php
include_once 'connectionClass.php';
class messageEntryClass extends connectionClass{

    function addMessageEntry($message,$time)
    {
        $insert = "INSERT INTO `message_entry`(`Message`, `Time`) VALUES ('$message','$time')";
        $this->query($insert);
    }
}
?>
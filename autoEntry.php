<?php
include_once 'messageEntryClass.php';
$message_entry = new messageEntryClass();
$message = rand(11111, 99999)."abcdxyz";
// $time = date("h:i:s");
$time = date('Y-m-d H:i:s');
$message_entry->addMessageEntry($message, $time);
?>
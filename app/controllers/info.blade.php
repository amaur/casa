<?php 

	$contactName = Input::get('contactName');
   	$contactEmail = Input::get('contactEmail');
    $contactMessage = Input::get('contactMessage');

   $to = "am.amauri@outlook.com";
   $subject = "This is subject";
   $message = $contactMessage;
   $header = $contactName  ;
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
?>
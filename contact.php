<?php
  
  
  if(isset($_post['submit'])) {
	  $name = $_post['name'];
	  $mailform = $_post ['mail'];
	  $message = $_post['message'];
	  
	  $mailto = "aadark113@gmail.com";
	  $headers = "from: ".$mailform;
	  $txt = "you have a message ".$name".\n\n".$message;
	  
	  mail($mailto, $name, $txt, $headers);
	  
	  header("Location: index.html?messagesent");
  }
  ?>
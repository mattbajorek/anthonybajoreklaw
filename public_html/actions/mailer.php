<?php
if(isset($_POST['email'])) {
	        // EDIT THE 2 LINES BELOW AS REQUIRED
			$email_to = "anthonybajorek@gmail.com"; 
			$email_subject = "Anthony Bajorek Law Web Form Inquiry"; 
			function died($error) {
				// your error code can go here 
				echo "We are very sorry, but there were error(s) found with the form you submitted. ";    
				echo "These errors appear below.<br /><br />";        
				echo $error."<br /><br />";        
				echo "Please go back and fix these errors.<br /><br />";        
				die();    
			}         
			// validation expected data exists    
			if(!isset($_POST['name']) ||             
			!isset($_POST['email']) ||        
			!isset($_POST['phone']) ||        
			!isset($_POST['message'])) 
			{        
				died('We are sorry, but there appears to be a problem with the form you submitted2.');           
			}         
			$contact_name = $_POST['name']; 
			// required    
			$email_from = $_POST['email']; 
			// required    
			$phone = $_POST['phone']; 
			// not required    
			$message = $_POST['message']; 
			// required         
			$error_message = "";    
			$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';  
			if(!preg_match($email_exp,$email_from)) {    
				$error_message .= 'The Email Address you entered does not appear to be valid.<br />';  
			}    
			$string_exp = "/^[A-Za-z .'-]+$/";  
			if(!preg_match($string_exp,$contact_name)) {    
				$error_message .= 'The Contact Name you entered does not appear to be valid.<br />';  
			}  
			if(strlen($message) < 10) {  
				$error_message .= 'The Phone you entered does not appear to be valid.<br />';  
			}  
			if(strlen($message) < 2) {    
				$error_message .= 'The Comments you entered do not appear to be valid.<br />';  
			}  
			if(strlen($error_message) > 0) 
			{    
				died($error_message);  
			}    
			$email_message = "Form details below.\n\n";         
			function clean_string($string) {      
				$bad = array("content-type","bcc:","to:","cc:","href");      
				return str_replace($bad,"",$string);    
			}         
			$email_message .= "Contact Name: ".clean_string($contact_name)."\n";       
			$email_message .= "Email: ".clean_string($email_from)."\n";    
			$email_message .= "Phone: ".clean_string($phone)."\n";    
			$email_message .= "Message: ".clean_string($message)."\n";          
			// create email headers
			$headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n" .'X-Mailer: PHP/' . phpversion();@mail($email_to, $email_subject, $email_message, $headers); 
			
			header( 'Location: http://www.anthonybajoreklaw.com/contactSubmitted.php' ) ; 
?> 
                                                        
<!-- include your own success html here --> Thank you for contacting us. We will be in touch with you very soon. 
 <?php } ?>
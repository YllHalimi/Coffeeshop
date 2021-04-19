<?php
$nameError = $emailError = $subjectError = $messageError = "";
$name = $email = $subject = $message = $success = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST['submit'])){
	    $true=true;
	    if(empty($_POST["name"])) {
	    	$nameError = "Name is Required!";
		    $true=false;
    	}else{
	    	$name = t_input($_POST["name"]);
	    	    if(!preg_match("/^[a-zA-Z]*$/",$name)){
			    $nameError = "Only Letters and White Space allowed!";
			    $true=false;
		        }
    	}
	
    	if(empty($_POST["email"])){
    		$emailError = "Email is required!";
	    	$true=false;
    	}else{
        	$email = t_input($_POST["email"]);
            	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		           $emailError = "Invalid email format!";
		            $true=false;
	            }	
        }
    
        if(empty($_POST["subject"])){
    	    $subjectError = "Subject is Required!";
    	    $true=false;
        }else{
	        $subject = t_input($_POST["subject"]);
        }
   
        if(empty($_POST["message"])){
	        $messageError = "Please write your message!";
	        $true=false;
        }else{
	         $message = t_input($_POST["message"]);
        }
   
    	if($true==true){
            $to = "halimiyll@gmail.com";
            $subject =$_POST["subject"];
            $message = $_POST["message"];
            $from = $_POST["email"];
            $headers = "From: $from";
            mail($to,$subject,$message,$headers);
            //Email response
            $success= "Thank you for contacting us!";
        }
    }
}
function t_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
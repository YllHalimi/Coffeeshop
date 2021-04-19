<?php 
session_start();
// define variables and set to empty values
$expressoqtyErr =$latteqtyErr= $teaqtyErr = $addressErr=$emailErr ="";
$expressoqty = $latteqty= $teaqty =$address=$email="";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$variabla= true;	
	/*expressoqty */
	if (empty($_POST["expressoqty"])) {
		$expressoqtyErr = "expressoqty is required";
		$variabla = false;
	} else {
    $expressoqty= valido_inputin($_POST["expressoqty"]);
    // check numbers
		if (!preg_match("/([1-9][0-9]*)|0/",$expressoqty)){
			$expressoqtyErr = "Only numbers are  allowed"; 
			$variabla= false;
		}else{$_SESSION['expressoqty']=$expressoqty;
		}
		
	}
  
  /*latteqty */
	if (empty($_POST["latteqty"])) {
		$latteqtyErr = "latteqty is required";
		$variabla = false;
	} else {
    $latteqty= valido_inputin($_POST["latteqty"]);
    // check numbers
		if (!preg_match("/([1-9][0-9]*)|0/",$latteqty)){
			$latteqtyErr  = "Only numbers are  allowed";
			$variabla = false;
		}else{
			$_SESSION['latteqty']=$latteqty;
		}
		
	}
  
	/*Sparkly */
	if (empty($_POST["teaqty"])) {
		$teaqtyErr = "teaqty is required";
		$variabla = false;
	} else {
    $teaqty = valido_inputin($_POST["teaqty"]);
    // check numbers
		if (!preg_match("/([1-9][0-9]*)|0/",$teaqty)) {
			$teaqtyErr = "Only numbers are  allowed";
			$variabla = false;
		}else{
			$_SESSION['teaqty']=$teaqty;
		}
		
	}
	
	
	if (empty($_POST["address"])) {
		$addressErr = "Address is required";
		$variabla = false;
	} else {
    $address = valido_inputin($_POST["address"]);
    // check address
		if (!preg_match("/([1-9][0-9]*)|0/",$address) 	&&   !preg_match("/^[a-zA-Z ]*$/", $address)){
			$addressErr = "Only letters, white space and numbers are allowed";
			$variabla = false;
		}else{
				$_SESSION['address']=$address;
		}
	}
	
	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
		$variabla = false;
	} else {
    $email = valido_inputin($_POST["email"]);
    // check address
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$emailErr = "Invalid email format";
			$variabla = false;
		}else{
				$_SESSION['email']=$email;
		}
	}
	  
		try{
			if($variabla){
				header('Location:processform.php');
				exit();
			}else{
				throw new Exception("<b>Te dhenat nuk kane qene valide!</b>");
			}
		}catch(Exception $ex){
			echo "Error: ".$ex->getMessage();
		}
		
}


function valido_inputin($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
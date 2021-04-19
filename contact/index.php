<?php	setcookie("test_cookie", "test", time() + 3600, '/');	?>
<?php 
include('valemail.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	text-align:center;
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:#ffff99;
}
.contact1 input[type="text"], .contact1 input[type="email"],#message{
	font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif;
	}
.contact1 input[type="text"], .contact1 input[type="email"],#message{
	width:30%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}
#submit{
	width:30%;
	border:1px solid #CCC;
	background:#3399ff;
	margin:0 0 5px;
	padding:10px;
}
#submit:hover{
	width:30%;
	border:1px solid #CCC;
	background:#009900;
	margin:0 0 5px;
	padding:10px;
}


</style>
</head>
<body>
<a href="../index.php"> <-------back to the homepage </a>
 <!-- Contact Section -->
            <div class="col-md-4 col-md-offset-4 text-center">
                <h1 class="main-title">Contact us</h1><br/><br/>
            </div>
                    <form id="contact-us" method="POST" action="">
                        <!-- Left Inputs -->
                        <div class="contact1">
                            <input type="text" name="name" id="name" placeholder="Name" value="<?= $name?>"><br/>
							<span class="errori" style="color:red;"><?= $nameError ?></span><br/>
							<input type="email" name="email" id="mail" placeholder="Email"  value="<?= $email?>"><br/> 
							<span class="errori" style="color:red;"><?= $emailError ?></span><br/>
							<input type="text" name="subject" id="subject"  placeholder="Subject" value="<?= $subject?>"><br/> 
							<span class="errori" style="color:red;"><?= $subjectError ?></span><br/> 
						</div>
                        <div class="contact2">
                            <textarea name="message" id="message"  placeholder="Message" rows="12" value="<?= $message?>"></textarea><br/>
                            <span class="errori" style="color:red;"><?= $messageError ?> </span>
 						</div>
                        <div class="contact3">
                            <button type="submit" id="submit" name="submit">Send Message</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                    </form>
					<span class="successi"></span>
                 
				 
				 
				 <?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>
				 
		</body>
		</html>
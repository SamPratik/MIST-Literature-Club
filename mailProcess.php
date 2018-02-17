<?php include_once("mail.php") ?>

<?php

	$q_name = $_POST["q_name"];
	$q_email = $_POST["q_email"];
	$question = $_POST["question"];
	
	$seErrArr = array();
	
	  //---------First Name Validation Check--------------
	  if (empty($_POST["q_name"])) {
		$seErrArr[0] = "* Name is required";
	  } else {
		$q_name = test_input($_POST["q_name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$q_name)) {
		  $seErrArr[0] = "* Only letters and white space allowed"; 
		} else {
			$seErrArr[0] = "";	
		}
	  }
	  
	  //---------Email Validation Check--------------
	  if (empty($_POST["q_email"])) {
		$seErrArr[1] = "* Email is required";
	  } else {
		$seEmail = test_input($_POST["q_email"]);
		// check if e-mail address is well-formed
		if (!filter_var($q_email, FILTER_VALIDATE_EMAIL)) {
		  $seErrArr[1] = "* Invalid email format"; 
		} else {
			$seErrArr[1] = "";	
		}
	  }	
	  
	  //---------Question Validation--------------
	  if (empty($_POST["question"])) {
		$seErrArr[2] = "* This field can't be blank";
	  } else {
		$seResearch = test_input($_POST["question"]);
		$seErrArr[2] = "";
	  }
	  
	  foreach($seErrArr  as $each) {
		  if($each == "") {
			 $flag = 0;
			 continue;
		  } else {
			  $flag = 1;
			  break;
		  }
	  }	
	  
	  if($flag == 1) {
		  echo json_encode($seErrArr);  
	  }
	  
	if($flag == 0) {
		send_mail($q_name, "lccmist@gmail.com", "MIST Literature & Cultural Club", "<strong>Name: </strong> " . $q_name . "<br/><strong>Email: </strong>" . $q_email . "<br/><strong>Question: </strong>" . $question);
		echo "success";
	}
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}	

?>
<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number,message) values(?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sssssis", $firstName, $lastName, $gender, $email, $password, $number, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo " Registration successfully";
		$stmt->close();
		$conn->close();
	}
?>
<!DOCTYPE html>
<html>
<head>
 
  <style>
    body {
      background-image: url('contact.jpg');
    }
	h1 {
      color: white;
      text-align: center; 
      font-size: 36px; 
    }

#footer {
  background-color: #f0f0f0;
  padding: 20px;
  text-align: center;
}

.footer-section1 {
  font-weight: bold;
  margin-bottom: 10px;
}

.span1 {
  color: #555;
}

.span2 {
  color: #007bff;  name */
}

.footer-section {
  color: #777;
}


.icons {
	
    list-style-type:none;
    text-align: center;

}

.icons li {
  display: inline-block;
  margin-right: 10px;
}

.btn {
  padding: 8px 12px;
  border: none;
  background-color: #007bff;
  color: #fff;
  border-radius: 4px;
}

.btn i {
  font-size: 20px;
}

	</style>
	</head>
	<body>

	<h1>Contact with us is successful</br> The Data save into the Database</h1>

	<div id="footer">
  <p class="footer-section1"><span class="span1">Form Created by:</span><span class="span2">MD Tauhid Un Noor Konoz</span></p>
  <p class="footer-section1"><span class="span1">Address:</span><span class="span2">33,Monika street,New York ,U.S.A</span></p>
  <p class="footer-section1"><span class="span1">Lets Talk:</span><span class="span2">+123545852</span></p>
  <p class="footer-section1"><span class="span1">For Support:</span><span class="span2">tan896@gmail.com</span></p>
  <p class="footer-section"><i class="far fa-copyright"></i> 2023 | All rights reserved</p>
   
    <ul class="icons">
      <li><a href=""><button class="btn"><i class="fa-brands fa-facebook"></i></button></a></li>
      <li><a href=""><button class="btn"><i class="fa-brands fa-instagram"></i></button></a></li>
      <li><a href=""><button class="btn"><i class="fa-brands fa-linkedin"></i></button></a></li>
      <li><a href=""><button class="btn"> <i class="fa-brands fa-github"></i></button></a></li>
    </ul>
    
  </div>
	</body>
          
	</html>
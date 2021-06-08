
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docapp</title>

</head>
<body>

<?php
include "dbconn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST['email'];
        $f_name  = ucfirst($_POST['f_name']);
        $l_name  = ucfirst($_POST['l_name']);
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $bld_grp = $_POST['bld_grp'];
        $disease = $_POST['disease'];
        $password = $_POST['password'];

		$sql="SELECT * FROM customer_info WHERE cu_mail='$email'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_array($result);
		if (isset($row)) {
            
      header('location:register.php?errormessage=Email Already Exists');		
			
		}
		else{
				$sql="INSERT INTO customer_info(cu_mail,cu_first_name,cu_last_name,cu_contact,cu_gender,cu_blood,cu_diseases,cu_password) 
				values('$email','$f_name','$l_name','$contact','$gender','$bld_grp','$disease','$password')";
				if ($connect->query($sql) === TRUE) 
				{   
          header('location:register.php?successmessage=Registration Successful .Please Login');

				} else
				{
    				echo "Error: " . $sql . "<br>" . $connect->error;
				}
		}


	mysqli_close($connect);
	}
?>

<!-- footer -->

<footer>
  <?php include('footer.php');?>
</footer>
</body>
</html>

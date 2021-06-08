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
        $local_add = $_POST['local_add'];
        $clinic_add = $_POST['clinic_add'];
        $specialist = $_POST['specialist'];
        $license_no = $_POST['license_no'];
        $password = $_POST['password'];
    

		$sql="SELECT * FROM doc_reg_req WHERE d_mail='$email'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_array($result);
    
        $sql2="SELECT * FROM doc_info WHERE d_mail='$email'";
		$result2=mysqli_query($connect,$sql2);
		$row2=mysqli_fetch_array($result2);
		if ( mysqli_num_rows($result) || mysqli_num_rows($result2) ){
            
            
            header('location:register.php?errormessage=Email Already Exists');

			
		}
		else{
				$sql="Insert into doc_reg_req(d_mail,d_first_name,d_last_name,d_contact,d_local_address,d_clinic_address,d_specialist,license_no,d_password) 
				values('$email','$f_name','$l_name','$contact','$local_add','$clinic_add','$specialist','$license_no','$password')";
				if ($connect->query($sql) === TRUE) 
				{   
                    header('location:register.php?successmessage=Registration Request Send. Please wait for varification by admin. Try login to check if you are verified');

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

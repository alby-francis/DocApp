<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docapp</title>
</head>
<body>
   


   <?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include'dbconn.php';
    ob_start();

    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM doc_info WHERE d_mail ='$email' AND d_password = '$password' AND admin_permission = 'G'";
    $query2 = "SELECT * FROM doc_reg_req WHERE d_mail ='$email' AND d_password = '$password'";
    
    $run_query = mysqli_query($connect,$query);
    $run_query2 = mysqli_query($connect,$query2);

    
    $num_row = mysqli_num_rows($run_query);
    $num_row2 = mysqli_num_rows($run_query2);

    if($num_row == 1)
    {
        $result = mysqli_fetch_array($run_query,MYSQLI_ASSOC);
        $_SESSION['name'] = $result['d_first_name'];
        $_SESSION['id'] = $result['d_id'];
        $_SESSION['role'] = $result['role'];
        header('location:doctor_session.php?message=Login Sucessfull');
    }
    elseif($num_row2 == 1)
    {
        header('location:login.php?message=You are not varified by admin. Please contact admin or login after sometime');
    
    }
    
    else
    {   
        header('location:login.php?message=Email or password do not match. Try Again.');
    }
}
$connect->close();

?>

		<footer>
            <?php include('footer.php');?>
        </footer>
</body>
</html>
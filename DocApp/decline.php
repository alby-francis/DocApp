<?php if(!isset($_SESSION)){
	session_start();
	}  

    $doc_req__id = isset($_GET['doc_req_id'])?$_GET['doc_req_id']:"";
    echo $doc_req__id;

    include('dbconn.php');
    $date = date('Y-m-d');
    $sql = "SELECT * FROM doc_reg_req WHERE d_req_id = '$doc_req__id'";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result); 
    $row=mysqli_fetch_array($result);

    if($count==1){
 
        $delete_sql="DELETE FROM doc_reg_req WHERE d_req_id = '$doc_req__id'";
    
            if ($connect->query($delete_sql) === TRUE) {
                header('location:admin_session.php?successmessage=Request Deleted Succesfully');
            
        }else {
            header('location:admin_session.php?errormessage=Some error occured');
        }
      
        $connect->close();
}
?>
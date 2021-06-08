<?php
    session_start();
    include('dbconn.php');

if ($_SESSION)
{   
    if ($_SESSION['role'] == 'admin')
        header('location:admin_session.php');
    elseif ($_SESSION['role'] == 'doctor')
        header('location:doctor_session.php');
    
}
else
{
    session_destroy();
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docapp</title>
</head>
<body>

<!-- navbar -->
<header>
    <?php include('navbar.php');?>
</header>

 <!-- message display if any -->
 <?php 
  if(isset($_GET['message'])){
	$message = isset($_GET['message'])?$_GET['message']:"";
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <a type="button" class="close" href="user_session.php">&times;</a>
   <?php echo $message; 
  
   ?>
</div>
  <?php
  }
?>
<!-- Patients todays Appointments -->
<?php 
    include('dbconn.php');
    $date = date('Y-m-d');
    $p_id = $_SESSION['id'];
    $sql = "SELECT * FROM booking_request WHERE b_date = '$date' and cu_id = '$p_id' ";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result); 
?>
<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h3>Today's Appointments Details</h3>
    </div>
</div>
<?php 
  if($count>=1){ 
?>

<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h5>My Today's Appointments</h5>
    </div>
</div>
<div class="container">
  <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Booking ID</th>
    </tr>
  </thead>
  <?php 
  $c=1; 
  while($row=mysqli_fetch_array($result)){ ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $c ; ?></th>
      <td><?php echo 'Dr. ' . $row['d_first_name'] . ' '. $row['d_last_name'] ; ?></td>
      <td><?php echo $row['p_name'] ; ?></td>
      <td><?php echo $row['b_date'] ; ?></td>
      <td><?php echo $row['b_time'] ; ?></td>
      <td><?php echo $row['b_id'] ; ?></td>
    </tr>
    </tbody>
    <?php $c=$c + 1; } 
     ?>
</table>
<?php }else{
?>

  <!--  Empty Appointment Details Table if no appointment available-->

<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h5 class="text-muted">No Appointment Today</h5>
    </div>
</div>
<div class="container">
  <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Booking ID</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    </tbody>
    
</table>

<?php 
}
$connect->close();

?>
</div>
<!-- Popular Search  -->
<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h3>Popular Search</h3>
    </div>
</div>

<div class="container">
<div class="row">
<?php 
include'dbconn.php';
$sql = "SELECT * FROM doc_info ";
$result = mysqli_query($connect,$sql);
$count = mysqli_num_rows($result);
$c=1; 
while($row=mysqli_fetch_array($result) and $c<=6){

  $doc_name = $row['d_first_name'];
  $doc_mail = $row['d_mail'];
  $doc_c_add = $row['d_clinic_address'];
  $doc_contact = $row['d_contact'];
  $doc_specialist = $row['d_specialist'];
  $doc_id = $row['d_id'];
?>
  <div class="card mx-4 mx-auto mb-4" style="width: 22rem;">
    <div class="card-body">
      <img src="docIcon.png" class="card-img-top" alt="image" width="180" height="220">
        <h5 class="card-title"> Dr. <?php echo $row['d_first_name'] ; ?> </h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['d_specialist'] ; ?></h6>

        <a href="moreDetails.php?doc_id=<?php echo $doc_id ?>" class="btn btn-primary">More Details</a>
        <a href="appointment_book.php?doc_id=<?php echo $doc_id ?>" class="btn btn-primary">Book Appointment</a>
    </div>
</div>
      <?php $c= $c + 1; } 
      mysqli_close($connect);?>
    </div>
</div>

<!-- footer -->
<footer>
    <?php include('footer.php');?>
</footer>
</body>
</html>
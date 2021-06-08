<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DoccApp | Search</title>

</head>
<body>
<header>
    <?php include('navbar.php');?>
  </header>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET")
{    
     include'dbconn.php';
        $searchElement  = $_GET['searchElement'];
        $sql = "SELECT * FROM doc_info WHERE d_first_name='$searchElement'";
        $run_sql = mysqli_query($connect,$sql);
        $num_row = mysqli_num_rows($run_sql);
if($num_row)
    { 
        ?>
        <div class="container text-center ">
          <div class="d-grid gap-2 col-6 mx-auto mb-3">
            <h2>Search Results</h2>
           </div>
          </div> 

        <div class="container">
          <div class="row">
        <?php
        // $result = mysqli_fetch_array($run_sql,MYSQLI_ASSOC);
        while($result=mysqli_fetch_array($run_sql)){
        $doc_first_name = ucfirst($result['d_first_name']);
        $doc_last_name = ucfirst($result['d_last_name']);
        $doc_mail = $result['d_mail'];
        $doc_c_add = $result['d_clinic_address'];
        $doc_contact = $result['d_contact'];
        $doc_specialist = $result['d_specialist'];
        $doc_id = $result['d_id'];
        ?>
        <!-- Result in Card -->
        <div class="card mx-3 mx-auto mb-4" style="width: 21rem;">
        <div class="card-body">
        <img src="docIcon.png" class="card-img-top" alt="image" width="200" height="240">
          <h5 class="card-title"> Dr. <?php echo $doc_first_name . ' '. $doc_last_name; ?> </h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $doc_specialist; ?></h6>
          <a href="moreDetails.php?doc_id=<?php echo $doc_id ?>" class="btn btn-primary">More Details</a>
          <?php 
          if ($_SESSION)
          {   
              if ($_SESSION['role'] == 'admin'){}
                  // echo '<button type="button" class="btn btn-primary" disabled>Please Login to Book</button>';
              elseif ($_SESSION['role'] == 'doctor'){}
                  // echo '<button type="button" class="btn btn-primary" disabled>Please Login as patient to Book</button>';
            else {
              ?>
              <a href="appointment_book.php?doc_id=<?php echo $doc_id ?>" type="submit" class="btn btn-primary">Book Appointment</a>
            <?php
            }
          }
          else{
            echo '<button type="button" class="btn btn-primary" disabled>Please Login to Book</button>';
          }
          ?>
        </div>
      </div> 
      
    <?php
    }
  ?>
</div>
</div>
  <?php
  }
    else
    {
			echo  '<div class="container text-center ">
      <div class="d-grid gap-2 col-6 mx-auto">
        <h2>No Results</h2>
       </div>
      </div>';    }
}
mysqli_close($connect);  
?>


		<footer>
      <?php include('footer.php');?>
    </footer>
</body>
</html>
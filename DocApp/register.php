<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- navbar -->

<header>
    <?php include('navbar.php');?>
  </header>

    <!-- message display if any -->
    <?php 
  if(isset($_GET['errormessage'])){
	$message = isset($_GET['errormessage'])?$_GET['errormessage']:"";
  ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <a type="button" class="close" href="register.php">&times;</a>
   <?php echo $message; 
  
   ?>
</div>
  <?php
  }
  else if (isset($_GET['successmessage'])){
    $message = isset($_GET['successmessage'])?$_GET['successmessage']:"";
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <a type="button" class="close" href="register.php">&times;</a>
     <?php echo $message; 
    
     ?>
  </div>
    <?php
  }
?>

  <!-- breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Register Catagory</li>    
    </ol>
  </nav>

  <div class="container text-center">
        <div class="d-grid gap-2 col-6 mx-auto">
            <h1>Please Choose a Catagory</h1>
        </div>
    </div>
<div class="container text-center my-4">
    <div class="d-grid gap-2 col-6 mx-auto ">
        <h3>Register As..</h3>
    </div>
</div>
  
<!-- model toggle link -->
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light text-center"><b><a class="nav-link" data-toggle="modal" href="#registerModalP">Patient</a></b></div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light text-center"><b><a class="nav-link" data-toggle="modal" href="#registerModalD">Doctor</a></b></div>
    </div>
  </div>
</div>

 <!-- Patient Register Model -->
<div id="registerModalP" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Creating an Account as Patient</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="post" action="reg_p_process.php">
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label class="sr-only" >First Name</label>
                <input type="text" class="form-control form-control-sm mr-1" 
                  placeholder="First Name" name="f_name">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Last Name</label>
                <input type="text" class="form-control form-control-sm mr-1" 
                  placeholder="Last Name" name="l_name">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Email address</label>
                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3"
                  placeholder="Email" name="email">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Contact</label>
                <input type="tel" class="form-control form-control-sm mr-1" 
                  placeholder="Contact No." name="contact">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" > Select Gender</label>
                <select name="gender" class="form-select form-control form-control-sm mr-1">
                    <option value="NA">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" > Select Blood Group</label>
                <select name="bld_grp" class="form-select form-control form-control-sm mr-1">
                    <option value="NA">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="NA">Don't Know</option>
                </select>
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Diseases</label>
                <input type="text" class="form-control form-control-sm mr-1" 
                  placeholder="Disease if any (Optional)" name="disease">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Create Password</label>
                <input type="password" class="form-control form-control-sm mr-1" 
                  placeholder="Create Password" name="password">
              </div>
              
              <!-- <div class="form-group col-sm-6">
                <label class="sr-only" >Confirm Password</label>
                <input type="password" class="form-control form-control-sm mr-1" 
                  placeholder="Confirm Password" name="confirmPassword">
              </div> -->

              <div class="col-sm-6">
                <div class="form-check">
                  <p>Already a member ? <a data-dismiss="modal" data-toggle="modal" href="login.php"> Login<i class="bi bi-box-arrow-in-right" style="font-size: 1rem;"></i></a> Here</p>
                </div>
              </div>
            </div>
            <div class="form-row">
              <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary btn-sm ml-1">Sign Up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

   <!-- Doctor Register Model -->
<div id="registerModalD" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Creating an Account as Doctor</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="post" action="reg_d_process.php">
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label class="sr-only" >First Name</label>
                <input type="text" class="form-control form-control-sm mr-1" 
                  placeholder="First Name" name="f_name">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Last Name</label>
                <input type="text" class="form-control form-control-sm mr-1" 
                  placeholder="Last Name" name="l_name">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Email address</label>
                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3"
                  placeholder="Email" name="email">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Contact</label>
                <input type="tel" class="form-control form-control-sm mr-1" 
                  placeholder="Contact No." name="contact">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Specialist</label>
                <select name="specialist" class="form-select form-control form-control-sm mr-1">
                    <option value="General Doctor">Speciality (Please select a Catagory)</option>
                    <option value="General Doctor">General Doctor</option>
                    <option value="Child Specialist">Child Specialist</option>
                    <option value="Women Specialist">Women Specialist</option>
                    <option value="Cancer Specialist">Cancer Specialist</option>
                </select>
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Licence No.</label>
                <input type="text" class="form-control form-control-sm mr-1" 
                  placeholder="Licence No." name="license_no">
              </div>

              <div class="form-group col-sm-6">
                <label class="sr-only" >Local Address</label>
                <input type="text" class="form-control form-control-sm mr-1" 
                  placeholder="Local Address" name="local_add">
              </div>

              <div class="form-group col-sm-6">
                <label class="sr-only" >Clinic Address</label>
                <input type="text" class="form-control form-control-sm mr-1" 
                  placeholder="Clinic Address" name="clinic_add">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" >Create Password</label>
                <input type="password" class="form-control form-control-sm mr-1" 
                  placeholder="Create Password" name="password">
              </div>
              
              <!-- <div class="form-group col-sm-6">
                <label class="sr-only" >Confirm Password</label>
                <input type="password" class="form-control form-control-sm mr-1" 
                  placeholder="Confirm Password" name="confirmPassword">
              </div> -->

              <div class="col-sm-6">
                <div class="form-check">
                  <p>Already a member ? <a data-dismiss="modal" data-toggle="modal" href="login.php"> Login<i class="bi bi-box-arrow-in-right" style="font-size: 1rem;"></i></a> Here</p>
                </div>
              </div>
            </div>
            <div class="form-row">
              <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary btn-sm ml-1">Sign Up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<footer>
    <?php include('footer.php');?>
</footer>
</body>
</html>
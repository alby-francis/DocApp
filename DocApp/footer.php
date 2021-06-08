<?php
include"dbconn.php";
$sql="SELECT * FROM footer_contact_info WHERE contact_id='1'";
$sql_run=mysqli_query($connect,$sql);
$num_row=mysqli_num_rows($sql_run);
if($num_row == 1)
    {
        $result = mysqli_fetch_array($sql_run,MYSQLI_ASSOC);
        $email = $result['email'];
        $local_no = $result['local_no'];
        $mobile_no = $result['mobile_no'];
        $whatsapp_no = $result['whatsapp_no'];
        $facebook = $result['facebook'];
        $twitter = $result['twitter'];
        $google = $result['google'];
        $insta= $result['insta'];

}
$connect->close();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!-- Footer -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!-- Footer -->
<footer class="text-center text-lg-start bg-light">
  
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 mt-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-3">
            <i class="fas fa-gem me-3"></i>DocApp
          </h6>
          <p>
            A simple and easy way to book doctor's appointment online.
          </p>
          <!-- Section: Social media -->
        <div class="fw-bold ">
      <span><b>Our social networks:</b></span>
    </div>
    <div class="d-flex justify-content-center">
      <a href="#<?php echo $facebook; ?>" class="me-4 text-reset">
        <i class="bi bi-facebook px-2 "  aria-label="Facebook" style="font-size: 2rem;"></i>
      </a>
      <a href="#<?php echo $twitter; ?>" class="me-4 text-reset">
        <i class="bi bi-twitter px-2" aria-label="Twitter" style="font-size: 2rem;"></i>
      </a>
      <a href="#<?php echo $google; ?>" class="me-4 text-reset">
        <i class="bi bi-google px-2" aria-label="Google" style="font-size: 2rem;"></i>
      </a>
      <a href="#<?php echo $insta; ?>" class="me-4 text-reset">
        <i class="bi bi-instagram px-2" aria-label="Instagram" style="font-size: 2rem;"></i>
      </a>
      <a href="mailto:" class="me-4 text-reset">
        <i class="bi bi-envelope px-2" aria-label="Mail" style="font-size: 2rem;"></i>
      </a>
      
    </div>
    <!-- Section: Social media -->
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-3">
            Useful links
          </h6>
          <?php  if ($_SESSION)
              { }
              else
              {
                ?>
          <p>
            <a  href="login.php" class="text-reset">Login</a>
          </p>
          <p>
            <a href="register.php" class="text-reset">Register</a>
          </p>
          <?php }?>
          <p>
            <a href="faq.php" class="text-reset">FAQs</a>
          </p>
          
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-3">
            Contact
          </h6>
          <!-- email -->
          <p><i class="bi bi-envelope"></i></i><?php echo $email; ?></p>

          <!-- telephone -->
          <p><i class="bi bi-telephone"></i></i> <?php echo $local_no; ?></p>

          <!-- whatsapp -->
          <p><i class="bi bi-whatsapp"></i> <?php echo $whatsapp_no; ?></p><p>

          <!-- about and contact link -->
            <a href="about.php" class="text-reset">About </a> | <a href="contact.php" class="text-reset">Contact Us</a>
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
    <!-- Copyright -->
 <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold">DocApp.com</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<!-- Footer -->
            

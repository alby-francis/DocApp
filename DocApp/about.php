<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>About</title>
</head>

<body>
  <!-- navebar -->
  <header>
    <?php include('navbar.php');?>
  </header>

  <!-- breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <?php 
    if ($_SESSION)
    {   
        if ($_SESSION['role'] == 'admin')
            echo '<li class="breadcrumb-item"><a href="admin_session.php">Home</a></li>';
        elseif ($_SESSION['role'] == 'doctor')
          echo '<li class="breadcrumb-item"><a href="doctor_session.php">Home</a></li>';
        elseif ($_SESSION['role'] == 'patient')
          echo '<li class="breadcrumb-item"><a href="user_session.php">Home</a></li>';
    }
    else
    {
        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>';
    }
    ?>

      <li class="breadcrumb-item active" aria-current="page">About</li>
    </ol>
  </nav>
  <div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-3">
      <h2>About</h2>
    </div>
  </div>

  <!-- about project -->
  <div class="container">
    <p>The main idea of this work is to provide ease and comfort to patients while taking appointment from doctors and
      it also resolves the problems that the patients has to face while making an appointment This website is a smart
      Doctors appointment booking system that provides patients or any user an easy way of booking a doctor’s
      appointment online. This web based application overcomes the issue of managing and booking appointments according
      to user’s choice or demands. The task sometimes becomes very tedious for the compounder or doctor himself in
      manually allotting appointments for the users as per their availability. Hence this project offers an effective
      solution where users can view various booking slots available and select the preferred date and time. This system
      also allows users to cancel their booking anytime. </p>

    <p>Our project aims at Business process automation, i.e. we have tried to computerize various processes of Doctors
      Appointment System. In computer system the person has to fill the various forms number of copies of the forms can
      be easily generated at a time. In computer system, it is not necessary to create the manifest but we can directly
      print it, which saves our time. To assist the staff in capturing the effort spent on their respective working
      areas. To utilize resources in an efficient manner by increasing their Productivity through automation. The system
      generates types of information that can be used for various purposes. The system satisfy the user requirement. It
      would be easy to understand by the user and operator and will be easy to operate. The system will have a good user
      interface and can be expandable.</p>


    <p><b>For any query you can <a href="contact.php">contact</a> us anytime. Thankyou for using our service.</b></p>
    <br>

  </div>
  <!-- about author -->
  <div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-3">
      <h2>About Author</h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center mx-auto">
        <img src="alby.jpg" class="rounded-circle" alt="Author Image" width="200" height="200">
        <h4>Alby Francis</h4>
        <h5 class="text-muted">Software Engineering Student</h5>
        <p>I am a software Engineering final year student from Indore (2021). Here are some links to reach me.</p>
        <div class="d-flex justify-content-center">
          <!-- github -->
          <a href="https://www.github.com/alby-francis" class="me-4 text-reset" target="_blank">
            <i class="bi bi-github px-2" aria-label="Github" style="font-size: 2rem;"></i>
          </a>
          <!-- linkedin -->
          <a href="https://www.linkedin.com/in/alby-francis-3ba09716a" class="me-4 text-reset" target="_blank">
            <i class="bi bi-linkedin px-2" aria-label="Linkedin" style="font-size: 2rem;"></i>
          </a>
          <!-- mail -->
          <a href="mailto:alby.francis@hotmail.com" class="me-4 text-reset">
            <i class="bi bi-envelope px-2" aria-label="Mail" style="font-size: 2rem;"></i>
          </a>

        </div>
      </div><!-- /.col-lg-4 -->

    </div>
  </div>

  <!-- footer -->
  <footer>
    <?php include('footer.php');?>
  </footer>
</body>

</html>
<!-- base design to copy into new webpage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doccapp</title>

</head>
<body>
<!-- navebar -->
<header>
  <?php include('navbar.php');?>
</header>
<!-- nav end -->

<!-- breadcrumb to be edited according to the page -->
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
        
        <li class="breadcrumb-item active" aria-current="page">Active page</li>    
    </ol>
  </nav>
<!-- breadcrumb end -->

<!-- heading -->
<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h3>Heading</h3>
    </div>
</div>
<!-- heading end -->

<!-- footer -->
<footer>
  <?php include('footer.php');?>
</footer>
</body>
</html>
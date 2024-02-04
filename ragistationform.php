<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Registration Form</title>
 <link rel="stylesheet" href="./ragistationform.css">
</head>
<body>
 <?php
include_once 'navbar.php';
?>
 <div class="outer-box">
  <div class="inner-box">
   <header class="signup-header">
    <h1>Signup</h1>
    <p>It just take 30 seconds</p>
   </header>
   <main class="signup-body">
    <?php 
    if (isset($_GET['message'])) {
        $successMessage = urldecode($_GET['message']);

    ?>
    <p style="color:green; font-weight:bold"><?php echo $successMessage?></p>
    <?php
    } 
    ?>

<?php 
    if (isset($_GET['error'])) {
        $error = urldecode($_GET['error']);

    ?>
    <p style="color:red; font-weight:bold"><?php echo $error?></p>
    <?php
    } 
    ?>

    <form action="process.php" method="post">
        <p>
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" placeholder="Enter Student full name" required name="name">
        </p>
        <p>
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter Student email" required name="email">
        </p>
        <p>
        <label for="phone">Phone</label>
        <input type="tel" id="phone" placeholder="+91-00000-00000" required name="phone">
        </p>
        <p>
        <label for="rollno">Roll No</label>
        <input type="number" id="rollno" placeholder="Enter Student Roll No." required name="rollno">
        </p>
        <p>
        <label for="class">Class</label>
        <input type="number" id="class" placeholder="Student Class" required max="12" min="1" name="class">
        </p>
        <p>     
        <input type="submit" id="submit" value="Register Here">
        </p>
    </form>
    <a href="dashbord.php"><< Back to Dashbord</a>
   </main>
   
  </div>
 </div>
 <?php
include_once 'footer.php';
?>
</body>
</html>
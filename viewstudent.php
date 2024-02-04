<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information</title>
  <link rel="stylesheet" href="viewstudent.css">
<script>
    $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>

</head>
<body>
<?php
require 'navbar.php';
?>
<section>
 
  <h1>Students Information</h1>
  <div class="tbl-header">
  <?php
             $mysqli = new mysqli('localhost', 'root', '', 'student');
             if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }
            $query = "SELECT * FROM registration";
            $result = $mysqli->query($query);

      ?>

    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Roll No.</th>
          <th>Class</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td>' . $row['rollno'] . '</td>';
                    echo '<td>' . $row['class'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo 'No records found.';
            }
            ?>
      </tbody>
    </table>
  </div>
</section>


<div class="back-dashbord">
  <a href="dashbord.php" ><< Back to Dashbord</a>
</div>
<?php
include_once 'footer.php';
?>

</body>
</html>

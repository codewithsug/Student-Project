<?php
// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $class = $_POST['class'];
// $rollno = $_POST['rollno'];
$errors = array();




if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required';
} else {
    $name = $_POST['name'];
}

// Validate email
if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required';
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format';
} else {
    $email = $_POST['email'];
  
}

// Validate phone
if (empty($_POST['phone'])) {
    $errors['phone'] = 'Phone is required';
} elseif (!preg_match('/^[0-9]{10}$/', $_POST['phone'])) {
    $errors['phone'] = 'Invalid phone number format';
} else {
    $phone = $_POST['phone'];
    
}

// Validate class
if (empty($_POST['class'])) {
    $errors['class'] = 'Class is required';
} else {
    $class = $_POST['class'];
   
}

// Validate roll number
if (empty($_POST['rollno'])) {
    $errors['rollno'] = 'Roll Number is required';
} else {
    $rollno = $_POST['rollno'];
}


if (empty($errors)) {
    
    $mysqli = new mysqli('localhost', 'root', '', 'student');

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    
    $query = "INSERT INTO registration (name, email, phone, class, rollno) VALUES ('$name', '$email', '$phone', '$class', '$rollno')";

    if ($mysqli->query($query) === TRUE) {
        $successMessage = "Registration successful !";
        header("Location: ragistationform.php?message=" . urlencode($successMessage));
        // exit;
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }

    // Close database connection
    $mysqli->close();
}else{
    foreach ($errors as $value) {
        $error = $value;
        header("Location: ragistationform.php?error=" . urlencode($error));
    }
}
?>
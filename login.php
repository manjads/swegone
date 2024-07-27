<?php
include 'pdo.php';
$host='localhost';
$server='root';
$pass='';
$db='pak_dewa';

$kon = mysqli_connect ($host,$server,$pass,$db);
$myfile = fopen("signin.php", "r") or die("Unable to open file!");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a select statement
    $stmt = $kon->prepare("SELECT * FROM user WHERE  username='"
    . $_POST["username"] . "' AND
    password='" . $_POST["password"] . "' ");

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

  
    // Check if user exists and password is correct
    if ($user) {
        $modcheck = "SELECT * FROM user INNER JOIN moderator WHERE ". $user["id_user"] ." = moderator.id_user";
    
    $mod = mysqli_query($kon, $modcheck);
        session_start();
    
        // Password is correct, so start a new session
        if (mysqli_num_rows($mod) > 0) {
            
        $_SESSION["loggedin"] = true;
        $_SESSION["id_mod"] = "[@MOD] ". $user["username"];
        $_SESSION["id_user"] = $user["id_user"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["fullname"] = $user["fullname"];
        // Redirect user to welcome page
        header('location: index1.php#recent');
        return;
        }
        else{
   
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["id_user"] = $user["id_user"];
        $_SESSION["id_mod"] = $user["username"];
        $_SESSION["username"] = $user["username"];
        $_SESSION['fullname'] = $user["fullname"];
        // Redirect user to welcome page
        header('location: index1.php#recent');
        return;
    }
    } else {
        // Display an error message if username doesn't exist or password is wrong
        echo "<script>alert('Gagal Sign In NAME OR PASS SALAH')</script>";
        echo fread($myfile,filesize("signin.php"));
fclose($myfile);
    }

    // Close statement
    $stmt->close();
}

// Close connection
$kon->close();
?>
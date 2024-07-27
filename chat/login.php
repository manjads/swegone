<?php
include 'pdo.php';
$host='localhost';
$server='root';
$pass='';
$db='pak_dewa';

$kon = mysqli_connect ($host,$server,$pass,$db);
$myfile = fopen("signin.php", "r") or die("Unable to open file!");
session_start();
$myfile = fopen("signin.php", "r") or die("Unable to open file!");
if (!isset($_POST['username']) || !isset($_POST["password"])) {
   
 header('location:signin.php');
  
 
}

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
        $_SESSION["logname"] = "<b><i>[@MOD] ". $user["fullname"] . "</i></b>";
        $_SESSION["id_user"] = $user["id_user"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["fullname"] = $user["fullname"];
        $_SESSION["no_hp"] = $user["no_hp"];
        $_SESSION["email"] = $user["email"];
        // Redirect user to welcome page
        header('location: home.php');
        return;
        }
        else{
   
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["logname"] = $user["fullname"];
        $_SESSION["id_user"] = $user["id_user"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["fullname"] = $user["fullname"];
        $_SESSION["no_hp"] = $user["no_hp"]; 
        $_SESSION["email"] = $user["email"];
        // Redirect user to welcome page
        header('location: home.php');
        return;
    }
    } else {
        // Display an error message if username doesn't exist or password is wrong
        
        echo fread($myfile,filesize("signin.php"));
      
      echo "<script type='text/javascript'>

        $(document).ready(function(){
        
            
                swal.fire(
                    'Gagal!',
                    'Username Atau Password Salah!',
                    'error'
                )
            });
        
        </script>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$kon->close();
?>
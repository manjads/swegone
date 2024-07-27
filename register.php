<?php
$host='localhost';
$username='root';
$pass='';
$db='pak_dewa';

$kon = mysqli_connect ($host,$username,$pass,$db);

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$no_hp=$_POST['no_hp'];
$gender=$_POST['gender'];
$fullname=$_POST['fullname'];
$myfile = fopen("signin.php", "r") or die("Unable to open file!");
$lowerStr = strtolower($username); 
      
// Cek user email sudah ada
$checkQuerye = "SELECT * FROM user WHERE email = '$email'";
$checkQuery = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($kon, $checkQuery);
$resulte = mysqli_query($kon, $checkQuerye);
if (mysqli_num_rows($result) > 0) {

    echo "Username already exists.";
}
else if (mysqli_num_rows($resulte) > 0) {

    echo "Email already exists.";}
else if (!isset($password) || trim($password)  == '')
    {
       echo "You did not fill out the required fields.";
    }
else {
    // berhasil
    $masuk= "INSERT INTO user (username, email, password, no_hp, gender, fullname) VALUES ('$lowerStr','$email','$password','$no_hp','$gender','$fullname')";
    if (mysqli_query($kon, $masuk)) {
        echo "<script>alert('Berhasil Sign Up')</script>";
        echo fread($myfile,filesize("signin.php"));
fclose($myfile);
        exit();
    }
    else {
        // gagal- auto increment reset
        $resetAutoIncrement = "ALTER TABLE user AUTO_INCREMENT = (SELECT MAX(id) + 1 FROM member)";
        mysqli_query($kon, $resetAutoIncrement);
        echo "Insert failed, auto-increment value reset.";
    }
}

?>
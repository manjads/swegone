
<?php

    if(isset($_POST['submit'])){ // Check if form was submitted

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
        echo "Username already exists.";
    }
else {
    // berhasil
    $masuk= "INSERT INTO user (username, email, password, no_hp, gender, fullname) VALUES ('$lowerStr','$email','$password','$no_hp','$gender','$fullname')";
    if (mysqli_query($kon, $masuk)) {
         header("location:signin.php");
    }
    else {
        // gagal- auto increment reset
        $resetAutoIncrement = "ALTER TABLE user AUTO_INCREMENT = (SELECT MAX(id) + 1 FROM member)";
        mysqli_query($kon, $resetAutoIncrement);
        echo "Insert failed, auto-increment value reset.";
    }
}
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="icon" type="image/x-icon" href="assets1/img/favicon.png">
    <title>Document</title>
</head>
<body>
    
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3 px-5 shadow p-5 mb-5 bg-white rounded">
            <h2 id="heading">Sign up akunmu</h2>
                <p>Isi Semua Kolom Dibawah</p>
                
         

                <form action="#registered" method="post" id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Akun</strong></li>
                        <li id="personal"><strong>Data Diri</strong></li>
                     
                    </ul>
                    <div class="progress">
                    	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                	</div>
                    <br>
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                        	<div class="row">
                        		<div class="col-7">
                            		<h2 class="fs-title">Informasi Akun:</h2>
                            	</div>
                            	<div class="col-5">
                            		<h2 class="steps">Step 1 - 2</h2>
                            	</div>
                            </div>
                            <label class="fieldlabels">Email: *</label>
                            <input type="email" maxlength="30" name="email" placeholder="Email"/>
                            <label class="fieldlabels">Username: *</label>
                            
                            <input type="text" maxlength="20" name="username" placeholder="UserName"/>
                            <label class="fieldlabels">Password: *</label>
                            <input type="password" maxlength="20" name="password" placeholder="Password"/>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Lanjut"/>
                        
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                        		<div class="col-7">
                            		<h2 class="fs-title">Data Diri:</h2>
                            	</div>
                            	<div class="col-5">
                            		<h2 class="steps">Step 2 - 2</h2>
                            	</div>
                            </div>
                            <label class="fieldlabels">Nama Lengkap: *</label>
                            <input type="text" maxlength="39" name="fullname" placeholder="Full Name"/>
                            <label class="fieldlabels">No HP: *</label>
                            <input type="number" minlength="6" maxlength="12" name="no_hp" placeholder="No HP."/>
                            <label class="fieldlabels">Jenis Kelamin: *</label>
                            <select name="gender" class="form-select" aria-label="Default select example">
  <option selected value="laki-laki">Laki-laki</option>
  <option value="perempuan">Perempuan</option>
</select>

                        </div>
                        <input type="submit" name="submit" class="next action-button" value="Kirim"/>
                        <input type="button" name="previous" class="previous action-button-previous" value="Kembali"/>
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                        	<div class="row">
                        		<div class="col-7">
                            		<h2 class="fs-title">Finish:</h2>
                            	</div>
                            	<div class="col-5">
                            		<h2 class="steps">Akunmu Telah Disimpan</h2>
                            	</div>
                            </div>
                            <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
                            <br>
                            <div class="row justify-content-center">
                                
                            </div>
                            <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <p>Sudah Punya Akun?  <a href="signin.php">Klik Disini!</a></p>
                </form>
            </div>
        </div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    
    setProgressBar(current);
    
    $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 500
        });
        setProgressBar(++current);
    });
   
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep){
        var percent = parseFloat(150 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
          .css("width",percent+"%")   
    }
    
    $(".submit").click(function(){
        return false;
    })
        
    });</script>
</body>
</html>
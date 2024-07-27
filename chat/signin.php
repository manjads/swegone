<?php
 session_start();
 $myfile = fopen("signin.php", "r") or die("Unable to open file!");
 if (!isset($_SESSION['username']) || $_SESSION["loggedin"] == !true || !isset($_SESSION["loggedin"])) {
    
  
   
  
 }
 else{
 header('location:home.php');
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
    <script src="assest/jquery/dist/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="assest/sweetalert2/dist/sweetalert2.min.css">
    <script src="assest/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="test.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets1/img/favicon.png">
    <title>SIGNIN PAGE</title>
</head>
<body>
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3 px-5 shadow p-5 mb-5 bg-white rounded">
                <h2 id="heading">Sign in ke Akunmu</h2>
                <p>Isi Semua Kolom Dibawah</p>
                
               
                <form action="login.php" method="post" id="msform">
                  
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                        	
            
                            <label class="fieldlabels">Username: *</label>
                            <input type="text" maxlength="30" name="username" placeholder="UserName"/>
                            <label class="fieldlabels">Password: *</label>
                            <input type="password" maxlength="20" name="password" placeholder="Password"/>
                        </div>
                        <input type="submit" name="next" class="action-button" value="Sign in"/>
                    </fieldset>
                   
                    <p>Belum Punya Akun?  <a href="signup.php">Klik Disini!</a></p>
                </form>
                
            </div>
        </div>
	</div>
</div>
<script>

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
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
          .css("width",percent+"%")   
    }
    
    $(".submit").click(function(){
        return false;
    })
        
    });
    $(document).on('click', '#success', function(e) {
            swal.fire(
                'Success',
                'You clicked the Success button!',
                'success'
            )
        });
    $(document).on('click', '#error', function(e) {
            swal.fire(
                'Error!',
                'You clicked the error button!',
                'error'
            )
        });


        $(document).on('click', '#warning', function(e) {
            swal.fire(
                'Warning!',
                'You clicked the warning button!',
                'warning'
            )
        });


        $(document).on('click', '#info', function(e) {
            swal.fire(
                'Info!',
                'You clicked the info button!',
                'info'
            )
        });


        $(document).on('click', '#question', function(e) {
            swal.fire(
                'Question!',
                'You clicked the question button!',
                'question'
            )
        });</script>
</body>
</html>
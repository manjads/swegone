<?php
session_start();
$myfile = fopen("signin.php", "r") or die("Unable to open file!");
if (!isset($_SESSION['username']) || $_SESSION["loggedin"] == !true || !isset($_SESSION["loggedin"])) {
   
 
  
 
}
else{
header('location:home.php');
}
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Swegone Chat</title>
      <link rel="stylesheet" href="styles.css">
     <script src="assest/jquery/dist/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="assest/sweetalert2/dist/sweetalert2.min.css">
    <script src="assest/sweetalert2/dist/sweetalert2.all.min.js"></script>
      <link href="assest/css/bootstrap.min.css" rel="stylesheet">
      <link href="assest/css/bootstrap-icons.min.css" rel="stylesheet">
      <script src="assest/js/popper.min.js"></script>
      <link rel="shortcut icon" href="assest/img/swegone.svg" type="image/x-icon">
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      
      <script src="test.js"></script>
   </head>
   <body>
    
   <nav class="navbar header fixed-top pe-3 shadow" data-bs-theme="dark" style="background-color: #6e00a1;">
        <div class="container fluid justify-content">
            <img src="assest/img/swegone.svg" alt="logo" width="60px" class="sm-screen the-logo mx-3">
            <a class="navbar-brand thehome" href="#">Swegone Chat</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

   
            <hr>
      <h6 class="text-muted pt-3 text-center ps-4">Anda Belum Sign In</h6>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Sign In</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

      <div class="container-fluid pb-5 pt-5">
     

<center>
<h2 class="my-4 ps-5"><b>Mohon Sign In Terlebih Dahulu!</b></h2>
        
        <div class="row container fluid ps-4">
            <div>
               <div class="container">
               <p><b>Swegone Chat</b> merupakan aplikasi chating localhost yang dikembangkan dengan gabut
                    </p>
                    <div class="accordion col-4 my-3 sm-screen" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <i class="bi bi-list-ul"></i>&nbsp;&nbsp;ROOM CHAT
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <ol class="list-unstyled custom-counter">
                                                    <li><a id="warning" href="#" class="btn btn-primary w-50">ngobrol</a></li>
                                                    <br>
                                                    <li><a id="warning" href="#" class="btn btn-primary w-50">diskusi</a></li>
                                                     
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                 
               </div>
            </div>
            <div class="col-3 sm-screen">
               
            </div>
        </div> 
</div>

    
  
  
      <script>
   


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
                'Maaf!',
                'Mohon Sign In Terlebih Dahulu!',
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
        });
      </script>
      <script src="assest/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
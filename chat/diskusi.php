<?php include 'pdo.php';
$myfile = fopen("signin.php", "r") or die("Unable to open file!");
   session_start();
   if (!isset($_SESSION['username']) || $_SESSION["loggedin"] !== true || !isset($_SESSION["loggedin"])) {
      echo "<script>alert('Anda Belum Melakukan Sign in')</script>";
      echo fread($myfile,filesize("signin.php"));
      session_destroy();
      return;
   }


  
   if (isset($_POST['message2'])) {
      $sql = "INSERT INTO message2 (content, username, fullname) VALUES (:content, :username, :fullname)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(array(
         ':content' => $_POST['message2'],
         ':username' => $_SESSION['username'],
         ':fullname' => $_SESSION['logname']
         
      ));
      header('location: diskusi.php');
      return;
   }
   $sql = "SELECT * FROM message2 ORDER BY id";
   $stmt = $pdo->query($sql);
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
            <a class="navbar-brand thehome" href="#">Diskusi</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <hr>
    <h6 class="text-muted pt-3 text-center ps-4">Informasi Akun</h6>
   <table>
      <tr>
    <td><span  class="text-muted"><b>Username</SPAN></td> <td class="text-white"><span>:</span></td>
    <td><span class="text-white"> <?php echo htmlspecialchars($_SESSION["username"]); ?></span></td>
    </tr>
    <tr>
      <td><span class="text-muted"><b>Full Name</span></td><td><span class="text-white">:</span></td>
      <td><span class="text-white"><?php echo htmlspecialchars($_SESSION["fullname"]); ?></span></td>
      </tr>
      <tr>
      <td><span class="text-muted"><b>Email</span></td><td><span class="text-white">:</span></td>
      <td><span class="text-white"><?php echo htmlspecialchars($_SESSION["email"]); ?></span></td>
      </tr>
      <tr>
      <td><span class="text-muted"><b>No. Telepon</span></td><td><span class="text-white">:</span></td>
      <td><span class="text-white"><?php echo htmlspecialchars($_SESSION["no_hp"]); ?></span></td>
      </tr>
   </table>
   <hr>
      <h6 class="text-muted pt-3 text-center ps-4">Pengaturan</h6>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <button class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Room Chat</button>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Eksplore
                        </a>
                        <ul class="dropdown-menu bg-transparent">
                        <li><a class="dropdown-item bg-transparent" href="home.php">Halaman Utama</a></li>
                        
                        </ul>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

      <div class="main container-fluid pb-5">
      <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">haha</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

  </div>
</div>
<div class="offcanvas offcanvas-start" style="background-color: #e9b8ff;"  tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Room Chat</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
                    
  <li class="nav-item">
               <a class="nav-link" href="home.php">Kembali</a>
           </li>
                    <br>
           <li class="nav-item">
               <a class="nav-link" href="ngobrol.php">Ngobrol</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="diskusi.php">Diskusi</a>
           </li>
       </ul>
  </div>
</div>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">hehe</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    
  </div>
</div>

            <?php
               while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               if($row['username'] == $_SESSION['username'] || $row['fullname'] == $_SESSION['fullname'] ){
            ?>
            <div class="col-12" id="chat-container">
               <div class="d-flex">
                  <div class="message my-message">
                     <b class="message-header">Me:</b>  
                     <div><?=$row['content']?></div>
                  </div>
               </div>
            </div>
            
            <?php
            
               } 
             
               else{
            ?>
            <div class="col-12" id="chat-container">
               <div class="d-flex">
                  <div class="message others-message">
                     <b class="message-header"><?=$row['fullname']?>:</b>  
                     <div><?=$row['content']?></div>
                  </div>
               </div>
            </div>
            <?php
               }
               }
            ?>
         </div>

      
         <form class="row footer p-2 bg-color-green shadow" action="diskusi.php" method="POST">
            <div class="col-9 col-md-10">
               <input type="text" name="message2"  class="form-control" placeholder="Write your message" >
            </div>
            <div class="col-3 col-md-2">
               <button type="submit" class="btn btn-light form-control" >Send</button>
            </div>
         </form>
     
    
  
  
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
        });
      </script>
      <script src="assest/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
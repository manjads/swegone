<?php include 'pdo.php';
$myfile = fopen("index.html", "r") or die("Unable to open file!");
   session_start();
   if (!isset($_SESSION['username']) || $_SESSION["loggedin"] !== true || !isset($_SESSION["loggedin"])) {
      header('location: login.php');
      return;
   }


  
   if (isset($_POST['message'])) {
      $sql = "INSERT INTO message (content, username, fullname) VALUES (:content, :username, :fullname)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(array(
         ':content' => $_POST['message'],
         ':username' => $_SESSION['id_mod'],
         ':fullname' => $_SESSION['fullname']
      ));
      header('location: index1.php');
      return;
   }
   $sql = "SELECT * FROM message ORDER BY id";
   $stmt = $pdo->query($sql);
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Swegone Chat</title>
      <link rel="stylesheet" href="styles.css">
      <link href="assest/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container fluid">
            <img src="assets1/img/Genshin_Impact_logo.svg" alt="logo" height="30px" class="sm-screen the-logo mx-3">
            <a class="navbar-brand thehome" href="#"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Eksplore
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Halaman Utama</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="Search">
                <button class="btn btn-outline-success bg-light" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
      <div class="app container-fluid">
        
         <div class="main row- p-4 bg-color-gray">
            <?php
               while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               if($row['username'] == $_SESSION['id_mod'] || $row['username'] == $_SESSION['username'] ){
            ?>
            <div class="col-12">
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
            <div class="col-12">
               <div class="d-flex">
                  <div class="message others-message">
                     <b class="message-header"><?=$row['username']?>:</b>  
                     <div><?=$row['content']?></div>
                  </div>
               </div>
            </div>
            <?php
               }
               }
            ?>
         </div>
         <div class="footer">
         <form class="row p-2 bg-color-green send-message" action="index1.php" method="POST">
            <div class="col-9 col-md-10">
               <input type="text" name="message" class="form-control" placeholder="Write your message" >
            </div>
            <div class="col-3 col-md-2">
               <button type="submit" class="btn btn-light form-control" >Send</button>
            </div>
         </form>
         </div>
      </div>
      <script>
         document.querySelector(".message:last-child").setAttribute('id', 'recent');

      </script>
      <script src="assest/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
<?php
$myfile = fopen("index.html", "r") or die("Unable to open file!");
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    echo fread($myfile,filesize("index.html"));
    exit;
}

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="test.js"></script>
    <link rel="shortcut icon" href="assets1/img/favicon.png" type="image/x-icon">
    <title>Raiden Shogun - Genshin Impact Database Indonesia</title>
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
    <div class="container fluid mt-3">
        <h2 class="my-4">Selamat Datang, <?php echo htmlspecialchars($_SESSION["fullname"]); ?>!</h2>
        <div class="row g-1 mb-3">
            <div class="col-6 col-sm-4 col-md-2">
                <button type="button" class="btn btn-light w-100 h-100 rounded active">Gambaran</button>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <button type="button" class="btn btn-light w-100 h-100 rounded">Kisah</button>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <button type="button" class="btn btn-light w-100 h-100 rounded">Suara</button>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <button type="button" class="btn btn-light w-100 h-100 rounded">Outfit</button>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <button type="button" class="btn btn-light w-100 h-100 rounded">Teman</button>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <button type="button" class="btn btn-light w-100 h-100 rounded">Gallery</button>
            </div>
        </div>
        <div class="row container fluid">
            <div class="col-sm-12 col-md-9">
               <div class="container">
                    <p>Raiden Shogun (Bahasa Jepang: <ruby>雷<rt>らい</rt>電<rt>でん</rt>将<rt>しょう</rt>軍<rt>ぐん</rt></ruby> <i>Raiden Shougun</i>) merupakan karakter playable <span class="electro">Electro</span> di <a href="#" class="text-white">Genshin Impact</a>.
                    <br><br>
                    Raiden Shogun terdiri dari dua makhluk dalam satu tubuh: Ei, Archon Electro Inazuma saat ini; dan Shogun, boneka yang diciptakan oleh Ei untuk bertindak sebagai penguasa Inazuma sebagai penggantinya.
                    </p>
                    <div class="accordion col-4 my-3 sm-screen" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <i class="bi bi-list-ul"></i>&nbsp;&nbsp;DAFTAR ISI
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <ol class="list-unstyled custom-counter">
                                                    <li><a href="#homeeee">Gameplay Info</a>
                                                        <ol class="list-unstyled custom-counter">
                                                            <li><a href="#">Ascensions and Stats</a></li>
                                                            <li><a href="#">Talents</a>
                                                                <ol class="list-unstyled custom-counter">
                                                                    <li><a href="#">Talent Upgrade</a></li>
                                                                </ol>
                                                            </li>
                                                            <li><a href="#">Constellation</a></li>
                                                            <li><a href="#">Gameplay Notes</a></li>
                                                        </ol>
                                                    </li>
                                                    <li><a href="#">Availability</a>
                                                        <ol class="list-unstyled custom-counter">
                                                            <li><a href="#">Event Wishes</a></li>
                                                        </ol>
                                                    </li>
                                                    <li><a href="#">Other Languages</a></li>
                                                    <li><a href="#">Change History</a></li>
                                                    <li><a href="#">References</a></li>
                                                    <li><a href="#">Navigation</a></li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3>Informasi Gameplay</h3>
                    <hr>
               </div>
            </div>
            <div class="col-3 sm-screen">
               <div class="container border p-0 ">
                    <h5 class="bg-light text-dark text-center py-3 m-0">Raiden Shogun</h5>
                    <h6 class="text-light text-center py-3 m-0 border-bottom">Plane of Euthymia</h6>
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active rounded-0 border-top-0 border-start-0" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Kartu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link rounded-0 border-top-0" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Gacha</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link rounded-0 border-top-0 border-end-0" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Game</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <img src="assets1/img/Raiden_Shogun_Card.webp" class="w-100 h-auto">
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <img src="assets1/img/Character_Raiden_Shogun_Full_Wish.webp" class="w-100 h-auto">
                        </div>
                        <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <img src="assets1/img/Character_Raiden_Shogun_Game.webp" class="w-100 h-auto">
                        </div>
                    </div>
                    <table class="table w-100 text-center m-0 table-bordered thefont-9">
                        <tr>
                            <td class="border-start-0 col-6">
                                Quality <br>
                                <img src="assets1/img/Icon_5_Stars.png" alt="">
                            </td>
                            <td class="border-end-0 col-6">
                                <a href="" class="text-decoration-none">Weapon</a><br>
                                <img src="assets1/img/Icon_Polearm.webp" alt="" width="20px"><a href="" class="text-decoration-none">Polearm</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-start-0">
                                <a href="" class="text-decoration-none">Elemen</a><br>
                                <img src="assets1/img/Element_Electro.svg" alt="" width="20px"><a href="" class="text-decoration-none">Electro</a>
                            </td>
                            <td class="border-end-0">
                                Tipe Model
                                <br><a href="" class="text-decoration-none">Tall Female</a>
                            </td>
                        </tr>
                    </table>
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active rounded-0 border-0" id="bio-tab" data-bs-toggle="tab" data-bs-target="#bio" type="button" role="tab" aria-controls="bio" aria-selected="true">Biodata</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link rounded-0 border-0" id="seiyuu-tab" data-bs-toggle="tab" data-bs-target="#seiyuu" type="button" role="tab" aria-controls="seiyuu" aria-selected="false">Pengisi Suara</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="bio" role="tabpanel" aria-labelledby="bio-tab">
                            <table class="table w-100 m-0 table-bordered thefont-8">
                                <tr >
                                    <td class="col-5 border-start-0 border-end-0 border-top-0">Nama Asli</td>
                                    <td class="col-7 border-start-0 border-end-0 border-top-0">Raiden Ei</td>
                                </tr>
                                <tr>
                                    <td class="border-start-0 border-end-0 border-top-0">Ulang Tahun</td>
                                    <td class="border-start-0 border-end-0 border-top-0 align-middle">26 Juni</td>
                                </tr>
                                <tr>
                                    <td class="border-start-0 border-end-0 border-top-0">Konstelasi</td>
                                    <td class="border-start-0 border-end-0 border-top-0">Imperatrix Umbrosa</td>
                                </tr>
                                <tr>
                                    <td class="border-start-0 border-end-0 border-top-0">Region</td>
                                    <td class="border-start-0 border-end-0 border-top-0">Inazuma</td>
                                </tr>
                                <tr>
                                    <td class="border-start-0 border-end-0 border-top-0">Afiliasi</td>
                                    <td class="border-start-0 border-end-0 border-top-0">Inazuma City</td>
                                </tr>
                                <tr>
                                    <td class="border-start-0 border-end-0 border-top-0">ghghg</td>
                                    <td class="border-start-0 border-end-0 border-top-0"><span id="dateSpan"></span></td>
                                </tr>
                                <tr>
                                    <td class="border-start-0 border-end-0 border-top-0">ghghg</td>
                                    <td class="border-start-0 border-end-0 border-top-0">jgjg</td>
                                </tr>
                                <tr>
                                    <td class="border-start-0 border-end-0 border-top-0">ghghg</td>
                                    <td class="border-start-0 border-end-0 border-top-0">jgjg</td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane" id="seiyuu" role="tabpanel" aria-labelledby="seiyuu-tab">
                            <table class="table w-100 text-center m-0 table-bordered">
                                <tr>
                                    <td class="col-4 border-start-0 border-end-0 border-top-0">ghghg</td>
                                    <td class="col-8 border-start-0 border-end-0 border-top-0">jgjg</td>
                                </tr>
                                <tr>
                                    <td class="border-start-0 border-end-0 border-top-0">ghghg</td>
                                    <td class="border-start-0 border-end-0 border-top-0">jgjg</td>
                                </tr>
                                <tr>
                                    <td class="border-start-0 border-end-0 border-top-0">ghghg</td>
                                    <td class="border-start-0 border-end-0 border-top-0">jgjg</td>
                                </tr>
                                <tr>
                                    <td class="border-start-0 border-end-0 border-top-0">ghghg</td>
                                    <td class="border-start-0 border-end-0 border-top-0">jgjg</td>
                                </tr>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div> 
    </div>
</body>
</html>

   

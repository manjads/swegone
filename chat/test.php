<?php
if (isset($_POST['submit'])) {
    echo "<script>swal.fire(
        'Success',
        'You clicked the Successss button!',
        'success'
    )</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>How to use and customize SweetAlert2</title>
    <!-- jQuery -->
    <script src="assest/jquery/dist/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="assest/sweetalert2/dist/sweetalert2.min.css">
    <script src="assest/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!-- styles -->
    <style type="text/css">
        body{background-color: aliceblue;font-family: sans-serif;text-align: center;}
        button{background-color: cadetblue;color: whitesmoke;-webkit-box-shadow: none;box-shadow: none; font-size: 18px;font-weight: 500;border-radius: 7px;padding: 15px 35px;cursor: pointer;white-space: nowrap;margin: 10px;}
        img {width: 200px;}
        input[type="text"] {padding: 12px 20px;display: inline-block;border: 1px solid #ccc;border-radius: 10px; box-sizing: border-box;}
        h1{border-bottom: solid 2px grey;}
        #success {background: green;}
        #error {background: red;}
        #warning {background: coral;}
        #info {background: cornflowerblue;}
        #question {background: grey;}
    </style>
</head>
<body>
<div>
        <h1>How to use and customize <img src="https://limonte.github.io/sweetalert2/assets/swal2-logo.png"></h1>
        <input>
            <h4>Modal Type</h4>
            <p>Sweet alert with modal type and customize message alert with html and css</p>
            <input type="submit" id="successs" >Success</input>
            <button id="error" >Error</button>
            <button id="warning">Warning</button>
            <button id="info" >Info</button>
            <button id="question">Question</button>
        </div>
        <br>
        <div>
            <h4>Custom image and alert size</h4>
            <p>Alert with custom icon and background icon</p>
            <button id="icon">Custom Icon</button>
            <button id="image">Custom Background Image</button>
        </div>
        <br>
        <div>
            <h4>Alert with input type</h4>
            <p>Sweet Alert with Input and loading button</p>
            <button id="subscribe">Subscribe</button>
        </div>
        <br>
        <div>
            <h4>Redirect to visit another site</h4>
            <p>Alert to visit a link to another site</p>
            <button id="link">Redirect to Utopian</button>
        </div>
    </div>


<!-- SweetAlert2 Codes -->
    <script type:"text/javascipt">
        $(document).on('click', '#success', function(e) {
            swal.fire(
                'Success',
                'You clicked the Success button!',
                'success'
            )
        });


        $(document).on('click', '#error', function(e) {
            swal(
                'Error!',
                'You clicked the error button!',
                'error'
            )
        });


        $(document).on('click', '#warning', function(e) {
            swal(
                'Warning!',
                'You clicked the warning button!',
                'warning'
            )
        });


        $(document).on('click', '#info', function(e) {
            swal(
                'Info!',
                'You clicked the info button!',
                'info'
            )
        });


        $(document).on('click', '#question', function(e) {
            swal(
                'Question!',
                'You clicked the question button!',
                'question'
            )
        });
    </script>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    echo "<script>swal.fire(
        'Success',
        'You clicked the Successss button!',
        'success'
    )</script>";
}
?>
<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=pak_dewa', 'admin', 'admin');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
<?php
$pdo = new PDO('mysql:host=b7p.h.filess.io;port=3307;dbname=chat_goneobject', 'chat_goneobject', '25df92213bdbf09c565a5e69844e61ac5463e9de');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

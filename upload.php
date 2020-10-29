<?php
$config = include('config.php');
$key = $config['secure_key'];
$domain = $config['output_url'];
if(isset($_FILES['upload']['name']) && $_POST['key'] == $key)
{
    $filename = bin2hex(openssl_random_pseudo_bytes(12));
    $upload_type = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES['upload']['tmp_name'], $filename.'.'.$upload_type))
    {
        echo $domain.$filename.'.'.$upload_type;
    }
}
else 
{
    echo 'invalid file or password';
}
?>
<?php
$config = include('config.php');
if(isset($_FILES['upload']['name']) && $_POST['key'] == $config['secure_key'])
{
    $filename = bin2hex(openssl_random_pseudo_bytes(12));
    $upload_type = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES['upload']['tmp_name'], $filename.'.'.$upload_type))
    {
        echo $config['output_url'].$filename.'.'.$upload_type;
    }
}
else 
{
    echo 'invalid file or password';
}
?>
<?php

    $fullname = $_POST['fname'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $enc_pass = md5($passwd);

    echo "Your fullname: ". $fullname."<br>";
    echo "Your Email: ". $email."<br>";
    echo "Your Password: ". $passwd."<br>" ;
    echo "Your Password Enc". $enc_pass;

?>
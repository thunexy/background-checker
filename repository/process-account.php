<?php
include "framework/otherClasses.php";
$r = $_REQUEST;
if(isset($r["registerBtn"])){
    $name = $r["nameR"];
    $email = $r["emailR"];
    $password = $r["passwordR"];
    $address = $r["addressR"];
    $company = $r["coyR"];
    $category = $r["categoryR"];
    $code = rand(11111, 99999);
    $signUP = new SignUp($email, $password);
    echo $signUP->register("users", "name, email, password, address, company_name, category, verification_code, status", "?, ?, ?, ?, ?, ?, ?, ?", [$name, $email, $password, $address, $company, $category, $code, 0]);
}
if(isset($r["loginBtn"])){
    $email = $r["emailL"];
    $password = $r["passwordL"];
    $login = new Login($email, $password);
    $login->authenticate("users", "../app.php?general-search");

}
if(isset($r["verifyBtn"])){
    $code = $r["code"];
    Session::startSession();
    verifyContact::verifyAccount($_SESSION["emailV"], $code);

}

if(isset($r["forgotPwdBtn"])){
    $to = $r["emailF"];
    $search = DatabaseQuery::select("users", "email, password", "email = '$to'", "s");
    if($search){
        SendEmail::send($to, "ALPHA-CHECK ACCOUNT RECOVERY", "Your password is: ". $search["password"], "wavepalmtechng@gmail.com");
        alert("Your password has been sent to your email");
        echo "<script> window.location.href = '../app.php?login'; </script>";
    }

    else{
        alert("Your email address does not match any account.");
        echo "<script> window.location.href = '../app.php?forgot-password'; </script>";
    }

}
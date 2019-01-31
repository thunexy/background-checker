<?php
include "otherClasses.php";

if(isset($_POST["login"])){
    @session_start();
    $p = $_POST;
    $username = $p["username"];
    $password = $p["password"];
    if($username === "rhodawilson_techadmin" && $password === "Flyers2018"){

        $_SESSION["isLoggedIn"] = "true";
        header("location:../admin_events.php");
    }
    else{
        $_SESSION["isNotLoggedIn"] = "true";
        header("location:../admin.php");
    }
}

if(isset($_REQUEST['add'])){
    $category = $_REQUEST["category"];
    $title = $_REQUEST["title"];
    $link = $_REQUEST["link"];
    if(DatabaseQuery::insert("media", "category, title, link", "?, ?, ?", [$category, $title, $link])){
        $value = DatabaseQuery::select("media", "id", "", "ORDER BY id DESC LIMIT 1")["id"];
        if($value){
            echo $value;
        }
        else echo "0";
    }
}

if(isset($_REQUEST["vBtn"])){
    DatabaseQuery::insert("events", "title, type, link", "?, ?, ?", [$_REQUEST["title"], "video", $_REQUEST["link"]]);
    DatabaseQuery::select("events", "id", "", "ORDER BY id DESC LIMIT 1")["id"];
    header("location: ../admin_events.php");
}

if(isset($_REQUEST['edit'])){
    $category = $_REQUEST["category"];
    $title = $_REQUEST["title"];
    $link = $_REQUEST["link"];
    $id = (int)$_REQUEST["id"];
    if(DatabaseQuery::update("media", "category = '$category', title = '$title', link = '$link'", "id = $id")){
        echo "true";
    }
    else{
        echo "false";
    }
}
if(isset($_REQUEST["delete"])){
    $id = str_replace("btn_", "", $_REQUEST["id"]);
    DatabaseQuery::delete("media", "id=$id");
}
if(isset($_REQUEST["upload"])){
    $target_dir = "upload/";
    $filename = $_FILES["file"]["name"];
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    }
// Check if file already exists
    else if (file_exists($target_file)) {
        $uploadOk = 0;
    }
// Check file size
    else if ($_FILES["file"]["size"] > 500000) {
        $uploadOk = 0;
    }
// Allow certain file formats
    else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "false";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            DatabaseQuery::insert("events", "title, type, link", "?, ?, ?", [$filename, "image", ""]);
            $value = DatabaseQuery::select("events", "id", "", "ORDER BY id DESC LIMIT 1")["id"];
            if($value){
                echo $value;
            }
        } else {
            echo "false";
        }
    }
}
if (isset($_REQUEST["deleteImage"])){
    $id = str_replace("div_", "", $_REQUEST["id"]);
    DatabaseQuery::delete("events", "id = $id");
}

if(isset($_REQUEST["logout"])){
    @session_start();
    @session_destroy();
    header("location: ../admin.php");
}

if(isset($_REQUEST["home"])){
    $about = $_REQUEST["about"];
    $quote = $_REQUEST["quote"];
    DatabaseQuery::update("home", "about = '$about', quote = '$quote'", "id = 1");
}

if(isset($_REQUEST["nollywood"])){
    $update = $_REQUEST["update"];
    DatabaseQuery::update("nollywood", "updateField = '$update'", "id = 1");
}

if(isset($_REQUEST["aboutRhoda"])){
    $part1 = $_REQUEST["about1"];
    $part2 = $_REQUEST["about2"];
    $part3 = $_REQUEST["about3"];
    $quote1 = $_REQUEST["quote1"];
    $quote2 = $_REQUEST["quote2"];
    DatabaseQuery::update("about", "about1 = '$part1', about2 = '$part2', about3 = '$part3', quote1 = '$quote1', quote2 = '$quote2'", "id = 1");
}
<?php
include "framework/otherClasses.php";
$r = $_REQUEST;
Session::startSession();
if (isset($r["searchBtn"])) {
    $parameter = $r["parameter"];
    $category = $r["category"];
    $type = $r["type"];

    $Search = new Search($parameter, "name");
    Session::startOneSession("results", $Search->getResultArray());
    //print_r($_SESSION);
    if ($type === "user") header("location: search-result.php");
    elseif ($type === "company") header("location: company_search.php"); elseif ($type === "agent") header("location: agent-search.php");
}


$name = $r["name"];
$dob = $r["dob"];
$gender = $r["gender"];
$postcode = $r["postcode"];
$certificate = $r["certificate_no"];
$search = new Search($name, "name");
$type = "user";
$search->fineTuneSearch(["dob", "gender", "postcode", "certificate_no"], [$dob, $gender, $postcode, $certificate]);
//echo $certificate;
Session::startOneSession("results", $search->getResultArray());
if (isset($r["basic_searchBtn"])) {
    header("location: ../app.php?general-search-matches");
}
else{
    header("location: ../app.php?advanced-search-matches");
}

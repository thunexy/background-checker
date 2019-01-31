<?php

    // Connect to server and select databse.

    $conn = new PDO("mysql:host=localhost; port=3306; dbname=dbs","root","Oyeade1.");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    global $conn;

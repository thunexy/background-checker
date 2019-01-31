<?php
@include('configClass.php');
include('otherFunctions.php');

class Search{

    function __construct($parameter, $category){
        $this->valueToSearch = $parameter;
        $this->searchedResultsArray = [];
        $this->rawArrayKeys = [];
        $this->resultArrayKeys = [];
        $this->finalArrayKeys = [];
        $this->search($category);
    }

    function query($category){
        $resultArray = [];
        if($category == "name") $resultArray = DatabaseQuery::select("basic_profile", "*", "name like '%$this->valueToSearch%'", "m");
        elseif($category == "certificate_no") $resultArray =  DatabaseQuery::select("basic_profile", "*", "certificate_no like '%$this->valueToSearch%'", "m");
        elseif($category == "employer") $resultArray =  DatabaseQuery::select("basic_profile", "*", "employer like '%$this->valueToSearch%'", "m");
        foreach ($resultArray as $key=>$value){
            $this->rawArrayKeys[count($this->rawArrayKeys)] = $value["user_id"];
        }
        $this->rawArrayKeys = array_unique($this->rawArrayKeys, SORT_REGULAR);
        //print_r($this->rawArrayKeys);
        return $this->rawArrayKeys;
    }

    function searchByID($id){
        return DatabaseQuery::select("basic_profile", "*", "user_id='$id'", "s");
    }

    function search($category){
        $array = explode(" ", $this->valueToSearch);
        $resultArray = [];
        for($i = 0; $i < count($array); $i++){
            $this->valueToSearch = $array[$i];
            $resultArray = array_merge($resultArray, $this->query($category));
        }
        return $resultArray;
    }

    function fineTuneSearch($category, $valueToSearch){
        $resultArrayKeys = [];
        $tempArray = [];
        //print_r($this->rawArrayKeys);
        for($i=0; $i < count($category); $i++){
            if($category[$i] == "gender" && $valueToSearch[$i] !== ""){
                $tempArray = (DatabaseQuery::select("basic_profile", "*", "$category[$i]='$valueToSearch[$i]'", "m"));
            }
            elseif($category[$i] == "certificate_no" && $valueToSearch[$i] !== ""){
                $tempArray = (DatabaseQuery::select("basic_profile", "*", "$category[$i]='$valueToSearch[$i]'", "m"));
            }
            elseif($category[$i] !== "" && $valueToSearch[$i] !==""){
                $tempArray = (DatabaseQuery::select("basic_profile", "*", "$category[$i] like '%$valueToSearch[$i]%'", "m"));
            }


            foreach ($tempArray as $key=>$value){
                $resultArrayKeys[count($resultArrayKeys)] = $value["user_id"];
            }


            $mergedArray = array_merge($this->rawArrayKeys, array_unique($resultArrayKeys, SORT_REGULAR));
//        print_r($this->rawArrayKeys);
           // print_r($mergedArray);
 //       print_r($mergedArray);
            //get duplicate values
            $finalArrayKeys = array_unique(array_diff_assoc($mergedArray, array_unique($mergedArray)), SORT_REGULAR);
            //print_r($finalArrayKeys);
            $this->finalArrayKeys = array_unique(array_merge($this->finalArrayKeys, $finalArrayKeys), SORT_REGULAR);
            //print_r($this->finalArrayKeys);


        }

    }

    function getResultArray(){
        //get duplicate values which is the result of the search
        $arrayKeys = $this->finalArrayKeys;
        //print_r($arrayKeys);
        foreach($arrayKeys as $id){
            $this->searchedResultsArray[count($this->searchedResultsArray)] = $this->searchByID($id);
        }
        //print_r($this->searchedResultsArray);
        return $this->searchedResultsArray;
    }

}

class UserInfo{
    function __construct(){

    }
    function displayUserInformation($id){
        return DatabaseQuery::select("basic_profile", "*", "user_id=$id", "s");
    }
}

class Session
{

    function __construct()
    {

    }

    static function startSession()
    { //to start a session
        @session_start();
    }

    static function destroySession()
    { // to destroy all sessions
        @session_destroy();
    }

    static function startOneSession($name, $value)
    { // to store a particular session
        $_SESSION[$name] = $value;
        return $_SESSION[$name];
    }

    static function startStopSession($name)
    {
        echo (isset($_SESSION[$name])) ? $_SESSION[$name] : '';
        self::stopOneSession($name);
    }

    static function stopOneSession($name)
    { // to unset a particular session
        unset($_SESSION[$name]);
    }

    static function sessionValue($name, $key)
    {
        return $_SESSION[$name][$key];
    }

    static function sessionArray($name){
        return $_SESSION[$name];
    }

    static function checkSession($name)
    {
        return isset($_SESSION[$name]) ? : false;
    }
}

class DatabaseQuery
{

    function __construct()
    {

    }

    public static function createDatabase($table)
    {
        global $conn;
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Error Handling
            $sql = "CREATE table $table(
             id INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
             yesterdayWork VARCHAR( 255 ) NOT NULL,
             todayWork  VARCHAR( 255 ) NOT NULL,
             challenges  VARCHAR( 255 ) NOT NULL,
             time  VARCHAR( 255 ) NOT NULL,
             challengesEffect  VARCHAR( 255 ) NOT NULL,
             name  VARCHAR( 255 ) NOT NULL);";
            $conn->exec($sql);
            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

    public static function insert($table, $columns, $notations, $values)
    {
        global $conn;
        try {
            $sql = "INSERT INTO $table ($columns) VALUES($notations)";
            $query = $conn->prepare($sql);
            $query->execute($values);
            return ($query->rowCount() > 0) ? true : false;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public static function update($table, $valueToSet, $whereToSet)
    {
        global $conn;
        try {
            $count = $conn->prepare("update " . $table . " set " . $valueToSet . " where " . $whereToSet);
            $count->execute();
            return ($count->rowCount()) ? true : false;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function select($table, $whatToSelect, $condition, $type)
    {
        global $conn;
        $condition = ($condition == "") ? $condition : "WHERE " . $condition;
        try {

            $sql = "SELECT " . $whatToSelect . " FROM " . $table . " " . $condition;
            $select_query = $conn->query($sql) or die ('No table found');
            if ($type == "s") {
                $sql = "SELECT " . $whatToSelect . " FROM " . $table . " " . $condition;
                $select_query = $conn->query($sql) or die ('No table found');
                return $select_query->fetch(PDO::FETCH_ASSOC);
            } else if ($type == "m") {
                $sql = "SELECT " . $whatToSelect . " FROM " . $table . " " . $condition;
                $select_query = $conn->query($sql) or die ('No table found');
                return $select_query->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $sql = "SELECT " . $whatToSelect . " FROM " . $table . " " . $condition . " " . $type;
                $select_query = $conn->query($sql) or die ('No table found');
                return $select_query->fetch(PDO::FETCH_ASSOC);
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function delete($table, $condition)
    {
        global $conn;
        $sql = "DELETE FROM " . $table . " WHERE $condition";
        $q = $conn->prepare($sql);

        $response = $q->execute();
        return ($response) ? true : false;
    }
}

class Login extends DatabaseQuery
{
    var $encryptedPassword;

    function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    static function isLoggedIn($user)
    {
        return Session::checkSession($user);
    }

    function authenticate($table, $loggedInUrl)
    {
        $status = parent::select("$table", '*', 'email="' . $this->email . '" && password="' . $this->password . '"', 's');
        Session::startSession();
        if ($status["status"] == 1) {
            //print_r($status);

            Session::startOneSession($table, $status);
            header("location: ".$loggedInUrl);
        }
        elseif ($status["status"] !== 1 && count($status) > 1) {
            //print_r($status);
            Session::startOneSession("emailV", $this->email);
            Session::startOneSession("error", "You need to verify your account before you can be granted access.");
            header("location: ../app.php?verify-account");
        }
        else{
            alert("Email or Password not correct.");
            echo "<script> window.location.href = '../app.php?login'; </script>";
        }
    }

    function encryptPassword()
    {
        $encryptedPassword = md5($this->password);
        return $encryptedPassword;
    }

    function failedLogin($session, $value, $url)
    {
        Session::startOneSession($session, $value);
        redirect($url);
    }
}

class Logout{
    function __construct($url){
        $this->logout($url);
    }
    function logout($url){
        Session::startSession();
        Session::destroySession();
        header("location: $url");
    }
}

class SignUp extends DatabaseQuery
{
    function __construct($email, $password)
    {
        $this->password = $password;
        $this->email = $email;
    }

    function encryptPassword()
    {
        $encryptedPassword = md5($this->password);
        return $encryptedPassword;
    }

    function isAccountExists($table){
        return (parent::select($table, "email", "email = '$this->email'", "s")) ? true : false;
    }

    function register($table, $columns, $notations, $values)
    {
        if(!$this->isAccountExists($table)){
            $insertUser = parent::insert($table, $columns, $notations, $values);
            SendEmail::send($values[1], "ACCOUNT VERIFICATION", "Your verification code is: ". $values[6], "wavepalmtechng@gmail.com");
            if($insertUser){
                Session::startSession();
                Session::startOneSession("emailV", $values[1]);
                $this->successfulRegistration("success", "You have successfully registered an account. A verification code was sent to your email address", "verify-account");
            }
        }
        else{
            $this->failedRegistration("error", "User already exists in the database", "../app.php?register");
        }
    }

    function failedRegistration($session, $value, $url)
    {
        alert("User already exists in the database");
        echo "<script> window.location.href = '../app.php?register'; </script>";
        Session::startOneSession($session, $value);
        //redirect($url);
    }

    function successfulRegistration($session, $value, $url)
    {
        alert("You have successfully registered an account. A verification code was sent to your email");
        echo "<script> window.location.href = '../app.php?verify-account'; </script>";
        Session::startOneSession($session, $value);
        //redirect($url);
    }
}

class SendEmail
{
    static function send($to, $subject, $message, $from)
    {
        $headers = $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: DBS <' . $from . ">\r\n" .
            'Reply-To: info@dbs.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (@mail($to, $subject, $message, $headers)) {
            return true;
        } else {
            return false;
        }

    }
}

class verifyContact extends DatabaseQuery
{
    function __construct()
    {
    }

    static function verifyAccount($email, $code)
    {
        $databaseCode = parent::select('users', '*', 'email="' . $email . '"', 's');
        if ($databaseCode['verification_code'] == $code) {
            parent::update('users', "status=1", "email='" . $email . "'");
            unset($_SESSION["emailV"]);
            echo '<script language="javascript">window.alert("Verification successful."); window.location.href = "../app.php?login";</script>';

        } else {
            echo '<script language="javascript">window.alert("The verification code entered is incorrect."); window.location.href = "../app.php?verify-account";</script>';
        }
    }
}
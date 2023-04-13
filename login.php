<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finance";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn) {
    echo"Succesfull connection<br>";
}

if (isset($_POST['submit'])) {
    # code...

$accountNo = $_POST['accountNo'] ;
$pin = $_POST['pin'];

if ($pin == 5077 && $accountNo == 111122223333 ) {
    echo "Welcome Back Mr Khomotso Kekana";
} else {
    echo "Incorrect Details";
}

}

?>
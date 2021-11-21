 <?php

session_start();

        $user="id17956073_imriaz";
        $password="F\!V/nD]3hEIdW8C";
        $db="id17956073_vaccinationc";


$dblink = mysqli_connect("localhost", $user ,$password, $db);
/* If connection fails throw an error */
if (mysqli_connect_errno()) {
    echo "Could  not connect with database: Error: ".mysqli_connect_error();
    exit();
}


$sqlquery = "SELECT Guardian_Phone FROM child";
if ($result = mysqli_query($dblink, $sqlquery)) {
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
    $Guardian_Phone = $row["Guardian_Phone"];
    $to = "$Guardian_Phone, $to";
    }
}  

$token = "c3668aa34a9179ef5b5a2902482cf81d";
//$message = "Test SMS From Using API by Imriaz";
$message=$_POST['message'];

$url = "http://api.greenweb.com.bd/api2.php";

$data= array(
'to'=>"$to",
'message'=>"$message",
'token'=>"$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

//Result
echo $smsresult;

//Error Display
echo curl_error($ch);

?>








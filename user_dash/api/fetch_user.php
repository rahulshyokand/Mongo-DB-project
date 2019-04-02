 <?php
session_start();
 if(isset($_SESSION['email'])){
 include '../../config.php';
  $email=$_SESSION['email'] ;
 $collection = $db->user_account ;
 $qry = array("email" => $email);
 $cursor = $collection->find($qry);
$arr = $cursor->toArray() ;
return $arr ;
//print_r($arr) ;
}
else {
  echo'<script> window.location.replace("../page-login.html");</script>';
}

// fetching an object to array and accessing allthe elements on documnet
 //echo $arr[0]['name'] ;
//echo $a[]["email"] ;
//
// foreach ($cursor as $obj) {
//   echo "email :" . $obj["email"] ;
//   echo "<br>";
//   echo "name :" . $obj["name"] ;
//   echo "<br>";
//   echo "password :" . $obj["password"] ;
//   echo "<br>";
//   echo "contact:" . $obj["contact"] ;
//     echo "<br>";
// }

 ?>

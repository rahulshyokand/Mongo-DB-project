 <?php
 session_start();
 include 'config.php';
 $data=array();

 if(isset($_SESSION['email']))
 {
 	$email=$_SESSION['email'];
 	$sql="SELECT * FROM users where email=$email";
 	$result = $conn->query($sql);
 	if($result->num_rows>0)
 	{
 		while ($row=$result->fetch_assoc()) {
 			array_push($data, $row);
 		}
 	}
 	echo json_encode($data);
 }
 else
 {
  echo '<script>window.location.href = '../page-login.html' </script>';
 	//$data = array(array('email' => "error"));
 	//echo json_encode($data);
 }
 ?>

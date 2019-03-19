<?php
$conn = ssh2_connect('192.168.43.114', 22);
ssh2_auth_password($conn, 'pi', 'shyokand');


 ?>



<?php
// function uploadFTP($server, $username, $password, $local_file, $remote_file){
//     // connect to server
//     $connection = ftp_connect($server);
//
//     // login
//     if (@ftp_login($connection, $username, $password)){
//         // successfully connected
//         echo "es";
//     }else{
//         return false;
//     }
//
//     ftp_put($connection, $remote_file, $local_file, FTP_BINARY);
//     ftp_close($connection);
//     return true;
// }
//
// uploadFTP("192.168.43.114", "pi", "shyokand", "C:/Users/Rahul Shyokand/Desktop/Pics/set.jpg", "/home/pi/Desktop/pi/set.jpg");

// $server = '192.168.43.114';
// $ftp_user_name = 'pi';
// $ftp_user_pass = 'shyokand';
//
// $connection = ftp_connect($server);
//
//
// $login = ftp_login($connection, $ftp_user_name, $ftp_user_pass);
//
// if (!$connection || !$login) { die('Connection attempt failed!'); }
//
// // $upload = ftp_put($connection, $dest, $source, $mode);
// //
// // if (!$upload) { echo 'FTP upload failed!'; }
//
// ftp_close($connection);
?>

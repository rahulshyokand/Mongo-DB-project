<?php
session_start();

if (isset($_POST['email'])) {

    include_once 'config.php';

    if (isset($_POST['token']))
    {
       $data = array();
       $email = $_POST['email'];
       $token = $_POST['token'];
       $sql="SELECT * FROM users where token='$token' AND email='$email'";
       $result = $conn->query($sql);
       if($result->num_rows>0)
        {
           $sql="UPDATE users set varification=1, token='' WHERE token='$token'";
           if($conn->query($sql) === true)
           {
             $data = array(array('email' => "verified"));
           }
       }
       else
       {
        $data = array(array('email' => "error"));
       }
       echo json_encode($data);
    }
    else
    {
        $data = array();
        $email = $_POST['email'];

        $password = md5($_POST['password']);
        $sql = "SELECT * FROM users where email = '$email' AND password='$password'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                if ($row['varification'] != 1) {
                    $token = mt_rand(100000, 999999);
                    $sql   = "update users set token='$token' where email='$email'";
                    if ($conn->query($sql) === true) {
                        $to      = $email;
                        $subject = "Confim Email - Wilyer";
                        $body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                        <!-- If you delete this meta tag, Half Life 3 will never be released. -->
                        <meta name="viewport" content="width=device-width" />

                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        <title>Confim Email - Wilyer</title>

                        <style>
                        *,.collapse{padding:0}.btn,.social .soc-btn{text-align:center;font-weight:700}.btn,ul.sidebar li a{text-decoration:none;cursor:pointer}.container,table.footer-wrap{clear:both!important}*{margin:0;font-family:"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif}img{max-width:100%}body{-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;width:100%!important;height:100%}.content table,table.body-wrap,table.footer-wrap,table.head-wrap{width:100%}a{color:#2BA6CB}.btn{color:#FFF;background-color:#666;padding:10px 16px;margin-right:10px;display:inline-block}p.callout{padding:15px;background-color:#ECF8FF;margin-bottom:15px}.callout a{font-weight:700;color:#2BA6CB}table.social{background-color:#ebebeb}.social .soc-btn{padding:3px 7px;font-size:12px;margin-bottom:10px;text-decoration:none;color:#FFF;display:block}a.fb{background-color:#3B5998!important}a.tw{background-color:#1daced!important}a.gp{background-color:#DB4A39!important}a.ms{background-color:#000!important}.sidebar .soc-btn{display:block;width:100%}.header.container table td.logo{padding:15px}.header.container table td.label{padding:15px 15px 15px 0}.footer-wrap .container td.content p{border-top:1px solid #d7d7d7;padding-top:15px;font-size:10px;font-weight:700}h1,h2{font-weight:200}h1,h2,h3,h4,h5,h6{font-family:HelveticaNeue-Light,"Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;line-height:1.1;margin-bottom:15px;color:#000}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small{font-size:60%;color:#6f6f6f;line-height:0;text-transform:none}h1{font-size:44px}h2{font-size:37px}h3,h4{font-weight:500}h3{font-size:27px}h4{font-size:23px}h5,h6{font-weight:900}h5{font-size:17px}h6,p,ul{font-size:14px}h6{text-transform:uppercase;color:#444}.collapse{margin:0!important}p,ul{margin-bottom:10px;font-weight:400;line-height:1.6}p.lead{font-size:17px}p.last{margin-bottom:0}ul li{margin-left:5px;list-style-position:inside}ul.sidebar li,ul.sidebar li a{display:block;margin:0}ul.sidebar{background:#ebebeb;display:block;list-style-type:none}ul.sidebar li a{color:#666;padding:10px 16px;border-bottom:1px solid #777;border-top:1px solid #FFF}.column tr td,.content{padding:15px}ul.sidebar li a.last{border-bottom-width:0}ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p{margin-bottom:0!important}.container{display:block!important;max-width:600px!important;margin:0 auto!important}.content{max-width:600px;margin:0 auto;display:block}.column{width:300px;float:left}.column-wrap{padding:0!important;margin:0 auto;max-width:600px!important}.column table{width:100%}.social .column{width:280px;min-width:279px;float:left}.clear{display:block;clear:both}@media only screen and (max-width:600px){a[class=btn]{display:block!important;margin-bottom:10px!important;background-image:none!important;margin-right:0!important}div[class=column]{width:auto!important;float:none!important}table.social div[class=column]{width:auto!important}}
                        input[type=text], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                }
                        </style>
                        </head>

                        <body bgcolor="#FFFFFF">

                        <!-- HEADER -->
                        <table class="head-wrap" bgcolor="#999999">
                        <tr>
                        <td></td>
                        <td class="header container" >

                          <div class="content">
                          <table bgcolor="#999999">
                            <tr>
                              <td><h2 style="color:white">Wilyer</h2></td>
                            </tr>
                          </table>
                          </div>

                        </td>
                        <td></td>
                        </tr>
                        </table><!-- /HEADER -->

                        <!-- BODY -->
                        <table class="body-wrap">
                        <tr>
                        <td></td>
                        <td class="container" bgcolor="#FFFFFF">

                        <div class="content">
                        <table>
                          <tr>
                            <td>
                            <h3>Hello, ' . strip_tags($row['name']) . '</h3>

                              <p class="lead"></p>
                              <!-- Callout Panel -->
                              <p class="callout">
                              Thank you for using Wilyer services. Your confirmation code is:<br>
                              <font size="8">' . $token . '</font>
                              </p><!-- /Callout Panel -->
                            </td>
                          </tr>
                        </table>
                        </div><!-- /content -->
                        </td>
                        <td></td>
                        </tr>
                        </table><!-- /BODY -->

                        </body>
                        </html> ' ;
                        $headers  = 'From: Wilyer noreply@wilyer.com' . "\r\n";
                        $headers .= 'Reply-To: ' . $email . "\r\n";
                        $headers .= 'X-Mailer: PHP/' . phpversion();
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

                        if (mail($to, $subject, $body, $headers)) {
                            $data = array(
                                array(
                                    'email' => "un-varified"
                                )
                            );
                        } else
                            echo 3;
                    }

                } else if ($row['status'] != 1) {

                    $data = array(
                        array(
                            'email' => "un-active"
                        )
                    );

                }

                else if ($row['varification'] == 1 && $row['status'] == 1) {

                    array_push($data, $row);
                //    $_SESSION['id']=$row['email'];
                  //  $_SESSION['user'] = $row['id'];
                }
            }
        } else {
            $data = array(
                array(
                    'email' => "error"
                )
            );
        }

        echo json_encode($data);
    }
}
?>

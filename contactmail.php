<?php
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  date_default_timezone_set("Asia/Calcutta");
  $h_email = isset($_POST["h_email"]) ? $_POST["h_email"] : "";

  if ( empty($h_email) ){
    // echo 1;
    echo json_encode(array(0 => "validation"));
    exit;
  }
  $to = 'sunil@raretexsource.com';

  // if ($h_capchaans !== $h_capchaques) {
  //   // echo 2;
  //   echo json_encode(array(0 => "capcha"));
  //   exit;
  // } else {

    //$to = 'info@blazon.in';
    $subject = "Newsletter Form from Raretex Fashions Website";
    $headers = "From: no-reply@sunil@raretexsource.com\r\n";
    $headers .= "Reply-To:  sunil@raretexsource.com\r\n";
    $headers .= "BCC: karthikeyanv@blazon.in \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $msg = "<table width=70% border=0 cellspacing=0 cellpadding=0>  
  
    <tr>
    <td valign=top>Email</td>
    <td valign=top>:</td>
    <td valign=top>" . $h_email . "</td>
  </tr>  
  </table>";

    $result = mail($to, $subject, $msg, $headers);

    if ($result) {
      // echo 3;
      echo json_encode(array(0 => "success"));
      exit;
    } else {
      // echo 4;
      echo json_encode(array(0 => "tryagain"));
      exit;
    }



    // echo 5;
    echo json_encode(array(0 => "tryagain"));
    exit(0);
  // };
};

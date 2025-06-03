<?php
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  date_default_timezone_set("Asia/Calcutta");
  $h_lettermail = isset($_POST["h_lettermail"]) ? $_POST["h_lettermail"] : "";
  // $h_phone = isset($_POST["h_phone"]) ? $_POST["h_phone"] : "";
  // $h_email = isset($_POST["h_email"]) ? $_POST["h_email"] : "";
  // $h_mainsubject = isset($_POST["h_mainsubject"]) ? $_POST["h_mainsubject"] : "";
  // $h_organization = isset($_POST["h_organization"]) ? $_POST["h_organization"] : "";
  // $h_message = isset($_POST["h_message"]) ? $_POST["h_message"] : "";

  if (empty($h_lettermail)) {
    // echo 1;
    echo json_encode(array(0 => "validation"));
    exit;
  }
  $to = 'info@pressoms.com';




  // if ($h_capchaans !== $h_capchaques) {
  //   // echo 2;
  //   echo json_encode(array(0 => "capcha"));
  //   exit;
  // } else {

    //$to = 'info@blazon.in';
    $subject = "Enquiry from Presso Website News Letter Form";
    $headers = "From: no-reply@info@pressoms.com\r\n";
    $headers .= "Reply-To:  info@pressoms.com\r\n";
    $headers .= "BCC: marketing@pressoms.com \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $msg = "<table width=70% border=0 cellspacing=0 cellpadding=0>  
    <tr>
      <td valign=top>News Letter Email</td>
      <td valign=top>:</td>
      <td valign=top>" . $h_lettermail . "</td>
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

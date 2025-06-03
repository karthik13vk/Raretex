<?php
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  date_default_timezone_set("Asia/Calcutta");
  $h_name = isset($_POST["h_name"]) ? $_POST["h_name"] : "";
  $h_email = isset($_POST["h_email"]) ? $_POST["h_email"] : "";
  $h_phone = isset($_POST["h_phone"]) ? $_POST["h_phone"] : "";
  $h_subject = isset($_POST["h_subject"]) ? $_POST["h_subject"] : "";
  $h_productid = isset($_POST["h_productid"]) ? $_POST["h_productid"] : "";
  $h_quantity = isset($_POST["h_quantity"]) ? $_POST["h_quantity"] : "";
  $h_message = isset($_POST["h_message"]) ? $_POST["h_message"] : "";

  if (empty($h_name) ||  empty($h_phone) || empty($h_email) ||  empty($h_subject)   ||  empty($h_productid) || empty($h_quantity)   ||  empty($h_message) ){
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
    $subject = "Enquiry Form from Rare Tex Fashions Website";
    $headers = "From: no-reply@sunil@raretexsource.com\r\n";
    $headers .= "Reply-To:  sunil@raretexsource.com\r\n";
    $headers .= "BCC: karthikeyanv@blazon.in \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $msg = "<table width=70% border=0 cellspacing=0 cellpadding=0>  
    <tr>
      <td valign=top>Name</td>
      <td valign=top>:</td>
      <td valign=top>" . $h_name . "</td>
    </tr>
    <tr>
    <td valign=top>Phone</td>
    <td valign=top>:</td> 
    <td valign=top>" . $h_phone . "</td>
  </tr>
    <tr>
    <td valign=top>Email</td>
    <td valign=top>:</td>
    <td valign=top>" . $h_email . "</td>
  </tr>   
    <tr>
    <td valign=top>Subject</td>
    <td valign=top>:</td>
    <td valign=top>" . $h_subject . "</td>
  </tr>   
    <tr>
    <td valign=top>Product</td>
    <td valign=top>:</td>
    <td valign=top>" . $h_productid . "</td>
  </tr>   
    <tr>
    <td valign=top>Quantity</td>
    <td valign=top>:</td>
    <td valign=top>" . $h_quantity . "</td>
  </tr>   
    <tr>
      <td valign=top>Message</td>
      <td valign=top>:</td> 
      <td valign=top>" . $h_message . "</td>
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

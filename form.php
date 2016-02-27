<?PHP
  // form handler
  if($_POST && isset($_POST['first_name'], $_POST['email']) {

    $name = $_POST['first_name'];
    $email = $_POST['email'];
  

    if(!$name) {
      $errorMsg = "Please enter your Name";
    } else {
      // send email and redirect
      $message = "Dear ".$name.",\r\n We have recieved your Application! We are currently in the process of reviewing and will get back to you asap! \r\n Thanks, \r\n The Team at TiffMom.com "
      $subject = "Application Submitted!";
      $headers = "From: jobs@tiffmom.com" . "\r\n";
      mail($email, $subject, $message, $headers);
      header("Location: http://www.example.com/thankyou.html");
      exit;
    }

  }
?>
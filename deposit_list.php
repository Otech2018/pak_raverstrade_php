<?php include('settings.php');


if (!loggedin()) {

  echo "<script> window.location.replace(\"login.php\"); </script>";
}





include('data.php');

if (isset($_POST['invest_btn'])) {

  $fund_amt = addslashes(htmlentities($_POST['amount']));



  $max_amt = 9999999999999999999999999999;
  $roi = $fund_amt  * 1.65;
  $package = "PLATINUM";
  $coin = "65%";





  if (is_numeric($fund_amt)) {

    if ($fund_amt < $min_amt ||  $fund_amt > $max_amt) {
      echo "<script>alert(\"Invalid Amount, Minimum Amoutn is $ $min_amt \"); 
            window.location.replace(\"deposit_list.php\"); </script>";
    } else {


      if ($fund_amt <= $bal) {

        $tran_pop = $package;
        $daily_p = $roi / 30;
        $tran_invoice = "INV-" . date('hismY');
        $daily_p = number_format($daily_p, 4);

        $qw = "INSERT into transaction set tran_user_id='$user_id',  tran_email='$user_email',
                 tran_username='$user_name', tran_desc='INVESTMENT', trant_amt='$fund_amt', 
                 tran_status='ACTIVE', tran_date='$reg_Date', start_tran_date='$reg_Date', 
                 tran_exp_date='$deposite_exp_date', tran_roi='$roi',
                 tran_daily_growth='$daily_p',tran_invoice='$tran_invoice',tran_dep_name='$package',
                 tran_withdraw_amt='0', coin='$coin' ";

        $deposite_user = new run_query("Update users set bal=bal-$fund_amt where user_id='$user_id' ");
        $deposite_run = new run_query($qw);
        //referral Bonus
        $gen_1 = $fund_amt * 0.1;
        if ($user_referrer != '') {
          $ref_bon_query  = new run_query("SELECT * FROM user_ref where user_ref_email='$user_name'  ");

          $ref_bon_query_dta =    $ref_bon_query->result();

          extract($ref_bon_query_dta);

          $gen1_query  = new run_query(" update `users` SET user_ref_bonus = user_ref_bonus + $gen_1 WHERE user_name='$gen1_email' ");

          $site_email_send = "info@raverstrade.com";
          $welcome_email_subject = "New Investment of $ $fund_amt | <?=$site_name; ?>";
          $welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
          $welcome_email_headers .= "From: <$site_email>";


          $welcome_email_body = "
    
        <html>
        <head>
            <title> Dear $user_name, </title>
        </head>
        <body>
         <b>Hello, $user_name<b> <br/>We believe this email meet you well.
        <h2> New Investment of $ $fund_amt  
         with the following  Details </h2>
        <b> TRANSACTION ID: $tran_invoice <br/>
        <hr/>
        For enquiries, <br/>
        Contact us on <br/>
    
        <b>
        $site_email <br/>
    
        $site_phone <br/>
        </b>
        Visit us on <br/>
    
        https://$site_link <br/><br/><br/>
    
        Regards,  $site_name.
        </body>
        </html>
    
        ";

          mail($user_email, $welcome_email_subject, $welcome_email_body, $welcome_email_headers);
        }
        echo "<script>alert(\"Investment Started Successfully!!!\");
        
        window.location.replace(\"deposit_list.php\"); </script>";
      } else {
        echo "<script>alert(\"Insuficient Amount, You do not have enough money for this Investment!!!\"); 
        window.location.replace(\"deposit_list.php\"); </script>";
      }
    }
  } else {
    echo "<script>alert(\"Invalid Amount, Please Use Only Numbers !!!\"); window.location.replace(\"deposit_list.php\"); </script>";
  }
}


?>





<!DOCTYPE html>
<html class="dark-theme" style="height: 100%;" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
  <!--plugins-->
  <link href="deposit_list_files/simplebar.css" rel="stylesheet">
  <link href="deposit_list_files/perfect-scrollbar.css" rel="stylesheet">
  <link href="deposit_list_files/metisMenu.css" rel="stylesheet">
  <link href="deposit_list_files/jquery-jvectormap-2.css" rel="stylesheet">
  <link href="deposit_list_files/highcharts.css" rel="stylesheet">
  <!-- loader-->
  <link href="deposit_list_files/pace.css" rel="stylesheet">
  <script src="deposit_list_files/pace.js"></script>
  <!-- Bootstrap CSS -->
  <link href="deposit_list_files/bootstrap.css" rel="stylesheet">
  <link href="deposit_list_files/css2.css" rel="stylesheet">
  <link href="deposit_list_files/app.css" rel="stylesheet">
  <link href="deposit_list_files/icons.css" rel="stylesheet">
  <!-- Theme Style CSS -->
  <link rel="stylesheet" href="deposit_list_files/dark-theme.css">
  <link rel="stylesheet" href="deposit_list_files/semi-dark.css">
  <link rel="stylesheet" href="deposit_list_files/header-colors.css">
  <link rel="stylesheet" href="deposit_list_files/card.css">


  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
  <link href="assets/css/app.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">



  <link href="deposit_list_files/sweetalert2.css" rel="stylesheet">
  <script src="deposit_list_files/sweetalert2.js"></script>
  <style>
    .swal2-popup.swal2-toast {
      flex-direction: row;
      align-items: center;
      width: auto;
      padding: .625em;
      overflow-y: hidden;
      background: #fff;
      box-shadow: 0 0 .625em #d9d9d9
    }

    .swal2-popup.swal2-toast .swal2-header {
      flex-direction: row;
      padding: 0
    }

    .swal2-popup.swal2-toast .swal2-title {
      flex-grow: 1;
      justify-content: flex-start;
      margin: 0 .6em;
      font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-footer {
      margin: .5em 0 0;
      padding: .5em 0 0;
      font-size: .8em
    }

    .swal2-popup.swal2-toast .swal2-close {
      position: static;
      width: .8em;
      height: .8em;
      line-height: .8
    }

    .swal2-popup.swal2-toast .swal2-content {
      justify-content: flex-start;
      padding: 0;
      font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-icon {
      width: 2em;
      min-width: 2em;
      height: 2em;
      margin: 0
    }

    .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
      display: flex;
      align-items: center;
      font-size: 1.8em;
      font-weight: 700
    }

    @media all and (-ms-high-contrast:none),
    (-ms-high-contrast:active) {
      .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
        font-size: .25em
      }
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
      top: .875em;
      width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
      left: .3125em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
      right: .3125em
    }

    .swal2-popup.swal2-toast .swal2-actions {
      flex-basis: auto !important;
      width: auto;
      height: auto;
      margin: 0 .3125em;
      padding: 0
    }

    .swal2-popup.swal2-toast .swal2-styled {
      margin: 0 .3125em;
      padding: .3125em .625em;
      font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-styled:focus {
      box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-popup.swal2-toast .swal2-success {
      border-color: #a5dc86
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
      position: absolute;
      width: 1.6em;
      height: 3em;
      transform: rotate(45deg);
      border-radius: 50%
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
      top: -.8em;
      left: -.5em;
      transform: rotate(-45deg);
      transform-origin: 2em 2em;
      border-radius: 4em 0 0 4em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
      top: -.25em;
      left: .9375em;
      transform-origin: 0 1.5em;
      border-radius: 0 4em 4em 0
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      top: 0;
      left: .4375em;
      width: .4375em;
      height: 2.6875em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
      height: .3125em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
      top: 1.125em;
      left: .1875em;
      width: .75em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
      top: .9375em;
      right: .1875em;
      width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
      -webkit-animation: swal2-toast-animate-success-line-tip .75s;
      animation: swal2-toast-animate-success-line-tip .75s
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
      -webkit-animation: swal2-toast-animate-success-line-long .75s;
      animation: swal2-toast-animate-success-line-long .75s
    }

    .swal2-popup.swal2-toast.swal2-show {
      -webkit-animation: swal2-toast-show .5s;
      animation: swal2-toast-show .5s
    }

    .swal2-popup.swal2-toast.swal2-hide {
      -webkit-animation: swal2-toast-hide .1s forwards;
      animation: swal2-toast-hide .1s forwards
    }

    .swal2-container {
      display: flex;
      position: fixed;
      z-index: 1060;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      padding: .625em;
      overflow-x: hidden;
      transition: background-color .1s;
      -webkit-overflow-scrolling: touch
    }

    .swal2-container.swal2-backdrop-show,
    .swal2-container.swal2-noanimation {
      background: rgba(0, 0, 0, .4)
    }

    .swal2-container.swal2-backdrop-hide {
      background: 0 0 !important
    }

    .swal2-container.swal2-top {
      align-items: flex-start
    }

    .swal2-container.swal2-top-left,
    .swal2-container.swal2-top-start {
      align-items: flex-start;
      justify-content: flex-start
    }

    .swal2-container.swal2-top-end,
    .swal2-container.swal2-top-right {
      align-items: flex-start;
      justify-content: flex-end
    }

    .swal2-container.swal2-center {
      align-items: center
    }

    .swal2-container.swal2-center-left,
    .swal2-container.swal2-center-start {
      align-items: center;
      justify-content: flex-start
    }

    .swal2-container.swal2-center-end,
    .swal2-container.swal2-center-right {
      align-items: center;
      justify-content: flex-end
    }

    .swal2-container.swal2-bottom {
      align-items: flex-end
    }

    .swal2-container.swal2-bottom-left,
    .swal2-container.swal2-bottom-start {
      align-items: flex-end;
      justify-content: flex-start
    }

    .swal2-container.swal2-bottom-end,
    .swal2-container.swal2-bottom-right {
      align-items: flex-end;
      justify-content: flex-end
    }

    .swal2-container.swal2-bottom-end>:first-child,
    .swal2-container.swal2-bottom-left>:first-child,
    .swal2-container.swal2-bottom-right>:first-child,
    .swal2-container.swal2-bottom-start>:first-child,
    .swal2-container.swal2-bottom>:first-child {
      margin-top: auto
    }

    .swal2-container.swal2-grow-fullscreen>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-self: stretch;
      justify-content: center
    }

    .swal2-container.swal2-grow-row>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center
    }

    .swal2-container.swal2-grow-column {
      flex: 1;
      flex-direction: column
    }

    .swal2-container.swal2-grow-column.swal2-bottom,
    .swal2-container.swal2-grow-column.swal2-center,
    .swal2-container.swal2-grow-column.swal2-top {
      align-items: center
    }

    .swal2-container.swal2-grow-column.swal2-bottom-left,
    .swal2-container.swal2-grow-column.swal2-bottom-start,
    .swal2-container.swal2-grow-column.swal2-center-left,
    .swal2-container.swal2-grow-column.swal2-center-start,
    .swal2-container.swal2-grow-column.swal2-top-left,
    .swal2-container.swal2-grow-column.swal2-top-start {
      align-items: flex-start
    }

    .swal2-container.swal2-grow-column.swal2-bottom-end,
    .swal2-container.swal2-grow-column.swal2-bottom-right,
    .swal2-container.swal2-grow-column.swal2-center-end,
    .swal2-container.swal2-grow-column.swal2-center-right,
    .swal2-container.swal2-grow-column.swal2-top-end,
    .swal2-container.swal2-grow-column.swal2-top-right {
      align-items: flex-end
    }

    .swal2-container.swal2-grow-column>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center
    }

    .swal2-container.swal2-no-transition {
      transition: none !important
    }

    .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
      margin: auto
    }

    @media all and (-ms-high-contrast:none),
    (-ms-high-contrast:active) {
      .swal2-container .swal2-modal {
        margin: 0 !important
      }
    }

    .swal2-popup {
      display: none;
      position: relative;
      box-sizing: border-box;
      flex-direction: column;
      justify-content: center;
      width: 32em;
      max-width: 100%;
      padding: 1.25em;
      border: none;
      border-radius: 5px;
      background: #fff;
      font-family: inherit;
      font-size: 1rem
    }

    .swal2-popup:focus {
      outline: 0
    }

    .swal2-popup.swal2-loading {
      overflow-y: hidden
    }

    .swal2-header {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0 1.8em
    }

    .swal2-title {
      position: relative;
      max-width: 100%;
      margin: 0 0 .4em;
      padding: 0;
      color: #595959;
      font-size: 1.875em;
      font-weight: 600;
      text-align: center;
      text-transform: none;
      word-wrap: break-word
    }

    .swal2-actions {
      display: flex;
      z-index: 1;
      box-sizing: border-box;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      width: 100%;
      margin: 1.25em auto 0;
      padding: 0 1.6em
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
      opacity: .4
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
      background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
    }

    .swal2-actions:not(.swal2-loading) .swal2-styled:active {
      background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
    }

    .swal2-loader {
      display: none;
      align-items: center;
      justify-content: center;
      width: 2.2em;
      height: 2.2em;
      margin: 0 1.875em;
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      border-width: .25em;
      border-style: solid;
      border-radius: 100%;
      border-color: #2778c4 transparent #2778c4 transparent
    }

    .swal2-styled {
      margin: .3125em;
      padding: .625em 2em;
      box-shadow: none;
      font-weight: 500
    }

    .swal2-styled:not([disabled]) {
      cursor: pointer
    }

    .swal2-styled.swal2-confirm {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #2778c4;
      color: #fff;
      font-size: 1.0625em
    }

    .swal2-styled.swal2-deny {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #d14529;
      color: #fff;
      font-size: 1.0625em
    }

    .swal2-styled.swal2-cancel {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #757575;
      color: #fff;
      font-size: 1.0625em
    }

    .swal2-styled:focus {
      outline: 0;
      box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-styled::-moz-focus-inner {
      border: 0
    }

    .swal2-footer {
      justify-content: center;
      margin: 1.25em 0 0;
      padding: 1em 0 0;
      border-top: 1px solid #eee;
      color: #545454;
      font-size: 1em
    }

    .swal2-timer-progress-bar-container {
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
      height: .25em;
      overflow: hidden;
      border-bottom-right-radius: 5px;
      border-bottom-left-radius: 5px
    }

    .swal2-timer-progress-bar {
      width: 100%;
      height: .25em;
      background: rgba(0, 0, 0, .2)
    }

    .swal2-image {
      max-width: 100%;
      margin: 1.25em auto
    }

    .swal2-close {
      position: absolute;
      z-index: 2;
      top: 0;
      right: 0;
      align-items: center;
      justify-content: center;
      width: 1.2em;
      height: 1.2em;
      padding: 0;
      overflow: hidden;
      transition: color .1s ease-out;
      border: none;
      border-radius: 5px;
      background: 0 0;
      color: #ccc;
      font-family: serif;
      font-size: 2.5em;
      line-height: 1.2;
      cursor: pointer
    }

    .swal2-close:hover {
      transform: none;
      background: 0 0;
      color: #f27474
    }

    .swal2-close:focus {
      outline: 0;
      box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-close::-moz-focus-inner {
      border: 0
    }

    .swal2-content {
      z-index: 1;
      justify-content: center;
      margin: 0;
      padding: 0 1.6em;
      color: #545454;
      font-size: 1.125em;
      font-weight: 400;
      line-height: normal;
      text-align: center;
      word-wrap: break-word
    }

    .swal2-checkbox,
    .swal2-file,
    .swal2-input,
    .swal2-radio,
    .swal2-select,
    .swal2-textarea {
      margin: 1em auto
    }

    .swal2-file,
    .swal2-input,
    .swal2-textarea {
      box-sizing: border-box;
      width: 100%;
      transition: border-color .3s, box-shadow .3s;
      border: 1px solid #d9d9d9;
      border-radius: .1875em;
      background: inherit;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
      color: inherit;
      font-size: 1.125em
    }

    .swal2-file.swal2-inputerror,
    .swal2-input.swal2-inputerror,
    .swal2-textarea.swal2-inputerror {
      border-color: #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important
    }

    .swal2-file:focus,
    .swal2-input:focus,
    .swal2-textarea:focus {
      border: 1px solid #b4dbed;
      outline: 0;
      box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
    }

    .swal2-file::-moz-placeholder,
    .swal2-input::-moz-placeholder,
    .swal2-textarea::-moz-placeholder {
      color: #ccc
    }

    .swal2-file:-ms-input-placeholder,
    .swal2-input:-ms-input-placeholder,
    .swal2-textarea:-ms-input-placeholder {
      color: #ccc
    }

    .swal2-file::placeholder,
    .swal2-input::placeholder,
    .swal2-textarea::placeholder {
      color: #ccc
    }

    .swal2-range {
      margin: 1em auto;
      background: #fff
    }

    .swal2-range input {
      width: 80%
    }

    .swal2-range output {
      width: 20%;
      color: inherit;
      font-weight: 600;
      text-align: center
    }

    .swal2-range input,
    .swal2-range output {
      height: 2.625em;
      padding: 0;
      font-size: 1.125em;
      line-height: 2.625em
    }

    .swal2-input {
      height: 2.625em;
      padding: 0 .75em
    }

    .swal2-input[type=number] {
      max-width: 10em
    }

    .swal2-file {
      background: inherit;
      font-size: 1.125em
    }

    .swal2-textarea {
      height: 6.75em;
      padding: .75em
    }

    .swal2-select {
      min-width: 50%;
      max-width: 100%;
      padding: .375em .625em;
      background: inherit;
      color: inherit;
      font-size: 1.125em
    }

    .swal2-checkbox,
    .swal2-radio {
      align-items: center;
      justify-content: center;
      background: #fff;
      color: inherit
    }

    .swal2-checkbox label,
    .swal2-radio label {
      margin: 0 .6em;
      font-size: 1.125em
    }

    .swal2-checkbox input,
    .swal2-radio input {
      margin: 0 .4em
    }

    .swal2-input-label {
      display: flex;
      justify-content: center;
      margin: 1em auto
    }

    .swal2-validation-message {
      display: none;
      align-items: center;
      justify-content: center;
      margin: 0 -2.7em;
      padding: .625em;
      overflow: hidden;
      background: #f0f0f0;
      color: #666;
      font-size: 1em;
      font-weight: 300
    }

    .swal2-validation-message::before {
      content: "!";
      display: inline-block;
      width: 1.5em;
      min-width: 1.5em;
      height: 1.5em;
      margin: 0 .625em;
      border-radius: 50%;
      background-color: #f27474;
      color: #fff;
      font-weight: 600;
      line-height: 1.5em;
      text-align: center
    }

    .swal2-icon {
      position: relative;
      box-sizing: content-box;
      justify-content: center;
      width: 5em;
      height: 5em;
      margin: 1.25em auto 1.875em;
      border: .25em solid transparent;
      border-radius: 50%;
      font-family: inherit;
      line-height: 5em;
      cursor: default;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .swal2-icon .swal2-icon-content {
      display: flex;
      align-items: center;
      font-size: 3.75em
    }

    .swal2-icon.swal2-error {
      border-color: #f27474;
      color: #f27474
    }

    .swal2-icon.swal2-error .swal2-x-mark {
      position: relative;
      flex-grow: 1
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
      display: block;
      position: absolute;
      top: 2.3125em;
      width: 2.9375em;
      height: .3125em;
      border-radius: .125em;
      background-color: #f27474
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
      left: 1.0625em;
      transform: rotate(45deg)
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
      right: 1em;
      transform: rotate(-45deg)
    }

    .swal2-icon.swal2-error.swal2-icon-show {
      -webkit-animation: swal2-animate-error-icon .5s;
      animation: swal2-animate-error-icon .5s
    }

    .swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
      -webkit-animation: swal2-animate-error-x-mark .5s;
      animation: swal2-animate-error-x-mark .5s
    }

    .swal2-icon.swal2-warning {
      border-color: #facea8;
      color: #f8bb86
    }

    .swal2-icon.swal2-info {
      border-color: #9de0f6;
      color: #3fc3ee
    }

    .swal2-icon.swal2-question {
      border-color: #c9dae1;
      color: #87adbd
    }

    .swal2-icon.swal2-success {
      border-color: #a5dc86;
      color: #a5dc86
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
      position: absolute;
      width: 3.75em;
      height: 7.5em;
      transform: rotate(45deg);
      border-radius: 50%
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
      top: -.4375em;
      left: -2.0635em;
      transform: rotate(-45deg);
      transform-origin: 3.75em 3.75em;
      border-radius: 7.5em 0 0 7.5em
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
      top: -.6875em;
      left: 1.875em;
      transform: rotate(-45deg);
      transform-origin: 0 3.75em;
      border-radius: 0 7.5em 7.5em 0
    }

    .swal2-icon.swal2-success .swal2-success-ring {
      position: absolute;
      z-index: 2;
      top: -.25em;
      left: -.25em;
      box-sizing: content-box;
      width: 100%;
      height: 100%;
      border: .25em solid rgba(165, 220, 134, .3);
      border-radius: 50%
    }

    .swal2-icon.swal2-success .swal2-success-fix {
      position: absolute;
      z-index: 1;
      top: .5em;
      left: 1.625em;
      width: .4375em;
      height: 5.625em;
      transform: rotate(-45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-line] {
      display: block;
      position: absolute;
      z-index: 2;
      height: .3125em;
      border-radius: .125em;
      background-color: #a5dc86
    }

    .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
      top: 2.875em;
      left: .8125em;
      width: 1.5625em;
      transform: rotate(45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
      top: 2.375em;
      right: .5em;
      width: 2.9375em;
      transform: rotate(-45deg)
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
      -webkit-animation: swal2-animate-success-line-tip .75s;
      animation: swal2-animate-success-line-tip .75s
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
      -webkit-animation: swal2-animate-success-line-long .75s;
      animation: swal2-animate-success-line-long .75s
    }

    .swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
      -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
      animation: swal2-rotate-success-circular-line 4.25s ease-in
    }

    .swal2-progress-steps {
      flex-wrap: wrap;
      align-items: center;
      max-width: 100%;
      margin: 0 0 1.25em;
      padding: 0;
      background: inherit;
      font-weight: 600
    }

    .swal2-progress-steps li {
      display: inline-block;
      position: relative
    }

    .swal2-progress-steps .swal2-progress-step {
      z-index: 20;
      flex-shrink: 0;
      width: 2em;
      height: 2em;
      border-radius: 2em;
      background: #2778c4;
      color: #fff;
      line-height: 2em;
      text-align: center
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
      background: #2778c4
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
      background: #add8e6;
      color: #fff
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
      background: #add8e6
    }

    .swal2-progress-steps .swal2-progress-step-line {
      z-index: 10;
      flex-shrink: 0;
      width: 2.5em;
      height: .4em;
      margin: 0 -1px;
      background: #2778c4
    }

    [class^=swal2] {
      -webkit-tap-highlight-color: transparent
    }

    .swal2-show {
      -webkit-animation: swal2-show .3s;
      animation: swal2-show .3s
    }

    .swal2-hide {
      -webkit-animation: swal2-hide .15s forwards;
      animation: swal2-hide .15s forwards
    }

    .swal2-noanimation {
      transition: none
    }

    .swal2-scrollbar-measure {
      position: absolute;
      top: -9999px;
      width: 50px;
      height: 50px;
      overflow: scroll
    }

    .swal2-rtl .swal2-close {
      right: auto;
      left: 0
    }

    .swal2-rtl .swal2-timer-progress-bar {
      right: 0;
      left: auto
    }

    @supports (-ms-accelerator:true) {
      .swal2-range input {
        width: 100% !important
      }

      .swal2-range output {
        display: none
      }
    }

    @media all and (-ms-high-contrast:none),
    (-ms-high-contrast:active) {
      .swal2-range input {
        width: 100% !important
      }

      .swal2-range output {
        display: none
      }
    }

    @-webkit-keyframes swal2-toast-show {
      0% {
        transform: translateY(-.625em) rotateZ(2deg)
      }

      33% {
        transform: translateY(0) rotateZ(-2deg)
      }

      66% {
        transform: translateY(.3125em) rotateZ(2deg)
      }

      100% {
        transform: translateY(0) rotateZ(0)
      }
    }

    @keyframes swal2-toast-show {
      0% {
        transform: translateY(-.625em) rotateZ(2deg)
      }

      33% {
        transform: translateY(0) rotateZ(-2deg)
      }

      66% {
        transform: translateY(.3125em) rotateZ(2deg)
      }

      100% {
        transform: translateY(0) rotateZ(0)
      }
    }

    @-webkit-keyframes swal2-toast-hide {
      100% {
        transform: rotateZ(1deg);
        opacity: 0
      }
    }

    @keyframes swal2-toast-hide {
      100% {
        transform: rotateZ(1deg);
        opacity: 0
      }
    }

    @-webkit-keyframes swal2-toast-animate-success-line-tip {
      0% {
        top: .5625em;
        left: .0625em;
        width: 0
      }

      54% {
        top: .125em;
        left: .125em;
        width: 0
      }

      70% {
        top: .625em;
        left: -.25em;
        width: 1.625em
      }

      84% {
        top: 1.0625em;
        left: .75em;
        width: .5em
      }

      100% {
        top: 1.125em;
        left: .1875em;
        width: .75em
      }
    }

    @keyframes swal2-toast-animate-success-line-tip {
      0% {
        top: .5625em;
        left: .0625em;
        width: 0
      }

      54% {
        top: .125em;
        left: .125em;
        width: 0
      }

      70% {
        top: .625em;
        left: -.25em;
        width: 1.625em
      }

      84% {
        top: 1.0625em;
        left: .75em;
        width: .5em
      }

      100% {
        top: 1.125em;
        left: .1875em;
        width: .75em
      }
    }

    @-webkit-keyframes swal2-toast-animate-success-line-long {
      0% {
        top: 1.625em;
        right: 1.375em;
        width: 0
      }

      65% {
        top: 1.25em;
        right: .9375em;
        width: 0
      }

      84% {
        top: .9375em;
        right: 0;
        width: 1.125em
      }

      100% {
        top: .9375em;
        right: .1875em;
        width: 1.375em
      }
    }

    @keyframes swal2-toast-animate-success-line-long {
      0% {
        top: 1.625em;
        right: 1.375em;
        width: 0
      }

      65% {
        top: 1.25em;
        right: .9375em;
        width: 0
      }

      84% {
        top: .9375em;
        right: 0;
        width: 1.125em
      }

      100% {
        top: .9375em;
        right: .1875em;
        width: 1.375em
      }
    }

    @-webkit-keyframes swal2-show {
      0% {
        transform: scale(.7)
      }

      45% {
        transform: scale(1.05)
      }

      80% {
        transform: scale(.95)
      }

      100% {
        transform: scale(1)
      }
    }

    @keyframes swal2-show {
      0% {
        transform: scale(.7)
      }

      45% {
        transform: scale(1.05)
      }

      80% {
        transform: scale(.95)
      }

      100% {
        transform: scale(1)
      }
    }

    @-webkit-keyframes swal2-hide {
      0% {
        transform: scale(1);
        opacity: 1
      }

      100% {
        transform: scale(.5);
        opacity: 0
      }
    }

    @keyframes swal2-hide {
      0% {
        transform: scale(1);
        opacity: 1
      }

      100% {
        transform: scale(.5);
        opacity: 0
      }
    }

    @-webkit-keyframes swal2-animate-success-line-tip {
      0% {
        top: 1.1875em;
        left: .0625em;
        width: 0
      }

      54% {
        top: 1.0625em;
        left: .125em;
        width: 0
      }

      70% {
        top: 2.1875em;
        left: -.375em;
        width: 3.125em
      }

      84% {
        top: 3em;
        left: 1.3125em;
        width: 1.0625em
      }

      100% {
        top: 2.8125em;
        left: .8125em;
        width: 1.5625em
      }
    }

    @keyframes swal2-animate-success-line-tip {
      0% {
        top: 1.1875em;
        left: .0625em;
        width: 0
      }

      54% {
        top: 1.0625em;
        left: .125em;
        width: 0
      }

      70% {
        top: 2.1875em;
        left: -.375em;
        width: 3.125em
      }

      84% {
        top: 3em;
        left: 1.3125em;
        width: 1.0625em
      }

      100% {
        top: 2.8125em;
        left: .8125em;
        width: 1.5625em
      }
    }

    @-webkit-keyframes swal2-animate-success-line-long {
      0% {
        top: 3.375em;
        right: 2.875em;
        width: 0
      }

      65% {
        top: 3.375em;
        right: 2.875em;
        width: 0
      }

      84% {
        top: 2.1875em;
        right: 0;
        width: 3.4375em
      }

      100% {
        top: 2.375em;
        right: .5em;
        width: 2.9375em
      }
    }

    @keyframes swal2-animate-success-line-long {
      0% {
        top: 3.375em;
        right: 2.875em;
        width: 0
      }

      65% {
        top: 3.375em;
        right: 2.875em;
        width: 0
      }

      84% {
        top: 2.1875em;
        right: 0;
        width: 3.4375em
      }

      100% {
        top: 2.375em;
        right: .5em;
        width: 2.9375em
      }
    }

    @-webkit-keyframes swal2-rotate-success-circular-line {
      0% {
        transform: rotate(-45deg)
      }

      5% {
        transform: rotate(-45deg)
      }

      12% {
        transform: rotate(-405deg)
      }

      100% {
        transform: rotate(-405deg)
      }
    }

    @keyframes swal2-rotate-success-circular-line {
      0% {
        transform: rotate(-45deg)
      }

      5% {
        transform: rotate(-45deg)
      }

      12% {
        transform: rotate(-405deg)
      }

      100% {
        transform: rotate(-405deg)
      }
    }

    @-webkit-keyframes swal2-animate-error-x-mark {
      0% {
        margin-top: 1.625em;
        transform: scale(.4);
        opacity: 0
      }

      50% {
        margin-top: 1.625em;
        transform: scale(.4);
        opacity: 0
      }

      80% {
        margin-top: -.375em;
        transform: scale(1.15)
      }

      100% {
        margin-top: 0;
        transform: scale(1);
        opacity: 1
      }
    }

    @keyframes swal2-animate-error-x-mark {
      0% {
        margin-top: 1.625em;
        transform: scale(.4);
        opacity: 0
      }

      50% {
        margin-top: 1.625em;
        transform: scale(.4);
        opacity: 0
      }

      80% {
        margin-top: -.375em;
        transform: scale(1.15)
      }

      100% {
        margin-top: 0;
        transform: scale(1);
        opacity: 1
      }
    }

    @-webkit-keyframes swal2-animate-error-icon {
      0% {
        transform: rotateX(100deg);
        opacity: 0
      }

      100% {
        transform: rotateX(0);
        opacity: 1
      }
    }

    @keyframes swal2-animate-error-icon {
      0% {
        transform: rotateX(100deg);
        opacity: 0
      }

      100% {
        transform: rotateX(0);
        opacity: 1
      }
    }

    @-webkit-keyframes swal2-rotate-loading {
      0% {
        transform: rotate(0)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    @keyframes swal2-rotate-loading {
      0% {
        transform: rotate(0)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
      overflow: hidden
    }

    body.swal2-height-auto {
      height: auto !important
    }

    body.swal2-no-backdrop .swal2-container {
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
      max-width: calc(100% - .625em * 2);
      background-color: transparent !important
    }

    body.swal2-no-backdrop .swal2-container>.swal2-modal {
      box-shadow: 0 0 10px rgba(0, 0, 0, .4)
    }

    body.swal2-no-backdrop .swal2-container.swal2-top {
      top: 0;
      left: 50%;
      transform: translateX(-50%)
    }

    body.swal2-no-backdrop .swal2-container.swal2-top-left,
    body.swal2-no-backdrop .swal2-container.swal2-top-start {
      top: 0;
      left: 0
    }

    body.swal2-no-backdrop .swal2-container.swal2-top-end,
    body.swal2-no-backdrop .swal2-container.swal2-top-right {
      top: 0;
      right: 0
    }

    body.swal2-no-backdrop .swal2-container.swal2-center {
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%)
    }

    body.swal2-no-backdrop .swal2-container.swal2-center-left,
    body.swal2-no-backdrop .swal2-container.swal2-center-start {
      top: 50%;
      left: 0;
      transform: translateY(-50%)
    }

    body.swal2-no-backdrop .swal2-container.swal2-center-end,
    body.swal2-no-backdrop .swal2-container.swal2-center-right {
      top: 50%;
      right: 0;
      transform: translateY(-50%)
    }

    body.swal2-no-backdrop .swal2-container.swal2-bottom {
      bottom: 0;
      left: 50%;
      transform: translateX(-50%)
    }

    body.swal2-no-backdrop .swal2-container.swal2-bottom-left,
    body.swal2-no-backdrop .swal2-container.swal2-bottom-start {
      bottom: 0;
      left: 0
    }

    body.swal2-no-backdrop .swal2-container.swal2-bottom-end,
    body.swal2-no-backdrop .swal2-container.swal2-bottom-right {
      right: 0;
      bottom: 0
    }

    @media print {
      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow-y: scroll !important
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
        display: none
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
        position: static !important
      }
    }

    body.swal2-toast-shown .swal2-container {
      background-color: transparent
    }

    body.swal2-toast-shown .swal2-container.swal2-top {
      top: 0;
      right: auto;
      bottom: auto;
      left: 50%;
      transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-top-end,
    body.swal2-toast-shown .swal2-container.swal2-top-right {
      top: 0;
      right: 0;
      bottom: auto;
      left: auto
    }

    body.swal2-toast-shown .swal2-container.swal2-top-left,
    body.swal2-toast-shown .swal2-container.swal2-top-start {
      top: 0;
      right: auto;
      bottom: auto;
      left: 0
    }

    body.swal2-toast-shown .swal2-container.swal2-center-left,
    body.swal2-toast-shown .swal2-container.swal2-center-start {
      top: 50%;
      right: auto;
      bottom: auto;
      left: 0;
      transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center {
      top: 50%;
      right: auto;
      bottom: auto;
      left: 50%;
      transform: translate(-50%, -50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center-end,
    body.swal2-toast-shown .swal2-container.swal2-center-right {
      top: 50%;
      right: 0;
      bottom: auto;
      left: auto;
      transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-left,
    body.swal2-toast-shown .swal2-container.swal2-bottom-start {
      top: auto;
      right: auto;
      bottom: 0;
      left: 0
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom {
      top: auto;
      right: auto;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-end,
    body.swal2-toast-shown .swal2-container.swal2-bottom-right {
      top: auto;
      right: 0;
      bottom: 0;
      left: auto
    }

    body.swal2-toast-column .swal2-toast {
      flex-direction: column;
      align-items: stretch
    }

    body.swal2-toast-column .swal2-toast .swal2-actions {
      flex: 1;
      align-self: stretch;
      height: 2.2em;
      margin-top: .3125em
    }

    body.swal2-toast-column .swal2-toast .swal2-loading {
      justify-content: center
    }

    body.swal2-toast-column .swal2-toast .swal2-input {
      height: 2em;
      margin: .3125em auto;
      font-size: 1em
    }

    body.swal2-toast-column .swal2-toast .swal2-validation-message {
      font-size: 1em
    }
  </style>
  <script src="deposit_list_files/ext-component-sweet-alerts.js"></script>
  <link rel="stylesheet" href="deposit_list_files/custom.css">
  <title>Ravers Trade | Investment Project</title>
  <link type="text/css" rel="stylesheet" charset="UTF-8" href="deposit_list_files/translateelement.css">
  <script type="text/javascript" charset="UTF-8" src="deposit_list_files/main.js"></script>
  <style type="text/css">
    .apexcharts-canvas {
      position: relative;
      user-select: none;
      /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }


    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
      -webkit-appearance: none;
      width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
      border-radius: 4px;
      background-color: rgba(0, 0, 0, .5);
      box-shadow: 0 0 1px rgba(255, 255, 255, .5);
      -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }

    .apexcharts-canvas.apexcharts-theme-dark {
      background: #424242;
    }

    .apexcharts-inner {
      position: relative;
    }

    .apexcharts-text tspan {
      font-family: inherit;
    }

    .legend-mouseover-inactive {
      transition: 0.15s ease all;
      opacity: 0.20;
    }

    .apexcharts-series-collapsed {
      opacity: 0;
    }

    .apexcharts-tooltip {
      border-radius: 5px;
      box-shadow: 2px 2px 6px -4px #999;
      cursor: default;
      font-size: 14px;
      left: 62px;
      opacity: 0;
      pointer-events: none;
      position: absolute;
      top: 20px;
      overflow: hidden;
      white-space: nowrap;
      z-index: 12;
      transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
      border: 1px solid #e3e3e3;
      background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
      color: #fff;
      background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
      font-family: inherit;
    }


    .apexcharts-tooltip-title {
      padding: 6px;
      font-size: 15px;
      margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
      background: #ECEFF1;
      border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
      background: rgba(0, 0, 0, 0.7);
      border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
      display: inline-block;
      font-weight: 600;
      margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
      display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
      font-weight: 600;
    }

    .apexcharts-tooltip-marker {
      width: 12px;
      height: 12px;
      position: relative;
      top: 0px;
      margin-right: 10px;
      border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
      padding: 0 10px;
      display: none;
      text-align: left;
      justify-content: left;
      align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
      opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
      padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
      opacity: 0;
      height: 0;
      line-height: 0;
      padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
      padding: 6px 0 5px;
    }

    .apexcharts-tooltip-candlestick {
      padding: 4px 8px;
    }

    .apexcharts-tooltip-candlestick>div {
      margin: 4px 0;
    }

    .apexcharts-tooltip-candlestick span.value {
      font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
      padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
      font-weight: 600;
      color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
      opacity: 0;
      padding: 9px 10px;
      pointer-events: none;
      color: #373d3f;
      font-size: 13px;
      text-align: center;
      border-radius: 2px;
      position: absolute;
      z-index: 10;
      background: #ECEFF1;
      border: 1px solid #90A4AE;
      transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.5);
      color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
      left: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
      border-color: rgba(236, 239, 241, 0);
      border-width: 6px;
      margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
      border-color: rgba(144, 164, 174, 0);
      border-width: 7px;
      margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
      bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
      top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
      border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
      border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
      border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
      border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
      border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
      border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
      border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
      border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
      opacity: 0;
      padding: 4px 10px;
      pointer-events: none;
      color: #373d3f;
      font-size: 13px;
      text-align: center;
      border-radius: 2px;
      position: absolute;
      z-index: 10;
      background: #ECEFF1;
      border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.5);
      color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
      top: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
      border-color: rgba(236, 239, 241, 0);
      border-width: 6px;
      margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
      border-color: rgba(144, 164, 174, 0);
      border-width: 7px;
      margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
      left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
      right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
      border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
      border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
      border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
      border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
      border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
      border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
      border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
      border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
      opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
      display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
      pointer-events: none;
      opacity: 0;
      transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
      opacity: 0;
    }

    .apexcharts-selection-rect {
      cursor: move;
    }

    .svg_select_boundingRect,
    .svg_select_points_rot {
      pointer-events: none;
      opacity: 0;
      visibility: hidden;
    }

    .apexcharts-selection-rect+g .svg_select_boundingRect,
    .apexcharts-selection-rect+g .svg_select_points_rot {
      opacity: 0;
      visibility: hidden;
    }

    .apexcharts-selection-rect+g .svg_select_points_l,
    .apexcharts-selection-rect+g .svg_select_points_r {
      cursor: ew-resize;
      opacity: 1;
      visibility: visible;
    }

    .svg_select_points {
      fill: #efefef;
      stroke: #333;
      rx: 2;
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
      cursor: crosshair
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
      cursor: move
    }

    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
      cursor: pointer;
      width: 20px;
      height: 20px;
      line-height: 24px;
      color: #6E8192;
      text-align: center;
    }

    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
      fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
      fill: #444;
      transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
      fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
      fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
      fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
      position: relative;
    }

    .apexcharts-reset-icon {
      margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
      transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
      transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
      margin-right: 3px;
    }

    .apexcharts-pan-icon {
      transform: scale(0.62);
      position: relative;
      left: 1px;
      top: 0px;
    }

    .apexcharts-pan-icon svg {
      fill: #fff;
      stroke: #6E8192;
      stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
      stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
      stroke: #333;
    }

    .apexcharts-toolbar {
      position: absolute;
      z-index: 11;
      max-width: 176px;
      text-align: right;
      border-radius: 3px;
      padding: 0px 6px 2px 6px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .apexcharts-menu {
      background: #fff;
      position: absolute;
      top: 100%;
      border: 1px solid #ddd;
      border-radius: 3px;
      padding: 3px;
      right: 10px;
      opacity: 0;
      min-width: 110px;
      transition: 0.15s ease all;
      pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
      opacity: 1;
      pointer-events: all;
      transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
      padding: 6px 7px;
      font-size: 12px;
      cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
      background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
    }

    @media screen and (min-width: 768px) {
      .apexcharts-canvas:hover .apexcharts-toolbar {
        opacity: 1;
      }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
      opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
      cursor: default;
      pointer-events: none;
    }

    .apexcharts-pie-label-delay {
      opacity: 0;
      animation-name: opaque;
      animation-duration: 0.3s;
      animation-fill-mode: forwards;
      animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
      opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
      opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect,
    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line,
    .apexcharts-zoom-rect,
    .apexcharts-toolbar svg,
    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
      pointer-events: none;
    }


    /* markers */

    .apexcharts-marker {
      transition: 0.15s ease all;
    }

    @keyframes opaque {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }


    /* Resize generated styles */

    @keyframes resizeanim {
      from {
        opacity: 0;
      }

      to {
        opacity: 0;
      }
    }

    .resize-triggers {
      animation: 1ms resizeanim;
      visibility: hidden;
      opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
      content: " ";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      overflow: hidden;
    }

    .resize-triggers>div {
      background: #eee;
      overflow: auto;
    }

    .contract-trigger:before {
      width: 200%;
      height: 200%;
    }
  </style>
  <script type="text/javascript" charset="UTF-8" src="deposit_list_files/element_main.js"></script>
</head>

<body class="  pace-done" style="position: relative; min-height: 100%; top: 0px;" data-new-gr-c-s-check-loaded="8.881.0" data-gr-ext-installed="">
  <div class="pace  pace-inactive">
    <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
      <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
  </div>

  <div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="init">
      <div class="simplebar-wrapper" style="margin: 0px;">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
              <div class="simplebar-content mm-active" style="padding: 0px;">
                <div class="sidebar-header">
                  <div>
                    <img src="deposit_list_files/logo-icon.png" class="logo-icon" alt="logo icon">
                  </div>
                  <div>
                    <h4 class="logo-text">Ravers Trade</h4>
                  </div>
                  <div class="toggle-icon ms-auto"><i class="bx bx-arrow-to-left"></i>
                  </div>
                </div>
                <!--navigation-->
                <ul class="metismenu mm-show" id="menu">
                  <li>
                    <a href="account" aria-expanded="true">
                      <div class="parent-icon"><i class="bx bx-home-circle"></i>
                      </div>
                      <div class="menu-title">MY ACCOUNT</div>
                    </a>
                  </li>
                  <li class="menu-label">FUND MANAGEMENT</li>
                  <li>
                    <a href="deposit" aria-expanded="true">
                      <div class="parent-icon"><i class="bx bx-coin-stack"></i>
                      </div>
                      <div class="menu-title">MAKE DEPOSIT</div>
                    </a>
                  </li>
                  <li>
                    <a href="withdraw" aria-expanded="true">
                      <div class="parent-icon"><i class="bx bx-blanket"></i>
                      </div>
                      <div class="menu-title">WITHDRAWAL</div>
                    </a>
                  </li>
                  <li class="mm-active">
                    <a href="deposit_list" aria-expanded="true">
                      <div class="parent-icon"><i class="bx bx-wallet-alt"></i>
                      </div>
                      <div class="menu-title">INVESTMENTS</div>
                    </a>
                  </li>


                  <li>
                    <a href="edit_account" aria-expanded="true">
                      <div class="parent-icon"><i class="bx bx-user"></i>
                      </div>
                      <div class="menu-title">PROFILE</div>
                    </a>
                  </li>


                  <li class="menu-label">AFFILIATE PROGRAM</li>
                  <li>
                    <a href="referals" aria-expanded="true">
                      <div class="parent-icon"><i class="bx bx-share-alt"></i>
                      </div>
                      <div class="menu-title">REFERRALS</div>
                    </a>
                  </li>


                  <hr>
                  <li>
                    <a href="logout" aria-expanded="true">
                      <div class="parent-icon"><i class="bx bx-log-out"></i>
                      </div>
                      <div class="menu-title">LOGOUT</div>
                    </a>
                  </li>
                </ul>
                <!--end navigation-->
              </div>
            </div>
          </div>
        </div>
        <div class="simplebar-placeholder" style="width: auto; height: 747px;"></div>
      </div>
      <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
      </div>
      <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
        <div class="simplebar-scrollbar" style="height: 576px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
      </div>
    </div>
    <!--end sidebar wrapper -->

    <!--start header -->
    <header>
      <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
          <div class="mobile-toggle-menu"><i class="bx bx-menu"></i>
          </div>

          <div class="top-menu ms-auto">
            <ul class="navbar-nav align-items-center">

              <!-- <center> -->
              <style type="text/css">
                a.gflag {
                  vertical-align: middle;

                  padding: 1px 0;
                  background-repeat: no-repeat;

                }

                a.gflag img {
                  border: 0;
                }



                #goog-gt-tt {
                  display: none !important;
                }

                .goog-te-banner-frame {
                  display: none !important;
                }

                .goog-te-menu-value:hover {
                  text-decoration: none !important;
                }

                body {
                  top: 0 !important;
                }

                #google_translate_element2 {
                  display: none !important;
                }
              </style>

              <div id="google_translate_element2">
                <div class="skiptranslate goog-te-gadget" dir="ltr" style="">
                  <div id=":0.targetLanguage"><select class="goog-te-combo" aria-label="Language Translate Widget">
                      <option value="" selected="selected">Select Language</option>
                      <option value="af">Afrikaans</option>
                      <option value="sq">Albanian</option>
                      <option value="am">Amharic</option>
                      <option value="ar">Arabic</option>
                      <option value="hy">Armenian</option>
                      <option value="az">Azerbaijani</option>
                      <option value="eu">Basque</option>
                      <option value="be">Belarusian</option>
                      <option value="bn">Bengali</option>
                      <option value="bs">Bosnian</option>
                      <option value="bg">Bulgarian</option>
                      <option value="ca">Catalan</option>
                      <option value="ceb">Cebuano</option>
                      <option value="ny">Chichewa</option>
                      <option value="zh-CN">Chinese (Simplified)</option>
                      <option value="zh-TW">Chinese (Traditional)</option>
                      <option value="co">Corsican</option>
                      <option value="hr">Croatian</option>
                      <option value="cs">Czech</option>
                      <option value="da">Danish</option>
                      <option value="nl">Dutch</option>
                      <option value="eo">Esperanto</option>
                      <option value="et">Estonian</option>
                      <option value="tl">Filipino</option>
                      <option value="fi">Finnish</option>
                      <option value="fr">French</option>
                      <option value="fy">Frisian</option>
                      <option value="gl">Galician</option>
                      <option value="ka">Georgian</option>
                      <option value="de">German</option>
                      <option value="el">Greek</option>
                      <option value="gu">Gujarati</option>
                      <option value="ht">Haitian Creole</option>
                      <option value="ha">Hausa</option>
                      <option value="haw">Hawaiian</option>
                      <option value="iw">Hebrew</option>
                      <option value="hi">Hindi</option>
                      <option value="hmn">Hmong</option>
                      <option value="hu">Hungarian</option>
                      <option value="is">Icelandic</option>
                      <option value="ig">Igbo</option>
                      <option value="id">Indonesian</option>
                      <option value="ga">Irish</option>
                      <option value="it">Italian</option>
                      <option value="ja">Japanese</option>
                      <option value="jw">Javanese</option>
                      <option value="kn">Kannada</option>
                      <option value="kk">Kazakh</option>
                      <option value="km">Khmer</option>
                      <option value="rw">Kinyarwanda</option>
                      <option value="ko">Korean</option>
                      <option value="ku">Kurdish (Kurmanji)</option>
                      <option value="ky">Kyrgyz</option>
                      <option value="lo">Lao</option>
                      <option value="la">Latin</option>
                      <option value="lv">Latvian</option>
                      <option value="lt">Lithuanian</option>
                      <option value="lb">Luxembourgish</option>
                      <option value="mk">Macedonian</option>
                      <option value="mg">Malagasy</option>
                      <option value="ms">Malay</option>
                      <option value="ml">Malayalam</option>
                      <option value="mt">Maltese</option>
                      <option value="mi">Maori</option>
                      <option value="mr">Marathi</option>
                      <option value="mn">Mongolian</option>
                      <option value="my">Myanmar (Burmese)</option>
                      <option value="ne">Nepali</option>
                      <option value="no">Norwegian</option>
                      <option value="or">Odia (Oriya)</option>
                      <option value="ps">Pashto</option>
                      <option value="fa">Persian</option>
                      <option value="pl">Polish</option>
                      <option value="pt">Portuguese</option>
                      <option value="pa">Punjabi</option>
                      <option value="ro">Romanian</option>
                      <option value="ru">Russian</option>
                      <option value="sm">Samoan</option>
                      <option value="gd">Scots Gaelic</option>
                      <option value="sr">Serbian</option>
                      <option value="st">Sesotho</option>
                      <option value="sn">Shona</option>
                      <option value="sd">Sindhi</option>
                      <option value="si">Sinhala</option>
                      <option value="sk">Slovak</option>
                      <option value="sl">Slovenian</option>
                      <option value="so">Somali</option>
                      <option value="es">Spanish</option>
                      <option value="su">Sundanese</option>
                      <option value="sw">Swahili</option>
                      <option value="sv">Swedish</option>
                      <option value="tg">Tajik</option>
                      <option value="ta">Tamil</option>
                      <option value="tt">Tatar</option>
                      <option value="te">Telugu</option>
                      <option value="th">Thai</option>
                      <option value="tr">Turkish</option>
                      <option value="tk">Turkmen</option>
                      <option value="uk">Ukrainian</option>
                      <option value="ur">Urdu</option>
                      <option value="ug">Uyghur</option>
                      <option value="uz">Uzbek</option>
                      <option value="vi">Vietnamese</option>
                      <option value="cy">Welsh</option>
                      <option value="xh">Xhosa</option>
                      <option value="yi">Yiddish</option>
                      <option value="yo">Yoruba</option>
                      <option value="zu">Zulu</option>
                    </select></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com/" target="_blank"><img src="deposit_list_files/googlelogo_color_42x16dp.png" style="padding-right: 3px" alt="Google Translate" width="37px" height="14px">Translate</a></span>
                </div>
              </div>

              <script type="text/javascript">
                function googleTranslateElementInit2() {
                  new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    autoDisplay: false
                  }, 'google_translate_element2');
                }
              </script>
              <script type="text/javascript" src="deposit_list_files/element.js"></script>


              <script type="text/javascript">
                /* <![CDATA[ */
                eval(function(p, a, c, k, e, r) {
                  e = function(c) {
                    return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
                  };
                  if (!''.replace(/^/, String)) {
                    while (c--) r[e(c)] = k[c] || e(c);
                    k = [function(e) {
                      return r[e]
                    }];
                    e = function() {
                      return '\\w+'
                    };
                    c = 1
                  };
                  while (c--)
                    if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
                  return p
                }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}))
                /* ]]> */
              </script>
              <div class="flagmenu" style="justify-content: space-between; align-items: flex-start;">

                <a href="deposit_list?a=home#" onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl" style="background-position:-0px -0px; ">
                  <img src="deposit_list_files/de.svg" alt="German">
                </a>
                <a href="deposit_list?a=home#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-0px -0px; ">
                  <img src="deposit_list_files/ru.svg" alt="Russian">
                </a>
                <a href="deposit_list?a=home#" onclick="doGTranslate('en|fr');return false;" title="French" class="gflag nturl" style="background-position:-0px -0px; ">
                  <img src="deposit_list_files/fr.svg" alt="French">
                </a>
                <a href="deposit_list?a=home#" onclick="doGTranslate('en|tr');return false;" title="Turkish" class="gflag nturl" style="background-position:-0px -0px; ">
                  <img src="deposit_list_files/tr.svg" alt="Turkish">
                </a>
                <a href="deposit_list?a=home#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px; ">
                  <img src="deposit_list_files/gb.svg" alt="English">
                </a>

              </div>


              <li class="nav-item dropdown dropdown-large">

                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;">
                    <div class="msg-header">
                      <p class="msg-header-title">Notifications</p>
                      <p class="msg-header-clear ms-auto">Marks all as read</p>
                    </div>
                  </a>
                  <div class="header-notifications-list ps">
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                              ago</span></h6>
                          <p class="msg-info">5 new user registered</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                              ago</span></h6>
                          <p class="msg-info">You have recived new orders</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
                              ago</span></h6>
                          <p class="msg-info">The pdf files generated</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
                              ago</span></h6>
                          <p class="msg-info">5.1 min avarage time response</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span></h6>
                          <p class="msg-info">Your new product has approved</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
                              ago</span></h6>
                          <p class="msg-info">New customer comments recived</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify bg-light-success text-success"><i class="bx bx-check-square"></i>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
                              ago</span></h6>
                          <p class="msg-info">Successfully shipped your item</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify bg-light-primary text-primary"><i class="bx bx-user-pin"></i>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
                              ago</span></h6>
                          <p class="msg-info">24 new authors joined last week</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="notify bg-light-warning text-warning"><i class="bx bx-door-open"></i>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
                              ago</span></h6>
                          <p class="msg-info">45% less alerts last 4 weeks</p>
                        </div>
                      </div>
                    </a>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                  </div>
                  <a href="javascript:;">
                    <div class="text-center msg-footer">View All Notifications</div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-large d-none ">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                  <i class="bx bx-comment"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;">
                    <div class="msg-header">
                      <p class="msg-header-title">Messages</p>
                      <p class="msg-header-clear ms-auto">Marks all as read</p>
                    </div>
                  </a>
                  <div class="header-message-list ps">
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-1.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
                              ago</span></h6>
                          <p class="msg-info">The standard chunk of lorem</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-2.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
                              sec ago</span></h6>
                          <p class="msg-info">Many desktop publishing packages</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-3.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
                              ago</span></h6>
                          <p class="msg-info">Various versions have evolved over</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-4.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
                              min ago</span></h6>
                          <p class="msg-info">Making this the first true generator</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-5.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
                              ago</span></h6>
                          <p class="msg-info">Duis aute irure dolor in reprehenderit</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-6.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
                              ago</span></h6>
                          <p class="msg-info">The passage is attributed to an unknown</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-7.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
                              ago</span></h6>
                          <p class="msg-info">The point of using Lorem</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-8.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
                              ago</span></h6>
                          <p class="msg-info">It was popularised in the 1960s</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-9.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
                              ago</span></h6>
                          <p class="msg-info">Various versions have evolved over</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-10.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
                              ago</span></h6>
                          <p class="msg-info">If you are going to use a passage</p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="javascript:;">
                      <div class="d-flex align-items-center">
                        <div class="user-online">
                          <img src="deposit_list_files/avatar-11.png" class="msg-avatar" alt="user avatar">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
                              ago</span></h6>
                          <p class="msg-info">All the Lorem Ipsum generators</p>
                        </div>
                      </div>
                    </a>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                  </div>
                  <a href="javascript:;">
                    <div class="text-center msg-footer">View All Messages</div>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <div class="user-box dropdown">
            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="lni lni-user"></i>
              <div class="user-info ps-3">
                <p class="user-name mb-0"><?php echo $user_name; ?> </p>

              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="edit_account"><i class="bx bx-user"></i><span>Profile</span></a>
              </li>


              <li>
                <div class="dropdown-divider mb-0"></div>
              </li>
              <li><a class="dropdown-item" href="logout"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
      <div class="page-content">
        <div class="container">
          <div class="row">

            <div class="col-12">

              <div class="card-body">
                <div class="balances d-flex align-items-center">
                  <div>
                    <h3 class="mb-0">Wallet BALANCE</h3>
                    <h2 class="mb-0">$<?php echo $bal; ?></h2>
                  </div>
                </div><br><br><br>
              </div>

            </div>

            <form action="" method="post" accept-charset="utf-8">

              <div class="row pt-2">
                <section class="select_amount card col-lg-8">
                  <h3 class="h3 pt-3">
                    Make New Investment </h3>
                  <div class="select_amount_form">
                    <label class="input_block filled">

                      <input type="number" name="amount" value="50" id="calc_amount" class="input_block_field">

                      <span class="input_block_label">
                        Enter transaction amount </span>
                      <span class="input_block_currency" id="balance_amount_currency" style="font-weight:bold;">
                        USD </span>
                      <span class="input_block_error-text">

                      </span>
                    </label>
                    <div class="select_amount_form_minmax">
                      <div class="select_amount_form_min">
                        Minimum: <strong id="balance_min_amount">50 USD</strong>
                      </div>
                      <div class="select_amount_form_max">
                        Maximum: <strong>50,000 USD</strong>
                      </div>

                    </div>
                  </div>

                </section>

                <section class="select_confirm card col-lg-4" style="justify-content: center;">
                  <div class="text-center">
                    <button type="submit" name="invest_btn" class="btn btn-primary px-5">
                      INVEST </button>
                  </div>

                </section>
              </div>
            </form>


            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h1>YOUR INVESTMENTS</h1>


                  <div class="table-responsive mt-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <td>S/N</td>
                          <th>Action</th>
                          <th>Amount</th>
                          <th>Daily Growth</th>
                          <th>Expiry Date </th>
                          <th> Duration </th>
                          <th>Expected Profit($)</th>
                          <th>Status</th>
                        </tr>


                      </thead>
                      <tbody>


                        <?php
                        $deposite_tran = new run_query("select * from transaction where tran_user_id = '$user_id' and tran_desc ='INVESTMENT'  order by tran_id desc  ");
                        $no = 1;
                        while ($deposite_tran_data =  $deposite_tran->result()) {

                          extract($deposite_tran_data);

                          $t1 = strtotime($start_tran_date);
                          $t2 = strtotime($reg_Date);
                          $diff = $t2 - $t1;
                          $days_online_d =  $diff  / 86400;
                          $duration = round($days_online_d);
                          $tran_current_bal_u  = ($duration *  $tran_daily_growth) - $tran_withdraw_amt;

                          $tran_current_bal_u =  number_format($tran_current_bal_u, 4);
                          if ($duration >= 30) {
                            $tran_current_bal_u  = (30 *  $tran_daily_growth) - $tran_withdraw_amt;
                          }
                          if (($duration >= 30  && $tran_current_bal_u > 0 && $tran_status == 'ACTIVE') or ($duration >= 30  && $tran_current_bal_u > 0)) {
                            $btn = "<br/> <form method='POST'>  
								
									<button type='submit'  name='cash_out$tran_id' class='btn btn-sm btn-success' >Withdraw</button> 
									<input type='hidden' name='coin$tran_id' required value='BTC' />
								</form>";
                          } else {

                            $btn = "<br/><button  class='btn btn-sm btn-outline-danger' disabled > <b>WITHDRAW </b> </button>";
                          }

                          if ($tran_status == 'ACTIVE'  or $tran_status == 'ACTIVE2') {
                            $tran_status = "In Progress";
                          }

                          if ($duration >= 30) {
                            $tran_current_bal_u  = (30 *  $tran_daily_growth) - $tran_withdraw_amt;
                            $tran_status = "Expired";
                            $duration = "Expired";
                          }
                          echo "
								
							<tr>
								<td>$no</td>
								<th>$$tran_current_bal_u  $btn  </th>
								
								<th>$$trant_amt</th>
								<th>$ $tran_daily_growth</th>

								<th>$tran_exp_date</th>
								<th>$duration Days</th>

								<th>$$tran_roi</th>
								<th><span class='badge badge-primary'><i class='fa fa-spinner'></i> $tran_status</span> </th>
								</tr>	
								
								";
                          $no++;


                          if (isset($_POST['cash_out' . $tran_id])) {
                            $coin = addslashes(htmlentities($_POST['coin' . $tran_id]));

                            $qw1RRqq = new run_query("UPDATE   `transaction`  set  tran_withdraw_amt=tran_withdraw_amt+$tran_current_bal_u , tran_status='ACTIVE2' where  tran_id ='$tran_id' ");

                            $timer_end  = date('Y-m-d H:i:s', strtotime('48 hours'));
                            $timer_start  = date('Y-m-d H:i:s');
                            $tran_invoice  = "WIT-" . date('iYdmhs');
                            $cash_out = new run_query("INSERT INTO    `transaction`  set coin='$coin',  tran_user_id = '$user_id', tran_invoice='$tran_invoice',
							tran_email='$user_email', tran_username='$user_name', trant_amt='$tran_current_bal_u',start_tran_date='$timer_start', tran_exp_date='$timer_end',  tran_date='$reg_Date', tran_status='PENDING', tran_desc ='CASH_OUT' ");

                            $email_amt = $trant_amt;



                            $site_email_send = "$site_email";
                            $welcome_email_subject = "Withdrawal of - $ $trant_amt | $site_name";
                            $welcome_email_headers .= "Content-type:text/html;charset=UTF-8 \r\n";
                            $welcome_email_headers .= "From: <$site_email>";


                            $welcome_email_body = "
								
									<html>
									<head>
										<title> Hello $user_name, </title>
									</head>
									<body>
									 <b>Hello, $user_name<b> <br/> Hope we meet you well.
									<h2> You Have Requested for the withdrwal  of $ $trant_amt  </h2>
									Please Relax as we Processed this Transaction <br/>
									
									<hr/>
									For enquiries, <br/>
									Contact us on <br/>
								
									<b>
									$site_email <br/>
								
									$site_phone <br/>
									</b>
									Visit us on <br/>
								
									https://$site_link <br/><br/><br/>
								
									Regards,  $site_name.
									</body>
									</html>
								
									";

                            mail($user_email, $welcome_email_subject, $welcome_email_body, $welcome_email_headers);

                            echo "<script>alert(\"TRANSACTION WITHDRAW REQUEST SUCCESSFULL!!! \");</script>";

                            echo "<script>window.location.replace(\"withdrawals.php\");</script>";
                          }
                        }

                        ?>


                      </tbody>
                      <tfoot>
                        <tr>
                          <td>S/N</td>
                          <th>Action</th>
                          <th>Amount</th>
                          <th>Daily Growth</th>
                          <th>Expiry Date </th>
                          <th> Duration </th>
                          <th>Expected Profit($)</th>
                          <th>Status</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>


              </div>

            </div>
          </div>

          <!--end page wrapper -->
          <!--start overlay-->
          <div class="overlay toggle-icon "></div>
          <!--end overlay-->
          <!--Start Back To Top Button--><a href="javascript:;" class="back-to-top "><i class="bx bxs-up-arrow-alt"></i></a>
          <!--End Back To Top Button-->
          <footer class="page-footer ">
            <p class="mb-0 ">Copyright © 2021 <span class="footertext2">Ravers Trade</span>. All right reserved.</p>
          </footer>
        </div>
        <!--end wrapper-->

        <!-- Bootstrap JS -->
        <!-- Bootstrap JS -->
        <script src="deposit_list_files/bootstrap.js"></script>
        <!--plugins-->
        <script src="deposit_list_files/jquery.js"></script>
        <script src="deposit_list_files/simplebar.js"></script>
        <script src="deposit_list_files/metisMenu.js"></script>
        <script src="deposit_list_files/perfect-scrollbar.js"></script>
        <script src="deposit_list_files/apexcharts.js"></script>
        <script src="deposit_list_files/widgets.js"></script>
        <script src="deposit_list_files/clipboard.js"></script>
        <!--app JS-->
        <script src="deposit_list_files/app.js"></script>
        <script>
          new PerfectScrollbar('.dashboard-top-countries');
        </script>




      </div>
    </div>
    <div id="goog-gt-tt" class="skiptranslate" dir="ltr">
      <div style="padding: 8px;">
        <div>
          <div class="logo"><img src="deposit_list_files/translate_24dp.png" alt="Google Translate" width="20" height="20"></div>
        </div>
      </div>
      <div class="top" style="padding: 8px; float: left; width: 100%;">
        <h1 class="title gray">Original text</h1>
      </div>
      <div class="middle" style="padding: 8px;">
        <div class="original-text"></div>
      </div>
      <div class="bottom" style="padding: 8px;">
        <div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div>
        <div class="started-activity-container">
          <hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
          <div class="activity-root"></div>
        </div>
      </div>
      <div class="status-message" style="display: none;"></div>
    </div><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
      <defs id="SvgjsDefs1002"></defs>
      <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
      <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
    <div class="goog-te-spinner-pos">
      <div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66">
          <circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
        </svg></div>
    </div>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
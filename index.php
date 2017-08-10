<?php
include 'includes.php';
require_once 'votes.class.php';
session_start();
if (!$_SESSION['status'])
header("Location: login/");
else
{
  $votes = new Votes();
  $voter = $_SESSION['login'];
  ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
  <link href="http://voxotron.42.fr/assets/application-31247f0afe07dd9975d21dab0ffda57b.css" media="all" rel="stylesheet" />
  <?php
  if ($_GET['status']  == TRUE)
  echo '
  <div class="alert fade in alert-success alert-dismissable" id="notification"><button aria-hidden="true" class="close" data-dismiss="alert" type="button"></button>You successfully updated your prefferences for the wall of fame!</div>';
  if ($_GET['error'] == TRUE)
  echo '
  <div class="alert fade in alert-danger" id="notification">Enter all users!</div>';
  ?>
  <html class="supernova"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="The best POOLers" >
    <meta property="og:description" content="Please click the link to complete this form.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="HandheldFriendly" content="true" />
    <title>The best POOLers</title>
    <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.997" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.997" />
    <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.997" />
    <style type="text/css">
    .form-label-left{
      width:150px !important;
    }
    .form-line{
      padding-top:12px;
      padding-bottom:12px;
    }
    .form-label-right{
      width:150px !important;
    }
    body, html{
      margin:0;
      padding:0;
      background:#65a0c8;
    }

    .form-all{
      margin:0px auto;
      padding-top:0px;
      width:690px;
      color:#000000 !important;
      font-family:'Roboto';
      font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
      color: false;
    }

    </style>

    <style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
    @import "https://fonts.googleapis.com/css?family=Roboto:light,lightitalic,normal,italic,bold,bolditalic";
    .form-all {
      font-family: "Roboto", sans-serif;
    }
    .form-all {
      width: 690px;
    }
    .form-label-left,
    .form-label-right {
      width: 150px;
    }
    .form-label {
      white-space: normal;
    }
    .form-label.form-label-auto {
      display: inline-block;
      float: left;
      text-align: left;
      width: 150px;
    }
    .form-label-left {
      display: inline-block;
      white-space: normal;
      float: left;
      text-align: left;
    }
    .form-label-right {
      display: inline-block;
      white-space: normal;
      float: left;
      text-align: right;
    }
    .form-label-top {
      white-space: normal;
      display: block;
      float: none;
      text-align: left;
    }
    .form-radio-item label:before {
      top: 0;
    }
    .form-all {
      font-size: 14px;
    }
    .form-label {
      font-weight: normal;
      font-size: 0.95em;
    }
    .supernova {
      background-color: #ffffff;
      background-color: #f5f5f5;
    }
    .supernova body {
      background-color: transparent;
    }
    /*
    @width30: (unit(@formWidth, px) + 60px);
    @width60: (unit(@formWidth, px)+ 120px);
    @width90: (unit(@formWidth, px)+ 180px);
    */
    /* | */
    @media screen and (min-width: 480px) {
      .supernova .form-all {
        border: 1px solid #dcdcdc;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
        box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
      }
    }
    /* | */
    /* | */
    @media screen and (max-width: 480px) {
      .jotform-form {
        padding: 10px 0;
      }
    }
    /* | */
    /* | */
    @media screen and (min-width: 480px) and (max-width: 768px) {
      .jotform-form {
        padding: 30px 0;
      }
    }
    /* | */
    /* | */
    @media screen and (min-width: 480px) and (max-width: 689px) {
      .jotform-form {
        padding: 30px 0;
      }
    }
    /* | */
    /* | */
    @media screen and (min-width: 768px) {
      .jotform-form {
        padding: 60px 0;
      }
    }
    /* | */
    /* | */
    @media screen and (max-width: 689px) {
      .jotform-form {
        padding: 12px;
      }
    }
    /* | */
    .supernova .form-all,
    .form-all {
      background-color: #ffffff;
      border: 1px solid transparent;
    }
    .form-header-group {
      border-color: #e6e6e6;
    }
    .form-matrix-table tr {
      border-color: #e6e6e6;
    }
    .form-matrix-table tr:nth-child(2n) {
      background-color: #f2f2f2;
    }
    .form-all {
      color: #555555;
    }
    .form-header-group .form-header {
      color: #555555;
    }
    .form-header-group .form-subHeader {
      color: #6f6f6f;
    }
    .form-sub-label {
      color: #6f6f6f;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html {
      color: #6f6f6f;
    }
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555555;
    }
    .form-line.form-line-active {
      -webkit-transition-property: all;
      -moz-transition-property: all;
      -ms-transition-property: all;
      -o-transition-property: all;
      transition-property: all;
      -webkit-transition-duration: 0.3s;
      -moz-transition-duration: 0.3s;
      -ms-transition-duration: 0.3s;
      -o-transition-duration: 0.3s;
      transition-duration: 0.3s;
      -webkit-transition-timing-function: ease;
      -moz-transition-timing-function: ease;
      -ms-transition-timing-function: ease;
      -o-transition-timing-function: ease;
      transition-timing-function: ease;
      background-color: rgba(255, 251, 234, 0);
    }
    /* omer */
    .form-radio-item,
    .form-checkbox-item {
      padding-bottom: 0px !important;
    }
    .form-radio-item:last-child,
    .form-checkbox-item:last-child {
      padding-bottom: 0;
    }
    /* omer */
    .form-single-column .form-checkbox-item,
    .form-single-column .form-radio-item {
      width: 100%;
    }
    .supernova {
      height: 100%;
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-position: center top;
      background-repeat: repeat;
    }
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
    /* | */
    .form-all {
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-position: center top;
      background-repeat: repeat;
    }
    .form-header-group {
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-position: center top;
    }
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
    .form-line {
      padding: 12px 36px;
    }
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      -webkit-border-radius: 100px;
      -moz-border-radius: 100px;
      border-radius: 100px;
    }
    .form-all .form-sub-label {
      margin-left: 3px;
    }
    .form-all {
      -webkit-border-radius: 6px;
      -moz-border-radius: 6px;
      border-radius: 6px;
    }
    .form-section:first-child {
      -webkit-border-radius: 6px 6px 0 0;
      -moz-border-radius: 6px 6px 0 0;
      border-radius: 6px 6px 0 0;
    }
    .form-section:last-child {
      -webkit-border-radius: 0 0 6px 6px;
      -moz-border-radius: 0 0 6px 6px;
      border-radius: 0 0 6px 6px;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 1em;
      padding: 9px 15px;
      font-family: "Roboto", sans-serif;
      font-size: 16px;
      font-weight: normal;
    }
    .form-all .form-pagebreak-back,
    .form-all .form-pagebreak-next {
      font-size: 1em;
      padding: 9px 15px;
      font-family: "Roboto", sans-serif;
      font-size: 14px;
      font-weight: normal;
    }
    /*
    & when ( @buttonFontType = google ) {
    @import (css) "@{buttonFontLink}";
  }
  */
  h2.form-header {
    line-height: 1.618em;
    font-size: 1.714em;
  }
  h2 ~ .form-subHeader {
    line-height: 1.5em;
    font-size: 1.071em;
  }
  .form-header-group {
    text-align: left;
  }
  /*.form-dropdown,
  .form-radio-item,
  .form-checkbox-item,
  .form-radio-other-input,
  .form-checkbox-other-input,*/
  .form-captcha input,
  .form-spinner input,
  .form-error-message {
    padding: 4px 3px 2px 3px;
  }
  .form-header-group {
    font-family: "Roboto", sans-serif;
  }
  .form-section {
    padding: 0px 0px 0px 0px;
  }
  .form-header-group {
    margin: 12px 0px 12px 0px;
  }
  .form-header-group {
    padding: 24px 36px 24px 36px;
  }
  .form-textbox,
  .form-textarea {
    padding: 4px 3px 2px 3px;
  }
  .form-textbox,
  .form-textarea,
  .form-radio-other-input,
  .form-checkbox-other-input,
  .form-captcha input,
  .form-spinner input {
    background-color: #ffffff;
  }
  .form-dropdown {
    -webkit-appearance: menulist-button;
    border-color: #cccccc;
  }
  [data-type="control_dropdown"] .form-input,
  [data-type="control_dropdown"] .form-input-wide {
    width: 150px;
  }
  .form-label {
    font-family: "Roboto", sans-serif;
  }
  li[data-type="control_image"] div {
    text-align: left;
  }
  li[data-type="control_image"] img {
    border: none;
    border-width: 0px !important;
    border-style: solid !important;
    border-color: false !important;
  }
  .form-line-column {
    width: auto;
  }
  .form-line-error {
    overflow: hidden;
    -webkit-transition-property: none;
    -moz-transition-property: none;
    -ms-transition-property: none;
    -o-transition-property: none;
    transition-property: none;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    -ms-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease;
    -moz-transition-timing-function: ease;
    -ms-transition-timing-function: ease;
    -o-transition-timing-function: ease;
    transition-timing-function: ease;
    background-color: #fff4f4;
  }
  .form-line-error .form-error-message {
    background-color: #ff3200;
    clear: both;
    float: none;
  }
  .form-line-error .form-error-message .form-error-arrow {
    border-bottom-color: #ff3200;
  }
  .form-line-error input:not(#coupon-input),
  .form-line-error textarea,
  .form-line-error .form-validation-error {
    border: 1px solid #ff3200;
    -webkit-box-shadow: 0 0 3px #ff3200;
    -moz-box-shadow: 0 0 3px #ff3200;
    box-shadow: 0 0 3px #ff3200;
  }
  .ie-8 .form-all {
    margin-top: auto;
    margin-top: initial;
  }
  .ie-8 .form-all:before {
    display: none;
  }
  /* | */
  @media screen and (max-width: 480px), screen and (max-device-width: 768px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
    .testOne {
      letter-spacing: 0;
    }
    .jotform-form {
      padding: 12px 0 0 0;
    }
    .form-all {
      border: 0;
      width: 94%!important;
      max-width: initial;
    }
    .form-sub-label-container {
      width: 100%;
      margin: 0;
      margin-right: 0;
      float: left;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    span.form-sub-label-container + span.form-sub-label-container {
      margin-right: 0;
    }
    .form-sub-label {
      white-space: normal;
    }
    .form-address-table td,
    .form-address-table th {
      padding: 0 1px 10px;
    }
    .form-submit-button,
    .form-submit-print,
    .form-submit-reset {
      width: 100%;
      margin-left: 0!important;
    }
    div[id*=at_] {
      font-size: 14px;
      font-weight: 700;
      height: 8px;
      margin-top: 6px;
    }
    .showAutoCalendar {
      width: 20px;
    }
    img.form-image {
      max-width: 100%;
      height: auto;
    }
    .form-matrix-row-headers {
      width: 100%;
      word-break: break-all;
      min-width: 40px;
    }
    .form-collapse-table,
    .form-header-group {
      margin: 0;
    }
    .form-collapse-table {
      height: 100%;
      display: inline-block;
      width: 100%;
    }
    .form-collapse-hidden {
      display: none !important;
    }
    .form-input {
      width: 100%;
    }
    .form-label {
      width: 100% !important;
    }
    .form-label-left,
    .form-label-right {
      display: block;
      float: none;
      text-align: left;
      width: auto!important;
    }
    .form-line,
    .form-line.form-line-column {
      padding: 2% 5%;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    input[type=text],
    input[type=email],
    input[type=tel],
    textarea {
      width: 100%;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      max-width: initial !important;
    }
    .form-dropdown,
    .form-textarea,
    .form-textbox {
      width: 100%!important;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    .form-input,
    .form-input-wide,
    .form-textarea,
    .form-textbox,
    .form-dropdown {
      max-width: initial!important;
    }
    .form-address-city,
    .form-address-line,
    .form-address-postal,
    .form-address-state,
    .form-address-table,
    .form-address-table .form-sub-label-container,
    .form-address-table select,
    .form-input {
      width: 100%;
    }
    div.form-header-group {
      padding: 24px 36px !important;
      padding-left: 5%!important;
      padding-right: 5%!important;
      margin: 0 12px 2% !important;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    div.form-header-group.hasImage img {
      max-width: 100%;
    }
    [data-type="control_button"] {
      margin-bottom: 0 !important;
    }
    [data-type=control_fullname] .form-sub-label-container {
      width: 48%;
    }
    [data-type=control_fullname] .form-sub-label-container:first-child {
      margin-right: 4%;
    }
    [data-type=control_phone] .form-sub-label-container {
      width: 65%;
    }
    [data-type=control_phone] .form-sub-label-container:first-child {
      width: 31%;
      margin-right: 4%;
    }
    [data-type=control_datetime] .form-sub-label-container + .form-sub-label-container,
    [data-type=control_datetime] .form-sub-label-container:first-child {
      width: 27.3%;
      margin-right: 6%;
    }
    [data-type=control_datetime] .form-sub-label-container + .form-sub-label-container + .form-sub-label-container {
      width: 33.3%;
      margin-right: 0;
    }
    [data-type=control_datetime] span + span + span > span:first-child {
      display: block;
      width: 100% !important;
    }
    [data-type=control_birthdate] .form-sub-label-container,
    [data-type=control_datetime] span + span + span > span:first-child + span + span,
    [data-type=control_time] .form-sub-label-container {
      width: 27.3%!important;
      margin-right: 6% !important;
    }
    [data-type=control_birthdate] .form-sub-label-container:last-child,
    [data-type=control_time] .form-sub-label-container:last-child {
      width: 33.3%!important;
      margin-right: 0 !important;
    }
    .form-pagebreak-back-container,
    .form-pagebreak-next-container {
      width: 50% !important;
    }
    .form-pagebreak-back,
    .form-pagebreak-next,
    .form-product-item.hover-product-item {
      width: 100%;
    }
    .form-pagebreak-back-container {
      padding: 0;
      text-align: right;
    }
    .form-pagebreak-next-container {
      padding: 0;
      text-align: left;
    }
    .form-pagebreak {
      margin: 0 auto;
    }
    .form-buttons-wrapper {
      margin: 0!important;
      margin-left: 0!important;
    }
    .form-buttons-wrapper button {
      width: 100%;
    }
    .form-buttons-wrapper .form-submit-print {
      margin: 0 !important;
    }
    table {
      width: 100%!important;
      max-width: initial!important;
    }
    table td + td {
      padding-left: 3%;
    }
    .form-checkbox-item,
    .form-radio-item {
      white-space: normal!important;
    }
    .form-checkbox-item input,
    .form-radio-item input {
      width: auto;
    }
    .form-collapse-table {
      margin: 0 5%;
      display: block;
      zoom: 1;
      width: auto;
    }
    .form-collapse-table:before,
    .form-collapse-table:after {
      display: table;
      content: '';
      line-height: 0;
    }
    .form-collapse-table:after {
      clear: both;
    }
    .fb-like-box {
      width: 98% !important;
    }
    .form-error-message {
      clear: both;
      bottom: -10px;
    }
    .date-separate,
    .phone-separate {
      display: none;
    }
    .custom-field-frame,
    .direct-embed-widgets,
    .signature-pad-wrapper {
      width: 100% !important;
    }
  }
  /* | */

  /*PREFERENCES STYLE*/
  .form-all {
    font-family: Roboto, sans-serif;
  }
  .form-all .qq-upload-button,
  .form-all .form-submit-button,
  .form-all .form-submit-reset,
  .form-all .form-submit-print {
    font-family: Roboto, sans-serif;
  }
  .form-all .form-pagebreak-back-container,
  .form-all .form-pagebreak-next-container {
    font-family: Roboto, sans-serif;
  }
  .form-header-group {
    font-family: Roboto, sans-serif;
  }
  .form-label {
    font-family: Roboto, sans-serif;
  }

  .form-label.form-label-auto {

    display: inline-block;
    float: left;
    text-align: left;

  }

  .form-line {
    margin-top: 12px 36px 12px 36px px;
    margin-bottom: 12px 36px 12px 36px px;
  }

  .form-all {
    width: 690px;
  }

  .form-label-left,
  .form-label-right {
    width: 150px
  }

  .form-all {
    font-size: 14px
  }
  .form-all .qq-upload-button,
  .form-all .qq-upload-button,
  .form-all .form-submit-button,
  .form-all .form-submit-reset,
  .form-all .form-submit-print {
    font-size: 14px
  }
  .form-all .form-pagebreak-back-container,
  .form-all .form-pagebreak-next-container {
    font-size: 14px
  }

  .supernova .form-all, .form-all {
    background-color: #65a0c8;
    border: 1px solid transparent;
  }

  .form-all {
    color: #000000;
  }
  .form-header-group .form-header {
    color: #000000;
  }
  .form-header-group .form-subHeader {
    color: #000000;
  }
  .form-label-top,
  .form-label-left,
  .form-label-right,
  .form-html,
  .form-checkbox-item label,
  .form-radio-item label {
    color: #000000;
  }
  .form-sub-label {
    color: #1a1a1a;
  }

  .supernova {
    background-color: #000;
  }
  .supernova body {
    background: transparent;
  }

  .form-textbox,
  .form-textarea,
  .form-radio-other-input,
  .form-checkbox-other-input,
  .form-captcha input,
  .form-spinner input {
    background-color: #fff;
  }

  .supernova {
    background-image: none;
  }
  #stage {
    background-image: none;
  }

  .form-all {
    background-image: none;
  }

  .form-all {
    position: relative;
  }
  .form-all:before {
    content: "";
    background-image: url("https://www.jotform.com/uploads/guest_71944583896071/form_files/academy.38.jpg");
    display: inline-block;
    height: 140px;
    position: absolute;
    background-size: 353px 140px;
    background-repeat: no-repeat;
    width: 100%;
  }
  .form-all {
    margin-top: 150px !important;
  }
  .form-all:before {
    top: -150px;
    background-position: top center;
  }

  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }

  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
  /*---------------------
  Theme: Generic Theme
  Author: Elton Cris - idarktech@jotform.com
  www.jotform.com
  ----------------------*/
  .form-all {
    -moz-box-sizing : border-box;
    -webkit-box-sizing : border-box;
    box-sizing : border-box;
  }

  [data-type="control_head"] {
    padding-bottom : 20px;
  }

  /*responsive fields*/
  [data-type="control_textbox"] .form-textbox,
  [data-type="control_fullname"] .form-textbox,
  [data-type="control_email"] .form-textbox,
  [data-type="control_textarea"] .form-textarea,
  [data-type="control_dropdown"] .form-dropdown {
    width : 100% !important;
    max-width : none !important;
  }

  .form-textbox, .form-textarea, .form-dropdown {
    max-width : none !important;
    box-shadow : none;
    outline : none;
    box-sizing : border-box;
    -webkit-box-sizing : border-box;
    -moz-box-sizing : border-box;
    font-family : inherit;
  }

  [data-type="control_dropdown"] .form-input,
  [data-type="control_dropdown"] .form-input-wide {
    width : 100%;
  }

  .form-matrix-table {
    width : 100%;
  }

  /*input focus*/
  .form-line-active input:focus, .form-line-active textarea:focus, .form-line-active select:focus {
    box-shadow : none;
  }

  /*reset error*/
  .form-line-error {
    box-shadow : none;
  }

  /*input error*/
  .form-line-error input:not(#coupon-input), .form-line-error textarea, .form-line-error select, .form-line-error .form-validation-error {
    border : 1px solid #e15353 !important;
    box-shadow : none !important;
  }

  .form-line-active {
    color : inherit !important;
  }

  /*responsive content -wide or shrink*/
  .form-label {
    width : 35% !important;
    box-sizing : border-box;
    -webkit-box-sizing : border-box;
    -moz-box-sizing : border-box;
  }

  .form-label-top {
    width : 100% !important;
  }

  .form-line {
    box-sizing : border-box;
    -webkit-box-sizing : border-box;
    -moz-box-sizing : border-box;
    width : 100%;
  }

  .form-checkbox-other-input {
    width : 80% !important;
  }

  .form-input {
    width : 65% !important;
    max-width : none !important;
  }

  .form-input-wide {
    max-width : none !important;
    display : inline-block;
    width : 100%;
  }

  /*single fields with sublabels*/
  [data-type="control_textbox"] .form-input-wide .form-sub-label-container,
  [data-type="control_fullname"] .form-input-wide .form-sub-label-container,
  [data-type="control_email"] .form-input-wide .form-sub-label-container,
  [data-type="control_textarea"] .form-input-wide .form-sub-label-container,
  [data-type="control_dropdown"] .form-input-wide .form-sub-label-container,
  [data-type="control_textbox"] .form-input .form-sub-label-container,
  [data-type="control_fullname"] .form-input .form-sub-label-container,
  [data-type="control_email"] .form-input .form-sub-label-container,
  [data-type="control_textarea"] .form-input .form-sub-label-container,
  [data-type="control_dropdown"] .form-input .form-sub-label-container {
    width : 100%;
    max-width : none !important;
  }

  [data-type="control_dropdown"] .form-input-wide {
    width : 100%;
  }

  /*responsive full name*/
  [data-type="control_fullname"] .form-sub-label-container {
    width : 50% !important;
    margin : 0;
    float : left;
    box-sizing : border-box;
  }

  [data-type="control_fullname"] .form-label + div .form-sub-label-container {
    display : inline-block;
    padding-right : 5px;
  }

  [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container {
    margin-right : 0;
    padding-right : 0;
    padding-left : 5px;
  }

  [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container {
    margin-right : 0;
    padding-right : 0;
    padding-left : 5px;
  }

  [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container + .form-sub-label-container {
    padding-left : 0;
    padding-right : 5px;
  }

  [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container + .form-sub-label-container + .form-sub-label-container {
    padding-left : 5px;
    padding-right : 0;
  }

  [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container  + .form-sub-label-container + .form-sub-label-container + .form-sub-label-container {
    padding-right : 5px;
    padding-left : 0;
  }

  #sublabel_prefix, #sublabel_first, #sublabel_middle {
    /*margin-bottom : 10px;
    */;
  }

  /*remove sepatators on date and phone*/
  .phone-separate, .date-separate {
    display : none;
  }

  /*responsive phone fields*/
  [data-type="control_phone"] input[name$="[area]"] {
    width : 100%;
  }

  [data-type="control_phone"] input[name$="[phone]"] {
    width : 100%;
  }

  [data-type="control_phone"] input[name$="[full]"] {
    width : 100%;
  }

  [data-type="control_phone"] .form-sub-label-container {
    width : 40%;
    float : left;
    box-sizing : border-box;
    margin-right : 0;
    padding-right : 12px;
  }

  /* responsive date time field */
  [data-type="control_datetime"] .form-textbox,
  [data-type="control_datetime"] .form-dropdown {
    width : 100%;
  }

  [data-type="control_datetime"] .form-sub-label-container {
    width : 28%;
    padding-left : 4px;
    box-sizing : border-box;
    margin-right : 0;
  }

  [data-type="control_datetime"] .form-sub-label-container:first-child {
    padding-left : 0;
  }

  [data-type="control_datetime"] .form-sub-label-container:first-child + .form-sub-label-container + .form-sub-label-container {
    padding-right : 0;
  }

  [data-type="control_datetime"] .form-sub-label-container:last-child {
    width : auto !important;
  }

  .allowTime-container .form-sub-label-container:last-child {
    width : 20% !important;
  }

  span.allowTime-container {
    width : 80%;
    padding-top : 14px;
  }

  .allowTime-container span.form-sub-label-container {
    width : 35%;
  }

  span.allowTime-container .form-dropdown {
    width : 100%;
  }

  span.allowTime-container > span:first-child {
    display : none;
  }

  span.allowTime-container > span:first-child + span {
    padding-left : 0;
  }

  .showAutoCalendar + label {
    display : none;
  }

  span.allowTime-container + span {
    padding-top : 14px;
  }

  /*calendar lite mode*/
  [data-type="control_datetime"] div[style*="none"] + .form-sub-label-container {
    width : 84%;
    padding-left : 0;
  }

  /*responsive phone field*/
  [data-type="control_phone"] .form-sub-label-container + .form-sub-label-container {
    width : 60%;
    margin-right : 0;
    padding-right : 0;
    padding-left : 12px;
  }

  /*responsive full address fields*/
  .form-address-city, .form-address-line, .form-address-postal,
  .form-address-state, .form-address-table,
  .form-address-table .form-sub-label-container, .form-address-table select {
    width : 100%;
    max-width : 100%;
  }

  [data-type="control_address"] input[name$="[city]"],
  [data-type="control_address"] input[name$="[postal]"] {
    width : 90% !important;
  }

  [data-type="control_address"] input[name$="[area]"] {
    width : 60%;
  }

  /*reset submit button*/
  [data-type="control_button"] {
    background : transparent !important;
  }

  .form-submit-button,
  .form-submit-reset,
  .form-submit-print {
    outline : none;
  }

  /*remove other checkbox*/
  .form-checkbox-other,
  .form-radio-other {
    visibility : hidden !important;
  }

  /*shruken fields*/
  .form-line-column {
    width : 50%;
  }

  .form-line-column .form-label-top {
    width : 100% !important;
  }

  /*fix form builder display*/
  div#stage.form-all {
    max-width : none !important;
    margin-right : 0;
  }

  div#stage .form-input {
    width : 64% !important;
  }

  /*remove first pagebreak back button*/
  .form-all .page-section:first-child .form-pagebreak .form-pagebreak-back-container {
    display : none !important;
  }

  /* responsive pagebreak */
  .form-pagebreak-back-container {
    width : 50% !important;
    text-align : left;
    box-sizing : border-box;
    -webkit-box-sizing : border-box;
    float : left;
  }

  .form-pagebreak-next-container {
    width : 50% !important;
    text-align : right;
    box-sizing : border-box;
    -webkit-box-sizing : border-box;
    float : left;
  }

  /* radio-checkbox button make border 1px */
  .form-radio-item:not(#foo) label:after,
  .form-radio-item:not(#foo) label:before {
    border-radius : 50%;
  }

  .form-checkbox-item:not(#foo) label:after,
  .form-checkbox-item:not(#foo) label:before {
    border-radius : 0;
  }

  .form-radio-item:not(#foo) label:before,
  .form-checkbox-item:not(#foo) label:before {
    border-width : 1px;
  }

  /*responsive credit card on payment fields*/
  table td + td {
    padding-left : 0;
  }

  .form-address-table {
    width : 100%;
  }

  [data-type="control_stripe"] .form-address-table,
  [data-type="control_stripe"] .form-address-table .form-textbox,
  [data-type="control_authnet"] .form-address-table,
  [data-type="control_authnet"] .form-address-table .form-textbox,
  #creditCardTable.form-address-table,
  #creditCardTable.form-address-table .form-textbox {
    max-width : none;
  }

  [data-type="control_stripe"] .form-address-table td:last-child .form-sub-label-container,
  [data-type="control_authnet"] .form-address-table td:last-child .form-sub-label-container,
  #creditCardTable.form-address-table td:last-child .form-sub-label-container {
    margin-left : 0;
    white-space : normal;
  }

  [data-type="control_stripe"] .form-address-table td .form-sub-label-container,
  [data-type="control_authnet"] .form-address-table td .form-sub-label-container,
  #creditCardTable.form-address-table td .form-sub-label-container {
    width : 100%;
  }

  [data-type="control_stripe"] .form-address-table .form-textbox,
  [data-type="control_stripe"] .form-address-table .form-dropdown,
  [data-type="control_authnet"] .form-address-table .form-textbox,
  [data-type="control_authnet"] .form-address-table .form-dropdown,
  #creditCardTable.form-address-table .form-textbox,
  #creditCardTable.form-address-table .form-dropdown {
    width : 100%;
    visibility : visible;
  }

  [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr td:first-child span,
  [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr td:first-child span,
  #creditCardTable.form-address-table tbody > tr:first-child + tr td:first-child span {
    margin : 0;
    padding-right : 6px;
    box-sizing : border-box;
    -webkit-box-sizing : border-box;
  }

  [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr td:first-child + td span,
  [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr td:first-child + td span,
  #creditCardTable.form-address-table tbody > tr:first-child + tr td:first-child + td span {
    margin : 0;
    padding-left : 6px;
    box-sizing : border-box;
    -webkit-box-sizing : border-box;
  }

  [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span,
  [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span,
  [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span,
  [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span,
  #creditCardTable.form-address-table tbody > tr:first-child + tr +tr td:first-child span,
  #creditCardTable.form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span {
    margin : 0;
    padding-right : 6px;
    width : 50% !important;
    visibility : hidden;
    float : left;
    box-sizing : border-box;
    -webkit-box-sizing : border-box;
  }

  [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span + span,
  [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span + span,
  [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span + span,
  [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span + span,
  #creditCardTable.form-address-table tbody > tr:first-child + tr +tr td:first-child span + span,
  #creditCardTable.form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span + span {
    margin : 0;
    padding-top : 0 !important;
    padding-right : 0;
    padding-left : 6px;
    width : 50% !important;
    box-sizing : border-box;
    -webkit-box-sizing : border-box;
  }

  .cc_ccv {
    width : 100% !important;
  }

  [data-type="control_stripe"] .form-address-table .form-sub-label,
  [data-type="control_authnet"] .form-address-table .form-sub-label,
  #creditCardTable.form-address-table .form-sub-label {
    visibility : visible;
  }

  /*cc fix city state, country */
  [data-type="control_stripe"] .form-address-table td[width="50%"]>span:first-child,
  [data-type="control_authnet"] .form-address-table td[width="50%"]>span:first-child,
  #creditCardTable.form-address-table td[width="50%"]>span:first-child {
    box-sizing : border-box;
    padding-right : 7px;
  }

  [data-type="control_stripe"] .form-address-table td[width="50%"] + td >span:first-child,
  [data-type="control_authnet"] .form-address-table td[width="50%"] + td >span:first-child,
  #creditCardTable.form-address-table td[width="50%"] + td >span:first-child {
    box-sizing : border-box;
    padding-left : 7px;
  }

  [data-type="control_stripe"] .form-address-table td[width="50%"] + td[width="50%"] >span:first-child,
  [data-type="control_authnet"] .form-address-table td[width="50%"] + td[width="50%"] >span:first-child,
  #creditCardTable.form-address-table td[width="50%"] + td[width="50%"] >span:first-child {
    box-sizing : border-box;
    padding-right : 0;
  }

  .hover-product-item:hover {
    color : inherit;
  }

  /*fix for braintree cc styling*/
  [data-type="control_braintree"] .form-sub-label-container {
    width : 100% !important;
    padding : 4px;
    box-sizing : border-box;
  }

  [data-type="control_braintree"] .form-textbox {
    width : 100%;
  }

  .braintree-hosted-fields {
    width : 100% !important;
    box-sizing : border-box;
    min-height : 28px;
  }

  /*remove bottom spacing on CC section*/
  #creditCardTable.form-address-table tbody tr + tr + tr td,
  [data-type="control_stripe"] .form-address-table tbody tr + tr + tr td,
  [data-type="control_authnet"] .form-address-table tbody tr + tr + tr td {
    padding-bottom : 0;
  }

  @media screen and (max-width:768px){
    .form-all {
      margin : 0 auto !important;
      width : 100% !important;
    }

    [data-type=control_fullname] .form-sub-label-container:first-child {
      margin-right : 0;
    }

  }

  @media screen and (max-width:480px){
    .jotform-form {
      padding : 0;
    }

    .form-input {
      width : 100% !important;
    }

    .form-label {
      width : 100% !important;
      float : none !important;
    }

    .form-line-column {
      width : 100% !important;
    }

    div.form-header-group {
      margin : 0 !important;
      padding : 24px 20px !important;
    }

    [data-type="control_datetime"] .form-sub-label-container {
      float : left;
    }

    [data-type=control_fullname] .form-sub-label-container:first-child {
      margin-right : 0;
    }

  }


  /* Injected CSS Code */
  </style>

  <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
  <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.997" type="text/javascript"></script>
</head>
<body>
  <form class="jotform-form" action="update.php" method="post" name="vote" accept-charset="utf-8">
    <div class="form-all">
      <ul class="form-section page-section">
        <li id="cid_3" class="form-input-wide" data-type="control_head">
          <div class="form-header-group ">
            <div class="header-text httal htvam">
              <h1 id="header_3" class="form-header" data-component="header">
                The best POOLers
              </h1>
              <div id="subHeader_3" class="form-subHeader">
                Time to find the best student out there. Make your bets:
              </div>
              <div id="subHeader_3" class="form-subHeader">
                Don't know your colleagues yet? Check them out <a style="color: red;" href="users.php">here</a>
              </div>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_textbox" id="id_4">
          <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> The sleeper </label>
          <div id="cid_4" class="form-input jf-required">
            <select name="sleeper">
              <option value=""></option>
              <?php $votes->getCandidates(); ?>
            </select>
          </div>
        </li>
        <li class="form-line" data-type="control_textbox" id="id_5">
          <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> The thinker </label>
          <div id="cid_5" class="form-input jf-required">
            <select name="thinker">
              <option value=""></option>
              <?php $votes->getCandidates(); ?>
            </select>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6"> The solution oriented </label>
        <div id="cid_6" class="form-input jf-required">
          <select name="solution">
            <option value=""></option>
            <?php $votes->getCandidates(); ?>
          </select>
        </select>
      </div>
    </li>
    <li class="form-line" data-type="control_textbox" id="id_7">
      <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7"> Bundle of energy </label>
      <div id="cid_7" class="form-input jf-required">
        <select name="energy">
          <option value=""></option>
          <?php $votes->getCandidates(); ?>
        </select>
      </select>
    </div>
  </li>
  <li class="form-line" data-type="control_textbox" id="id_8">
    <label class="form-label form-label-left form-label-auto" id="label_8" for="input_8"> Best team player </label>
    <div id="cid_8" class="form-input jf-required">
      <select name="team">
        <option value=""></option>
        <?php $votes->getCandidates(); ?>
      </select>
    </select>
  </div>
</li>
<li class="form-line" data-type="control_textbox" id="id_9">
  <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> He has a serious face </label>
  <div id="cid_9" class="form-input jf-required">
    <select name="serious">
      <option value=""></option>
      <?php $votes->getCandidates(); ?>
    </select>
  </select>
</div>
</li>
<li class="form-line" data-type="control_textbox" id="id_10">
  <label class="form-label form-label-left form-label-auto" id="label_10" for="input_10"> She has a beautiful smile </label>
  <div id="cid_10" class="form-input jf-required">
    <select name="beautiful">
      <option value=""></option>
      <?php $votes->getCandidates(); ?>
    </select>
  </select>
</div>
</li>
<li class="form-line" data-type="control_textbox" id="id_11">
  <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11"> The coffee drinker </label>
  <div id="cid_11" class="form-input jf-required">
    <select name="coffee">
      <option value=""></option>
      <?php $votes->getCandidates(); ?>
    </select>
  </select>
</div>
</li>
<li class="form-line" data-type="control_textbox" id="id_12">
  <label class="form-label form-label-left form-label-auto" id="label_12" for="input_12"> Player of the week </label>
  <div id="cid_12" class="form-input jf-required">
    <select name="player">
      <option value=""></option>
      <?php $votes->getCandidates(); ?>
    </select>
  </select>
</div>
</li>
<li class="form-line" data-type="control_textbox" id="id_13">
  <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13"> The hard worker </label>
  <div id="cid_13" class="form-input jf-required">
    <select name="hard">
      <option value=""></option>
      <?php $votes->getCandidates(); ?>
    </select>
  </select>
</div>
</li>
<li class="form-line" data-type="control_textbox" id="id_14">
  <label class="form-label form-label-left form-label-auto" id="label_14" for="input_14"> The most active </label>
  <div id="cid_14" class="form-input jf-required">
    <select name="active">
      <option value=""></option>
      <?php $votes->getCandidates(); ?>
    </select>
  </select>
</div>
</li>
<li class="form-line" data-type="control_button" id="id_2">
  <div id="cid_2" class="form-input-wide">
    <div style="text-align:center;" class="form-buttons-wrapper">
      <button id="input_2" type="submit" class="form-submit-button" data-component="button">
        Submit
      </button>
      <a href="logout.php"><button type="button" class="form-submit-button" data-component="button">
        Sign out
      </button></a>
    </div>
  </div>
</li>
</ul>
</div>
<div class="formFooter-heightMask">
</div>
</form></body>
</html>
<?php
}
?>

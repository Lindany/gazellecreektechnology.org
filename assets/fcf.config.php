<?php
// ***********************************************************
// This file is part of a package from:
// www.freecontactform.com

// Free Version
// 29 October 2020

// You are free to use for your own use. 
// You cannot resell or repackage in any way.

// Important legal notice:
// You must retain the attribution to www.freecontactform.com 
// If must be visible on the same page as the form.
// Or switch to the Pro version without attribution/credit.

// ***********************************************************

// ***********
// LICENSE KEY
// ***********
define('KEY', 'FREE');


// *********************
// FORM FIELD VALIDATION
// *********************
$rules = array(
  "Name" => array(
    "required" => true,
    "label" => "Your name",
    "maxLength" => 100
  ),
  "Email" => array(
    "required" => true,
    "label" => "Your email address",
    "maxLength" => 100,
    "email" => true
  ),
  "Phone" => array(
    "required" => false,
    "label" => "Your phone number",
    "maxLength" => 30
  ),
  "Message" => array(
    "required" => true,
    "label" => "Your message",
    "maxLength" => 3000
  )
);


// ******************
// THANK YOU PAGE
// ******************
define('THANK_YOU_PAGE','');


// **************************
// EMAIL TEMPLATES - INCOMING
// **************************
define('EMAIL_TEMPLATE_IN_HTML', 'fcf.email-in.htm');
define('EMAIL_TEMPLATE_IN_TEXT', 'fcf.email-in.txt');


// *******************************
// EMAIL TEMPLATES - AUTO-RESPONSE
// *******************************
define('EMAIL_TEMPLATE_OUT_HTML', 'fcf.email-out.htm');
define('EMAIL_TEMPLATE_OUT_TEXT', 'fcf.email-out.txt');

define('SEND_AUTO_RESPONSE', 'NO'); // YES OR NO
define('EMAIL_OUT_SUBJECT', '');
define('EMAIL_OUT_TO', 'FIELD:Email');
define('EMAIL_OUT_TO_NAME', 'FIELD:Name');
define('EMAIL_OUT_FROM', '');
define('EMAIL_OUT_FROM_NAME', '');


// *************
// EMAIL MESSAGE
// *************
define('EMAIL_TO', 'info@gctza.co.za');
define('EMAIL_TO_NAME', 'Gazelle Creek Technologies');

define('EMAIL_TO_CC', 'mabasolindaniricardo@gmail.com');
define('EMAIL_TO_CC_NAME', 'Lindani');

define('EMAIL_TO_BCC', 'contact@gctza.co.za');
define('EMAIL_TO_BCC_NAME', 'Lindani Mabaso - GCT');

define('EMAIL_FROM', 'contact@gctza.co.za');
define('EMAIL_FROM_NAME', 'Gazelle Creek Technologies');

define('EMAIL_REPLY_TO', 'FIELD:Email');
define('EMAIL_REPLY_TO_NAME', 'FIELD:Email');

define('EMAIL_SUBJECT_BEFORE', 'Website Email');
define('EMAIL_SUBJECT', "New Website Contact Email");
define('EMAIL_SUBJECT_AFTER', 'Email from Website');



// ***************
// EMAIL TRANSPORT
// ***************
define('USE_SMTP', 'NO'); // YES or NO
define('SMTP_HOST', 'mail.gctza.co.za');
define('SMTP_USER', 'contact@gctza.co.za');
define('SMTP_PASS', 'contact@gctza.co.za');
define('SMTP_AUTH', '');
define('SMTP_SECURE', ''); // STARTTLS, SMTPS (port 465) or empty
define('SMTP_PORT', '');
define('SMTP_DEBUG', 'NO'); // YES or NO



// **************************
//    DON'T CHANGE BELOW
// USED FOR VALIDATION CHECKS
// **************************
define('A', 'Rm9ybSBwcm92aWRlZCBieSB3d3cuZnJlZWNvbnRhY3Rmb3JtLmNvbQ==');
define('B', 'Rm9ybSBwcm92aWRlZCBieSA8YSBocmVmPSJodHRwczovL3d3dy5mcmVlY29udGFjdGZvcm0uY29tIj5GcmVlQ29udGFjdEZvcm0uY29tPC9hPg==');
define('C', 'Rm9ybSBwcm92aWRlZCBieSA8YSBocmVmPSJodHRwczovL3d3dy5mcmVlY29udGFjdGZvcm0uY29tIiB0YXJnZXQ9Il9ibGFuayI+RnJlZUNvbnRhY3RGb3JtLmNvbTwvYT4=');
define('D', 'Y29uZ3JhdHVsYXRpb25zIGZvciBiZWluZyBjbGV2ZXIh');
define('E', 'OGZlR3dSYkh3MjhGbg==');
define('F', 'RlJFRQ==');
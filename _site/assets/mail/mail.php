<?php

 /*----------------------------------------------------------------------------*\
|*  Email settings for sending all emails from your website forms.              *|
 \*============================================================================*/

// Choose here whether to use php mail() function or your SMTP server (recommended) to send the email.
// Use 'smtp' for better reliability, or use 'phpmail' for quick + easy setup with lower reliability.
$emailMethod                = 'smtp'; // REQUIRED value. Options: 'smtp' , 'phpmail'

// Outgoing Server Settings - replace values on the right of the = sign with your own.
// These 3 settings are only required if you choose 'smtp' for emailMethod above.
$outgoingServerAddress      = ''; // Consult your hosting provider.
$outgoingServerPort         = '';                  // Options: '587' , '25' - Consult your hosting provider.
$outgoingServerSecurity     = 'tls';                 // Options: 'ssl' , 'tls' , null - Consult your hosting provider.

// Sending Account Settings - replace these details with an email account held on the SMTP server entered above.
// These 2 settings are only required if you choose 'smtp' for emailMethod above.
$sendingAccountUsername     = '';
$sendingAccountPassword     = '';

// Recipient (To:) Details  - Change this to the email details of who will receive all the emails from the website.
$recipientEmail             = ''; // REQUIRED value.
$recipientName              = '';             // REQUIRED value.

// Email details            - Change these to suit your website needs
$emailSubject               = 'GBT: Contact Us Form'; // REQUIRED value. Subject of the email that the recipient will see
$websiteName                = 'GBT';                // REQUIRED value. This is used when a name or email is not collected from the website form

$timeZone					= 'Australia/Melbourne';         // OPTIONAL, but some servers require this to be set.
                                                             // See a list of all supported timezones at: http://php.net/manual/en/timezones.php
 /*----------------------------------------------------------------------------*\
|*  You do not need to edit anything below this line, the rest is automatic.    *|
 \*============================================================================*/
include('lib/mail_sender.php');

?>
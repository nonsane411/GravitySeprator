<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);    

/**
 * Check if a honeypot field was filled on the form
 * By checking on the $_REQUEST for the given field names
 * in the $honeypot_fields. The field names passed on this
 * var must be empty on the REQUEST.
 * 
 * @param $req {Array} must receive $_REQUEST superglobal
 * @return {Boolean} tells if the honeypot catched something
 */
function honeypot_validade ($req) {
   
    if (!empty($req)) {

        $honeypot_fields = [
            "hname",
            "hemail"
        ];

        foreach ($honeypot_fields as $field) {
            if (isset($req[$field]) && !empty($req[$field])) {
                return false;
            }
        }
    }

    return true;
}

if (honeypot_validade($_REQUEST)) {
    // The honeypot fields are clean, go on
    $is_spammer = false;
   
   ini_set( 'display_errors',1); 
    error_reporting( E_ALL );
    $from = "contact@centrifugalsiever.com";///Mail created from your site
    $to = "info@centrifugalsiever.com"; ;//Reciver Address
    $subject = "MESSAGE FROM WEBSITE";//Subject
    $v10=$_POST['name'];
    $v1= $_POST['designation'];
    $v2= $_POST['company'];
    $v3= $_POST['address'];
    $v4= $_POST['city'];
    $v5= $_POST['country'];
    $v6= $_POST['areacode'];
    $v7= $_POST['mobilenumber'];
    $v9= $_POST['message'];
    $v8= $_POST['email'];
    $txt = "\nName - " .$v10.".\ndesignation - ". $v1  . "\nCompany -  " .$v2. "\naddress -  " .$v3. "\ncity -  " .$v4. "\ncountry - " .$v5. "\n areacode -" .$v6. "\nemail -" .$v8. "\nmobilenumber - ".$v7. "\nMessage - " .$v9;
    $message = $txt;//Message-Body
    
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
    echo "The message was successfully sent.";
    echo "Thank You";
    header('refresh: 3; url= https://centrifugalsiever.com'); 
    
} else {
    // A spammer filled a honeypot field
    $is_spammer = true;

   header('url= https://centrifugalsiever.com'); 

}
?>
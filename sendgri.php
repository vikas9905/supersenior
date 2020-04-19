        <?php
/*require 'sendgridemail/vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("vikas6.7mishra@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("nkmishrarxl@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);

$sendgrid = new \SendGrid($api_key);
if($sendgrid->send($email)){
    echo'email send';
}
 else{
    echo 'not sended';
 }  */
        
        $email='pritymishra9905@gmail.com';
        $name='vikash';
        $body='it is your code';
        $sub="SUPERSINIOR";
        $headers=array("Authorization: api key",
                  'Content-Type: application/json'
            );
        $data=array(
            "personalizations"=>array(
                array(
                    "to"=>array(
                        array(
                            "email"=>$email,
                            "name"=>$name
                        )
                    )
                )
            ),
            "from"=>array(
               "email"=>"vikas6.7mishra@gmail.com" 
            ),
            "subject"=>$sub,
            "content"=>array(
                array(
                    "type"=>"text/html",
                    "value"=>$body
                )
            )
        );
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,"https://api.sendgrid.com/v3/mail/send");
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        Curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $res= curl_exec($ch);
        curl_close($ch);
        echo $res;
        ?>

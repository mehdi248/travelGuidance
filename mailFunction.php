<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
            

    class CommonMail {
            
            private $LIBR,$PRIORITY,$TRANS_ENC,$ENCODING,$mail_to,$from_mail,$from_name, $att_files,$msg;
                    
            public function __construct() {
                    
                    $this->att_files = array();
                    $this->msg = array();
                    $this->LIBR =  "\r\n"; // use a "\r\n" if you have problems
                    $this->PRIORITY = 3; // 3 = normal, 2 = high, 4 = low
                    $this->TRANS_ENC = "7bit";
                    $this->ENCODING = "utf=8"; 
                    $this->headers = '';
                    
                    
                    
                    
            }

            public function sendQueryMail($email, $subject, $query) {
                        $message = file_get_contents('mailer.php'); // this mailer file which contain the design of mail how mail content will apear in email box
                        $message = str_replace("##query##", $query, $message); //query short code removed from mailer file
                        $message = str_replace("##senderEmail##", $email, $message); // visitor or sender shortcode removed from mailer file
                        $adminEmail = 'nrhasan174200@gmail.com'; // admin mail set it mail on which you want to receive query this is emai to which mail to be send
                        $this->sendMail($adminEmail, $subject, $message);
                        
                }
            public function registrationMail($email, $name, $password) {
                    $message = file_get_contents('signupMailer.html'); 
                    $message = str_replace("##name##", $name, $message); 
                    $message = str_replace("##email##", $email, $message);
                    $message = str_replace("##password##", $password, $message);

                    $this->sendMail($email, "Registration Successfull", $message);
                    $adminEmail = 'nrhasan174200@gmail.com'; // admin mail set it mail on which you want to receive query this is emai to which mail to be send
                    $this->sendMail($adminEmail, "New User Registration", $message);
                    
            }
            public function hotelBookingMail($email, $bookingId) {
                    $message = file_get_contents('hotelBookingMailer.html'); 
                    

                    $this->sendMail($email, "Hotel Booking Id: ".$bookingId, $message);
                    $adminEmail = 'travelguidancesystem@gmail.com'; // admin mail set it mail on which you want to receive query this is emai to which mail to be send
                    $this->sendMail($adminEmail, "Hotel Booking Id: ".$bookingId, $message);
                    
            }
            public function carBookingMail($email, $bookingId) {
                    $message = file_get_contents('carBookingMailer.html'); 
                    

                    $this->sendMail($email, "Car Booking Id: ".$bookingId, $message);
                    $adminEmail = 'travelguidancesystem@gmail.com'; // admin mail set it mail on which you want to receive query this is emai to which mail to be send
                    $this->sendMail($adminEmail, "Car Booking Id: ".$bookingId, $message);
                    
            }

            
            public function sendMail($email, $subject, $content, $arrFileId=array(), $arrFileName=array()) {
                    
                    date_default_timezone_set('Etc/UTC');
                    $rootDir = dirname(__FILE__);
                    require_once(dirname(__FILE__).'/PHPMailer-master/vendor/autoload.php');
                    $mail = new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->SMTPDebug = 0;
                    $mail->Debugoutput = 'html';
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 587;
                    $mail->SMTPSecure = 'tls';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'travelguidancesystem@gmail.com'; // this is mail from which mail to be send 
                    $mail->Password = 'mehdiraza321'; // keep password simple
                    $mail->setFrom('travelguidancesystem@gmail.com', 'Travel Guidance System'); //from email and from name 
                    $mail->addAddress($email, '');
                    $mail->Subject = $subject;
                    $mail->msgHTML($content);
                    
                    $mail->send();
                            
            }

        }
    

?>
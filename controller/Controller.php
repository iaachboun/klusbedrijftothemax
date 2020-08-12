<?php
require_once 'model/Logic.php';
class Controller{
	
	public function __construct() {
		$this->Logic = new Logic();
	}

	public function handleRequest()
	{
		try {
			$request = isset($_REQUEST['request'])?$_REQUEST['request']:NULL;
			switch ($request) {
                case 'sendMail':
                    $this->sendEmail($_REQUEST);
                    break;
                default:
				$this->collectHome();
				break;
			}			
		} catch (ValidationException $e) {
				$errors = $e->getErrors();
		}
		
	}

	public function collectHome(){
	    include 'view/Home.php';
	}

	public function sendEmail($request) {
        $to      = 'ili.aachboun1@gmail.com';
        $subject = 'Klusbedrijf To The Max';
        $message = "van:" . $request['name'] . ' ' . $request['achternaam'] . '<br>' .
                   "Email" . $request['email'] . '<br>' .
                   "Telefoon" . $request['telefoon'] . '<br>' .
                   "Beschrijving" . $request['beschrijving'] . '<br>';
        $headers = 'From: ili.aachboun1@gmail.com' . "\r\n" .
            'Reply-To:' . $request['email'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }

	public function __destruct(){

	}

}

?>
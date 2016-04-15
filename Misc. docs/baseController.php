<?php
include_once(dirname(__FILE__) . '/exceptions/notImplementException.php');
include_once(dirname(__FILE__) . '/exceptions/badTokenMethodException.php');
include_once(dirname(__FILE__) . '/exceptions/badTokenModuleException.php');
include_once(dirname(__FILE__) . '/exceptions/badTokenUserException.php');
include_once(dirname(__FILE__) . '/exceptions/missingParamsException.php');
include_once(dirname(__FILE__) . '/exceptions/jsonDecodeException.php');
include_once(dirname(dirname(__FILE__)) . "/services/sessionService.php");
include_once(dirname(dirname(__FILE__)) . "/services/returnFormatService.php");
include_once(dirname(dirname(__FILE__)) . "/services/AclService.php");

/**
 * Controlleur de base a inclure dans les autres controlleur
 * @Author Antoine&Anthony
 */
abstract class baseController {		
	public function __construct(){
	}
	
	/**
	 * Action a faire après un appelle en GET
	 * @throws Exeption non implémenté
	 */
	public function GET($params=NULL){
		$this->redirectTo404();
	}
	
	/**
	 * Action a faire après un appelle en POST
	 * @throws Exeption non implémenté
	 */
	public function POST(){
		$this->redirectTo404();
	}
	
	/**
	 * Action a faire après un appelle en DELETE
	 * @throws Exeption non implémenté
	 */
	public function DELETE($params=null){
		$this->redirectTo404();
	}
	
	/**
	 * Action a faire après un appelle en PUT
	 * @throws Exeption non implémenté
	 */
	public function PUT($params=null){
		$this->redirectTo404();
	}
	
	private function redirectTo404(){		
		$exception = new notImplementException(__LINE__, __FILE__, __CLASS__, __METHOD__, "erreur");
		$this->response($exception->getRepresentativeObject(),404);
	}
	
	public function response($string, $http){
		$sessionService = new sessionService();
		header("contractVersionNumber :".$sessionService->getVersion(), TRUE);
		header('content-type: application/json; charset=utf-8');
		switch ($http) {
			case 200:
				header("HTTP/1.0 200 Ok");
				break;
			case 500:
				header("HTTP/1.0 500 Internal Error");
				break;
			case 404:
				header("HTTP/1.0 404 Not Found");
				break;
		}
		echo json_encode($string);
	}
	
	public function isTokenValid($userToken){
		//case of missed userToken
		if(!isset($userToken)){
			return FALSE;
		}
		//secure string of userToken
		$userToken = addslashes($userToken);
		//check validity
		$tok = new userTokenService();
		return $tok->isTokenValid($userToken);
	}
}
<?php
namespace Service\Controllers;

/**
 * Classe de base des contrôleurs
 */
class BaseController implements IServiceController
{

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
		$exception = new notImplementException("erreur");
		$this->response($exception->getRepresentativeObject(),404);
	}

	public function response($string, $http){
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

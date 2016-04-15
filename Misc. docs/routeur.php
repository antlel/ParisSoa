<?php
include_once(__DIR__ . "/controllers/exceptions/notImplementException.php");
include_once(__DIR__ . "/controllers/baseController.php");

/**
 * Récupère l'URI & la Méthode pour rediriger vers le bon controlleur
 *
 * @Author Antoine&Anthony
 */
class routeur{
	
	/**
 	 * @param string $url garde l'URI
 	 * @param string $method garde la méthode de requetage 
	 */
	private $url;
	private $method;
	
	/**
	 * Initialise les paramêtre de la class
	 */
	public function __construct(){
		$this->url = $_SERVER['REQUEST_URI'];
		$this->method = $_SERVER['REQUEST_METHOD'];
	}
	
	/**
	 * Récupère le controlleur et les paramettres,
	 * Vérifie si le controlleur existe
	 * s'il existe appelle ce controleur
	 * sinon renvoye un statut 404
	 */
	public function doProcess(){
		$controllerName = $this->extractControllerFormUrl($this->url);
		$params = $this->extractGetParam($this->url);
		if($this->isControllerExiste($controllerName)){
			$this->callController($controllerName, $params);
		}
		else{
			header("HTTP/1.0 404 Not Found");
			header("Content-type: application/json; charset=utf-8");
			echo json_encode(array('message' => "Erreur 404", 'code' => "4041"));
		}
	}
	
	/**
	 * Récupère le nom du controleur depuis l'url
	 * @param string $url 
	 * @return le controlleur
	 */
	private function extractControllerFormUrl($url){
		$result = explode("/", $url);
		if(isset($result[1]))
		{
			return $result[1];	
		}else{
			return null;
		}
	}
	
	/**
	 * Récupère les paremètres depuis l'url
	 * @param string $url 
	 * @return tableau de paramètres
	 */
	private function extractGetParam($url){
		$explode = explode("/", $url);
		if(count($explode)>= 3 && !defined($explode[2]))
		{
			$result = array_splice($explode, 2, count($explode));
			return $result;
		}else{
			return null;
		}
	}
	
	/**
	 * vérifie si le controlleur existe
	 * @param string $controller
	 * @return bool
	 */
	private function isControllerExiste($controller){
		if(file_exists("controllers/".$controller."Controller.php")){
			return true;
		}else{
			return false;
		}
	}
	
	/**
	 * Appelle le controlleur
	 * @param string $controller
	 * @param array(string $params)
	 *
	 * Erreur 404 si le controller n'existe pas
	 * Erreur 500 internal error
	 */
	
	private function callController($controller, $params=NULL){
		include("controllers/".$controller."Controller.php");
		$controllerName = $controller."Controller";
		$controller = new $controllerName();
		if($params != NULL || count($params) > 0){
			$controller->{$this->method}($params);
		}else{
			$controller->{$this->method}();
		}
	}
}
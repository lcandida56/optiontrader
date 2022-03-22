<?php


/**
 * 
 */
class View {
	
	public function __construct()	{
		
	}
	
	public function loadView($viewName,$tpl = null,$dados = array()){
		extract($dados);
		require ($tpl.$viewName.'.php');
		
	}

	/*
	public function loadTemplate($viewName, $dados = array()) {
		require 'views/templates/template.php';
	}

	public function loadViewInTemplate( $viewName,$dados = array() ){
		//extract($dados);
		require 'views/'.$viewName.'.php';

	}
	*/

	
}
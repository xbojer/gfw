<?php
class SignController extends Core_Library_Controller_Action_Abstract {
	public function indexAction() {
		$this->redirect('index', 'index', 'core');
	}
	public function upAction() {
		throw new Exception('Sign up action not yet implemented');
	}
	public function inAction() {
		if(!$this->isAjaxRequest) {
			$this->redirect('index', 'index', 'core');
		}
		throw new Exception('Sign in action not yet implemented');
	}
}
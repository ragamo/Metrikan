<?php

class Metrikan extends CI_Controller {
	
	public function index() {
		$this->smarty->view('js/metrikan.js');
	}

	public function inspector() {
		$tools = $this->smarty->view('tools.tpl', array(), true);
		$tools = preg_replace("/\n/", "", preg_replace("/\t/", "", $tools));

		$data['tools'] = $tools;
		$this->smarty->view('js/metrikan_edit.js', $data);
	}

	public function loadFancyboxCss() {
		$css = $this->smarty->view('css/jquery.fancybox.css', array(), true);
		//$css = preg_replace("/\n/", "", preg_replace("/\t/", "", $css));
		echo $css;
	}

}
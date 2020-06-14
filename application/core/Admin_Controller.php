<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

    public $vars = [
		'header' 	=> 'tmp/header',
		'sidebar' 	=> 'tmp/sidebar',
		'content'	=> '',
		'title'		=> ''
	];

}

/* End of file Admin_Controller.php */

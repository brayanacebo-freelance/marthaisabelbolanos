<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
*
* @author 	    Brayan Acebo
* @package 	PyroCMS
* @subpackage 	albums
* @category 	Modulos
*/

class albums extends Public_Controller {

    public function __construct() {
        parent::__construct();
        $models = array(
            "album_model",
            "album_image_model"
            );
        $this->load->model($models);
    }

// -----------------------------------------------------------------

    public function index()
    {
    	$albums = $this->album_model->get_all();

        $this->template
			->set('albums', $albums)
	        ->build('index');
    }


}
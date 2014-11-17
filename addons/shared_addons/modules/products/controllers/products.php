<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
*
* @author 	    Brayan Acebo
* @package 	PyroCMS
* @subpackage 	Products
* @category 	Modulos
*/

class Products extends Public_Controller {

    public function __construct() {
        parent::__construct();
        $models = array(
            "product_model",
            "product_image_model",
        );
        $this->load->model($models);
    }

// -----------------------------------------------------------------

    public function index()
    {
        // Se consultan los productos
        $products = $this->db->order_by('id', 'DESC')
                            ->get('products')
                    		->result();

        $featured = $this->db->where('outstanding', 1)
                            ->get('products')
                            ->result();

        $this->template
            ->set('products', $products)
            ->set('featured', $featured)
            ->build('index');
    }

}
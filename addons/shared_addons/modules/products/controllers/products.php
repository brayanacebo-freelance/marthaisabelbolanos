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
    	// Paginación de Productos
        $pagination = create_pagination('products/index', $this->db->count_all('products'), 10);

        // Se consultan los productos
        $products = $this->db
        ->order_by('id', 'DESC')
        ->limit($pagination['limit'], $pagination['offset'])
        ->get('products')
		->result();

        $this->template
        ->set('pagination', $pagination)
        ->set('products', $products)
        ->build('index');
    }

}
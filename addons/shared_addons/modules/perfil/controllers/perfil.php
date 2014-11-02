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

class Perfil extends Public_Controller {

    public function __construct() {
        parent::__construct();
        $models = array(
            "perfil_model",
            "perfil_chapter_model",
            "perfil_chapter_image_model"
            );
        $this->load->model($models);
    }

// -----------------------------------------------------------------

    public function index($selCategory = null)
    {

        // Se consultan los novelas
        $chapters = $this->perfil_chapter_model
        ->order_by('id', 'DESC')
        ->get_all();

        $perfil = $this->perfil_model->get(1);

        $this->template
        ->set('chapters', $chapters)
        ->set('perfil', $perfil)
        ->build('index');

    }

    // -----------------------------------------------------------------

    public function biografia()
    {

        $this->template->build('biografia');

    }

    // -----------------------------------------------------------------

    public function home()
    {

        $this->template->build('home');

    }



// ----------------------------------------------------------------------

 //    public function detail($slug)
 //    {

 //        $return = $this->album_model->get_many_by('slug', $slug);
 //        $return = $return[0];

 //        if(!$return)
 //            redirect('albums');

 //        // Se convierten algunas variables necesarias para usar como slugs
 //        $setter = array(
 //            'image' => val_image($return->image),
 //            );

 //        $album = array_merge((array)$return,$setter);

 //        $relation = $this->db->where('album_id',$album['id'])->get('albums_categories')->result();
 //        $categories = array();
 //        foreach ($relation as $item) {
 //            $category = $this->album_category_model->get_many_by('id', $item->category_id);
 //            $category = $category[0];
 //            $categories[] = array(
 //                    "title" => $category->title,
 //                    "slug" => $category->slug
 //                );
 //        }

 //        // imagenes para slider
 //        $images = $this->album_image_model->where('path IS NOT NULL', null, false)->get_many_by('album_id',$album['id']);
	// 	$videos = $this->album_image_model->where('video IS NOT NULL', null, false)->get_many_by('album_id',$album['id']);
		
	// 	if(!empty($videos))
	// 	{
	// 		foreach($videos AS $item)
	// 		{
	// 			$img_video = explode("v=",$item->video);
	// 			if(isset($img_video[1]))
	// 			{
	// 				$item->img_video = $img_video[1];
	// 			}
	// 		}
	// 	}
		
 //        $this->template
 //                ->set('album', (object) $album)
 //                ->set('categories', $categories)
 //                ->set('images', $images)
	// 			->set('videos', $videos)
 //                ->build('detail');

 //    }

	// public function ajax_items($selCategory = null)
 //    {
 //    	$page = (isset($_POST['page_ajax']) ? $_POST['page_ajax'] : 1);
      	
	// 	// consulta de los albunes a sus respectivas tablas
	// 	$this->db->select('pr.*')
	// 				->from('albums AS pr')
	// 				->join('albums_categories AS pm', 'pm.album_id = pr.id', 'left')
	// 				->join('album_categories AS pc', 'pc.id = pm.category_id', 'left')
	// 				->limit($this->numer_per_pages, ($page*$this->numer_per_pages) + $this->inicial_num_pages)
	// 				->order_by('pr.id', 'DESC');
        
	// 	// si se selecciona una categoria
	// 	if($selCategory)
	// 	{
	// 		$this->db->where('pc.slug',$selCategory);
	// 	}
		
	// 	// traemos los datos
	// 	$albums = $this->db->get()->result();
		
 //        if(!empty($albums))
	// 	{
	//         foreach($albums AS $item)
	//         {
	//             $item->name = substr($item->name, 0, 20);
	//             $item->image = val_image($item->image);
	//             $item->introduction = substr($item->introduction, 0, 100);
	//             $item->url = site_url('albums/detail/'.$item->slug);
	//         }
	// 	}
		
	// 	$dataView['albums'] = $albums;
	// 	$this->template->set_layout(FALSE);
	// 	$this->template->build('items_ajax', $dataView);
	// 	//$this->load->view('items_ajax', $dataView);
 //    }
}
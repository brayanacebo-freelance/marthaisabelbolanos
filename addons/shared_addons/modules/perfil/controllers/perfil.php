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

    public function detail($slug)
    {

        $perfil = $this->perfil_chapter_model->get_many_by('slug', $slug);
        $perfil = $perfil[0];

        if(!$perfil)
            redirect('perfil');

  //       // Se convierten algunas variables necesarias para usar como slugs
  //       $setter = array(
  //           'image' => val_image($return->image),
  //           );

  //       $album = array_merge((array)$return,$setter);

  //       $relation = $this->db->where('album_id',$album['id'])->get('albums_categories')->result();
  //       $categories = array();
  //       foreach ($relation as $item) {
  //           $category = $this->album_category_model->get_many_by('id', $item->category_id);
  //           $category = $category[0];
  //           $categories[] = array(
  //                   "title" => $category->title,
  //                   "slug" => $category->slug
  //               );
  //       }

  //       // imagenes para slider
  //       $images = $this->album_image_model->where('path IS NOT NULL', null, false)->get_many_by('album_id',$album['id']);
		// $videos = $this->album_image_model->where('video IS NOT NULL', null, false)->get_many_by('album_id',$album['id']);
		
		// if(!empty($videos))
		// {
		// 	foreach($videos AS $item)
		// 	{
		// 		$img_video = explode("v=",$item->video);
		// 		if(isset($img_video[1]))
		// 		{
		// 			$item->img_video = $img_video[1];
		// 		}
		// 	}
		// }
		
        $this->template
                ->set('perfil', $perfil)
                ->build('detail');

    }

}
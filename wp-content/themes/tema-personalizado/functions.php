<?php 
	// echo get_stylesheet_directory()."<br>";
	// echo get_bloginfo("template_url")."<br>";
	// echo get_template_directory()."<br>";

	add_action("init", "_init");

	function _init(){
		register_menus();
		register_post_types();
	}

	function register_menus(){
		register_nav_menu("menu-principal","Menu Principal");
		register_nav_menu("menu-lateral","Menu Lateral");
	}

	function register_post_types(){
		register_post_type( "POST Personalizado", array('labels'=>array(
			"name"			=>	"Posts Personalizados",
			"singular_name" => "Post Marvel",
			"add_new"		=> "Adiocionar Post Marvel",
			"edit_item" 	=>	"Editar Post Marvel"
			),
			"public"		=> true,
			"has_archive"	=> true,
			"supports" 		=>array("title","editor","thumbnail")
		));
	}
	
	function montar_script(){
		wp_enqueue_style("bootstrap_css",get_template_directory_uri()."/css/bootstrap.min.css");
		wp_enqueue_style("estilo",get_template_directory_uri()."/css/style.css");

		wp_enqueue_script("bootstrap_js",get_template_directory_uri()."/js/bootstrap.min.js",array("jquery"));
		wp_enqueue_script("script",get_template_directory_uri()."/js/scripts.js");
	}

	 add_action("wp_enqueue_scripts","montar_script");

	// add_image_size( "img-post-list", 510,136 , true);
	// add_image_size( "img-cat-home", 125,73 , true);
	// add_image_size( "img-cat-home2", 152,91 , true);
	// add_image_size( "img-sidebar", 101,61 , true);

	// add_image_size( "img-sigle", 654,393 , true);
	// add_image_size( "img-category", 215,129 , true);

	// add_theme_support("post-thumbnails");

 ?>
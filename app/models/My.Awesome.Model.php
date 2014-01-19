<?php
class My_Awesome_Model{

	private $ID;

	public function __construct( $id )
	{
		$this->ID = $id;

		if ( intval( $this->ID ) ){
			$this->get_info();
		}

		#	add_action( 'init', array( &$this, 'myCustomPostType' ) );
	}

	public function myCustomPostType() 
	{

	}


	public function get_info(){
		$post = get_post( $this->ID );
		return $post->post_title;
	}

}
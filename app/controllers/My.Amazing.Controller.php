<?php
	class My_Amazing_Controller {

		private $ID;
		
		public function __construct( $id )
		{
			$this->ID = $id;
			$this->_getPostTitle();	
		}

		public function _getPostTitle()
		{
			$instance = new My_Awesome_Model( $this->ID );

			$title = $instance->get_info();
		}


	}


?>
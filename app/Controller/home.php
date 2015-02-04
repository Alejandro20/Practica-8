<?php

	Class Home extends Controller{
		function __construct($params){

			parent::__construct($params);
			$this->model = new model_home;	
					


		}

			function home(){
				$this->loader->vista('Home_vista.php',$this->model->Info());


				
			}

	}
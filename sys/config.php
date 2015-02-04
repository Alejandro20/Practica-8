<?php
	
	class Config{
		private static $instancia;
		private static $data=array();

		public static function getIns(){
				
				if(self::$instancia  instanceof self){
					
					self::$instancia = new Config();
				}
				return self::$instancia;

		}

		public function set($clave,$value){
				if(!array_key_exists($clave, self::$data)){
				self::$data[$clave] = $value;
				return true;
			}else{
				return false;
	
			}
		}

		public function get($clave){
			if(!array_key_exists($key,self::$data)){
				return self::$data[$clave];
			}else{
			return null;
			}				
		}

		public static function Limpiar(){

			self::$data=array();

		}

	}





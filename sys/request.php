<?php
    class Request{
        
        static private $query=array();
        static private $contador;
        static private $action;
        static private $pos_query;
        static private $parameter=array();
        static private $parameters;

        static function retrieve(){	
            self::$query =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$query;    
        }
       static function getCount(){	//cuenta los elementos del Array
           if(empty($query[2])){
                self::$contador="Home";
            }else{
            self::$contador=self::$query[2];
            } 
            return self::$contador;
        }

        static function getParams(){	//agarra los parametos.
            $pos_query = count(self::$query);
            $pos2=0;
            if($pos_query >= 6){
                if($pos_query % 3 == 0){
    	            for($pos=2;$j < $pos_query;$pos++){ 
    	            	self::$parameter[$pos2]= self::$query[$pos];
           				$pos2++;  
    	            }
                    return self::$parameter;
            	}else{
            		echo "Parametros erroneos";
            	}
            }else{
                echo "Parameteros correctos";
            }
        }

          static function getAction(){  //Guarda la acción en una variable.
           
            if(empty($query[3])){
                self::$action="Home";
               
            }else{
                    self::$action = self::$query[3];
            }  
            return self::$action;
        }
    }

<?php


class Core{ 
    private static $conf;
    public static $controller;
    public static $params = array();

	public static function Init(){
         

            $conf=Config::getIns();
            static::router();


      }

     public static function router(){
            $URI=explode('/',$_SERVER['REQUEST_URI']);
            
            Request::retrieve();
            $route=Request::getCount();
            $action=Request::getAction();      
            $fileroute=strtolower($route).'.php';
              
        if(is_file(APP."controller".DS.$fileroute)){
            $classname=ucfirst($route);
            self::$controller=new $classname(self::$params);
            return self::$controller->$action();

                 }
           
              
            
            
            
        


	}
}
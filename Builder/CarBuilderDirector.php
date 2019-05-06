<?php
class CarBuilderDirector{
	public static function _ConstructSimpleCar($builder,$materials){
		$builder->_Reset();
		
		if(array_key_exists('_id',$materials)){
			$builder->_SetId($materials['_id']);
		}else{
			$builder->_SetId("Not_Found");
		}
		
		if(array_key_exists('model',$materials)){
			$builder->_SetModel($materials['model']);
		}else{
			$builder->_SetModel("Not_Found");
		}
		
		if(array_key_exists('year',$materials)){
			$builder->_SetYear($materials['year']);
		}else{
			$builder->_SetYear("Not_Found");
		}
		
		if(array_key_exists('price_day',$materials)){
			$builder->_SetPrice_day($materials['price_day']);
		}else{
			$builder->_SetPrice_day("Not_Found");
		}
		
		if(array_key_exists('manufacturer',$materials)){
			$builder->_SetManufacturer($materials['manufacturer']);
		}else{
			$builder->_SetManufacturer("Not_Found");
		}
		
		if(array_key_exists('body_type',$materials)){
			$builder->_SetBody_type($materials['body_type']);
		}else{
			$builder->_SetBody_type("Not_Found");
		}
		
		if(array_key_exists('modules',$materials)){
			foreach($materials['modules'] as $name => $module){
				$builder->_AddModule($name,$module);
			}
		}else{
			$builder->_AddModule('Anything',"Not_Found");
		}
		
		return $builder->_getResult();
	}
}
?>
<?php
class Car{
	public $id;
	public $model;
	public $year;
	public $price_day;
	public $manufacturer;
	public $body_type;
	public $modules;
	
	public function get_arr(){
		return (array)$this;		
	}
	public function info(){
		$arr=$this->get_arr();
		foreach($arr as $key=>$value){
			if(is_array($value)){
				print '"'.$key.'": '."<br>";
				print'<ol>';
				foreach($value as $name =>$module){
					print "<br>".'<li>'.'"'.$name.'": "'.$module.'"'.'<li>';
				}
				print'</ol>'."<br>";
			}
			else{
				print '"'.$key.'": "'.$value.'"'."<br>";
			}
		}
		
	}

	
	public static function delete_row_by_id($id,$dao){
	$errors=$dao->_delete($id);
	return $errors;
	}
	
	public static function update_price($difference,$dao){
		$errors=array();
		if(is_numeric($difference)){
			$errors = $dao->_change_price($difference);
		}
		else{
			$errors['difference']='is not an integer';
		}
		
	
	return $errors;
	}
	
	public function add_car($dao){
		
		$errors=$this->validate();
		if(count($errors)==0){
			$errors=$dao->_add($this->get_arr());
		}

		return $errors;
	}
	
	public function validate(){
		
		$errors=[];
	
		if(strlen(trim($this->model))<=255&&strlen(trim($this->model))>=1){
			
		}else{
			$errors['model']='can`t be empty and lengths must be less than 255 symbols';
		
		}
	
		if($this->year<=2019&&$this->year>=1806){
			
		}else{
		$errors['year']='must be between 1806 and 2019';
		}
		
		if(is_numeric($this->price_day)&&$this->price_day<=100000000){
		
		}else{
		$errors['price per day']=' must be numeric and less than 100000000';
		}
	
		if(!empty($this->manufacturer)){
		
		}else{
			$errors['manufacturer']='select it please';
		}
	
		if(!empty($this->body_type)){
		
		}else{
			$errors['body type']='select it please';
		} 
	 
		return $errors;
	}
}
?>
<?php
Class SimpleCarBuilder implements ICarBuilder{
	private $Car;
	public function _Reset(){
		$this->Car= new Car();
	}
	public function _SetId($id){
		$this->Car->id=$id;
	}
	public function _SetModel($model){
		$this->Car->model=$model;
	}
	public function _SetYear($year){
		$this->Car->year=$year;
	}
	public function _SetPrice_day($price){
		$this->Car->price_day=$price;
		return true;
	}
	public function _SetManufacturer($man){
		$this->Car->manufacturer=$man;
	}
	public function _SetBody_type($bt){
		$this->Car->body_type=$bt;
	}
	public function _AddModule($name,$module){
		if(is_string($name)){
			$this->Car->modules[$name]=$module;
		}
	}
	public function _getResult(){
		return $this->Car;
	}
}
?>
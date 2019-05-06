<?php 
Interface ICarBuilder{
	public function _SetId($id);
	public function _SetModel($model);
	public function _SetYear($year);
	public function _SetPrice_day($price);
	public function _SetManufacturer($man);
	public function _SetBody_type($bt);
	public function _AddModule($name,$module);
}
?>
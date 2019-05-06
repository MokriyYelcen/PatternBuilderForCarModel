<?php
require ('references.php');
$builder= new SimpleCarBuilder();
$Car= CarBuilderDirector::_ConstructSimpleCar($builder,[
														'model'=>'ВАЗ-2101',
														'year'=>'1970',
														'price_day'=>1000,
														'manufacturer'=>'AvtoVAZ',
														'body_type'=>'sedan',
														'_id'=>'0',
														'modules'=>['HBO'=>'Tomasetto','Сar_radio'=>'SONY 8225BT ISO BLUETOOTH']
														]);
$Car->info();
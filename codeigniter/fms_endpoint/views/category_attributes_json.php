<?php 

$response = new stdClass();

$response->service_code = $category_id;

foreach($attributes->result() as $row) {

		$attributes = new stdClass();

		$attributes->variable 					= $row->variable;
		$attributes->code 						= $row->attribute_id;
		$attributes->datatype 					= $row->datatype;
		$attributes->required 					= $row->required;
		$attributes->datatype_description		= $row->datatype_description; 
		$attributes->order 				 		= $row->order;					         						
		$attributes->description 				= $row->description;
		$attributes->values 					= $row->values;	


		$response->attributes[] = $attributes;
}

header('Content-type: application/json');
print json_encode($response);


?>



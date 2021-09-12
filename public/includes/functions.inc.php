<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function get_product($con){
	$product_sql="select * from products";
	$product_query=mysqli_query($con,$product_sql);
	$product_count=mysqli_num_rows($product_query);
	$data=array();
	while($row=mysqli_fetch_assoc($product_query)){
		$data[]=$row;
	}
	return $data;
}
?>
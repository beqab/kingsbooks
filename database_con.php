<?php

	require("connection.php");

	$items=array(
		"en1" => array("item_price"=>"7","item_name"=>"ტესტები ინგლისურ ენაში"),
		"en2" => array("item_price"=>"10","item_name"=>"ტესტები ინგლისურ ენაში ფინალისტებისთვის"),

		"ge1" => array("item_price"=>"10","item_name"=>"ტესტები ქართულ ენაში"),
		"ge2" => array("item_price"=>"12","item_name"=>"ტესტები ქართულ ენაში ფინალისტებისთვის"),
		"ge3" => array("item_price"=>"20","item_name"=>"მასიური ტესტების კრებული ქართულ ენასა და ლიტერატურაში"),

		"mth1" => array("item_price"=>"10","item_name"=>"ტესტები მათემატიკაში"),
		"mth2" => array("item_price"=>"12","item_name"=>"ტესტები მათემატიკაში ფინალისტებისთვის"),
		"mth3" => array("item_price"=>"20","item_name"=>"600 ამოცანა 600 ამოხსნა")
	);

	function htmlchars($val){
		return "'".htmlspecialchars($val,ENT_QUOTES,"UTF-8")."'";
	}

	function add_to_orders($city,$parent_name,$parent_lastname,$phone_number,$address,$comment,$pay_type,$requested_items){

		$parent_name=htmlchars($parent_name);
		$parent_lastname=htmlchars($parent_lastname);
		$city=htmlchars($city);
		$address=htmlchars($address);
		$comment=htmlchars($comment);
		$pay_type=htmlchars($pay_type);

		$full_price=0;
		for($i=0;$i<count($requested_items);$i++){
			$full_price+=$GLOBALS["items"][$requested_items[$i][0]]["item_price"];
		}


		if($GLOBALS["con"]->query("insert into orders(parent_name,parent_lastname,city,phone_number,address,comment,pay_type,full_price) values (".$parent_name.",".$parent_lastname.",".$city.",".$phone_number.",".$address.",".$comment.",".$pay_type.",".$full_price.")")==true){
			$inserted_id=$GLOBALS["con"]->insert_id;
			return add_to_orderId_database($requested_items,$inserted_id);
		}
		return 0;
	}



	function add_to_orderId_database($requested_items,$order_id){
		$query="insert into order_detail(order_id,item_name,item_price) values ";
		$cnt=count($requested_items);
		for($i=0;$i<$cnt;$i++){
			$item_name=$GLOBALS["items"][$requested_items[$i][0]]["item_name"];

			if($requested_items[$i][1]!="")$item_name=$item_name.":".$requested_items[$i][1].".";// create full name
			$item_name=htmlchars($item_name);

			$item_price=$GLOBALS["items"][$requested_items[$i][0]]["item_price"];

			$query=$query."(".$order_id.",".$item_name.",".$item_price.")";
			if($i!=$cnt-1)$query=$query.",";
		}
		if($GLOBALS["con"]->query($query)==true)
			return 1;

		return 0;
	}


?>
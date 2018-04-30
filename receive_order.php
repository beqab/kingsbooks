<?php
	require("database_con.php");
	//echo add_to_orders("ლამზირა","ლამზირაშვილი","თბილისი",595534150,"რაღაც მისამართი","ჩემი კომენტარია","ბარათით",["en1","mth3"]);

	function vars_setted($vars){
		for($i=0;$i<count($vars);$i++){
			if(isset($_POST[$vars[$i]])==0)return $vars[$i];
		}
		return 1;
	}

	function remove_from_balance(){
		return 0;
	}

	if(vars_setted(array("town","name","lastname","mobile","address","comment","payType"))==0){echo "დაფიქსირდა შეცდომა";;return;}

	if($_POST["payType"]=="ბალანსით"&&remove_from_balance()==0){echo "ბალანსზე არასაკმარისი თანხა გაქვთ";return;}

	$result=add_to_orders($_POST["town"],$_POST["name"],$_POST["lastname"],$_POST["mobile"],$_POST["address"],$_POST["comment"],$_POST["payType"],[["en1","10 კლასი"],["mth3",""]]);


	// item structure [["item_id1","item_id1:coment"],["item_id2","item_id2:comment"]...]


	if($result==1)echo "succ";
	else echo "დაფიქსირდა შეცდომა. გთხოვთ სცადოთ მოგვიანებით";	

?>
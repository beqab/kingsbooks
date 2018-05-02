<?php
	// katalata structure: [["item1","item1:comment",item1_count],["item2","item2:comment"item2_count]]

	if(isset($_POST["buy_now"],$_POST["itemId"],$_POST["item_comment"])){
		session_start();

		if($_POST["buy_now"]==1){
			$_SESSION["buy_now"]=1;
			$_SESSION["buy_item"]=[[$_POST["itemId"],$_POST["item_comment"]]];
			$_SESSION["item_id"]=$_POST["itemId"];
			$_SESSION["item_comment"]=$_POST["item_comment"];
			echo "succ";
		}
		if($_POST["buy_now"]==0){// add element to bucket
			array_push($_SESSION["kalata"], [$_POST["itemId"],$_POST["item_comment"]]);
			echo "succ";
			return;
		}

		if($_POST["buy_now"]==-1){
			for($i;$i<count($_POST["kalata"]);$i++){
				if($_SESSION["kalata"][$i][0]==$POST["itemId"]&&$_SESSION["kalata"][$i][1]==$_POST["item_comment"]){
					unset($_SESSION["kalata"][$i]);
					echo "succ";
					return;
				}
			}
		}

	}

?>
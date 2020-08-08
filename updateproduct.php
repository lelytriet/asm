<?php
	require_once 'include/DB_Functions.php';
	$db=new DB_Functions();
	$json=array();


	
	if(isset($_POST['id'])&&($_POST['id']!='') && isset($_POST['name']) && ($_POST['name']!='')&& isset($_POST['price']) && isset($_POST['description']))
	{

        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        
        // if($db->getProductDetail($id))//true : da ton tai
		// {
		// 	$json["loi"]=2;
		// 	$json["thongbaoloi"]="san pham da ton tai";
			
		// 	echo json_encode($json);
		// }
		// else//user chua ton tai, luu du lieu
		// {


		$result=$db->updateProduct($id,$name,$price,$description);
		
		if($result)
		{
			$json["thanhcong"]=1;
			$json["thongbao"]="sua san pham thanh cong";
		}
		else
		{

		}
	}

	else
	{
		$json["thanhcong"]=0;
        $json["thongbao"]="sua khong thanh cong";
	}
	
	echo json_encode($json);

?>
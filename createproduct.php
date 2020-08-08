<?php
	require_once 'include/DB_Functions.php';
	$db=new DB_Functions();
	$json=array();


	
	if(isset($_POST['name'])&& $_POST['name']!='')
	{
		
		$name=$_POST['name'];
		$price=$_POST['price'];
		$description=$_POST['description'];

		if($db->checkProduct($name))//true : da ton tai
		{
			$json["loi"]=2;
			$json["thongbaoloi"]="San pham da ton tai roi";
			
			echo json_encode($json);
		}
		else//user chua ton tai, luu du lieu
		{

			$result=$db->storeProduct($name,$price,$description);
			
			if($result)
			{
				$json["thanhcong"]=1;
				$json["thongbao"]="tao san pham thanh cong";
			}
			else
			{
				$json["thanhcong"]=0;
				$json["thongbao"]="tao khong thanh cong";
			}
		}
	}

	else
	{
		$json["thanhcong"]=0;
		$json["thongbao"]="chua nhap ten san pham";
	}
	
	echo json_encode($json);

?>



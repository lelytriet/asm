<?php
	require_once 'include/DB_Functions.php';
	$db=new DB_Functions();
	$json=array();


	
	if(isset($_POST['id']))
	{
        $id=$_POST['id'];

        $result=$db->deleteProduct($id);
			
        if($result )
        {
            $json["thanhcong"]=1;
            $json["thongbao"]="delete san pham thanh cong";
         
        }
        else
        {
            
        }
    }else{
        $json["thanhcong"]=0;
        $json["thongbao"]="delete khong thanh cong";
    }
    echo json_encode($json);
?>
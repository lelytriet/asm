<?php
class DB_Connect
{
	//ham tao
	function __construct()
	{

	}
	
	//ham huy
	function __destruct()
	{
		
	}
	
	//ket noi toi database
	function connect()
	{
		require_once "include/config.php";
		$con=mysqli_connect("localhost","root","","web_api");
		//mysqli_select_db($con,DB_DATABASE);
		return $con;
		
	}
	
	//dong ket noi
	function close()
	{
		//mysqli_close();
	}
}
?>

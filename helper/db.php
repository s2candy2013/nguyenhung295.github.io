<<?php 
// tạo kết nối đến cơ sở dữ liệu
function getConnect(){
    try {
    	$connect = new PDO("mysql:host=127.0.0.1;dbname=dbweb204;charset=utf8","root","");

    	return $connect;
    } catch (Exception $e) {
    	echo "Không thể kết nối tới cơ sở dữ liệu";
    	die();
    }

}
/**
* Thực thi câu lệnh sql
* @author: hungnhph06693
* @date: 27/2/2019
* @param: $sqlQuery - câu lệnh sql
* @param: $getAll - true => lấy hết dữ liệu | false => lấy bản ghi đầu tiên
* @return: array ( trả theo dạng mảng )
**/
function executeQuery ($sqlQuery, $getAll = false) {

$conn = getConnect();
$stmt = $conn -> prepare($sqlQuery);



}



 ?>

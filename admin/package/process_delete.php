<?php
    $id = $_GET['id'];
    $tab = $_GET['tab'];
    require_once '../../config/connect.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE FROM tb_package WHERE id = '$id'";
    $number = mysqli_query($conn,$sql);
    if($number > 0){
        header("location: $tab");
    }else{
        header("location: index.php"); 
    }
    mysqli_close($conn);
?>
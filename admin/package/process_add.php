<?php
    $txtid= $_POST['txtid'];
    $txtweight = $_POST['txtweight'];
    $txtlength = $_POST['txtlength'];
    $txtwidth = $_POST['txtwidth'];
    $txtheight = $_POST['txtheight'];
    $Trangthai= $_POST['txtTrangthai'];
    $txttotal = $_POST['txttotal'];
    require_once '../../config/connect.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql01 = "SELECT * FROM tb_package where id='$txtid'";

    $result = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result) > 0){

    $error = "Vận đơn này đã tồn tại";
    header("location:add.php?error=$error"); 
    }else{
    $sql = "INSERT INTO `tb_package`(`id`, `weight`, `length`, `width`, `height`, `total`, `status`) VALUES ('$txtid','$txtweight','$txtlength','$txtwidth','$txtheight','$txttotal','$Trangthai')";
    $result = mysqli_query($conn,$sql);
    if($result ==true){
        header("location:list.php?tab=0"); 
    }else{
        $error = "Bạn nhập thông tin chưa đúng";
        header("location:list.php?error=$error");
    }
    }
    mysqli_close($conn);  
?>
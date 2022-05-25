<?php
 $id= $_GET['id'];
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
    $sql = "UPDATE tb_package SET total='$txttotal',weight='$txtweight',length='$txtlength',width='$txtwidth',height='$txtheight',status='$Trangthai' WHERE id='$txtid'";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "<script type='text/javascript'>alert('Nhập sai');</script>";
    }else{
        header("location: list.php?tab=0"); 
    }

    mysqli_close($conn);
?>
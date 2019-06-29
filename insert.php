<?php
    require "dbCon.php";

    $hoten = $_POST['hotenSV'];
    $namsinh = $_POST['namsinhSV'];
    $diachi = $_POST['diachiSV'];

    $query = "insert into student values (null, '$hoten', '$namsinh', '$diachi')";

    if(mysqli_query($connect, $query)){
        // insert thành công
        echo "Success";
    }else{
        //có lỗi
        echo "Error";
    }

?>
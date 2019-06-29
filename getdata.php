<?php
    require "dbCon.php";

    $query = "select * from student";

    $data = mysqli_query($connect, $query);

    //Tạo class Sinh Viên
    class SinhVien {
        function SinhVien($id, $hoten, $namsinh, $diachi){
            $this->ID = $id;
            $this->HoTen = $hoten;
            $this->NamSinh = $namsinh;
            $this->DiaChi = $diachi;
        }
    }

//Tạo mảng

    $mangSV = array();
    
//Thêm một phần tử vào mảng

    while ($row = mysqli_fetch_assoc($data)) {
        # code...
        array_push($mangSV, new SinhVien($row['id'], $row['hoten'], $row['namsinh'], $row['diachi']));
    }

//Chuyển định dạng của mảng thành JSON

    echo json_encode($mangSV);
?>
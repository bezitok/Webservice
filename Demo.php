<?php

//Tạo class Sinh Viên
    class SinhVien {
        function SinhVien($hoten, $namsinh, $diachi){
            $this->HoTen = $hoten;
            $this->NamSinh = $namsinh;
            $this->DiaChi = $diachi;
        }
    }

//Tạo mảng

    $mangSV = array();
    
//Thêm một phần tử vào mảng

    array_push($mangSV, new SinhVien("Nguyễn Ngọc Hải", 1999, "Nam Định"));
    array_push($mangSV, new SinhVien("Nguyễn Ngọc Hậu", 1994, "Hà Nam"));
    array_push($mangSV, new SinhVien("Nguyễn Ngọc Hưng", 1993, "Hà Nội"));

//Chuyển định dạng của mảng thành JSON

    echo json_encode($mangSV);

?>
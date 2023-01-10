<?php

class User extends DB
{
    public function __construct()
    {
    }

    function checkUser($user, $pass)
    {
        $conn = $this->connectDB();
        $query = "SELECT * FROM nhanvien WHERE userName=:username AND password=:password";
        $stmt = $conn ->prepare($query);
        $stmt->bindParam(":username", $user);
        $stmt->bindParam(":password", $pass);
        $stmt->execute();
        $kq = $stmt->fetch(PDO::FETCH_ASSOC);
        $conn = null;
        return (empty($kq)) ? null : ['maCV' => $kq['maCV'], 'maNV' => $kq['maNV']];
    }

}


// Lấy nhiều dòng
//    $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
//        return $kq[0]['maCV'];

// Lấy một dòng
//    $kq = $stmt->fetch(PDO::FETCH_ASSOC);
//        return $kq['maCV'];



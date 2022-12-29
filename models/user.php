<?php

//function checkUser($user,$pass) {
//    $conn = connectDB();
//    $stmt = $conn->prepare("SELECT * FROM nhanvien WHERE ? and ?");
//    $pre = $conn->prepare($stmt);
//    $pre->bind_param("ss",$userName,$password);
//    $stmt->execute();
//    $t = $pre->execute();
//    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//    $kq = $stmt->fetchAll();
//    return $kq[0]['maCV'];
//}

class user {
    public $conn;
    public function __construct()
    {
    }

    function checkUser($user, $pass)
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "SELECT * FROM nhanvien WHERE userName=:username AND password=:password";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $user);
        $stmt->bindParam(":password", $pass);
        $stmt->execute();
        $kq = $stmt->fetch(PDO::FETCH_ASSOC);
        return (empty($kq)) ? null : $kq['maCV'];
    }

}


    // Lấy nhiều dòng
//    $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
//    if ($kq === false) {
//        // No rows were returned, or there was an error executing the query
//        // You can handle the error here, or return a default value
//        return null;
//    } else {
//        return $kq[0]['maCV'];
//    }

    // Lấy một dòng
//    $kq = $stmt->fetch(PDO::FETCH_ASSOC);
//    if ($kq === false || $kq === null) {
//        // No rows were returned, or there was an error executing the query
//        // You can handle the error here, or return a default value
//        return null;
//    } else {
//        return $kq['maCV'];
//    }


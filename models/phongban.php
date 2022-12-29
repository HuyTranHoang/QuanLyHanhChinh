<?php
//
//function insertPB ($tenPhong, $vietTat, $ghiChu) {
//    $conn = connectDB();
//    $stmt = $conn->prepare("INSERT INTO phongban (maPhong, tenPhong, vietTat,ghiChu) VALUES (NULL,:tenPhong,:vietTat,:ghiChu)");
//    $stmt->bindParam(":tenPhong", $tenPhong);
//    $stmt->bindParam(":vietTat", $vietTat);
//    $stmt->bindParam(":ghiChu", $ghiChu);
//    $stmt->execute();
//}
//
//function updatePB ($id, $tenPhong, $vietTat, $ghiChu)
//{
//    $conn = connectDB();
//    $sql = "UPDATE phongban SET tenPhong=:tenPhong, vietTat=:vietTat, ghiChu=:ghiChu WHERE maPhong=:id";
//    $stmt = $conn->prepare($sql);
//    $stmt->bindParam(":id", $id);
//    $stmt->bindParam(":tenPhong", $tenPhong);
//    $stmt->bindParam(":vietTat", $vietTat);
//    $stmt->bindParam(":ghiChu", $ghiChu);
//    $stmt->execute();
//}
//
//function getOne_PB($id)
//{
//    $conn = connectDB();
//    $stmt = $conn->prepare("SELECT * FROM phongban where maPhong =" . $id);
//    $stmt->execute();
//    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//    $kq = $stmt->fetch();
//    return $kq;
//}
//
//function delPB($id)
//{
//    $conn = connectDB();
//    $sql = "DELETE FROM phongban WHERE maPhong=" . $id;
//    $conn->exec($sql);
//}
//
//function getAll_PB()
//{
//    $conn = connectDB();
//    $stmt = $conn->prepare("SELECT * FROM phongban");
//    $stmt->execute();
//    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//    $kq = $stmt->fetchAll();
//    return $kq;
//}

class phongBan
{
    public $conn;

    public function __construct()
    {
    }

    public function insertPB($tenPhong, $vietTat, $ghiChu)
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "INSERT INTO phongban (maPhong, tenPhong, vietTat,ghiChu) VALUES (NULL,:tenPhong,:vietTat,:ghiChu)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":tenPhong", $tenPhong);
        $stmt->bindParam(":vietTat", $vietTat);
        $stmt->bindParam(":ghiChu", $ghiChu);
        $stmt->execute();
    }

    public function updatePB($id, $tenPhong, $vietTat, $ghiChu)
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "UPDATE phongban SET tenPhong=:tenPhong, vietTat=:vietTat, ghiChu=:ghiChu WHERE maPhong=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":tenPhong", $tenPhong);
        $stmt->bindParam(":vietTat", $vietTat);
        $stmt->bindParam(":ghiChu", $ghiChu);
        $stmt->execute();
    }

    public function getOne_PB($id)
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "SELECT * FROM phongban where maPhong =" . $id;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    public function delPB($id)
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "DELETE FROM phongban WHERE maPhong=" . $id;
        $this->conn->exec($query);
    }

    public function getAll_PB()
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "SELECT * FROM phongban";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}
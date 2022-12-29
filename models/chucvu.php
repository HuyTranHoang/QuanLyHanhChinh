<?php
class chucVu
{
    public $conn;

    public function __construct()
    {
    }

    public function insertPB($chucVu)
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "INSERT INTO chucvu (maCV, chucVu) VALUES (NULL,:chucVu)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":chucVu", $chucVu);
        $stmt->execute();
    }

    public function updateCV($id, $chucVu)
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "UPDATE chucvu SET chucVu=:chucVu WHERE maCV=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":chucVu", $chucVu);
        $stmt->execute();
    }

    public function getOne_CV($id)
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "SELECT * FROM chucvu where maCV =" . $id;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    public function delCV($id)
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "DELETE FROM chucvu WHERE maCV=" . $id;
        $this->conn->exec($query);
    }

    public function getAll_CV()
    {
        $db = new db();
        $this->conn = $db->connectDB();
        $query = "SELECT * FROM chucvu";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

}

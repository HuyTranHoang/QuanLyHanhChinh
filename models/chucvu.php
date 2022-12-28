<?php

function insertCV ($chucVu) {
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO chucvu (maCV, chucVu) VALUES (NULL,:chucVu)");
    $stmt->bindParam(":chucVu", $chucVu);
    $stmt->execute();
}

function updateCV ($id, $chucVu)
{
    $conn = connectDB();
    $sql = "UPDATE chucvu SET chucVu=:chucVu WHERE maCV=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":chucVu", $chucVu);
    $stmt->execute();
}

function getOne_CV($id)
{
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT * FROM chucvu where maCV =" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetch();
    return $kq;
}

function delCV($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM chucvu WHERE maCV=" . $id;
    $conn->exec($sql);
}

function getAll_cv()
{
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT * FROM chucvu");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
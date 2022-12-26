<?php

function delpb ($id) {
    $conn = connectDB();
    $sql = "DELETE FROM phongban WHERE maPhong=".$id;
    $conn->exec($sql);
}

function getAll_pb() {
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT * FROM phongban");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
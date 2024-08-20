<?php

require_once __DIR__ . "/koneksi.php";

function ambilData()
{
    $koneksi = koneksi();
    $sql = "SELECT * FROM todo";
    $result = $koneksi->query($sql);

    return $result;
}

function ambilSatuData($id)
{
    $koneksi = koneksi();
    $sql = "SELECT * FROM todo WHERE id = $id";
    $result = $koneksi->query($sql);

    return $result;
}

function tambahData($tugas, $deadline) 
{
    $koneksi = koneksi();
    $sql = "INSERT INTO `todo`(`nama_tugas`, `deadline`) VALUES ('$tugas','$deadline')";
    $result = $koneksi->exec($sql);

    return $result;    
}

function editData($id, $tugas, $deadline)
{
    $koneksi = koneksi();
    $sql = "UPDATE `todo` SET `nama_tugas`='$tugas',`deadline`='$deadline' WHERE id = $id";
    $result = $koneksi->exec($sql);

    return $result;
}

function hapusData($id) 
{
    $koneksi = koneksi();
    $sql = "DELETE FROM `todo` WHERE id = $id";
    $result = $koneksi->exec($sql);

    return $result;    
}
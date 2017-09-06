<?php
/**
 * Created by IntelliJ IDEA.
 * User: Agus Suhardi
 * Date: 9/5/2017
 * Time: 19:59
 */
include "barang.dao.php";

$aksi = $_GET['aksi'];
$objBarang = new BarangDao();


if ($aksi == 'save') {
    $nama = $_POST['nama'];
    $objBarang->save($nama);

} elseif ($aksi == 'delete') {
    $nama = $_POST['nama'];
    $objBarang->delete($nama);

} elseif ($aksi == 'find_all') {
    $objBarang->findAll();
}
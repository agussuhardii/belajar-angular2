<?php
/**
 * Created by IntelliJ IDEA.
 * User: Agus Suhardi
 * Date: 9/5/2017
 * Time: 11:46
 */


include_once "koneksi.php";

//membuat class dao
class BarangDao extends Koneksi
{

    private $querySave = "INSERT INTO barang(nama) VALUES (?)";
    private $queryDelete = "delete from barang where nama=?";
    private $queryFindAll = "select * from barang";


//fungsi simpan
    public function save($nama)
    {
        try {
            $prepare = parent::prepare($this->querySave);
            $prepare->bindParam(1, $nama);
            $prepare->execute();
        } catch (Exception $e) {
            echo "sistem dalam perbaikan, coba beberapa saat lagi";
        }
    }


//fungsi hapus
    public function delete($nama){
        try{
            $prepare = parent::prepare($this->queryDelete);
            $prepare->bindParam(1, $nama);
            $prepare->execute();
        }catch (Exception $e){
            echo "sistem dalam perbaikan, coba beberapa saat lagi";
        }
    }
//fungsi tampilkan semua

    public function findAll(){
        try {
            $prepare = parent::prepare($this->queryFindAll);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

            $json = json_encode($result);
            header("Access-Control-Allow-Origin: *");
            print_r('{"n":'.$json.'}');
        } catch (Exception $ex) {
            echo 'Error : ' . $ex->getMessage();
        }
    }
}

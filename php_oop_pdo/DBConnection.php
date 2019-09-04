<?php
class DBConnection{
    private $dsn = 'mysql:host=localhost; dbname=workshop';
    private $username = 'root';
    private $passwd = '';
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    private $table = 'buku';
    private $kolom = array('judul_buku','penulis','tahun','penerbit');
    private $conn;

    public function __construct() {
        $this->conn = new PDO($this->dsn, $this->username, $this->passwd,
                       $this->options);
    }

    public function fetch(){
        $sql = 'SELECT * FROM '.$this->table;
        try{
            $query = $this->conn->query($sql);
            return $query->fetchAll();
        } catch (PDOException $ex) {
            print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '
              .$ex->getFile().' <b>pada baris ke-</b>'
              .$ex->getLine().'<br>';
        }
    }

    public function delete($where){
        $sql = 'DELETE FROM '.$this->table.' WHERE '.$where;
        try{
            $query = $this->conn->exec($sql);
            return $query.' data dihapus.';
        } catch (PDOException $ex) {
            print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '
              .$ex->getFile().' <b>pada baris ke-</b>'
              .$ex->getLine().'<br>';
        }
    }

    public function __destruct() {
        $this->conn = null;
    }
}
?>

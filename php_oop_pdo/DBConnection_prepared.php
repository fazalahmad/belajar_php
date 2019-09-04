<?php
class DBConnection{
    private $dsn = 'mysql:host=localhost; dbname=workshop';
    private $username = 'root';
    private $password = '';
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    private $table = 'buku';
    private $kolom = array('judul_buku','penulis','tahun','penerbit');
    private $conn;

    public function __construct() {
        $this->conn = new PDO($this->dsn, $this->username, $this->password, $this->options);
    }

    public function insert($data){
        try{
            # prepare
            $sql = 'INSERT INTO '.$this->table.' (judul_buku, penulis, tahun, penerbit) VALUES (? , ? , ? , ?)';

            # bind
            $query = $this->conn->prepare($sql);
            $query->bindParam(1, $title);
            $query->bindParam(2, $author);
            $query->bindParam(3, $year);
            $query->bindParam(4, $distributor);

            $title = $data[0];
            $author = $data[1];
            $year = $data[2];
            $distributor = $data[3];

            # execute
            $query->execute();
        }
        catch (PDOException $ex){
            print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '
              .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
        }
    }

    public function fetch(){
        $sql = 'SELECT * FROM '.$this->table;
        try{
            $query = $this->conn->query($sql);
            return $query->fetchAll();
        } catch (PDOException $ex) {
            print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '
              .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
        }
    }

    public function delete($where){
        $sql = 'DELETE FROM '.$this->table.' WHERE '.$where;
        try{
            $query = $this->conn->exec($sql);
            return $query.' data dihapus.';
        } catch (PDOException $ex) {
            print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '
              .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
        }
    }

    public function __destruct() {
        $this->conn = null;
    }
}
?>

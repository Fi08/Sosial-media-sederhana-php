<?php


class Database
{
    private $host = DB_HOST;
    private $root = DB_USER;
    private $pass = DB_PASS;
    private $Db_Name = DB_NAME;

    private $stmt;
    private $dbh;

    public function __construct()
    {
        $dbn = 'mysql:host = ' . $this->host . ';dbname=' . $this->Db_Name;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dbn, $this->root, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query); // Langkah 1
    }

    public function manualbind($params, $value, $tipe = null)
    {
        if (is_null($tipe)) {
            switch (true) {
                case is_int($value):
                    $tipe = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $tipe = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $tipe = PDO::PARAM_NULL;
                    break;
                default:
                    $tipe = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($params, $value, $tipe); // Langkah 2
    }

    public function jalankan()
    {
        $this->stmt->execute(); // Langkah 3
    }

    public function resultSet()
    {
        $this->jalankan();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->jalankan();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function hitung()
    {
        return $this->stmt->rowcount();
    }

    public function tanggalsekarang()
    {
        return Date('d-m-Y');
    }
}

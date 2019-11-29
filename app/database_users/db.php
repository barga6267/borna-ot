<?php

class db
{
    public $pdo;
    protected $tbl;

    public function __construct()
    {
        try {
            $this->config();
        } catch (Exception $e) {
            echo "متصل نشد . خطا در اتصال به دیتابیس";
        }
    }

    public function config()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=man_db_borna_ot", "root", "");
        $this->pdo->exec('SET NAMES utf8');
    }

    public function settbl($name)
    {
        $this->tbl = $name;
    }

    public function search_data($name, $val)
    {

        $sql = $this->pdo->prepare("SELECT * FROM `{$this->tbl}` WHERE $name='$val'");
        $sql->execute();
        $row = $sql->fetch(pdo::FETCH_OBJ);
        return ($row);
    }

    public function createTbl($LastInsertId)
    {
        $sql = "CREATE TABLE r_$LastInsertId (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    reshte VARCHAR(30) NOT NULL,
    tell VARCHAR(50),
    mony VARCHAR(50),
    month VARCHAR(50),
    faname VARCHAR(50),
    age VARCHAR(50),
    tsabtnam VARCHAR(50),
    dateShahrie VARCHAR(50),
    tshahrie1 VARCHAR(50),
    tshahrie2 VARCHAR(50),
    tshahrie3 VARCHAR(50)
    )";
        $this->pdo->exec($sql);

    }  //-----create tbl in databases----

    public function add_data($data)
    {
        $fild = array_keys($data);
        if (is_array($data)) {
            $dat = "'" . implode("','", $data) . "'";
        }
        if (is_array($fild)) {
            $fil = implode(" , ", $fild);
        }
        $sql = $this->pdo->prepare("INSERT INTO `{$this->tbl}`  ($fil) VALUES ($dat)");

        $sql->execute();
    }

    public function select_data($name)
    {

        if (is_array($name)) {
            $names = "'" . implode("','", $name) . "'";
            $sql = $this->pdo->prepare("SELECT {$names} FROM `{$this->tbl}` ORDER BY id DESC ");
        } else {
            $sql = $this->pdo->prepare("SELECT {$name} FROM `{$this->tbl}` ORDER BY id DESC ");
        }
        $sql->execute();
        $row = $sql->fetchAll(pdo::FETCH_OBJ);

        return ($row);
    }

    public function select_data_pay($id)
    {

        $sql = $this->pdo->prepare("SELECT `*` FROM `{$this->tbl}` WHERE id='$id'");
        $sql->execute();
        $row = $sql->fetch(pdo::FETCH_OBJ);
        return ($row);

    }

    public function select_data_go($idCocherTbl)
    {
        $contIdCocerTbl = count($idCocherTbl);
        for ($ic=1 ;$contIdCocerTbl>=$ic; $ic++){
            $sql = $this->pdo->prepare("SELECT `*` FROM `{$this->tbl}` WHERE par_tbl='r_$ic' ");
            $sql->execute();
            $row[$ic] = $sql->fetch(pdo::FETCH_OBJ);
            return ($row);
        }
//        var_dump($sql);
//        $sql->execute();
//        $row = $sql->fetch(pdo::FETCH_OBJ);
//        return ($row);

    }

    public function select_data_limit($name)
    {

        if (is_array($name)) {
            $names = "'" . implode("','", $name) . "'";
            $sql = $this->pdo->prepare("SELECT {$names} FROM `{$this->tbl}` ORDER BY id DESC LIMIT 2000");
        } else {
            $sql = $this->pdo->prepare("SELECT {$name} FROM `{$this->tbl}` ORDER BY id DESC LIMIT 2000");
        }
        $sql->execute();
        $row = $sql->fetchAll(pdo::FETCH_OBJ);

        return ($row);
    }

    public function delete_data($id)
    {

        $sql = $this->pdo->prepare("delete from `{$this->tbl}` WHERE id=$id ");
			//	var_dump($sql);

        $sql->execute();

    }

    public function delete_data_par_id($par_id,$par_tbl)
    {

        $sql = $this->pdo->prepare("delete from `{$this->tbl}` WHERE `par_id`='$par_id' AND `par_tbl`='$par_tbl' ");
		//var_dump($sql);die;
        $sql->execute();

    }

    public function select_count($mid)
    {

        $sql = $this->pdo->prepare("SELECT COUNT(DISTINCT $mid) FROM `{$this->tbl}` ");
        $sql->execute();
        $row = $sql->fetchAll(pdo::FETCH_ASSOC);

        return ($row);
    }

    public function edit_data($data, $col, $id)
    {
        $sql = $this->pdo->prepare("UPDATE `{$this->tbl}` SET `$col[0]`='$data[0]',`$col[1]`='$data[1]' ,`$col[2]`='$data[2]',
                                                              `$col[3]`='$data[3]',`$col[4]`='$data[4]' ,`$col[5]`='$data[5]' 
                                                              WHERE id='$id'");
        $sql->execute();
    }

    public function like_data($name, $value)
    {
        $sql = $this->pdo->prepare("select * FROM `{$this->tbl}` where $name LIKE '%$value%'");
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

}


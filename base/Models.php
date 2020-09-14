<?php 

class Models{

    private     $host;
    private     $username;
    private     $password;
    private     $database;
    protected   $table;
    private     $connect;

    public function __construct(){
        $this->connect();
    }
    public function connect(){
        $configDb       = config('database');
        $this->host     = $configDb['host'];
        $this->username = $configDb['username'];
        $this->password = $configDb['password'];
        $this->database = $configDb['database'];

        try {
            $this->connect = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    public function setTable($nameTable){
        $this->table = $nameTable;
    }

    public function all(){
        $sql = 'SELECT * FROM ' . $this->table;
        return $this->_exec($sql);
    }

    public function get($coditions){
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE ' . $this->buildWhere($coditions);
        return $this->_exec($sql);
    }

    public function buildWhere($coditions){
        $where = [];
        foreach($coditions as $key => $codition){
            $where[] = $key . ' = "' . $this->escapeSql($codition) . '"';
        }
        return implode(' AND ', $where);
    }

    public function insert($aryInsert){
        $aryKeys = array_keys($aryInsert);
        $aryValues = array_values($aryInsert);
        $sql = 'INSERT INTO ' . $this->table . ' (' . implode(', ', $aryKeys) . ') VALUES ("' . implode('", "', $aryValues) . '")';
        //kết quả thu được là: INSERT INTO product (name, price, description) VALUES ("dsads", "fsadsaf", "fsadasfas")
        return $this->_exec($sql);
    }

    public function update($aryUpdate, $coditions){
        $sql = "UPDATE " . $this->table . " SET ";

        //query SET 
        foreach($aryUpdate as $key => $val){
            $sql .= ' ' . $key . ' = "' . $this->escapeSql($val) . '",';
        }

        //bỏ dấu , thừa sau cùng
        $sql = trim($sql, ',');
        
        //set query WHERE
        $sql .= ' WHERE ' .  $this->buildWhere($coditions);

        return $this->_exec($sql);
    }

    public function delete($coditions){
        $sql = 'DELETE FROM ' . $this->table . ' WHERE ' . $this->buildWhere($coditions);
        return $this->_exec($sql);
    }

    public function _exec($sql){
        try{
            $stmt = $this->connect->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            preg_match('/(UPDATE)|(DELETE)/', $sql, $matches, PREG_OFFSET_CAPTURE);
            if(count($matches) > 0){
                return true;
            }
            if(preg_match('/(INSERT)/', $sql)){
                return $this->connect->lastInsertId();
            }
            return $stmt->fetchAll();
        }catch(Exception $e){
            print_r($e->getMessage());die;
            return null;
        }
    }

    public function escapeSql($arrs){
        $aryReplace = [
            '\\'    => '\\\\',
            '"'     => '\\"',
            '_'     => '\_',
            '%'     => '\%',
            '\''    => '\\\''
        ];
        return str_replace(array_keys($aryReplace), array_values($aryReplace), $arrs);
    }
}
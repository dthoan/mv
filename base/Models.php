<?php 

class Models{

    private     $host;
    private     $username;
    private     $password;
    private     $database;
    protected   $table;
    private     $connect;

    private     $coditions = [];
    private     $order = [];

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

    public function where($codition){
        array_merge($this->coditions, $codition);
        return $this;
    }
    public function order($orderBy, $orderValue = 'ASC'){
        $orderValue = strtoupper($orderValue);
        if(!in_array($orderValue, ['ASC', 'DESC'])){
            $orderValue = 'ASC';
        }
        $this->order[$orderBy] = $orderValue;
        return $this;
    }

    public function all(){
        $sql = 'SELECT * FROM ' . $this->table;
        return $this->_exec($sql);
    }
    //hàm get là để lấy toàn bộ data dựa theo codition
    //giới hạn data dc chọn
    public function get($coditions = [], $limit = 0, $begin = 0){

        $sql = 'SELECT * FROM ' . $this->table;

        if(!empty($this->coditions) || !empty($coditions)){
            $sql .= ' WHERE ';
        }
        if(!empty($this->coditions)){
            $sql .= $this->buildWhere($this->coditions);
        }elseif(!empty($coditions)){
            $sql .= $this->buildWhere($coditions);
        }

        if(!empty($this->order)){
            $sql .= ' ORDER BY ' . $this->buildOrder($this->order);
            $this->order = [];
        }

        if($limit != 0){
            $sql .= ' limit ' . $begin;
            $sql .= ', ' . $limit;
        }
        return $this->_exec($sql);
    }
    // chọn 1 dòng đầu tiên
    public function one($coditions){
        return $this->get($coditions, 1)[0] ?? [];
    }

    public function count(){
        $sql = 'SELECT COUNT(*) as count FROM ' . $this->table;
        return (int)($this->_exec($sql)[0]['count'] ?? '0');
    }

    public function pagging($page = 1){
        $page           = (int)$page;
        $numberOfPage   = config('app', 'number_of_page');
        $countAll       = $this->count();
        $start          = ($page - 1)*$numberOfPage;
        $getData        = $this->get($this->coditions, $numberOfPage, $start);
        $pageEnd        = ceil($countAll / $numberOfPage);
        return [
            'all_record' => $countAll,
            'start_record' => $start,
            'end_record' => $start + $numberOfPage,
            'current_record' => count($getData),
            'current_page' => $page,
            'datas' => $getData,
            'page_prev' => $page >= 1 ? $page - 1 : $page,
            'page_next' => $page < $pageEnd ? $page + 1 : $pageEnd,
            'page_start' => 1,
            'page_end' => $pageEnd,
        ];
    }

    public function buildWhere($coditions){
        $where = [];
        foreach($coditions as $key => $codition){
            $where[] = $key . ' = "' . $this->escapeSql($codition) . '"';
        }
        return implode(' AND ', $where);
    }

    public function buildOrder($orders){
        $orderData = [];
        foreach($orders as $key => $order){
            $orderData[] = $key . ' "' . $order . '"';
        }
        return implode(', ', $orderData);
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
            if(preg_match('/(SELECT)/', $sql)){
                return [];
            }
            return null;
        }
    }

    public function escapeSql($arrs, $isSearchLike = false){
        $aryReplace = [
            '\\'    => '\\\\',
            '"'     => '\\"',
            '\''    => '\\\''
        ];
        if($isSearchLike){
            $aryReplace = array_merge($aryReplace, [
                '_'     => '\_',
                '%'     => '\%',
            ]);
        }
        return str_replace(array_keys($aryReplace), array_values($aryReplace), $arrs);
    }
}
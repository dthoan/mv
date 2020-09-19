<?php 

class ProductModels extends Models{
    protected $table = 'product';
    private $categoryTable;

    public function __construct(){
        parent::__construct();
        $this->categoryTable = new LoaihangModels();
    }

    public function buildProduct($products = [], $isSingleData = false){
        if($isSingleData){
            return $this->_buildProduct($products);
        }
        if(empty($products)){
            $products = $this->all();
        }
        $result = $products;
        if(isset($products['datas'])){
            $result = $products['datas'];
        }
        $result = array_map(function(&$product){
            $product = $this->_buildProduct($product);
            return $product;
        }, $result);
        if(isset($products['datas'])){
            $products['datas'] = $result;
        }else{
            $products = $result;
        }
        return $products;
    }

    private function _buildProduct($product){
        $categoryWithID = $this->categoryTable->one(['id' => $product['category_id']]);
        $product['category'] = $categoryWithID['category_name'] ?? '';

        //calc discount
        $discount = (int)$product['discount'];
        $price = (int)$product['price'];
        $priceDiscout = $price - ($price*$discount)/100;

        $product['price_discount'] = $priceDiscout;

        return $product;
    }
}
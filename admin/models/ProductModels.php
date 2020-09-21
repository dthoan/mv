<?php 

class ProductModels extends Models{
    protected $table = 'product';
    private $categoryTable;

    public function __construct(){
        parent::__construct();
        $this->categoryTable = new LoaihangModels();
    }

    public function productAll(){
        $products = $this->all();
        return array_map(function(&$product){
            $categoryWithID = $this->categoryTable->one(['id' => $product['category_id']]);
            $product['category'] = $categoryWithID['category_name'] ?? '';
            return $product;
        }, $products);
    }
}
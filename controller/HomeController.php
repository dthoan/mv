<?php 

class HomeController extends Controller{

    private $product;
    private $category;

    public function __construct(){
        parent::__construct();
        $this->product = new ProductModels();
        $this->category = new LoaihangModels();
    }

    public function index(){
        $page = $_GET['page'] ?? '1';
        $allProduct = $this->product->pagging($page);
        $params = [
            'products' => $this->product->buildProduct($allProduct)
        ];
        return $this->view('home/index.php', $params);
    }
}
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
        $category = $_GET['category'] ?? '';
        if($category != ''){
            $this->product->where(['category_id' => $category]);
        }
        $allProduct = $this->product->pagging($page);
        $params = [
            'products' => $this->product->buildProduct($allProduct)
        ];
        return $this->view('home/index.php', $params);
    }

    public function detail(){
        $id = $_GET['id'] ?? '';
        if($id == ''){
            die('Product not found!');
        }
        $product = $this->product->one(['id' => $id]);
        $detailProduct = $this->product->buildProduct($product, true);

        //get all product
        $allProducts = $this->product->buildProduct();
        $params = [
            'product' => $detailProduct,
            'allProducts' => $allProducts
        ];
        return $this->view('home/details.php', $params);
    }

    public function contact(){
        return $this->view('home/contact.php');
    }
}
<?php 

class ProductController extends Controller{

    private $product;

    public function __construct(){
        $this->product = new ProductModels();
    }

    public function index(){
        $allProduct = $this->product->all();
        $params = [
            'products' => $allProduct
        ];
        return $this->view('product/list.php', $params);
    }

    public function add(){
        return $this->view('product/add_update.php');
    }

    public function addForm(){
        $params = $_POST;

        //sẽ kiểm tra giá trị đầu vào ở đây

        $aryInsert = [
            'name'          => $params['name'] ?? "Name Default",
            'price'         => $params['price'] ?? '0',
            'description'   => $params['description'] ?? ''
        ];

        if(!$this->product->insert($aryInsert)){
            echo "<script>alert('Insert to DB error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=product');
    }

    public function edit(){
        $id = $_GET['id'] ?? '';
        if($id == ''){
            die('Product not found');
        }
        $product = $this->product->get(['id' => $id]);
        $product = $product[0] ?? [];

        $params = [
            'typePage' => 'edit',
            'product' => $product
        ];
        return $this->view('product/add_update.php', $params);
    }

    public function editForm(){
        $params = $_POST;

        //sẽ kiểm tra giá trị đầu vào ở đây

        $aryUpdate = [
            'name'          => $params['name'] ?? "Name Default",
            'price'         => $params['price'] ?? '0',
            'description'   => $params['description'] ?? ''
        ];

        $codition = [
            'id' => $params['id'] ?? ''
        ];

        if(!$this->product->update($aryUpdate, $codition)){
            echo "<script>alert('Update to DB error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=product');
    }

    public function delete(){
        $id = $_GET['id'] ?? '';
        if($id == ''){
            die('Product not found');
        }

        if(!$this->product->delete(['id' => $id])){
            echo "<script>alert('Delete to DB error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=product');
    }
}
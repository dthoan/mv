<?php 

class ProductController extends Controller{

    private $product;
    private $category;

    public function __construct(){
        parent::__construct();
        $this->isAccessAdmin();
        $this->product = new ProductModels();
        $this->category = new LoaihangModels();
    }

    public function index(){
        $this->checkPermision('view_product');

        $allProduct = $this->product->productAll();
        $params = [
            'products' => $allProduct
        ];
        return $this->view('product/list.php', $params);
    }

    public function add(){ //add screen
        $this->checkPermision('add_product');

        $allCategory = $this->category->all();
        $params = [

            'categories' => $allCategory
        ];
        return $this->view('product/add_update.php', $params);
    }

    public function addForm(){
        $this->handlePostMethod();
        $this->checkPermision('add_product');

        $params = $_POST;

        //sẽ kiểm tra giá trị đầu vào ở đây
        $imagesPath = $this->saveFile($_FILES['images'] ?? []);

        $aryInsert = [
            'name'          => $params['name'] ?? "Name Default",
            'price'         => $params['price'] ?? '0',
            'description'   => $params['description'] ?? '',
            'category_id'   => $params['category_id'] ?? '',
            'discount'      => $params['discount'] ?? '',
            'images'        => $imagesPath
        ];

        if(!$this->product->insert($aryInsert)){
            echo "<script>alert('Insert to DB error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=product');
    }

    public function edit(){
        $this->checkPermision('edit_product');

        $id = $_GET['id'] ?? '';
        if($id == ''){
            die('Product not found');
        }
        $product = $this->product->get(['id' => $id]);
        $product = $product[0] ?? [];

        $allCategory = $this->category->all();

        $params = [
            'typePage' => 'edit',
            'product' => $product,
            'categories' => $allCategory
        ];
        return $this->view('product/add_update.php', $params);
    }

    public function editForm(){
        $this->handlePostMethod();
        $this->checkPermision('edit_product');

        $params = $_POST;

        //kiểm tra xem images có dc update hay không
        $imagesPath = '';
        if(isset($_FILES['images']) && !empty($_FILES['images']) && $_FILES['images']['error'] == '0'){
            $imagesPath = $this->saveFile($_FILES['images'] ?? []);
        }

        $aryUpdate = [
            'name'          => $params['name'] ?? "Name Default",
            'price'         => $params['price'] ?? '0',
            'discount'      => $params['discount'] ?? '',
            'description'   => $params['description'] ?? '',
            'category_id'   => $params['category_id'] ?? ''
        ];

        if($imagesPath != ''){
            $aryUpdate['images'] = $imagesPath;
        }

        $codition = [
            'id' => $params['id'] ?? ''
        ];

        if(!$this->product->update($aryUpdate, $codition)){
            echo "<script>alert('Update to DB error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=product');
    }

    public function delete(){
        $this->checkPermision('delete_product');

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
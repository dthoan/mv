<?php
class LoaihangController extends Controller{
    
    private $loaihang;

    public function __construct(){
        parent::__construct();
        $this->isAccessAdmin();
        $this->loaihang = new LoaihangModels();
    }
    // hiện thị danh sách loại hàng
    public function index(){
        $this->checkPermision('view_category');

        $allcategories = $this->loaihang->all();
        $params = [
            'categories' => $allcategories
        ];
        return $this->view('LoaiHang/list.php', $params);        
    }
    // hiện thị form add_update loại hàng
    public function add(){
        $this->checkPermision('add_category');

        return $this->view('LoaiHang/add_updateLoaiHang.php');
    }
    // Thêm Loại hàng mới
    public function addForm(){
        $this->handlePostMethod();
        $this->checkPermision('add_category');

        $params = $_POST;

        //sẽ kiểm tra giá trị đầu vào ở đây

        $aryInsert = [
            'category_code'         => $params['category_code'] ?? '',
            'category_name'         => $params['category_name'] ?? "Name Default"           
        ];

        if(!$this->loaihang->insert($aryInsert)){
            echo "<script>alert('Insert to DB error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=Loaihang');
    }
    // chỉnh sửa
    public function edit(){
        $this->checkPermision('edit_category');

        $id = $_GET['id'] ?? '';
        if($id == ''){
            die('Không tìm thấy loại hàng');
        }
        $Loaihang = $this->loaihang->get(['id' => $id]);
        // nếu có loại hàng trả lại loại hàng đó ngc lại là rỗng
        $Loaihang = $Loaihang[0] ?? [];

        $params = [
            'typePage' => 'edit',
            'category' => $Loaihang //Nhưng đang có tí lỗi 
        ];
        return $this->view('LoaiHang/add_updateLoaiHang.php', $params);
    }

    public function editForm(){
        $this->handlePostMethod();
        $this->checkPermision('edit_category');

        $params = $_POST;

        //sẽ kiểm tra giá trị đầu vào ở đây

        $aryUpdate = [
            'category_code'         => $params['category_code'] ?? 'Code Deault',
            'category_name'         => $params['category_name'] ?? "Name Default",
            
        ];

        $codition = [
            'id' => $params['id'] ?? ''
        ];

        if(!$this->loaihang->update($aryUpdate, $codition)){
            echo "<script>alert('Update to DB error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=Loaihang');
    }

    public function delete(){
        $this->checkPermision('delete_category');

        $id = $_GET['id'] ?? '';
        if($id == ''){
            die('Product not found');
        }

        if(!$this->loaihang->delete(['id' => $id])){
            echo "<script>alert('Delete to DB error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=Loaihang');
    }
}


?>
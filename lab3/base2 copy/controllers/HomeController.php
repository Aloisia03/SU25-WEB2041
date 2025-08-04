<?php

class HomeController
{
    private $ProductModel;
    public function __construct(){
        $this->ProductModel = new ProductModel();
    }
    public function index() 
    {
        
        $userlist = $this->ProductModel->getAll();
        require_once PATH_VIEW . 'main.php';
    }
   public function detail(){
        if(isset($_GET['id'])){
         $product= $this->ProductModel->getDetail($_GET['id']);
         require_once PATH_VIEW .'detail.php';
    }
}
 public function delete(){
        if(isset($_GET['id'])){
        $this->ProductModel->deleteUser($_GET['id']);
    }
    header("location:".BASE_URL);
}
public function create(){
    require_once PATH_VIEW ."create.php";
}
public function store(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
$data=$_POST +$_FILES;
if($data['hinh_anh']['size']>0){
    $data['hinh_anh'] = upload_file('user1' ,$data['hinh_anh']);
}else{
$data['hinh_anh'] = 'user1/anh1.jpg';
    }   
   $this->ProductModel->store($data);
}
header("location:". BASE_URL);
}
public function edit(){
    $user= $this->ProductModel->getDetail($_GET["id"]);
    if(isset($_GET["id"])){
require_once PATH_VIEW ."edit.php";
}else{
    header("location:".BASE_URL);
}
}
public function update(){
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data=$_POST + $_FILES;
    $user=$this->ProductModel->getDetail($data["id"]);
    if($data["hinh_anh"]["size"]>0){
     $data['hinh_anh'] = upload_file('user1' ,$data['hinh_anh']);
    }else{
        $data["hinh_anh"] = $user["hinh_anh"];
}
$row=$this->ProductModel->update($data);
if($row>0&&file_exists(PATH_ASSETS_UPLOADS.$user["hinh_anh"])){
unlink(PATH_ASSETS_UPLOADS.$user["hinh_anh"]);
}
}
header("location:".BASE_URL);
}
}
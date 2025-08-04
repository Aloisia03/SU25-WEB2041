<?php
// cú pháp kết nối
class ProductModel extends BaseModel{
 function getAll(){
    $sql = "select * from products";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute();
    $userlist = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $userlist;
}
function getDetail($id){    
     $sql = "select * from products where id=:id";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute(["id"=> $id]);
    $user = $stmt->fetch();
    return $user;
}
function deleteUser($id){    
     $sql = "delete from products where id=:id";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute(["id"=> $id]);
    return $stmt->rowCount();
}
function store($data){
    $sql = "INSERT INTO products 
        (id, ten_san_pham, ma_san_pham, hinh_anh, hang_san_xuat, ngay_nhap, gia_ban, trang_thai)
        VALUES 
        (:id, :ten_san_pham, :ma_san_pham, :hinh_anh, :hang_san_xuat, :ngay_nhap, :gia_ban, :trang_thai)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'id' => $data['id'],
        'ten_san_pham' => $data['ten_san_pham'],
        'ma_san_pham' => $data['ma_san_pham'],
        'hinh_anh' => $data['hinh_anh'],
        'hang_san_xuat' => $data['hang_san_xuat'],
        'ngay_nhap' => $data['ngay_nhap'],
        'gia_ban' => $data['gia_ban'],
        'trang_thai' => $data['trang_thai']
    ]);

    return $stmt->rowCount();
}
function update($data){
    $sql = "update products
     set ten_san_pham =:ten_san_pham,
     hang_san_xuat=:hang_san_xuat,
     ngay_nhap=:ngay_nhap,
     gia_ban=:gia_ban,
     ma_san_pham=:ma_san_pham,
     hinh_anh=:hinh_anh,
     trang_thai=:trang_thai
      where id=:id";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute($data);
    return $stmt->rowCount();
}
}
?>
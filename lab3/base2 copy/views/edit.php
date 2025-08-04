<h2>Sửa thông tin </h2>
<form action="<?= BASE_URL . '?action=update'?>"method="post"
enctype="multipart/form-data">
<p>Nhập tên</p>
<input type="text" name ="ten_san_pham" required value="<?=$user['ten_san_pham']?>"><br>
<p>Nhập Ma San Pham</p>
<input type="text" name ="ma_san_pham"required value="<?=$user['ma_san_pham']?>"><br>
<p>Nhập Hang San Xuat</p>
<input type="text" name ="hang_san_xuat"required value="<?=$user['hang_san_xuat']?>"><br>
<p>Nhập Ngay Nhap</p>
<input type="date" name ="ngay_nhap"required value="<?=$user['ngay_nhap']?>"><br>
<p>Nhập Gia Ban</p>
<input type="number" name ="gia_ban"required value="<?=$user['gia_ban']?>"><br>
<p>Nhập Trang Thai</p>
<input type="text" name ="trang_thai"required value="<?=$user['trang_thai']?>"><br>
<p>upload Ảnh</p>
<input type="file" name="hinh_anh"><br><br>
<input type="hidden" name="id" required value="<?=$user['id']?>">
<button type="submit">Sửa</button>
</form>

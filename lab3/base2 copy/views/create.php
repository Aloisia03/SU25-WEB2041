<h2>Thêm người dùng</h2>
<form action="<?= BASE_URL . '?action=store'?>"method="post"
enctype="multipart/form-data">
<p>Nhập id</p>
<input type="text" name ="id"><br>
<p>Nhập tên</p>
<input type="text" name ="ten_san_pham"><br>
<p>Nhập Ma San Pham</p>
<input type="text" name ="ma_san_pham"><br>
<p>Nhập Hang San Xuat</p>
<input type="text" name ="hang_san_xuat"><br>
<p>Nhập Ngay Nhap</p>
<input type="date" name ="ngay_nhap"><br>
<p>Nhập Gia Ban</p>
<input type="number" name ="gia_ban"><br>
<p>Nhập Trang Thai</p>
<input type="text" name ="trang_thai"><br>
<p>upload Ảnh</p>
<input type="file" name="hinh_anh"><br><br>
<button type="submit">Thêm</button>
</form>


<style>
    .container {
        max-width: 1200px;
        margin: 40px auto;
        font-family: Arial, sans-serif;
    }
    h2 {
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }
    thead {
        background-color: #343a40;
        color: white;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    td, th {
        padding: 10px;
        vertical-align: middle;
    }
    img {
        max-width: 100px;
    }
    .badge {
        padding: 5px 10px;
        border-radius: 5px;
        display: inline-block;
        font-size: 0.4cm;
        font-weight: bold;
    }
    .bg-success {
        background-color: #28a745;
        color: white;
    }
    .bg-warning {
        background-color: #ffc107;
        color: #212529;
    }
    .btn-add {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        display: inline-block;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px;
    }
    .icon {
        margin: 0 5px;
        cursor: pointer;
        
    }
    .icon.edit { color: #ffc107; }
    .icon.delete { color: #dc3545; }
    .icon.view { color: #000; }
    a { text-decoration: none; }
</style>

<div class="container">
    <h2>Danh sách sản phẩm</h2>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã SP</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th>Hãng Sản Xuất</th>
                <th>Ngày Nhập</th>
                <th>Giá Bán</th>
                <th>Trạng Thái</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userlist as $index => $product) { ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($product['ma_san_pham']) ?></td>
                    <td><?= htmlspecialchars($product['ten_san_pham']) ?></td>
                    <td>
                        <?php if (!empty($product['hinh_anh'])): ?>
                            <img src="<?= BASE_ASSETS_UPLOADS . $product['hinh_anh'] ?>" alt="Ảnh sản phẩm">
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($product['hang_san_xuat']) ?></td>
                    <td><?= htmlspecialchars($product['ngay_nhap']) ?></td>
                    <td><?= number_format($product['gia_ban'], 0, ',', '.') ?> VND</td>
                    <td>
                        <?php if ($product['trang_thai'] == 'con_hang'): ?>
                            <span class="badge bg-success">Còn hàng</span>
                        <?php else:($product['trang_thai'] == 'giam_gia') ?>
                            <span class="badge bg-warniNg">Đang giảm giá</span>
                        <?php endif ?>
                    </td>
                    <td>
                         <a href="http://localhost/base2/?action=edit&id=<?= $product['id'] ?>"><span class="icon edit">✏️</span></a>
                        <a href="http://localhost/base2/?action=delete&id=<?= $product['id'] ?>"onclick="return confirm('có xóa k?')"><span class="icon delete">🗑</span></a>
                         <a href="http://localhost/base2/?action=detail&id=<?= $product['id'] ?>"><span class="icon view">👁️</span></a>
                    </td>
                    <td>


                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div style="text-align:center;">
        <a href="<?=BASE_URL . '?action=create'?>" class="btn-add">➕ Thêm Sản Phẩm</a>
    </div>
</div>

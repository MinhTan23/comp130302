<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang web bán hoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trang web bán hoa</h1>
    </header>

    <section class="tim-kiem">
        <form action="tim-kiem.php" method="post">
            <input type="text" name="ten_hoa" placeholder="Tên hoa">
            <select name="loai_hoa">
                <option value="">Tất cả</option>
                <option value="Hoa hồng">Hoa hồng</option>
                <option value="Hoa cúc">Hoa cúc</option>
                <option value="Hoa lan">Hoa lan</option>
                <option value="Hoa sen">Hoa sen</option>
            </select>
            <input type="number" name="gia_tu" placeholder="Giá từ">
            <input type="number" name="gia_den" placeholder="Giá đến">
            <input type="submit" value="Tìm kiếm">
        </form>
    </section>

    <section class="danh-sach-hoa">
        <div class="tong-so">
            <span>Tổng số hoa: <?php echo $tongSoHoa; ?></span>
        </div>

        <div class="list-hoa">
            <?php foreach ($lstHoa as $hoa) { ?>
                <div class="item-hoa">
                    <div class="ten-hoa"><?php echo $hoa['ten_hoa']; ?></div>
                    <div class="loai-hoa"><?php echo $hoa['loai_hoa']; ?></div>
                    <div class="gia-hoa"><?php echo number_format($hoa['gia_hoa'], 0, ',', '.'); ?> VNĐ</div>
                </div>
            <?php } ?>
        </div>
    </section>

    <footer>
        &copy; 2023
    </footer>
</body>
</html>

<div class="col-2">
	<div class="row">
		<div class="col-12">
			<?php
				$noactive='btn btn-secondary btn-block';
				$active = 'btn btn-secondary btn-block active';
				if($_SESSION['isadmin']==1){
			?>
			</br>
			<button type="button" class="<?php if(!empty($_isSanPham)) echo $active; else echo $noactive ?>" >
				<a style="color:white;text-decoration: none;" href="<?php echo $level.PAGE."admin-sanpham.php"; ?>">Sản Phẩm</a>
			</button>
							
			</br>
			<button type="button" class="<?php if(!empty($_isTaiKhoan)) echo $active; else echo $noactive ?>">
				<a style="color:white;text-decoration: none;" href="<?php echo $level.PAGE."admin-taikhoan.php"; ?>">Tài Khoản</a>
			</button>
			<?php 
				}
			?>
			</br>
			<button type="button" class="<?php if(!empty($_isHoaDon)) echo $active; else echo $noactive ?>">
				<a style="color:white;text-decoration: none;" href="<?php echo $level.PAGE."admin-hoadon.php"; ?>">Hóa Đơn</a>
			</button>
			</br>
			<button type="button" class="<?php if(!empty($_isKhachHang)) echo $active; else echo $noactive ?>">
				<a style="color:white;text-decoration: none;" href="<?php echo $level.PAGE."admin-khachhang.php"; ?>">Khách Hàng</a>
			</button>
		</div>
	</div>		
</div>
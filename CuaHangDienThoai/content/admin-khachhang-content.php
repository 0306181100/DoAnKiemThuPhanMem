<div class="col-10"  style="background-color: #7cfc005e;">
</br>
					
					<form action="<?php echo $level.Content."themkhachhang.php";?>" method="post">
						<div class="row">
							<div class="col-2">Họ Tên</div>
							<div class="col-10">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nhập họ tên khách hàng" name="txthoten">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-2">Địa Chỉ</div>
							<div class="col-10">
								<div class="form-group">
									<input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="txtdiachi">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-2 offset-5">
								<input type = "hidden" value= "<?php ?>" name="id">
								<input type="submit" class="btn btn-primary" value="Thêm">	
							</div>								
						</div>
					</form>
					
					<div class="row">
						<div class="col-12" style="color:red;font-size:30px;">Thông tin sản phẩm</div>
						<div class="col-12">
						<table class="table table-hover">
							<thead>
							<tr>
								<th>Họ tên khách hàng</th>
								<th>Địa chỉ</th>
							</tr>
							</thead>
							
							<tbody>
								<?php
									foreach($khachhang as $kh){
								?>
								<tr>
									<td><?php echo $kh['HoTen']; ?></td>
									<td><?php echo $kh['DiaChi']; ?></td>
									
									<td>
										<form action="<?php echo $level.PAGE."suakhachhang.php";?>" method="GET">
											<input type = "hidden" value= "<?php echo $kh['id']; ?>" name="id">
											<input type="submit" class="btn btn-success" value="Sửa">
										</form>
									</td>
									<td>
										<form action="<?php echo $level.Content."xoakhachhang.php"; ?>" method="GET">
											<input type = "hidden" value= "<?php echo $kh['id']; ?>" name="idxoa">
											<input type="submit" class="btn btn-danger" value="Xoá">
										</form>
									</td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						</div>
					</div>
					
				</div>
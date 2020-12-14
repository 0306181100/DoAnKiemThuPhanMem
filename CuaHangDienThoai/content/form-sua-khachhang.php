<div class="col-10"  style="background-color: #7cfc005e;">
    <form action="<?php echo $level.Content."sua-data-khachhang.php";?>" method="post">	
        <div class="row">
            <div class="col-2">Họ Tên</div>
            <div class="col-10">
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $khachhang[0]['HoTen'] ?>" name="txtten">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-2">Địa chỉ</div>
                <div class="col-10">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?php echo $khachhang[0]['DiaChi'];?>" name="txtdiachi">
                    </div>
                </div>
            </div>
        
        <div class="row">
            <div class="col-2 offset-5">
                <input type = "hidden" value= "<?php echo $id;?>" name="id">
                <input type="submit" class="btn btn-primary" value="Sửa">		
            </div>
        </div>
    </form>
</div>
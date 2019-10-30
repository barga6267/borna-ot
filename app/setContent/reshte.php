<?php
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $obj->settbl("cocher");
    $obj->add_data($data);
    $LastInsertId=$obj->pdo->lastInsertId(); //------get a last id-----
    $obj->createTbl($LastInsertId);          //----create tbl reshte varzeshi
//    header("location:dashbord.php?contact=reshte");
}
?>


<header class="panel-heading"><label class="label-success">تعریف رشته ورزشی جدید : </label></header>
<tr class="gradeX even">
</tr>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">اپراتور ثبت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> زمان کلاس :</label>
                                از
                        <input type="time" name="frm[timeas]" class="form-control">
                                الی
                        <input type="time" name="frm[timeta]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>روزهای :</label>
                        <div class="radio">
                            <label>
                                <input name="frm[checzf]" value="0" checked="" type="radio">
                            </label> زوج
                        </div>
                        <div class="radio">
                            <label>
                                <input name="frm[checzf]" value="1" type="radio">
                            </label> فرد
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> مربی :</label>
                        <input type="text" name="frm[coch]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> مبلغ شهریه :</label>
                        <input type="text" name="frm[mony]" class="form-control" > تومان
                    </div>
                    <div class="form-group">
                        <label>تخفیف استخر :</label>
                        <div class="radio">
                            <label>
                                <input name="frm[taghfif]" value="1" checked="" type="radio">
                            </label> دارد
                        </div>
                        <div class="radio">
                            <label>
                                <input name="frm[taghfif]" value="0" type="radio">
                            </label> ندارد
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">اپراتور ثبت  :</label>
                        <input type="text" name="frm[operator]" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> شماره تماس مربی  :</label>
                        <input type="text" name="frm[tellm]" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> عنوان رشته  :</label>
                        <input type="text" name="frm[reshte]" class="form-control" placeholder="عنوان - سطح - شهریه" >
                    </div>

                    <input type="hidden" name="frm[time]" value="<?php echo time(); ?>">
                    <button type="submit" name="btn"  class="btn btn-success"  style="width: 100px"> ثبت</button>
                </form>
            </div>
        </section> 
    </div>
</div>

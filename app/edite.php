<?php
$id=$_GET['eid'];
$tbl=$_GET['tbl'];
$obj->settbl($tbl);
$row=$obj->show_edit($id);

if (isset($_POST['ebtn'])) {
    $data = $_POST['frm'];
    $val=array_values($data);
    $obj->settbl($tbl);
    $obj->edit_add($val, $id);
    header("location:dashbord.php?contact=search");

}
?>


<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading"> ویرایش
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group ">
                        <label for="exampleInputEmail1"> نام :</label>
                        <input type="text" id="name" name="frm[name]" value="<?php echo $row->name; ?>" class="form-control">
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> مبلغ شهریه :</label>
                        <input type="text" name="frm[mony]" id="mony" value="<?php echo $row->mony; ?>" class="form-control">
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> شماره تماس ورزشکار :</label>
                        <input type="text" name="frm[tellv]" value="<?php echo $row->tellv; ?>" class="form-control ">
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> نام پدر :</label>
                        <input type="text" name="frm[faname]" value="<?php echo $row->faname; ?>" class="form-control ">
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> سن:</label>
                        <input type="text" name="frm[age]" value="<?php echo $row->age; ?>" class="form-control ">
                    </div>
                    <div class="form-group bluc">
                        <button type="submit" name="ebtn" class="btn btn-success">ویرایش</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>


<!-----------------------------------------------------------------------end-form---------------->

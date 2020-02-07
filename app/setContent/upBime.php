<?php
ob_start();
$obj->settbl("cocher");
$row = $obj->select_data("*");
?>
<div class="row">
    <div class="col-lg-3">
        <section class="panel">
            <header class="panel-heading">تمدید اعتبار بیمه ورزشی
            </header>
            <div class="row">
                <div class="col-lg-9">
                    <section class="panel">
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="form-group ">
                                    <label for="exampleInputEmail1"> نام و نام خانوادگی :</label>
                                    <input type="text" name="frm[value]" class="form-control">
                                </div>
                                <div class="form-group unbluc">
                                    <label> رشته ورزشی :</label>
                                    <select name="frm[reshte]" class="form-control m-bot15 ">
                                        <?php
                                        foreach ($row as $val):
                                            ?>
                                            <option value="<?php echo $val->id; ?>"><?php echo $val->reshte; ?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label"></label>
                                    <div>
                                        <button type="submit" style="width: 262px;" class="btn btn-send"
                                                name="sr2btn">&nbsp;&nbsp;&nbsp;&nbsp;
                                            جستجو&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>


    <?php
    if (isset($_POST['sr2btn'])):
    $data = $_POST['frm'];
    $tblId="r_".$data['reshte'];
    $obj->settbl($tblId);
    $name = 'name';
    $value = $data['value'];
    $res = $obj->like_data($name, $value);
    ?>

    <div class="col-lg-9">
        <section class="panel">
            <?php
            foreach ($res as $val):
                ?>
                <table class="table table-striped table-advance table-hover ">
                    <tbody>
                    <form method="post">
                        <tr>
                            <th> کد کاربری
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $val->id ?></th>
                            <th>نام
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $val->name ?></th>
                            <th>نام پدر
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $val->faname ?></th>
                        </tr>
                        <tr>
                            <th>رشته ورزشی
                                &nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;<?php echo $val->reshte ?></th>
                            <th>انقضای بیمه
                                &nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;<?php echo $val->tshahrie2 ?></th>
                            <th><a href="dashbord.php?contact=list_shahrie&par_tbl=<?php echo $tblId;?>&par_id=<?php echo $val->id;?>"
                                   class="btn btn-info ">نمایش شهریه</a>
                            </th>
                            <th>
                                <a href="dashbord.php?contact=up_upBime&pid=<?php echo $val->id ?>&resh=<?php echo $tblId; ?>"
                                   class="btn btn-success ">تمدید بیمه</a>
                            </th>
                        </tr>
                    </form>
                    </tbody>
                    <tfoot>
                    <hr style="width: 90%;height: 1px;background-color: black;">
                    </tfoot>
                </table>
            <?php
            endforeach;
            ?>
        </section>
        <?php
        endif;
        ?>
    </div>
</div>

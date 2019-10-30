<?php
ob_start();
?>


    <header class="panel-heading"><label class="label-success">جستجو ورزشکاران : </label></header>
    <tr class="gradeX even">
    </tr>
    <!------------------------------------------------------------------------------------------->
<?php

if (isset($_POST['sr2btn'])):
    $data = $_POST['frm'];

    $obj->settbl($data['reshte']);
    $name = $data['name'];
    $value = $data['value'];

    $res = $obj->like_data($name, $value);

    ?>



    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <label style="background-color: #2a3542;color: white;width: 250px;">
                        رشته ورزشی &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp; <?php $cod = $data['reshte'];
                        echo $cal->cal_sich($cod); ?>
                    </label>
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th> کد کاربری</th>
                        <th>نام</th>
                        <th>نام پدر</th>
                        <th>سن</th>
                        <th>رشته ورزشی</th>
                        <th>شهریه</th>
                        <th>تلفن</th>
                        <th>پرداخت شهریه ماه</th>
                        <th>ت شهریه</th>
                        <th>تاریخ ثبت نام</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($res as $val):
                        ?>
                        <tr>
                            <td><?php echo $val->id ?></td>
                            <td><?php echo $val->name ?></td>
                            <td><?php echo $val->faname ?></td>
                            <td><?php echo $val->age ?></td>
                            <td><?php $co = $cal->cal_sich($val->reshte);
                                echo $co . " - " . $val->reshte; ?></td>
                            <td><?php echo $val->mony ?></td>
                            <td><?php echo $val->tellv ?></td>
                            <td><textarea class="hov-month" disabled><?php echo $val->month ?></textarea></td>
                            <td><?php $time=$val->tpay; echo jdate('d  / F ',$time);?></td>
                            <td><?php $time = $val->time;
                                echo jdate('d  / F /  y', $time); ?></td>
                            <td><a href="dashbord.php?contact=editsearch&eid=<?php echo $val->id ?>&tbl=<?php echo $data['reshte'] ?>"
                                   class="btn btn-success btn-xs"><i class="icon-pencil "></i></a></td>
                            <td><a href="dashbord.php?contact=search&did=<?php echo $val->id ?>"
                                   class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    <?php
    if (isset($_GET['did'])) {

        $did = $_GET['did'];
        $obj->delete_data($did);
        header("location:dashbord.php?contact=search");
    }
echo "<hr style=\"width: 70%;height: 1px;background-color: grey;\">";
endif;
?>

<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">جستجو ورزشکاران
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group ">
                        <label for="exampleInputEmail1"> عنوان مورد نظر :</label>
                        <input type="text" name="frm[value]" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label> بر اساس :</label>
                        <select name="frm[name]" class="form-control m-bot15 ">
                            <option value="name"> نام</option>
                            <option value="faname"> نام پدر</option>
                            <option value="age">سن</option>
                            <option value="tellv"> شماره تلفن</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label> رشته ورزشی :</label>
                        <select name="frm[reshte]" class="form-control m-bot15 ">
                            <option value="1"> والیبال</option>
                            <option value="2"> فوتسال</option>
                            <option value="3">بسکتبال </option>
                            <option value="5">کاراته </option>
                            <option value="6">تکواندو </option>
                            <option value="7">بوکس </option>
                            <option value="8">کیک بوکس</option>
                            <option value="9">ژیمناستیک مبتدی </option>
                            <option value="4"> ژیمناستیک پیشرفته</option>
                            <option value="14"> ایروبیک</option>
                            <option value="15"> پیلاتس</option>
                            <option value="10">پارکور </option>
                            <option value="11">کونگ فو</option>
                            <option value="12">کشتی ازاد نوجوانان </option>
                            <option value="13">کشتی ازاد بزرگسالان </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"></label>
                        <div>
                            <button type="submit" style="width: 262px;" class="btn btn-send" name="sr2btn">&nbsp;&nbsp;&nbsp;&nbsp;
                                جستجو&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

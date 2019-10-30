<?php
$obj->settbl("cocher");
$res = $obj->select_data("*");

if (isset($_POST['btn'])) {
    $data = $_POST['frm'];

    $cod = $data['reshte'];


    //گرفتن تاریخ و تبدیل ان به برچسب یونیکس برای افزایش یک سال به ان
    //از انجایی که فرمت ورودی به میلادی است ابتدا ان را به ماه
    // و سال و روز به ارایه تبدیل کرده و بعد با تابع   jmktime  برچسب یونیکس انرا میسازیم
    $arrytime = explode('-', $data['ebime']);  //andis 0 -> years  . andis 1-> month . andis 2->days
    $data['ebime'] = jmktime(0, 0, 0, $arrytime['1'], $arrytime['2'], $arrytime['0']);
    $data['tpay'] = $data['time'];

    $obj->settbl($cod);

    $obj->add_data($data);  //----add to 1 or 2 or....10

    
    unset($data['faname']);
    unset($data['age']);
    unset($data['month']);
    $obj->settbl($cod);
    $sql = $obj->show_id_chid();
    

    $data['idresh'] = $sql->id;
    $data['alebime'] = $data['ebime'] - 864000;// ده روز کمتر از زمان انقضا نمایش داده میشود
    $obj->settbl("alldata");
    $obj->add_data($data);  //----alldata for e bime and error bime---

}
?>

<header class="panel-heading"><label class="label-success">ثبت نام ورزشکار جدید : </label></header>
<tr class="gradeX even">
</tr>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">ثبت نام ورزشکار
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group ">
                        <label for="exampleInputEmail1"> نام :</label>
                        <input type="text" id="name" name="frm[name]" class="form-control">
                    </div>

                    <div class="form-group unbluc">
                        <label> رشته :</label>
                        <select name="frm[reshte]" id="reshte" class="form-control m-bot15 ">
                            <?php
                            foreach ($res as $show):
                                ?>
                                <option value="<?php echo $show->reshte; ?>"> <?php $cod = $show->reshte;
                                    echo $cal->cal_sich($cod) . " -- " . $show->coch; ?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> مبلغ شهریه :</label>
                        <input type="text" name="frm[mony]" id="mony" class="form-control">
                    </div>

                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> شماره تماس ورزشکار :</label>
                        <input type="text" name="frm[tellv]" class="form-control ">
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> نام پدر :</label>
                        <input type="text" name="frm[faname]" class="form-control ">
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> سن:</label>
                        <input type="text" name="frm[age]" class="form-control ">
                        <input type="hidden" name="frm[time]" value="<?php echo time(); ?>">
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> ماه :</label>
                        <select name="frm[month]" class="form-control m-bot15">
                            <option value="فروردین">فروردین</option>
                            <option value="اردیبهشت">اردیبهشت</option>
                            <option value="خرداد">خرداد</option>
                            <option value="تیر">تیر</option>
                            <option value="مرداد">مرداد</option>
                            <option value="شهریور">شهریور</option>
                            <option value="مهر">مهر</option>
                            <option value="ابان">ابان</option>
                            <option value="اذر">اذر</option>
                            <option value="دی">دی</option>
                            <option value="بهمن">بهمن</option>
                            <option value="اسفند">اسفند</option>

                        </select>
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> تاریخ انقضای بیمه ورزشی :</label>
                        <input type="date" name="frm[ebime]" class="form-control ">
                    </div>
                    <div class="form-group bluc">
                        <button type="submit" name="btn" class="btn btn-success"> ثبت نام</button>
                        <?php
                        if (isset($_POST['btn'])){
                            echo '<button type="submit" name="btn2" class="btn btn-info"> چاپ فیش</button>';
                        }
                        ?>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>


<!-----------------------------------------------------------------------end-form---------------->
<!-----------------------------------------start- print- form------------------------------>


<!--<!--------------------------------end- print- form----------------------------------------------->

<?php
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    echo "<div class=\"col-sm-6 \">
    <section class=\"panel \">
        <header class=\"panel-heading no-border hed\" >
            مجموعه فرهنگی ورزشی برنا<br>اکادمی برنا
        </header>
        <table class=\"table table-bordered bod\">
            <tbody>
            <tr>
                <td>نام ونام خانوادگی  :</td>
                <td id=\"wname\">" . $data['name'] . "</td>
            </tr>
            <tr>
                <td>رشته ورزشی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\">";
    $cod = $data['reshte'];
    $cod = $cal->cal_sich($cod);
    echo $cod;
    echo "</td>
            </tr>
            <tr>
                <td> مبلغ پرداختی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmony\">" . $data['mony'] . "</td>
            </tr>
            <tr>
                <td> شهریه ماه &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmonth\">" . $data['month'] . "</td>
            </tr>
            <tr>
                <td> اپراتور ثبت  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['lastname'] . "</td>
            </tr>
            <tr>
                <td>تاریخ و زمان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wmid\">";
    $time = $data['time'];
    echo jdate('d  / F /  y', $time) . "</td>
            </tr>
            </tbody>
        </table>
        <header class=\"panel-heading no-border fot\">
			<p style=\"font-size: 12px;\">- شهریه تحت هیچ شرایطی استرداد نمی شود</p>
            <p style=\"font-size: 12px;\">- لطفا تا هشتم هر ماه شهریه خود را پرداخت کنید</p>
        </header>
    </section>
</div>";
    echo "<script>javascript:window.print()</script>";

}
//-----------------------------------------------------
$obj->settbl('alldata');
$row=$obj->select_data_for_print();
$time = $data['time'];
if (isset($_POST['btn2'])) {
    $data = $_POST['frm'];
    echo "<div class=\"col-sm-6 bluc\">
    <section class=\"panel \">
        <header class=\"panel-heading no-border hed\" >
            مجموعه فرهنگی ورزشی برنا<br>اکادمی برنا
        </header>
        <table class=\"table table-bordered bod\">
            <tbody>
            <tr>
                <td>نام ونام خانوادگی  :</td>
                <td id=\"wname\">" .$row->name. "</td>
            </tr>
            <tr>
                <td>رشته ورزشی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\">";
    $cod = $row->reshte;
    $cod = $cal->cal_sich($cod);
    echo $cod;
    echo "</td>
            </tr>
            <tr>
                <td> مبلغ پرداختی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmony\">" . $row->mony . "</td>
            </tr>
            <tr>
                <td> شهریه ماه &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmonth\">" . jdate(' F ', $time) . "</td>
            </tr>
            <tr>
                <td> اپراتور ثبت  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['lastname'] . "</td>
            </tr>
            <tr>
                <td>تاریخ و زمان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wmid\">";
    echo jdate('d  / F /  y', $time) . "</td>
            </tr>
            </tbody>
        </table>
    </section>
</div>";
    echo "<script>javascript:window.print()</script>";
}
//--------------------------------------------------------
if (isset($_POST['btn2'])) {
    $data = $_POST['frm'];
    echo "<div class=\"col-sm-6 bluc\">
    <section class=\"panel \">
        <header class=\"panel-heading no-border hed\" >
            مجموعه فرهنگی ورزشی برنا<br>اکادمی برنا
        </header>
        <table class=\"table table-bordered bod\">
            <tbody>
            <tr>
                <td>نام ونام خانوادگی  :</td>
                <td id=\"wname\">" .$row->name. "</td>
            </tr>
            <tr>
                <td>رشته ورزشی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\">";
    $cod = $row->reshte;
    $cod = $cal->cal_sich($cod);
    echo $cod;
    echo "</td>
            </tr>
            <tr>
                <td> مبلغ پرداختی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmony\">" . $row->mony . "</td>
            </tr>
            <tr>
                <td> شهریه ماه &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmonth\">" . jdate(' F ', $time) . "</td>
            </tr>
            <tr>
                <td> اپراتور ثبت  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['lastname'] . "</td>
            </tr>
            <tr>
                <td>تاریخ و زمان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wmid\">";
    echo jdate('d  / F /  y', $time) . "</td>
            </tr>
            </tbody>
        </table>
    </section>
</div>";
    echo "<script>javascript:window.print()</script>";
}
?>

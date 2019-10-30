<?php
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];

    $_SESSION['nameM']     =    $data['name'];//----------for print part 2---
    $_SESSION['mosM']      =    $data['mos'];
    $_SESSION['monyMosM']  =    $data['monyMos'];
    $_SESSION['timeMosM']  =    $data['timeMos'];
    $_SESSION['timeM']     =    time();

    $data['time'] = time();
    $obj->settbl('masaje_tbl');
    $obj->add_data($data);  //----add to 1 or 2 or....10

}
?>

<header class="panel-heading"><label class="label-success">قبض ماساژ   : </label></header>
<tr class="gradeX even">
</tr>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">ماساژ
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group ">
                        <label for="exampleInputEmail1"> نام :</label>
                        <input type="text" id="name" name="frm[name]" class="form-control">
                    </div>

                    <div class="form-group unbluc">
                        <label> ماساژور :</label>
                        <input type="text"  name="frm[mos]"     class="form-control">
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1">  مبلغ بلیط :</label>
                        <input type="text" name="frm[monyMos]"  class="form-control">
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> زمان ماساژ :</label>
                        <select name="frm[timeMos]" class="form-control m-bot15">
                            <option value="20 دقیقه">20 دقیقه</option>
                            <option value="30 دقیقه">30 دقیقه</option>
                            <option value="45 دقیقه">45 دقیقه</option>
                            <option value="60 دقیقه">60 دقیقه</option>
                        </select>
                    </div>
                    <div class="form-group bluc">
                        <button type="submit" name="btn" class="btn btn-success"> ثبت </button>
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


<!--------------------------------end- print- form----------------------------------------------->
<!---->
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
                <td>ماساژور&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\"> " . $data['mos'] . "</td>
            </tr>
            <tr>
                <td> مبلغ بلیط &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmony\">" . $data['monyMos'] . "</td>
            </tr>
            <tr>
                <td> زمان ماساژ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmonth\">" . $data['timeMos'] . "</td>
            </tr>
            <tr>
                <td> اپراتور ثبت  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['lastname'] . "</td>
            </tr>
            <tr>
                <td>تاریخ و زمان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wmid\">";
    $time =  $_SESSION['timeM'] ;
    echo jdate('d  / F /  y', $time) . "</td>
            </tr>
            </tbody>
        </table>
        <header class=\"panel-heading no-border fot\">
			<p style=\"font-size: 12px;\"> مزایای ماساژ و ماساژ درمانی   :</p>
			<p style=\"font-size: 12px;\">&nbsp;&nbsp; - کاهش درد</p>
            <p style=\"font-size: 12px;\">&nbsp;&nbsp; - توان‌بخشی در آسیب‌های ورزشی</p>
            <p style=\"font-size: 12px;\">&nbsp;&nbsp; - کاهش استرس</p>
            <p style=\"font-size: 12px;\">&nbsp;&nbsp; - افزایش تمدد اعصاب</p>
            <p style=\"font-size: 12px;\">&nbsp;&nbsp; - کمک به بهبود وضعیت عمومی سلامتی</p>
        </header>
    </section>
</div>";
    echo "<script>javascript:window.print()</script>";

}
//-----------------------------------------------------

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
                <td id=\"wname\">" .$_SESSION['nameM']. "</td>
            </tr>
            <tr>
                <td> ماساژور &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\">" . $_SESSION['mosM'] . "</td>
            </tr>
            <tr>
                <td> مبلغ بلیط  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmony\">" . $_SESSION['monyMosM'] . "</td>
            </tr>
            <tr>
                <td> زمان ماساژ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmonth\">" .  $_SESSION['timeMosM']  . "</td>
            </tr>
            <tr>
                <td> اپراتور ثبت  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['lastname'] . "</td>
            </tr>
            <tr>
                <td>تاریخ و زمان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wmid\">" ;
    $time =  $_SESSION['timeM'] ;
    echo jdate('d  / F /  y', $time) ."</td>
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
                <td id=\"wname\">" .$_SESSION['nameM']."</td>
            </tr>
            <tr>
                <td>ماساژور  &nbsp;&nbsp; :</td>
                <td id=\"wreshte\">" . $_SESSION['mosM'] ."</td>
            </tr>
            <tr>
                <td> مبلغ بلیط  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmony\">" . $_SESSION['monyMosM'] . "</td>
            </tr>
            <tr>
                <td>  زمان ماساژ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmonth\">" .  $_SESSION['timeMosM']  . "</td>
            </tr>
            <tr>
                <td> اپراتور ثبت  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['lastname'] . "</td>
            </tr>
            <tr>
                <td>تاریخ و زمان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wmid\">";
    $time =  $_SESSION['timeM'] ;
    echo jdate('d  / F /  y', $time) ."</td>
            </tr>
            </tbody>
        </table>
    </section>
</div>";
    echo "<script>javascript:window.print()</script>";
}
?>
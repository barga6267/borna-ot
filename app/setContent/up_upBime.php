<?php
if (isset($_GET['contact']) == 'pay_payShahrie'):
    $reshte = $_GET['resh'];
    $pid = $_GET['pid'];

    $obj->settbl($reshte);
    $val = $obj->select_data_pay($pid);

    ?>

    <header class="panel-heading"><label class="label-success">تمدید اعتبار بیمه ورزشی
            &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $val->name; ?> </label></header>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <table class="table  table-advance table-hover">
                    <thead>
                    <tr>
                        <th>نام</th>
                        <th>نام پدر</th>
                        <th>سن</th>
                        <th>رشته ورزشی</th>
                        <th>تلفن</th>
                        <th>انقضای بیمه</th>
                        <th>تاریخ ثبت نام</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $val->name ?></td>
                        <td><?php echo $val->faname ?></td>
                        <td><?php echo $val->age ?></td>
                        <td><?php echo $val->reshte ?></td>
                        <td><?php echo $val->tell ?></td>
                        <td><?php echo $val->tshahrie2 ?></td>
                        <td><?php $time = $val->tsabtnam;
                            echo jdate('d  / F /  y', $time); ?></td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>


    <!-----------------------------------------------------------------------end-form---------------->
    <!-----------------------------------------start- print- form------------------------------>
    <?php
    if (isset($_POST['paybtn'])) {
        $data = $_POST['frm'];
        $dt =$data['tshahrie2m']."-".$data['tshahrie2y'] ;
        $col = "tshahrie2";
        $obj->edit_data($dt ,$col , $pid);
    }
    ?>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <section class="panel">

                <div class="panel-body">
                    <form role="form" method="post"> <div class="form-group ">
                            <label for="exampleInputEmail1">  تاریخ انقضای بیمه :</label>
                            <select name="frm[tshahrie2m]" class="form-control m-bot15 ">
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
                            <select name="frm[tshahrie2y]" class="form-control m-bot15 ">
                                <option value="1398">1398</option>
                                <option value="1399">1399</option>
                                <option value="1400">1400</option>
                                <option value="1401">1401</option>
                                <option value="1402">1402</option>
                                <option value="1403">1403</option>
                                <option value="1404">1404</option>
                                <option value="1405">1405</option>
                                <option value="1406">1406</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <button type="submit" name="paybtn" class="btn btn-success"> تمدید</button>
                            <?php
                            if (isset($_POST['paybtn'])){
                                echo '<button type="submit" name="paybtn2" class="btn btn-info"> چاپ فیش</button>';
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

    <?php


    if (isset($_POST['paybtn'])) {
        $data = $_POST['frm'];
        $_SESSION['nameP'] =         $val->name;//----------for print part 2---
        $_SESSION['reshtetitleP'] =  $val->reshte;
        $_SESSION['tshahrie2p'] =    $data['tshahrie2m']."-".$data['tshahrie2y'];
        $_SESSION['tsabtnamP'] =     time();

        echo "<div class=\"col-sm-6 \">
    <section class=\"panel \">
        <header class=\"panel-heading no-border hed\" >
            مجموعه فرهنگی ورزشی برنا<br>اکادمی برنا
        </header>
        <table class=\"table table-bordered bod\">
            <tbody>
            <tr>
                <td>نام ونام خانوادگی  :</td>
                <td id=\"wname\">" . $val->name . "</td>
            </tr>
            <tr>
                <td>رشته ورزشی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\">" . $val->reshte . "</td>
            </tr>
            <tr>
                <td> انقضای بیمه  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['tshahrie2p'] . "</td>
            </tr>
            <tr>
                <td>تاریخ و زمان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wmid\">";
        $time = time();
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
    if (isset($_POST['paybtn2'])) {
        echo "<div class=\"col-sm-6 bluc\">
    <section class=\"panel \">
        <header class=\"panel-heading no-border hed\" >
            مجموعه فرهنگی ورزشی برنا<br>اکادمی برنا
        </header>
        <table class=\"table table-bordered bod\">
            <tbody>
            <tr>
                <td>نام ونام خانوادگی  :</td>
                <td id=\"wname\">" .$_SESSION['nameP']."</td>
            </tr>
            <tr>
                <td>رشته ورزشی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\">" . $_SESSION['reshtetitleP'] . "</td>
            </tr>
            <tr>
                <td> انقضای بیمه  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['tshahrie2p'] . "</td>
            </tr>
            <tr>
                <td> اپراتور ثبت  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['lastname'] . "</td>
            </tr>
            <tr>
                <td>تاریخ و زمان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wmid\">";
        $time =  $_SESSION['tsabtnamP'] ;
        echo jdate('d  / F /  y', $time) ."</td>
            </tr>
            </tbody>
        </table>
    </section>
</div>";
        echo "<script>javascript:window.print()</script>";
    }
    if (isset($_POST['paybtn2'])) {

        echo "<div class=\"col-sm-6 bluc\">
    <section class=\"panel \">
        <header class=\"panel-heading no-border hed\" >
            مجموعه فرهنگی ورزشی برنا<br>اکادمی برنا
        </header>
        <table class=\"table table-bordered bod\">
            <tbody>
            <tr>
                <td>نام ونام خانوادگی  :</td>
                <td id=\"wname\">"  .$_SESSION['nameP']. "</td>
            </tr>
            <tr>
                <td>رشته ورزشی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\">". $_SESSION['reshtetitleP'] . "</td>
            </tr>
            <tr>
                <td> انقضای بیمه  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['tshahrie2p'] . "</td>
            </tr>
            <tr>
                <td> اپراتور ثبت  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wcname\">" . $_SESSION['lastname'] . "</td>
            </tr>
            <tr>
                <td>تاریخ و زمان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td id=\"wmid\">";
        $time =  $_SESSION['tsabtnamP'] ;
        echo jdate('d  / F /  y', $time) . "</td>
            </tr>
            </tbody>
        </table>
    </section>
</div>";
        echo "<script>javascript:window.print()</script>";
    }

endif;
?>

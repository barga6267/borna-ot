<?php
if (isset($_GET['contact']) == 'pay_pay'):
    $reshte = $_GET['resh'];
    $pid = $_GET['pid'];

    $obj->settbl($reshte);
    $val = $obj->select_data_pay($pid);

    ?>

    <header class="panel-heading"><label class="label-success">پرداخت شهریه
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
                        <th>شهریه</th>
                        <th>تلفن</th>
                        <th>ماه</th>
                        <th>تاریخ ثبت نام</th>
                        <th>ت شهریه</th>
                        <th>ت انقضای بیمه</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $val->name ?></td>
                        <td><?php echo $val->faname ?></td>
                        <td><?php echo $val->age ?></td>
                        <td><?php $co = $cal->cal_sich($val->reshte);
                            echo $co . " - " . $val->reshte; ?></td>
                        <td><?php echo $val->mony ?></td>
                        <td><?php echo $val->tellv ?></td>
                        <td><textarea style="width: 250px;" disabled><?php echo $val->month ?></textarea></td>
                        <td><?php $time = $val->time;
                            echo jdate('d  / F /  y', $time); ?></td>
                        <td><?php $time = $val->tpay;
                            echo jdate('d  / F ', $time); ?></td>
                        <td><?php $ebime = $val->ebime;
                            echo jdate('d  / F /  y', $ebime); ?></td>
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

        $res = $val->month;
        $mony = $data['mony'];
        $month = $data['month'];

        $str = "[$mony $month]" . $res;
        $time = time();
        $obj->edit_data_pay($str, 'month', $pid);
        $obj->edit_data_pay($time, 'tpay', $pid);

        $obj->settbl('alldata');
        $obj->edit_data_pay_alldata($time, 'tpay', $pid, $reshte);
		
		
		$obj->settbl($val->reshte);
		$sql = $obj->show_id_chid();
        $addup=array("name"=> "$val->name","idresh"=> "$sql->id","reshte"=> "$val->reshte","mony"=> $data["mony"],"time"=> "$time",);
        
	
	
        $obj->settbl('alldatau');
        $obj->add_data($addup);
//    header("location:dashbord.php?contact=pay_term");


    }
    ?>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <section class="panel">

                <div class="panel-body">
                    <form role="form" method="post">
                        <div class="form-group ">
                            <label for="exampleInputEmail1"> مبلغ شهریه :</label>
                            <input type="text" name="frm[mony]" id="mony" class="form-control">
                        </div>
                        <div class="form-group ">
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
                        <div class="form-group">
                            <button type="submit" name="paybtn" class="btn btn-success">پرداخت شهریه</button>
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


    <!--<!--------------------------------end- print- form----------------------------------------------->

    <?php

if (isset($_POST['paybtn'])) {
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
                <td id=\"wname\">" . $val->name . "</td>
            </tr>
            <tr>
                <td>رشته ورزشی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\">";

        $cod = $cal->cal_sich($reshte);
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
    $obj->settbl('alldatau');
    $row=$obj->select_data_for_print();
    $time = $data['time'];
        echo "<div class=\"col-sm-6 bluc\">
    <section class=\"panel \">
        <header class=\"panel-heading no-border hed\" >
            مجموعه فرهنگی ورزشی برنا<br>اکادمی برنا
        </header>
        <table class=\"table table-bordered bod\">
            <tbody>
            <tr>
                <td>نام ونام خانوادگی  :</td>
                <td id=\"wname\">" . $row->name . "</td>
            </tr>
            <tr>
                <td>رشته ورزشی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\">";
        $cod = $cal->cal_sich($row->reshte);
        echo $cod;
        echo "</td>
            </tr>
            <tr>
                <td> مبلغ پرداختی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmony\">" . $row->mony. "</td>
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
	if (isset($_POST['paybtn2'])) {
    $obj->settbl('alldatau');
    $row=$obj->select_data_for_print();
    $time = $data['time'];
        echo "<div class=\"col-sm-6 bluc\">
    <section class=\"panel \">
        <header class=\"panel-heading no-border hed\" >
            مجموعه فرهنگی ورزشی برنا<br>اکادمی برنا
        </header>
        <table class=\"table table-bordered bod\">
            <tbody>
            <tr>
                <td>نام ونام خانوادگی  :</td>
                <td id=\"wname\">" . $row->name . "</td>
            </tr>
            <tr>
                <td>رشته ورزشی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wreshte\">";
        $cod = $cal->cal_sich($row->reshte);
        echo $cod;
        echo "</td>
            </tr>
            <tr>
                <td> مبلغ پرداختی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmony\">" . $row->mony. "</td>
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


endif;
?>

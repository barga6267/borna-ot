<?php

if (isset($_POST['btn'])) {

    $data = $_POST['frm'];
    $obj->settbl("swim_tbl");
    $fil = array_keys($data);

    $obj->add_data($data,$fil);

}
?>


<header class="panel-heading"><label style="background-color: #2a3542;color: white;"> ثبت نام اموزش شنا : </label></header>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">ثبت نام
            </header>

            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> نام :</label>
                        <input style="width: 200px;color: #00a6b2;" type="text" name="frm[name]" class="form-control"
                               id="name"
                               placeholder="نام">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> نام مربی :</label>
                        <input style="width: 200px;color: #00a6b2;" type="text" name="frm[namecoch]" class="form-control"
                               id="name"
                               placeholder="نام مربی">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> مبلغ شهریه :</label>
                        <input style="width: 200px;color: #00a6b2;" type="text" name="frm[many]" class="form-control"
                               id="name"
                               placeholder="مبلغ شهریه">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> شماره همراه :</label>
                        <input style="width: 200px;color: #00a6b2;" type="text" name="frm[phon]"
                               class="form-control"
                        >
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="frm[date]" value="<?php echo time(); ?>">
                    </div>
                    <button type="submit" name="btn" class="btn btn-success" style="width: 100px"> ثبت نام</button>
					
                </form>
            </div>
            <hr style="width: 70%;height: 1px;background-color: grey;">

        </section>
    </div>
</div>



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
                <td id=\"wname\">" .$data['name'] . "</td>
            </tr>
            ";

        echo "
            <tr>
                <td> مبلغ پرداختی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmony\">" . $data['many'] . "</td>
            </tr>
            <tr>
                <td> مربی &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                <td id=\"wmonth\">" . $data['namecoch'] . "</td>
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
?>






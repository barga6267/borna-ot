<?php
$obj->settbl("alldata");
$row = $obj->select_data_bime("*");


if (isset($_POST['btnadd'])) {

    $data = $_POST['frm'];
    $obj->edite_bime($data);
}
?>


<hr style="width: 90%;height: 1px;background-color: black;">
<br>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">تمدید اعتبار بیمه
            </header>

            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group ">
                        <label for="exampleInputEmail1"> کد کاربری :</label>
                        <input type="text" name="frm[id]"
                               class="form-control" id="id">
                    </div>
                    <div class="form-group unbluc">
                        <label> رشته ورزشی :</label>
                        <select name="frm[reshte]" class="form-control m-bot15 ">
                            <option value="1"> والیبال</option>
                            <option value="2"> فوتسال</option>
                            <option value="3">بسکتبال</option>
                            <option value="4"> ژیمناستیک پیشرفته </option>
                            <option value="5">کاراته</option>
                            <option value="6">تکواندو</option>
                            <option value="7">بوکس</option>
                            <option value="8">کیک بوکس</option>
                            <option value="9">ژیمناستیک مبتدی</option>
                            <option value="14"> ایروبیک</option>
                            <option value="15"> پیلاتس</option>
                            <option value="10">پارکور</option>
                            <option value="11">کونگ فو</option>
                            <option value="12">کشتی ازاد نوجوانان</option>
                            <option value="13">کشتی ازاد بزرگسالان</option>
                        </select>
                    </div>
                    <div class="form-group unbluc">
                        <label for="exampleInputEmail1"> تاریخ انقضای جدید :</label>
                        <input type="date" name="frm[ebime]"
                               class="form-control " id="num">
                    </div>
                    <button type="submit" name="btnadd" class="btn btn-success" style="margin-top: 3px;">تمدید شود
                    </button>
                </form>
            </div>
        </section>
    </div>
</div>
<hr style="width: 90%;height: 1px;background-color: black;">
<br>


<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <label style="background-color: lightgrey;color: #2a3542;width: 280px;">
                    لیست بیمه های منقضی شده
                </label>
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> کد کاربری</th>
                    <th>نام</th>
                    <th>شماره تماس</th>
                    <th>رشته ورزشی</th>
                    <th>ت شهریه</th>
                    <th>تاریخ ثبت نام</th>
                    <th> زمان انقضای بیمه</th>
                </tr>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($row as $val):
                    ?>
                    <tr>
                        <td><?php echo $val->id ?></td>
                        <td><?php echo $val->name ?></td>
                        <td><?php echo $val->tellv ?></td>
                        <td><?php $str = $val->reshte;
                            echo $cal->cal_sich($str); ?></td>
                        <td><?php $time=$val->tpay; echo jdate('d  / F ',$time);?></td>
                        <td><?php $time = $val->time;
                            echo jdate('d  / F /  y ', $time); ?></td>
                        <td><?php echo jdate('d  / F /  y  ', $val->ebime); ?></td>
                    </tr>
                    <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </section>
    </div>
</div>









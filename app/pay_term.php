<div class="row">
    <div class="col-lg-3">
        <section class="panel">
            <header class="panel-heading">پرداخت شهریه ماهانه
            </header>
            <div class="row">
                <div class="col-lg-10">
                    <section class="panel">
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="form-group ">
                                    <label for="exampleInputEmail1"> عنوان مورد نظر :</label>
                                    <input type="text" name="frm[value]" class="form-control">
                                </div>
                                <div class="form-group unbluc">
                                    <label> بر اساس :</label>
                                    <select name="frm[name]" class="form-control m-bot15 ">
                                        <option value="name"> نام</option>
                                        <option value="faname"> نام پدر</option>
                                        <option value="age">سن</option>
                                        <option value="tellv"> شماره تلفن</option>
                                    </select>
                                </div>
                                <div class="form-group unbluc">
                                    <label> رشته ورزشی :</label>
                                    <select name="frm[reshte]" class="form-control m-bot15 ">
                                        <option value="1"> والیبال</option>
                                        <option value="2"> فوتسال</option>
                                        <option value="3">بسکتبال </option>
                                        <option value="5">کاراته </option>
                                        <option value="6">تکواندو </option>
                                        <option value="7">بوکس </option>
                                        <option value="8">کیک بوکس</option>
                                        <option value="4"> ژیمناستیک پیشرفته</option>
                                        <option value="9">ژیمناستیک مبتدی </option>
                                        <option value="14"> ایروبیک</option>
                                        <option value="15"> پیلاتس</option>
                                        <option value="10">پارکور </option>
                                        <option value="11">کونگ فو</option>
                                        <option value="12">کشتی ازاد نوجوانان </option>
                                        <option value="13">کشتی ازاد بزرگسالان </option>
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
    $obj->settbl($data['reshte']);
    $name = $data['name'];
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
                                &nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;<?php $co = $cal->cal_sich($val->reshte);
                                echo $co . " - " . $val->reshte; ?></th>
                            <th>اخرین شهریه
                                &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php $time = $val->tpay;
                                echo jdate('d  / F ', $time); ?>
                            </th>
                            <th>
                                <a href="dashbord.php?contact=pay_pay&pid=<?php echo $val->id ?>&resh=<?php echo $val->reshte; ?>"
                                   class="btn btn-success ">پرداخت شهریه</a>
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

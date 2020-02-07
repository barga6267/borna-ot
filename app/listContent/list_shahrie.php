<?php

    $par_tbl = $_GET['par_tbl'];
    $par_id = $_GET['par_id'];

    $obj->settbl($par_tbl);
    $row = $obj->search_data('id',$par_id);
?>
<header class="panel-heading">
    <label class="label-success"> لیست شهریه پرداختی هنرجویان : </label></header>
<tr class="gradeX even">
</tr>
<div class="col-md-6 ">
    <section class="panel ">
        <header class="panel-heading"> لیست شهریه پرداختی هنرجویان
        </header>
        <header class="panel-heading">نام :      <?php echo $row->name;?>
        </header>
        <header class="panel-heading"> رشته :      <?php echo $row->reshte;?>
        </header>
        <header class="panel-heading"> تاریخ ثبت نام :      <?php echo jdate('d  - F',$row->tsabtnam );?>
        </header>
        <table class="table table-bordered bod">
            <thead>
            <tr>
                <td>ردیف</td>
                <td>ماه</td>
                <td>مبلغ</td>
                <td>زمان</td>
            </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
            $u=$row->tshahrie1;
            $u=explode("#",$u);
            foreach ($u as $s){
                $d=explode("-",$s);
            ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $d[0] ?></td>
                <td><?php echo $d[1] ?> </td>
                <td><?php echo  jdate('d  - F', $d[2])?></td>
            </tr>
            <?php } ?>
            </tbody>
            <tr>
                <td class=" disp" colspan="5">
                    <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="icon-print"></i>پرینت
                    </a>
                </td>
            </tr>
        </table>
        <br><br><br><br><br><br>
    </section>
</div>


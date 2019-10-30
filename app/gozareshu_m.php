<?php
$obj->settbl('alldatau');
$row = $obj->select_data_limit_month('*');



?>

<div class="col-lg-6 ">
    <section class="panel ">
        <header class="panel-heading no-border ">
            گزارشگیری ماهانه پرداخت شهریه&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo jdate(' F', time()); ?>
        </header>
        <table class="table table-bordered bod">
            <thead>
            <tr>
                <td>نام</td>
                <td>رشته ورزشی</td>
                <td>مبلغ</td>
                <td>زمان&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            </thead>
            <tbody>
            <?php
            $i=0;
            $sum_mony=0;
            foreach ($row as $show):
                $timdb = $show->time;
                $timdb = jdate('F', $timdb);
                $timnow = jdate('F', time());

                if ($timdb == $timnow):
                    $i++;
                    $sum_mony=$sum_mony+$show->mony;
                    ?>


                    <tr>
                        <td><?php echo $show->name;?></td>
                        <td><?php $co = $cal->cal_sich($show->reshte);
                            echo $co; ?></td>
                        <td><?php echo $show->mony; ?></td>
                        <td><?php
                            $tim = $show->time;
                            echo jdate('d  - F', $tim); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>


                    <?php
                endif;
            endforeach;
            ?>
            </tbody>
            <tfoot>

            <tr style="background-color: #f1f2f7;height: 2px;">

                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>

                <td>تعداد</td>
                <td><?php echo $i;?></td>
                <td>جمع شهریه</td>
                <td><?php echo $sum_mony; ?></td>

            </tr>
            <tr>
                <td colspan="4">
                    <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="icon-print"></i>پرینت
                    </a>
                </td>
            </tr>
            </tfoot>
        </table>
    </section>
</div>

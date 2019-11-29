<?php
$monthId=$_GET['monthId'];

switch ($monthId){
    case 1:
        $MonthStr="۱-۹۸";
        break;
    case 2:
        $MonthStr="۲-۹۸";
        break;
    case 3:
        $MonthStr="۳-۹۸";
        break;
    case 4:
        $MonthStr="۴-۹۸";
        break;
    case 5:
        $MonthStr="۵-۹۸";
        break;
    case 6:
        $MonthStr="۶-۹۸";
        break;
    case 7:
        $MonthStr="۷-۹۸";
        break;
    case 8:
        $MonthStr="۸-۹۸";
        break;
    case 9:
        $MonthStr="۹-۹۸";
        break;
    case 10:
        $MonthStr="۱۰-۹۸";
        break;
    case 11:
        $MonthStr="۱۱-۹۸";
        break;
    case 12:
        $MonthStr="۱۲-۹۸";
        break;
}
$obj->settbl("masaje_tbl");
$row = $obj->select_data("*");

?>


<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
            </header>
            <!--            table-striped-->
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                <tr>
                    <th></th>
                    <th>نام</th>
                    <th>ماساژور</th>
                    <th>مبلغ بلیط</th>
                    <th>زمان ماساژ</th>
                    <th>تاریخ  ماساژ </th>
                </tr>
                </tr>
                </thead>
                <tbody>
                <?php
                $i=0;
                $allMony=0;
                foreach ($row as $val):
                    $MonYear=jdate('n-y', $val->time );
                    if ($MonYear==$MonthStr):
                        ?>
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $val->name ?></td>
                            <td><?php echo $val->mos ?></td>
                            <td><?php echo $val->monyMos;$allMony+=$val->monyMos; ?></td>
                            <td><?php echo $val->timeMos; ?></td>
                            <td><?php $time = $val->time;
                                echo jdate('d  / F /  y', $time); ?></td>
                        </tr>
                    <?php
                    endif;
                endforeach; ?>
                </tbody>

                <tfoot style="color: red">
                <tr>

                    <th>تعداد ماساژ</th>
                    <th><?php echo $i; ?></th>
                    <th>جمع دریافتی</th>
                    <th><?php echo $allMony; ?></th>
                </tr>
                </tfoot>
            </table>
        </section>
    </div>
</div>












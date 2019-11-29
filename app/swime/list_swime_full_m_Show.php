<?php
$monthId=$_GET['monthId'];
$MoId=$_GET['MoId'];
$MoIdById="s_".$MoId;

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
$obj->settbl($MoIdById);
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
                    <th>نام</th>
                    <th>نام پدر</th>
                    <th>سن</th>
                    <th>کلاس و مربی</th>
                    <th>تلفن</th>
                    <th>تاریخ ثبت نام</th>
                    <th>تاریخ اخرین پرداخت</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($row as $val):
                    $MonYear=jdate('n-y', $val->tsabtnam);
                    if ($MonYear==$MonthStr):
                    ?>
                    <tr>
                        <td><?php echo $val->name ?></td>
                        <td><?php echo $val->faname ?></td>
                        <td><?php echo $val->age ?></td>
                        <td><?php echo $val->reshte; ?></td>
                        <td><?php echo $val->tell ?></td>
                        <td><?php $time = $val->tsabtnam;
                            echo jdate('d  / F /  y', $time); ?></td>
                        <td><?php $time = $val->tsabtnam;
                            echo jdate('d  / F /  y', $time); ?></td>
                    </tr>
                <?php
                endif;
                endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>












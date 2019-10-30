<?php
$obj->settbl('masaje_tbl');
$row = $obj->select_data("*");
if (isset($_GET['did'])) {
    $did = $_GET['did'];
    $obj->delete_data($did);
    header("location:dashbord.php?contact=list_mos");
}

?>


<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <label style="background-color: lightgrey;color: #2a3542;width: 280px;">
                    <?php
                    $count = $obj->select_count("id");
                    foreach ($count as $res) {

                        echo "<label style='font-size: 13px;' class='unbluc'>" . "تعداد کل ماساژ  =&nbsp;&nbsp; " . $res['COUNT(DISTINCT id)'] . "</label>";
                    }
                    ?>
                </label>
            </header>
            <!--            table-striped-->
            <table class="table  table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>ماساژور</th>
                    <th>مبلغ بلیط</th>
                    <th>زمان ماساژ</th>
                    <th>تاریخ  ماساژ </th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($row as $val):
                    ?>
                    <tr>
                        <td><?php echo $val->name ?></td>
                        <td><?php echo $val->mos ?></td>
                        <td><?php echo $val->monyMos ?></td>
                        <td><?php echo $val->timeMos; ?></td>
                        <td><?php $time = $val->time;
                            echo jdate('d  / F /  y', $time); ?></td>
                        <td><a href="dashbord.php?contact=list_mos&did=<?php echo $val->id ?>" class="btn btn-danger btn-xs"><i
                                    class="icon-trash "></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>












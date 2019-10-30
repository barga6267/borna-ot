<?php
$shwoId=$_GET['showId'];
$shwoIdById="s_".$shwoId;

$obj->settbl($shwoIdById);
$row = $obj->select_data("*");
if (isset($_GET['did'])) {
    $did = $_GET['did'];
    $obj->delete_data($did);
    header("location:dashbord.php?contact=list_swime_full&showId=$shwoId");
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

                        echo "<label style='font-size: 13px;' class='unbluc'>" . "تعداد کل شاگردان  =&nbsp;&nbsp; " . $res['COUNT(DISTINCT id)'] . "</label>";
                    }
                    ?>
                </label>
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
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($row as $val):
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
                        <td><a href="dashbord.php?contact=list_swime_full&showId=<?php echo $shwoId ?>&did=<?php echo $val->id ?>" class="btn btn-danger btn-xs"><i
                                    class="icon-trash "></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>












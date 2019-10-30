<?php
$obj->settbl("cocher");
$row = $obj->select_data("*");

if (isset($_GET['did'])) {

    $did = $_GET['did'];
    $obj->settbl("cocher");
    $obj->delete_data($did);
    header("location:dashbord.php?contact=list_reshte");
}
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <label style="background-color: lightgrey;color: #2a3542;width: 280px;">
                <?php
                $count=$obj->select_count("id");
                foreach ($count as $res) {

                    echo "<label style='font-size: 13px;' class='unbluc'>"."تعداد رشتهای ورزشی  =&nbsp;&nbsp; ". $res['COUNT(DISTINCT id)']."</label>";
                }
                ?>
                    </label>
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> رشته ورزشی</th>
                    <th>ساعت شروع</th>
                    <th>ساعت اتمام</th>
                    <th>روز</th>
                    <th>استاد</th>
                    <th>شهریه</th>
                    <th>تخفیف استخر</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($row as $val):
                    ?>
                    <tr>
                        <td><?php echo $val->reshte; ?></td>
                        <td><?php echo $val->timeas ?></td>
                        <td><?php echo $val->timeta ?></td>
                        <td>
                            <?php $mod=$val->checzf;if ($mod==1){echo "فرد";}elseif($mod==0){echo "زوج";} ?>
                        </td>
                        <td><?php echo $val->coch ?></td>
                        <td><?php echo $val->mony ?></td>
                        <td>
                            <?php $mod=$val->taghfif;if ($mod==1){echo "دارد";}elseif($mod==0){echo "ندارد";} ?>
                        </td>
                        <td><a href="dashbord.php?contact=list_reshte&did=<?php echo $val->id ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                    <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </section>
    </div> 
</div>






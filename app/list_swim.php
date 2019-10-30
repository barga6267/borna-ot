<!-----------------------------------end of bay----------------------------------------->
<?php

if (isset($_GET['did'])) {

    $did = $_GET['did'];
    $obj->settbl("swim_tbl");
    $obj->delete_data($did);
    header("location:dashbord.php?contact=list_swim");
}
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست پیش خرید
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> کد کاربری</th>
                    <th> نام</th>
                    <th>مربی</th>
                    <th> شهریه</th>
                    <th> تلفن</th>
                    <th> تاریخ </th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $obj->settbl("swim_tbl");
                $row = $obj->select_data("*");
                foreach ($row as $val):
                    ?>
                    <tr>
                        <td><?php echo $val->id ?></td>
                        <td><?php echo $val->name ?></td>
                        <td id="sale"><?php echo $val->namecoch ?></td>
                        <td id="useing"><?php echo $val->many ?></td>
                        <td id="useing"><?php echo $val->phon ?></td>
                        <td><?php echo jdate("Y/m/d ", $val->date); ?></td>
                        <td><a href="dashbord.php?contact=list_swim&did=<?php echo $val->id ?>"
                               class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                    <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
<!---------------------------------------end of list------------------------------------>
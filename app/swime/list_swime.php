<?php
$obj->settbl("cocher_swime");
$row = $obj->select_data("*");
?>

<div class="col-sm-6" >
    <section class="panel">
        <header class="panel-heading">
            لیست بر اساس کلاس مربی
        </header>
        <table class="table">
            <thead>
            <tr>

                <th>کلاس و مربی</th>
                <th>نمایش</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($row as $val):
                ?>
                <tr>
                    <td><?php echo $val->reshte; ?></td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full&showId=<?php echo $val->id; ?>"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </section>
</div>

<?php
$obj->settbl("cocher");
$row = $obj->select_data("*");
?>

<div class="col-sm-6" >
    <section class="panel">
        <header class="panel-heading">
            لیست ورزشکاران
        </header>
        <table class="table">
            <thead>
            <tr>

                <th>رشته ورزشی</th>
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
                        <a href="dashbord.php?contact=reshteVarzeshi&showId=<?php echo $val->id; ?>"
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



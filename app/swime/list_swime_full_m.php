<?php
$monthId=$_GET['monthId'];
$obj->settbl("cocher_swime");
$row = $obj->select_data("*");
?>

<div class="col-lg-offset-3 col-sm-4" >
    <section class="panel">
        <header class="panel-heading">
           مربی را انتخاب کنید
        </header>
        <table class="table">
            <thead>
            <tr>

                <th> مربی</th>
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
                        <a href="dashbord.php?contact=list_swime_full_m_Show&monthId=<?php echo $monthId; ?>&MoId=<?php echo $val->id; ?>"
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
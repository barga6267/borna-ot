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
<div class="col-sm-6" >
    <section class="panel">
        <header class="panel-heading">
            لیست بر اساس ماه ثبت نام
        </header>
        <table class="table">
            <thead>
            <tr>

                <th>ماه </th>
                <th>نمایش</th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td>فروردین - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=1"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>اردیبهشت - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=2"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>خرداد - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=3"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>تیر - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=4"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>مرداد - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=5"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>شهریور - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=6"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>مهر - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=7"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>ابان - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=8"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>اذر - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=9"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>دی - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=10"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>بهمن - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=11"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

                <tr>
                    <td>اسفند - 98</td>
                    <td>
                        <a href="dashbord.php?contact=list_swime_full_m&monthId=12"
                           class="btn btn-success " style="width: 60%;">نمایش</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </section>
</div>

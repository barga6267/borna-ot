<?php
$obj->settbl('alldatau');
$row = $obj->select_data_limit('*');


?>

<div class="col-lg-6 ">
    <section class="panel ">
        <header class="panel-heading no-border ">
            گزارشگیری روزانه پرداخت شهریه&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo jdate('d - F', time()); ?>
        </header>
        <table class="table table-bordered bod">
            <thead>
            <tr>
                <td>نام</td>
                <td>رشته ورزشی</td>
                <td>مبلغ</td>
                <td>زمان&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td class=" disp" >حذف شهریه</td>
            </tr>
            </thead>
            <tbody>
            <?php
			 if (isset($_GET['did'])) {
				$did = $_GET['did'];
				$idresh = $_GET['idresh'];
				$resh = $_GET['resh'];
				//echo ($idresh);
				//echo ($resh);
				$obj->delete_data($did);
				//echo $resh;
				//$obj->settbl($resh);
				//$val = $obj->select_data_pay($idresh);
			   // $res = $val->month;
				//$str = "[بلوک پاک شده]" . $res;
				//var_dump ($str);
				//$obj->edit_data_pay($str, 'month', $pid);
			header("location:dashbord.php?contact=gozareshu");
    }
            $i=0;
            $sum_mony=0;
            foreach ($row as $show):
                $timdb = $show->time;
                $timdb = jdate('d/F', $timdb);
                $timnow = jdate('d/F', time());

                if ($timdb == $timnow):
                    $i++;
                    $sum_mony=$sum_mony+$show->mony;
                    ?>


                    <tr>
                        <td><?php echo $show->name;?></td>
                        <td><?php $co = $cal->cal_sich($show->reshte);
                            echo $co; ?></td>
                        <td><?php echo $show->mony; ?></td>
                        <td><?php $tim = $show->time;
                            echo jdate('d  - F', $tim); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td class=" disp "><a href="dashbord.php?contact=gozareshu&did=<?php echo $show->id; ?>&idresh=<?php echo $show->idresh; ?>&resh=<?php echo $show->reshte; ?>"
                                   class="btn btn-danger btn-xs disp "><i class="icon-trash "></i></a></td>
                    </tr>


                    <?php
                endif;
            endforeach;
            ?>
            </tbody>
            <tfoot>

            <tr style="background-color: #f1f2f7;height: 2px;">

                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>

                <td>تعداد</td>
                <td><?php echo $i;?></td>
                <td>جمع شهریه</td>
                <td><?php echo $sum_mony; ?></td>

            </tr>
            <tr>
                <td colspan="4">
                    <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="icon-print"></i>پرینت
                    </a>
                </td>
            </tr>
            </tfoot>
        </table>
    </section>
</div>

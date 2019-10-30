<?php
$obj->settbl('alldata');
$row = $obj->select_data_limit_month('*');


?>

<div class="col-md-6 ">
    <section class="panel ">
        <header class="panel-heading no-border ">
            گزارشگیری ماهانه ثبت نامهای جدید&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo jdate(' F', time()); ?>
        </header>
        <table class="table table-bordered bod">
            <thead>
            <tr>
                <td>نام</td>
                <td>رشته ورزشی</td>
                <td>مبلغ</td>
                <td>زمان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            </thead>
            <tbody>
            <?php
            $i=0;
			// $i1=0;$resh1=0;$mony1=0;
			// $i2=0;$resh2=0;$mony2=0;
			// $i3=0;$resh3=0;$mony3=0;
			// $i4=0;$resh4=0;$mony4=0;
			// $i5=0;$resh5=0;$mony5=0;
			// $i6=0;$resh6=0;$mony6=0;
			
            $sum_mony=0;
            foreach ($row as $show):
                $timdb = $show->time;
                $timdb = jdate('F', $timdb);
                $timnow = jdate('F', time());
                
                if ($timdb == $timnow):
                    $i++;
                    $sum_mony=$sum_mony+$show->mony;
					//var_dump ($show);
					//$resh=$show->reshte;
						//	if ($resh == 1 ){
						//		$resh1 = $show->reshte;
						//		$mony1 = $show->mony + $mony1;
						//		$i1 = $i1++;
						//	}elseif($resh == 2 ){
						//		$resh2 = $show->reshte;
						//		$mony2 = $show->mony + $mony1;
						//		$i2 = $i2++;
						//	}elseif($resh == 11 ){
						//		$resh3 = $show->reshte;
						//		$mony3 = $show->mony + $mony1;
						//		$i3 = $i3++;
						//	}elseif($resh == 7 ){
						//		$resh4 = $show->reshte;
						//		$mony4 = $show->mony + $mony1;
						//		$i4 = $i4++;
						//	}else{
								
						//	}
							
								
		   

?>
 <tr>
                        <td><?php echo $show->name;?></td>
                        <td><?php $co = $cal->cal_sich($show->reshte);
                            echo $co; ?></td>
                        <td><?php echo $show->mony; ?></td>
                        <td><?php
                            $tim = $show->time;
                            echo jdate('d  - F', $tim); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
					
                    <?php
					
                endif;
            endforeach; 

//echo $resh1;
							//	echo "</br>";
							//	echo $mony1;
							//	echo "</br>";
							//	echo $i1;
								
							//	echo "</br>";echo "</br>";echo "</br>";echo "</br>";
								
							//	echo $resh2;
							//	echo "</br>";
							//	echo $mony2;
							//	echo "</br>";
							//	echo $i2;
								
							//	echo "</br>";echo "</br>";echo "</br>";echo "</br>";
								
							//	echo $resh3;
								//echo "</br>";
							//	echo $mony3;
							//	echo "</br>";
							//	echo $i3;
								
							//	echo "</br>";echo "</br>";echo "</br>";echo "</br>";
								
							//	echo $resh4;
							//	echo "</br>";
							//	echo $mony4;
							//	echo "</br>";
							//	echo $i4;
								
							//	echo "</br>";echo "</br>";echo "</br>";echo "</br>";
								
							//	echo $resh5;
							//	echo "</br>";
							//	echo $mony5;
							//	echo "</br>";
							//	echo $i5;
								
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
                <td colspan="4" >
                    <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="icon-print"></i>پرینت
                    </a>
                </td>
            </tr>
            </tfoot>
        </table>
    </section>
</div>

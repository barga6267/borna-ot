<?php

if (isset($_GET['tbl'])) {

    $tbl = $_GET['tbl'];
    $vas = $_GET['vas'];
    $tim = $_GET['tim'];
//	if($vas=="sabt"){
	//	$obj->settbl('sabt_data_tbl');
//}elseif($vas=="shah"){
	//		$obj->settbl('shah_data_tbl');
//	}
	//    $row = $obj->select_data_limit('*');

// }
	if($vas=="sabt"){
		$obj->settbl('sabt_data_tbl');
		//echo ($vas);
	}
	if($vas=="shah"){
			$obj->settbl('shah_data_tbl');
					//echo ($vas);
	}
	$row = $obj->select_data_limit('*');
	}
?>

<div class="col-md-6 ">
    <section class="panel ">
        <table class="table table-bordered bod">
           <thead>
            <tr>
                <td>ردیف</td>
                <td>نام</td>
                <td>رشته ورزشی</td>
                <td>مبلغ</td>
                <td>ماه</td>
                <td>زمان</td>
            </tr>
            </thead>
			        <?php
		$timnow="";
		$timdb="";
		$i=0;
        foreach ($row as $show) {
			$timnow = jdate('Y/F', time()); //-----زمان جاری را به روز و ماه -----
			$timdb = $show->tsabtname;//---زمان ذخیره شده در دیتا بی
			$timdb = jdate('Y/F', $timdb); //-------تبدیل زمان دیتا بیس به فرمت ماه و سالtsabtname
            if ($timdb == $timnow) {
                if ($show->par_tbl==$tbl){
					$tsabtname=$show->tsabtname;
					$i++;
		echo "<tr>
                      <td>".$i."</td>
                      <td>".$show->name."</td>
                       <td>".$show->reshte."</td>
                       <td>".$show->mony."</td>
                        <td>".$show->month."</td>
                        <td>". jdate('d  - F', $tsabtname)."</td>
                    </tr>";
				  
                }
            }
        }
        ?>
		<tr>
                <td class=" disp" colspan="5">
                    <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="icon-print"></i>پرینت
                    </a>
                </td>
            </tr>
            
        </table>
    </section>
</div>


<?php
$obj->settbl('shah_data_tbl');
$row = $obj->select_data_limit('*');
?>

<div class="col-md-6 disp">
    <section class="panel ">
        <header style="padding-top:30px;margin: auto" class="panel-heading no-border ">
            گزارشگیری روزانه شهریه ها&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo jdate('d - F', time()); ?>
        </header>
        <table class="table table-bordered bod">
            <thead>
            <tr>
                <td>نام</td>
                <td>رشته ورزشی</td>
                <td>مبلغ</td>
                <td>ماه</td>
                <td class=" disp">زمان</td>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            $sum_mony = 0;
            $timnow = jdate('d/F', time());
            foreach ($row as $show):
                $timdb = $show->tsabtname;
                $timdb = jdate('d/F', $timdb);
                if ($timdb == $timnow):
                    $i++;
                    $sum_mony = $sum_mony + $show->mony;

                    ?>


                    <tr>
                        <td><?php echo $show->name; ?></td>
                        <td><?php echo $show->reshte; ?></td>
                        <td><?php echo $show->mony; ?></td>
                        <td><?php echo $show->month; ?></td>
                        <td class=" disp"><?php $tim = $show->tsabtname;
                            echo jdate('d  - F', $tim); ?></td>
                    </tr>


                <?php
                endif;
            endforeach;
            ?>
            </tbody>
            <tfoot>

            <tr style="background-color:black;color: snow; ">

                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class=" disp"></td>
            </tr>
            <tr>
                <td>تعداد</td>
                <td><?php echo $i; ?></td>
                <td>جمع شهریه</td>
                <td><?php echo $sum_mony; ?></td>
            </tr>
            <tr>
            </tr>
            </tfoot>
        </table>
    </section>
</div>


<div class="col-md-6 ">
    <section class="panel ">
        <header style="padding-top:30px;margin: auto" class="panel-heading no-border ">
            گزارشگیری روزانه شهریه ها&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo jdate('d - F', time()); ?>
        </header>
        <?php
        $i = 0;
        $sum_mony = 0;
        global $sum1; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_1  -------------
        global $num1;
        global $sum2; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_2  -------------
        global $num2;
        global $sum3; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_3  -------------
        global $num3;
        global $sum4; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_4  -------------
        global $num4;
        global $sum5; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_5  -------------
        global $num5;
        global $sum6; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_6  -------------
        global $num6;
        global $sum7; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_7  -------------
        global $num7;
        global $sum8; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_8  -------------
        global $num8;
        global $sum9; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_9  -------------
        global $num9;
        global $sum10; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_10  -------------
        global $num10;
        global $sum11; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_11  -------------
        global $num11;
        global $sum12; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_12 -------------
        global $num12;
        global $sum13; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_13 -------------
        global $num13;
        global $sum14; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_14  -------------
        global $num14;
        global $sum15; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_15  -------------
        global $num15;
        global $sum16; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_16  -------------
        global $num16;
        global $sum17; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num17;
        global $sum18; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num18;
        global $sum19; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num19;
        global $sum20; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num20;
        global $sum21; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num21;
        global $sum22; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num22;
		
        global $sum111; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num111;
        global $sum112; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num112;
        global $sum113; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num113;
        global $sum114; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num114;
        global $sum115; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num115;
        global $sum116; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num116;
        global $sum117; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num117;
        global $sum118; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num118;
        global $sum119; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num119;
        global $sum120; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num120;
        global $sum122; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num122;
        global $sum123; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num123;
        global $sum124; // -------برای جمع مبلغ و تعداد به تفکیک رشته و جدول از جدول r_17  -------------
        global $num124;
        $timnow = jdate('d/F', time()); //-----زمان جاری را به روز و ماه -----
        foreach ($row as $show) {
            $timdb = $show->tsabtname;//---زمان ذخیره شده در دیتا بیس
            $timdb = jdate('d/F', $timdb); //-------تبدیل زمان دیتا بیس به فرمت ماه و سال
            if ($timdb == $timnow) {  //-------------برای تفکیک بین زمان که اینجا زمان روز جاری است----------
                $i++;
                $sum_mony = $sum_mony + $show->mony;
                if ($show->par_tbl=="r_1"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_1 رکورد -----------
                    $sum1 = $sum1 + $show->mony;
                    $num1++;
                }
                if ($show->par_tbl=="r_2"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_2 رکورد -----------
                    $sum2 = $sum2 + $show->mony;
                    $num2++;
                }
                if ($show->par_tbl=="r_3"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_3 رکورد -----------
                    $sum3 = $sum3 + $show->mony;
                    $num3++;
                }
                if ($show->par_tbl=="r_4"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum4 = $sum4 + $show->mony;
                    $num4++;
                }
				
                if ($show->par_tbl=="r_5"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum5 = $sum5 + $show->mony;
                    $num5++;
                }
                if ($show->par_tbl=="r_6"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum6 = $sum6 + $show->mony;
                    $num6++;
                }
                if ($show->par_tbl=="r_7"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum7 = $sum7 + $show->mony;
                    $num7++;
                }
                if ($show->par_tbl=="r_8"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum8 = $sum8 + $show->mony;
                    $num8++;
                }
                if ($show->par_tbl=="r_9"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum9 = $sum9 + $show->mony;
                    $num9++;
                }
                if ($show->par_tbl=="r_10"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum10 = $sum10 + $show->mony;
                    $num10++;
                }
                if ($show->par_tbl=="r_11"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum11 = $sum11 + $show->mony;
                    $num11++;
                }
                if ($show->par_tbl=="r_12"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum12 = $sum12 + $show->mony;
                    $num12++;
                }
                if ($show->par_tbl=="r_13"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum13 = $sum13 + $show->mony;
                    $num13++;
                }
                if ($show->par_tbl=="r_14"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum14 = $sum14 + $show->mony;
                    $num14++;
                }
                if ($show->par_tbl=="r_15"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum15 = $sum15 + $show->mony;
                    $num15++;
                }
                if ($show->par_tbl=="r_16"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum16 = $sum16 + $show->mony;
                    $num16++;
                }
                if ($show->par_tbl=="r_17"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum17 = $sum17 + $show->mony;
                    $num17++;
                }
                if ($show->par_tbl=="r_18"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum18 = $sum18 + $show->mony;
                    $num18++;
                }
                if ($show->par_tbl=="r_19"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum19 = $sum19 + $show->mony;
                    $num19++;
                }
                if ($show->par_tbl=="r_20"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum20 = $sum20 + $show->mony;
                    $num20++;
                }
                if ($show->par_tbl=="r_21"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum21 = $sum21 + $show->mony;
                    $num21++;
                }
                if ($show->par_tbl=="r_22"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum22 = $sum22 + $show->mony;
                    $num22++;
                }
				
                if ($show->par_tbl=="r_111"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum111 = $sum111 + $show->mony;
                    $num111++;
                }
                if ($show->par_tbl=="r_112"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum112 = $sum112 + $show->mony;
                    $num112++;
                }
                if ($show->par_tbl=="r_113"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum113 = $sum113 + $show->mony;
                    $num113++;
                }
                if ($show->par_tbl=="r_114"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum114 = $sum114 + $show->mony;
                    $num114++;
                }
                if ($show->par_tbl=="r_115"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum115 = $sum115 + $show->mony;
                    $num115++;
                }
                if ($show->par_tbl=="r_116"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum116 = $sum116 + $show->mony;
                    $num116++;
                }
                if ($show->par_tbl=="r_117"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum117 = $sum117 + $show->mony;
                    $num117++;
                }
                if ($show->par_tbl=="r_118"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum118 = $sum118 + $show->mony;
                    $num118++;
                }
                if ($show->par_tbl=="r_119"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum119 = $sum119 + $show->mony;
                    $num119++;
                }
                if ($show->par_tbl=="r_120"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum120 = $sum120 + $show->mony;
                    $num120++;
                }
                if ($show->par_tbl=="r_122"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum122 = $sum122 + $show->mony;
                    $num122++;
                }
                if ($show->par_tbl=="r_123"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum123 = $sum123 + $show->mony;
                    $num123++;
                }
                if ($show->par_tbl=="r_124"){ //--------برای تفکیک کردن یا جدا کردن جدول های پرنت r_4 رکورد -----------
                    $sum124 = $sum124 + $show->mony;
                    $num124++;
                }
                
            }
        }
        ?>
        <table class="table table-bordered bod">
            <thead>
            <tr>
                <td>رشته ورزشی</td>
                <td>مبلغ</td>
                <td>تعداد</td>

				
            </tr>
            <?php  //-------برای اینکه بشه در ایتم های
            // اقایان و بانوان تفکیک قایل شد مجبور به استفاده از شرط برای وجود داشتن جدول شدم

            $obj->settbl('r_1');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="والیبال" || $reshte=="والیبال-مبتدی-65000"){
                echo "<tr>
                        <td>والیبال . مبتدی</td>
                        <td>". $sum1."</td>
                        <td>". $num1."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_2');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="فوتسال" || $reshte=="فوتسال-مبتدی-68000"){
                echo "<tr>
                        <td> فوتسال . مبتدی </td>
                        <td>". $sum2."</td>
                        <td>". $num2."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_3');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="ژیمناستیک-پیشرفته-80000" || $reshte=="ژیمانستیک پیشرفته" ){
                echo "<tr>
                        <td>ژیمانستیک پیشرفته</td>
                        <td>". $sum3."</td>
                        <td>". $num3."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_4');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="کاراته-مبتدی-65000" ||$reshte=="کاراته"){
                echo "<tr>
                        <td>کاراته . مبتدی</td>
                        <td>". $sum4."</td>
                        <td>". $num4."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_5');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="تکواندو -مبتدی-60000" || $reshte=="تکواندو"){
                echo "<tr>
                        <td>تکواندو . مبتدی</td>
                        <td>". $sum5."</td>
                        <td>". $num5."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_6');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="بوکس-مبتدی-65000" || $reshte=="بوکس"  ){
                echo "<tr>
                        <td>بوکس . مبتدی</td>
                        <td>". $sum6."</td>
                        <td>". $num6."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_7');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="کیک بوکس-مبتدی-65000" || $reshte=="کیک بوکس" ){
                echo "<tr>
                        <td>کیک بوکس . مبتدی</td>
                        <td>". $sum7."</td>
                        <td>". $num7."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_8');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="پارکور-مبتدی-65000" || $reshte=="پارکور" ){
                echo "<tr>
                        <td>پارکور . مبتدی</td>
                        <td>". $sum8."</td>
                        <td>". $num8."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_9');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="کنگ فو-مبتدی-60000" || $reshte=="کونگ فو" ){
                echo "<tr>
                        <td>کونگ فو . مبتدی</td>
                        <td>". $sum9."</td>
                        <td>". $num9."</td>
					
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_10');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="کشتی ازاد-بزرگسالان-70000" || $reshte=="کشتی ازاد بزرگسالان"){
                echo "<tr>
                        <td>کشتی ازاد بزرگسالان . مبتدی</td>
                        <td>". $sum10."</td>
                        <td>". $num10."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_11');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="کشتی ازاد-نوجوانان-60000" || $reshte=="کشتی ازاد نوجوانان"){
                echo "<tr>
                        <td>کشتی ازاد نوجوانان . مبتدی</td>
                        <td>". $sum11."</td>
                        <td>". $num11."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_12');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="ژیمناستیک-مبتدی-65000" ||$reshte=="ژیمناستیک مبتدی"){
                echo "<tr>
                        <td>ژیمناستیک  . مبتدی</td>
                        <td>". $sum12."</td>
                        <td>". $num12."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_13');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="والیبال-پیشرفته-65000"){
                echo "<tr>
                        <td>والیبال . پیشرفته</td>
                        <td>". $sum13."</td>
                        <td>". $num13."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_14');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="بدنسازی-هرروز-85000" || $reshte=="بدنسازی"){
                echo "<tr>
                        <td>بدنسازی . هرروز</td>
                        <td>". $sum14."</td>
                        <td>". $num14."</td>
					
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_15');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="بدنسازی-یک روز در میان-60000"){
                echo "<tr>
                        <td>بدنسازی . یک روز در میان</td>
                        <td>". $sum15."</td>
                        <td>". $num15."</td>
					
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_16');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="بدنسازی-جلسه ای-10000"){
                echo "<tr>
                        <td>بدنسازی . جلسه ای </td>
                        <td>". $sum16."</td>
                        <td>". $num16."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_17');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="ایروبیک-مبتدی-40000" || $reshte=="ایروبیک"){
                echo "<tr>
                        <td>ایروبیک . مبتدی</td>
                        <td>". $sum17."</td>
                        <td>". $num17."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول




            $obj->settbl('r_18');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="صبح-ژیمناستیک-65000"){
                echo "<tr>
                        <td>ژیمناستیک م . صبح</td>
                        <td>". $sum18."</td>
                        <td>". $num18."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول




            $obj->settbl('r_19');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="صبح-ژیمناستیک-80000"){
                echo "<tr>
                        <td>ژیمناستیک پ . صبح</td>
                        <td>". $sum19."</td>
                        <td>". $num19."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول




            $obj->settbl('r_20');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="صبح-والیبال-65000"){
                echo "<tr>
                        <td>والیبال م . صبح</td>
                        <td>". $sum20."</td>
                        <td>". $num20."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول




            $obj->settbl('r_21');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="صبح-والیبال-90000"){
                echo "<tr>
                        <td> والیبال پ . صبح</td>
                        <td>". $sum21."</td>
                        <td>". $num21."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول




            $obj->settbl('r_22');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="صبح-فوتسال-68000"){
                echo "<tr>
                        <td>فوتسال . صبح</td>
                        <td>". $sum22."</td>
                        <td>". $num22."</td>
						
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_111');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="ژیمناستیک-مبتدی-حسینی"){
                echo "<tr>
                        <td>ژیمانستیک . حسینی</td>
                        <td>". $sum111."</td>
                        <td>". $num111."</td>
                  </tr>"; }            //---------پایان ایتم جدول


            $obj->settbl('r_112');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="ژیمناستیک-مبتدی-کولیوند"){
                echo "<tr>
                        <td>ژیمانستیک . کولیوند</td>
                        <td>". $sum112."</td>
                        <td>". $num112."</td>
                  </tr>"; }            //---------پایان ایتم جدول


            $obj->settbl('r_113');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="والیبال-مبتدی-50000"){
                echo "<tr>
                        <td>والیبال . مبتدی</td>
                        <td>". $sum113."</td>
                        <td>". $num113."</td>
                  </tr>"; }            //---------پایان ایتم جدول


            $obj->settbl('r_114');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="تکواندو -مبتدی-50000"){
                echo "<tr>
                        <td>تکواندو . مبتدی</td>
                        <td>". $sum114."</td>
                        <td>". $num114."</td>
                  </tr>"; }            //---------پایان ایتم جدول


            $obj->settbl('r_115');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="کاراته-مبتدی-50000"){
                echo "<tr>
                        <td>کاراته . مبتدی</td>
                        <td>". $sum115."</td>
                        <td>". $num115."</td>
                  </tr>"; }            //---------پایان ایتم جدول


            $obj->settbl('r_116');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="ژیمناستیک-پیشرفته-"){
                echo "<tr>
                        <td>ژیمانستیک . پیشرفته</td>
                        <td>". $sum116."</td>
                        <td>". $num116."</td>
                  </tr>"; }            //---------پایان ایتم جدول


            $obj->settbl('r_117');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="70000-پیلاتس-مبتدی"){
                echo "<tr>
                        <td>پیلاتس . مبتدی</td>
                        <td>". $sum117."</td>
                        <td>". $num117."</td>
                  </tr>"; }            //---------پایان ایتم جدول


            $obj->settbl('r_118');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="ایروبیک-مبتدی"){
                echo "<tr>
                        <td>ایروبیک . مبتدی</td>
                        <td>". $sum118."</td>
                        <td>". $num118."</td>
                  </tr>"; }            //---------پایان ایتم جدول


            $obj->settbl('r_119');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="بدنسازی-یک روز در میان-60000"){
                echo "<tr>
                        <td>بدنسازی . یک روز در میان</td>
                        <td>". $sum119."</td>
                        <td>". $num119."</td>
                  </tr>"; }            //---------پایان ایتم جدول


            $obj->settbl('r_120');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="بدنسازی-جلسه ای-10000"){
                echo "<tr>
                        <td>بدنسازی . جلسه ای</td>
                        <td>". $sum120."</td>
                        <td>". $num120."</td>
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_122');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="فوتسال-مبتدی-70000"){
                echo "<tr>
                        <td>فوتسال . مبتدی </td>
                        <td>". $sum122."</td>
                        <td>". $num122."</td>
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_123');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="رقص-مبتدی-65000"){
                echo "<tr>
                        <td>رقص . مبتدی</td>
                        <td>". $sum123."</td>
                        <td>". $num123."</td>
                  </tr>"; }            //---------پایان ایتم جدول



            $obj->settbl('r_124');     //------- شروع ایتم جدول
            $reshte=$obj->select_data("reshte");
            foreach ($reshte as $res){
                $reshte=$res->reshte;
            }
            if ($reshte=="هاپکیدو-مبتدی-70000"){
                echo "<tr>
                        <td>هاپکیدو . مبتدی </td>
                        <td>". $sum124."</td>
                        <td>". $num124."</td>
                  </tr>"; }            //---------پایان ایتم جدول



            ?>

            </tbody>

            <tfoot>
            <tr style="background-color:black;color: snow; ">
                <td></td>
                <td>مبلغ کل</td>
                <td>تعداد کل</td>
            </tr>
            <tr>
                <td>جمع کل</td>
                <td><?php  echo $sum_mony; ?></td>
                <td><?php  echo $i; ?></td>
            </tr>
            <tr>
                <td class=" disp" colspan="5">
                    <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="icon-print"></i>پرینت
                    </a>
                </td>
            </tr>
            </tfoot>
        </table>
    </section>
</div>
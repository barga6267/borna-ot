<?php
//$obj->settbl("cocher");
//$res = $obj->select_data("*");

//if (isset($_POST['tbtn'])) {
  //  $data = $_POST['frm'];

 //   $newTbl = $data['newTable'];
 //   $oldTbl = $data['oldTable'];
 //   $newData=array();


 //   $obj->settbl($oldTbl);
 //   $oldData=$obj->select_data('*');
//	  var_dump($oldData);die;
 //   foreach ($oldData as $oldDataMore){
  //      $newData['name']=$oldDataMore->name;
  //      $newData['reshte']=$oldDataMore->reshte;
  //      $newData['par_id']=$oldDataMore->idresh;
  //      $newData['par_tbl']=$oldDataMore->reshte;
   //     $newData['mony']=$oldDataMore->mony;
   //     $newData['month']="اردیبهشت";
   //     $newData['tsabtname']=$oldDataMore->time;
   //     $obj->settbl($newTbl);
   //     $obj->add_data($newData);
   // }

//    $reshteTitle=$obj->search_data("id" , $cod); //-----------be dast avordan title reshte----
//    $reshteTitle=$reshteTitle->reshte;
//    $data['reshte']=$reshteTitle;
//    $data['tsabtnam'] = time();
//    $data['dateShahrie'] = time();         //------------برای نشان دادن زمان پرداخت شهریه---------
//    $data['tshahrie1'] = $data['month'];    //----برای نشان اینکه شهریه پرداختی برای کدام ماه است---------
//    $data['tshahrie2'] = '.';
//    $data['tshahrie3'] = '.';
//    $_SESSION['name'] =         $data['name'];//----------for print part 2---
//    $_SESSION['reshtetitle'] =  $reshteTitle;
//    $_SESSION['mony'] =         $data['mony'];
//    $_SESSION['month'] =        $data['month'];
//    $_SESSION['tsabtnam'] =     $data['tsabtnam'];
//
//
//    $obj->settbl("r_".$cod);
//    $obj->add_data($data);  //----add to 1 or 2 or....10
//    $lastId=$obj->pdo->lastInsertId();
//    $dataForGo= array("name"=>$data['name'], "month"=>$data['month'], "tsabtname"=>$data['tsabtnam']
//    ,"par_tbl"=>'r_'.$cod, "par_id"=>$lastId, "reshte"=>$reshteTitle, "mony"=>$data['mony']);
//    $obj->settbl("sabt_data_tbl");  //----add for gozareshgiri ----------
//    $obj->add_data($dataForGo);
//}
?>


<tr class="gradeX even">
</tr>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group ">
                        <label for="exampleInputEmail1"> نام جدول جدید :</label>
                        <input type="text" id="name" name="frm[newTable]" class="form-control">
                    </div>
                    <div class="form-group ">
                    <label for="exampleInputEmail1"> نام جدول قدیم :</label>
                         <input type="text" id="name" name="frm[oldTable]" class="form-control">
                    </div>
                    <div class="form-group bluc">
                        <button type="submit" name="tbtn" class="btn btn-success">تغییر</button>

                    </div>
                </form>
            </div>
        </section>
    </div>
</div>


<!-----------------------------------------------------------------------end-form---------------->


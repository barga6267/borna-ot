<?php
ob_start();
$obj->settbl("cocher");
$row = $obj->select_data("*");
$searchForAllData=null;
?>


<header class="panel-heading"><label class="label-success">جستجو ورزشکاران : </label></header>
<tr class="gradeX even">
</tr>
<!------------------------------------------------------------------------------------------->
<?php

if (isset($_POST['sr2btn'])):
    $data = $_POST['frm'];
    if ($data['reshte']=="sabt_data_tbl"){
        $obj->settbl("sabt_data_tbl");
        $value = $data['value'];
        $res = $obj->like_data("name", $value);
        if(empty($res)){
            echo  "در جدول ثبت نام ها  یافت نشد !!";
            $obj->settbl("shah_data_tbl");
            $value = $data['value'];
            $res = $obj->like_data("name", $value);
            if (empty($res)){
                echo "</br>";
                echo  "در جدول شهریه ها یافت نشد !!";
                echo "</br>";
                echo "همچین مشخصه ای موجود نیست !";
            }
        }
    }else{
        $tblId="r_".$data['reshte'];
        $obj->settbl($tblId);
        $value = $data['value'];

        $res = $obj->like_data("name", $value);
    }

    ?>



    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <label style="background-color: #2a3542;color: white;width: 250px;">
                    </label>
                </header>
                <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام</th>
                            <th>رشته ورزشی</th>
                            <th>ماه شهریه</th>
<!--                            <th>حذف</th>-->
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=0;
                        foreach ($res as $vals):
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $vals->name ?></td>
                                <td><?php echo $vals->reshte; ?></td>
                                <td><?php echo $vals->month ?></td>
<!--                                <td><a href="dashbord.php?contact=search&did=--><?php //echo $vals->id ?><!--" class="btn btn-danger btn-xs"><i-->
<!--                                            class="icon-trash "></i></a></td>-->
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                </table>
            </section>
        </div>
    </div>

    <?php
    if (isset($_GET['did'])) {

        $did = $_GET['did'];
        $obj->delete_data($did);
        header("location:dashbord.php?contact=search");
    }
    echo "<hr style=\"width: 70%;height: 1px;background-color: grey;\">";
endif;
?>

<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">جستجو ورزشکاران
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group ">
                        <label for="exampleInputEmail1"> نام و نام خانوادگی :</label>
                        <input type="text" name="frm[value]" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label> رشته ورزشی :</label>
                        <select name="frm[reshte]" class="form-control m-bot15 ">
                        <?php
                        foreach ($row as $val):
                        ?>
                            <option value="<?php echo $val->id; ?>"><?php echo $val->reshte; ?></option>
                        <?php
                        endforeach;
                        ?>
                            <option value="sabt_data_tbl">جستجو در همه رشته ها</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"></label>
                        <div>
                            <button type="submit" style="width: 262px;" class="btn btn-send" name="sr2btn">&nbsp;&nbsp;&nbsp;&nbsp;
                                جستجو&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

<?php
  $title = "ຂໍ້ມູນແຈ້ງຄ່າໄຟຟ້າ";
  $path="../";
  $links = "../";
  $session_path = "../";
  include ("../header-footer/header.php");
  include ("../oop/obj.php");
  if(isset($_POST['btnSave'])){
    $obj->form_save($_POST['billno'],$_POST['cus_id'],$_POST['amount'],$_POST['qty_amount'],$_POST['sell_date'],$_POST['monthly']);
  }
?>
<style>
    table {
    border: 1px solid black!important; 
    border-collapse: collapse!important;
    width: 100%!important;
}
th {
    border: 1px solid black!important;
}
td {
    border-right: 1px solid black!important;
    padding: 5px;
}
</style>
<div class="card" style="width: 100%">
    <div class="card-body">

        <h5 class="card-title">ຂໍ້ມູນແຈ້ງຄ່າໄຟຟ້າ </h5><br><br>

        
        <br>
        <div class="container-fluid font12">
            <div class="row">

                <div class="col-md-8">
<div class="row">
            <div class="col-md-5">
                <p class="card-text">ເລກທີບິນ: <?php $obj->billno();echo $billno; ?></p>
                <p class="card-text">ເລກບັນຊີຜູ້ໃຊ້ໄຟ: <?php echo $_POST['cus_id'] ?></p>
                <?php 
                    $cus_id = $_POST['cus_id'];
                    $result_customer = mysqli_query($conn,"select * from customer where cus_id='$cus_id'");
                    $customer = mysqli_fetch_array($result_customer,MYSQLI_ASSOC);
                ?>
                <p class="card-text">ເລກທີປະຈຳຜູ້ໃຊ້ໄຟ: <?php echo $customer['cus_no'] ?></p>
            </div>
            <div class="col-md-6">
            <p class="card-text">&nbsp;</p>
                <p class="card-text"style="text-align:right;">ຊື່ແລະນາມສະກຸນຜູ້ໃຊ້ໄຟ:  <?php echo $customer['cus_name'] ?>  <?php echo $customer['cus_surname'] ?></p>
                <p class="card-text" style="text-align:right;">ບ່ອນຢູ່ຜູ້ໃຊ້ໄຟ:  <?php echo $customer['address'] ?></p>
            </div>
        </div>
                <table width="100%" style="text-align: center;">
                                            <tr>
                                                <th>ເລກໝໍ້ນັບໄຟ</th>
                                                <th>ຕົວບັນທຶກ</th>
                                                <th>ເລກຄັ້ງນີ້</th>
                                                <th>ວິທີຈົດ</th>
                                                <th>ເລກຄັ້ງກ່ອນ</th>
                                                <th>ວິທີຈົດ</th>
                                                <th>ຕົວຄູນ</th>
                                                <th>ພະລັງງານໃຊ້ໃນເດືອນ</th>
                                            </tr>
                                            <?php
                                                $obj->listselldetail();
                                                foreach($result_list as $row){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['meter'] ?></td>
                                                <td>0</td>
                                                <td><?php echo $row['no_after'] ?></td>
                                                <td>O</td>
                                                <td><?php echo $row['no_before'] ?></td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td><?php echo $row['total'] ?></td>
                                            </tr>
                                            <?php
                                                }
                                                $obj->sumlist();
                                                $amount = mysqli_fetch_array($result_sumlist,MYSQLI_ASSOC);
                                            ?>
                                            <tr>
                                                <td>ລວມພະລັງງານໃນເດືອນ</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><?php echo $amount['amount'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>ລາຍລະອຽດ</th>
                                                <th colspan="2">ພະລັງງານໃຊ້ໃນເດືອນ</th>
                                                <th colspan="2">ລາຄາ</th>
                                                <th colspan="3">ເງິນຄ່າໃຊ້ໄຟ</th>
                                            </tr>
                                            <?php
                                                if($amount['amount'] > 150){
                                            ?>
                                            <tr>
                                                <td>0 - 150</td>
                                                <td colspan="2">150</td>
                                                <td colspan="2">355</td>
                                                <td colspan="3">53,250</td>
                                            </tr>
                                            <?php
                                                $step1 = 53250;
                                                }
                                                if($amount['amount'] > 151){
                                               $num1 = $amount['amount'] - 150;
                                               $step2 = $num1 * 710;
                                               $mainten = 7800;
                                               $vat = ($step1 + $step2 + $mainten) * 0.1;
                                            ?>
                                            <tr>
                                                <td>151 - 461</td>
                                                <td colspan="2"><?php echo $num1 ?></td>
                                                <td colspan="2">710</td>
                                                <td colspan="3"><?php echo number_format($step2)?></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                            <tr>
                                                <td>ຄ່າບຳລຸງຮັກສາໝໍ້ນັບໄຟ</td>
                                                <td colspan="2"></td>
                                                <td colspan="2"></td>
                                                <td colspan="3"><?php echo number_format($mainten) ?></td>
                                            </tr>
                                            <tr>
                                                <td>ອາກອນມູນຄ່າເພີ່ມ 10%</td>
                                                <td colspan="2"></td>
                                                <td colspan="2"></td>
                                                <td colspan="3"><?php echo number_format($vat) ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: left;">
                                                    ລວມເງິນໃນເດືອນ:<br>
                                                    ໜີ້ຄ້າງຈ່າຍ:
                                                </th>
                                                <th colspan="3">
                                                    <?php 
                                                        $total_amount = $step1 + $step2 + $mainten + $vat;
                                                        echo number_format($total_amount);
                                                    ?><br>
                                                    0
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: left;">
                                                    ລວມເງິນຕ້ອງຈ່າຍທັງໝົດ:
                                                </th>
                                                <th colspan="3">
                                                    <?php echo number_format($total_amount) ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="8" style="text-align: left;">
                                                    ວັນທີຈ່າຍສຸດທ້າຍ: 21/10/2020<br>ຈຳນວນເງິນຈ່າຍສຸດທ້າຍ: 178,548
                                                </th>
                                            </tr>
                                        </table>
                </div>
                <div class="col-lg-3 font12">
                    <div class="row row-cols-1 row-cols-md-1">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 align="center" class="card-title"></h5>
                                    <p class="card-text">
                                    <form action="export" id="save" method="POST">
                                        <div class="row">
                                            <div class="col-md-12">
                                                ເລກທີບິນ: 1
                                            </div>
                                            <hr size="3" align="center" width="100%">
                                            <div class="col-md-12" align="center">
                                                <button type="button" name="btnAdd" class="btn btn-outline-success"
                                                    data-toggle="modal"
                                                    data-target="#exampleModal2">ບັນທຶກຂໍ້ມູນ</button>
                                                <div class="modal fade font14" id="exampleModal2" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" align="center">
                                                                ທ່ານຕ້ອງການບັນທຶກຂໍ້ມູນ ຫຼື ບໍ່ ?
                                                                <input type="hidden" name="billno" value="<?php echo $billno ?>">
                                                                <input type="hidden" name="amount" value="<?php echo $total_amount ?>">
                                                                <input type="hidden" name="cus_id" value="<?php echo $_POST['cus_id'] ?>">
                                                                <input type="hidden" name="qty_amount" value="<?php echo $amount['amount'] ?>">
                                                                <input type="hidden" name="sell_date" value="<?php echo $_POST['sell_date'] ?>">
                                                                <input type="hidden" name="monthly" value="<?php echo $_POST['monthly'] ?>">

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary"
                                                                    data-dismiss="modal">ຍົກເລີກ</button>
                                                                <button type="submit" name="btnSave"
                                                                    class="btn btn-outline-success">ດຳເນີນການ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <?php
    include ("../header-footer/footer.php");
  ?>
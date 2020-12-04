<?php
  $title = "ຂໍ້ມູນແຈ້ງຄ່າໄຟຟ້າ";
  $path="../";
  $links = "../";
  $session_path = "../";
  include ("../header-footer/header.php");
  include ("../oop/obj.php");
  if(isset($_POST['btnAdd'])){
    $obj->add_list($_POST['meter'],$_POST['no_after'],$_POST['no_before']);
    // $obj->add_list('22','22','22');
  }
  if(isset($_POST['btnDelete'])){
      $obj->del_list($_POST['id']);
  }
  $obj->sumlist();

?>

    <div class="row">
        <div class="col-md-8">
            <form action="bill" id="formadd" method="POST">
                <div class="input-group">        
                    <input type="text" name="meter" placeholder="ເລກໝໍ້ໄຟ" class="form-control" autofocus>
                    <input type="text" name="no_after" placeholder="ເລກຄັ້ງນີ້" class="form-control">
                    <input type="text" name="no_before" placeholder="ເລກຄັ້ງກ່ອນ" class="form-control">
                    <div class="input-group-prepend">
                        <button type="submit" name="btnAdd" class="btn btn-outline-primary">ເພີ່ມຂໍ້ມູນແຈ້ງຄ່າໄຟຟ້າ</button>
                    </div>
                </div>
            </form>
        </div>
    </div><br>
     <div class="container-fluid font12">
         <div class="row">
             <div class="col-md-8">
             ຂໍ້ມູນແຈ້ງຄ່າໄຟຟ້າ
                 <div class="table-responsive">
                     <table class="table" style="width: 1100px;">
                         <tr>
                             <th style="width: 110px;" scope="col">ເລກໝໍ້ໄຟ</th>
                             <th style="width: 110px;" scope="col">ເລກຄັ້ງນີ້</th>
                             <th style="width: 110px;" scope="col">ເລກຄັ້ງກ່ອນ</th>
                             <th style="width: 110px;" scope="col">ພະລັງງານໃຊ້ໃນເດືອນ</th>
                             <th style="width: 75px;"></th>
                         </tr>
                         <?php
                            $no_ = 0;
                            $obj->listselldetail();
                            foreach($result_list as $row){
                         ?>
                         <tr>
                             <td><?php echo $no_ += 1; ?></td>
                             <td style="display:none;"><?php echo $row['id']; ?></td>
                             <td><?php echo $row['meter'] ?></td>
                             <td><?php echo $row['no_after'] ?></td>
                             <td><?php echo $row['no_before'] ?></td>
                             <td>
                             <a href="#" data-toggle="modal" data-target="#exampleModalDeletebill"
                                class="fa fa-trash toolcolor btnDelete_bill"></a>
                             </td>
                         </tr>
                         <?php
                            }
                         ?>
                     </table>
                     <hr size="3" align="center" width="100%">
                 </div>
                 <div align="right">
                     <div class="col-md-12 ">
                         ລວມພະລັງງານໃນເດືອນ
                     </div>
                     <div class="col-md-12">
                         <br><h4 style="color: #CE3131;">
                         <?php 
                            if(mysqli_num_rows($result_sumlist) > 0){
                                $sum_list = mysqli_fetch_array($result_sumlist,MYSQLI_ASSOC);
                                echo $sum_list['amount'];
                            }
                            else{
                                echo '0';
                            }
                        ?>
                        </h4> 
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 font12">
                 <div class="row row-cols-1 row-cols-md-1">
                     <div class="col mb-4">
                         <div class="card">
                             <div class="card-body">
                                 <h5 align="center" class="card-title"></h5>
                                 <p class="card-text">
                                     <form action="export" id="formcontinue" method="POST">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 ເລກທີບິນ: <?php $obj->billno(); echo $billno ?>
                                                 <input type="hidden" name="billno" value="<?php echo $billno ?>"> 
                                             </div>
                                             <hr size="3" align="center" width="100%">
                                             
                                            <div class="col-md-12 form-control2">
                                            <label>ລະຫັດລູກຄ້າ</label>
                                            <input type="text" name="cus_id" id="cus_id" placeholder="ລະຫັດລູກຄ້າ">
                                            <i class="fas fa-check-circle "></i>
                                            <i class="fas fa-exclamation-circle "></i>
                                            <small class="">Error message</small>
                                            </div>
                                            <div class="col-md-12 form-control2">
                                                <label>ຄ່າໄຟຟ້າປະຈຳເດືອນ</label>
                                                <input type="date" name="monthly" id="" placeholder="ລະຫັດລູກຄ້າ">
                                                <i class="fas fa-check-circle "></i>
                                                <i class="fas fa-exclamation-circle "></i>
                                                <small class="">Error message</small>
                                            </div>
                                            <div class="col-md-12 form-control2">
                                                <label>ວັນທີລົງບັນຊີ</label>
                                                <input type="date" name="sell_date" id="" placeholder="ລະຫັດລູກຄ້າ">
                                                <i class="fas fa-check-circle "></i>
                                                <i class="fas fa-exclamation-circle "></i>
                                                <small class="">Error message</small>
                                            </div>
                                             <div class="col-md-12" align="center">
                                                    <button type="button" name="btnAddBill" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal2">ດຳເນີນການອອກໃບບິນ</button>
                                                    <div class="modal fade font14" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" align="center">
                                                                    ທ່ານຕ້ອງການດຳເນີນການແຈ້ງຄ່າໄຟຟ້າ ຫຼື ບໍ່ ?
                                                                    
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                                                                    <button type="submit" name="btnCon" class="btn btn-outline-success">ດຳເນີນການ</button>
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
     </div>
  </div>

  <form action="bill" id="formDelete" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalDeletebill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ຢືນຢັນການລົບຂໍ້ມູນ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <input type="hidden" name="id" id="id">
                    ທ່ານຕ້ອງການລົບຂໍ້ມູນ ຫຼື ບໍ່ ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnDelete" class="btn btn-outline-danger">ລົບ</button>
                </div>
            </div>
        </div>
    </div>
</form>

  <?php
    include ("../header-footer/footer.php");

    // check save
  if(isset($_GET['save'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບັນທຶກຂໍ້ມູນບໍ່ສຳເລັດ", "error");
    </script>';
  }
  if(isset($_GET['save2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ບັນທຶກຂໍ້ມູນສຳເລັດ", "success");
    </script>';
  }
  // check delete
  if(isset($_GET['del'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ລົບຂໍ້ຂໍ້ມູນບໍ່ສຳເລັດ", "error");
    </script>';
  }
  if(isset($_GET['del2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ລົບຂໍ້ຂໍ້ມູນສຳເລັດ", "success");
    </script>';
  }
  ?>
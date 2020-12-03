<?php
  $title = "ຂໍ້ມູນລູກຄ້າ";
  $path="../";
  $links = "../";
  $session_path = "../";
  include ("../header-footer/header.php");
  include ("../oop/obj.php");
?>
<?php
        if(isset($_GET['save'])=='fail'){
          echo'<script type="text/javascript">
          swal("", "ບໍ່ສາມາດບັນທຶກຂໍ້ມູນໄດ້ !!", "error");
          </script>';
        }

        if(isset($_GET['save2'])=='success'){
          echo'<script type="text/javascript">
          swal("", "ບັນທຶກຂໍ້ມູນສຳເລັດ !!", "success");
          </script>';
        }
        if(isset($_GET['update'])=='fail'){
          echo'<script type="text/javascript">
          swal("", "ແກ້ໄຂຂໍ້ມູນບໍ່ສຳເລັດ !!", "error");
          </script>';
        }
        if(isset($_GET['update2'])=='success'){
          echo'<script type="text/javascript">
          swal("", "ແກ້ໄຂຂໍ້ມູນສຳເລັດ !!", "success");
          </script>';
        }
        if(isset($_GET['delete'])=='fail'){
          echo'<script type="text/javascript">
          swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດລຸກຄ້າໄດ້ໝູນໃຊ້ແລ້ວ !!", "error");
          </script>';
        }

        if(isset($_GET['del'])=='fail'){
          echo'<script type="text/javascript">
          swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນໄດ້ !!", "error");
          </script>';
        }
        if(isset($_GET['del2'])=='fail'){
          echo'<script type="text/javascript">
          swal("", "ລົບຂໍ້ມູນສຳເລັດ !!", "success");
          </script>';
        }
        if(isset($_POST['Save'])){
          $obj->insert_cus($_POST['cus_id'],$_POST['cus_name'],$_POST['cus_surname'],$_POST['cus_tel'],$_POST['cus_addr'],$_POST['province'],$_POST['cus_type'],$_POST['cus_gender'],$_POST['cus_send'],$_POST['cus_no']);
        }
        if(isset($_POST['btnUpdate'])){
          $obj->update_cus($_POST['cus_id_update'],$_POST['cus_name_update'],$_POST['cus_surname_update'],$_POST['cus_tel_update'],$_POST['cus_addr_update'],$_POST['province_update'],$_POST['cus_type_update'],$_POST['cus_gender_update'],$_POST['cus_send_update'],$_POST['cus_no_update']);
        }
        if(isset($_POST['btnDelete'])){
          $obj->delete_cus($_POST['id']);
        }
        

?>
    <div style="width: 100%;">
        <div style="width: 48%; float: left;">
          <b><?php echo $title    ?></b>&nbsp <img src="../icon/hidemenu.ico" width="10px">
        </div>
        <div style="width: 46%; float: right;" align="right">
          <form action="customer" id="formsave" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalcustomer">
                <img src="../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalcustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນລູກຄ້າ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດລູກຄ້າ</label>
                                      <input type="text" name="cus_id" id="cus_id" placeholder="ລະຫັດລູກຄ້າ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເລກທີປະຈຳຜູ້ໃຊ້ໄຟ</label>
                                      <input type="text" name="cus_no" id="cus_no" placeholder="ເລກທີປະຈຳຜູ້ໃຊ້ໄຟ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່</label>
                                      <input type="text" name="cus_name" id="cus_name" placeholder="ຊື່">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ນາມສະກຸນ</label>
                                      <input type="text" name="cus_surname" id="cus_surname" placeholder="ນາມສະກຸນ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເພດ</label>
                                      <input type="text" name="cus_gender" id="cus_gender" placeholder="ເພດ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່</label>
                                      <input type="text" name="cus_addr" id="cus_addr" placeholder="ທີ່ຢູ່">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີໂທ</label>
                                      <input type="text" name="cus_tel" id="cus_tel" placeholder="ເບີໂທ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ແຂວງ</label>
                                    <select name="province" id="province" >
                                      <option value="">--- ເລືອກແຂວງ ---</option>
                                      <?php 
                                        $obj->province();
                                        foreach($result_pro as $pro2){
                                        ?>
                                        <option value="<?php echo $pro2['pro_id'] ?>"><?php echo $pro2['pro_name'] ?></option>
                                        <?php
                                        }
                                      ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ປະເພດຜູ້ໃຊ້ໄຟ</label>
                                    <select name="cus_type" id="cus_type" >
                                      <option value="">--- ເລືອກປະເພດຜູ້ໃຊ້ໄຟ ---</option>
                                      <?php 
                                        $obj->category();
                                        foreach($result_cate as $cate2){
                                        ?>
                                        <option value="<?php echo $cate2['cate_id'] ?>"><?php echo $cate2['cate_name'] ?></option>
                                        <?php
                                        }
                                      ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ບ່ອນສົ່ງໃບເກັບເງິນ</label>
                                      <input type="text" name="cus_send" id="cus_send" placeholder="ບ່ອນສົ່ງໃບເກັບເງິນ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                              <button type="submit" name="Save" id="Save" class="btn btn-outline-primary" onclick="">ບັນທຶກ</button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>

          <form action="customer" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນລູກຄ້າ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                <!-- <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດລູກຄ້າ</label> -->
                                      <input type="hidden" name="cus_id_update" id="cus_id_update" placeholder="ລະຫັດລູກຄ້າ">
                                      <!-- <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div> -->
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເລກທີປະຈຳຜູ້ໃຊ້ໄຟ</label>
                                      <input type="text" name="cus_no_update" id="cus_no_update" placeholder="ເລກທີປະຈຳຜູ້ໃຊ້ໄຟ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່</label>
                                      <input type="text" name="cus_name_update" id="cus_name_update" placeholder="ຊື່">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ນາມສະກຸນ</label>
                                      <input type="text" name="cus_surname_update" id="cus_surname_update" placeholder="ນາມສະກຸນ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເພດ</label>
                                      <input type="text" name="cus_gender_update" id="cus_gender_update" placeholder="ເພດ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່</label>
                                      <input type="text" name="cus_addr_update" id="cus_addr_update" placeholder="ທີ່ຢູ່">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີໂທ</label>
                                      <input type="text" name="cus_tel_update" id="cus_tel_update" placeholder="ເບີໂທ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ແຂວງ</label>
                                    <select name="province_update" id="province_update" >
                                      <option value="">--- ເລືອກແຂວງ ---</option>
                                      <?php 
                                        foreach($result_pro as $pro){
                                        ?>
                                        <option value="<?php echo $pro['pro_id'] ?>"><?php echo $pro['pro_name'] ?></option>
                                        <?php
                                        }
                                      ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ປະເພດຜູ້ໃຊ້ໄຟ</label>
                                    <select name="cus_type_update" id="cus_type_update" >
                                      <option value="">--- ເລືອກປະເພດຜູ້ໃຊ້ໄຟ ---</option>
                                      <?php 
                                        foreach($result_cate as $cate){
                                        ?>
                                        <option value="<?php echo $cate['cate_id'] ?>"><?php echo $cate['cate_name'] ?></option>
                                        <?php
                                        }
                                      ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ບ່ອນສົ່ງໃບເກັບເງິນ</label>
                                      <input type="text" name="cus_send_update" id="cus_send_update" placeholder="ບ່ອນສົ່ງໃບເກັບເງິນ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                              <button type="submit" name="btnUpdate" id="Update" class="btn btn-outline-success" onclick="">ແກ້ໄຂ</button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
        </div>
    </div>
    
    <div class="clearfix"></div><br>
    <div class="table-responsive">
      <table class="table font12" style="width: 1800px;">
        <tr>
            <th style="width: 30px;">ລຳດັບ</th>
            <th style="width: 100px;">ລະຫັດລູກຄ້າ</th>
            <th style="width: 130px;">ເລກທີປະຈຳຜູ້ໃຊ້ໄຟ</th>
            <th style="width: 120px;">ຊື່</th>
            <th style="width: 120px;">ນາມສະກຸນ</th>
            <th style="width: 50px;">ເພດ</th>
            <th style="width: 300px;">ທີ່ຢູ່</th>
            <th style="width: 60px;">ເບີໂທ</th>
            <th style="width: 130px;">ແຂວງ</th>
            <th style="width: 100px;">ປະເພດຜູ້ໃຊ້ໄຟ</th>
            <th style="width: 300px;">ບ່ອນສົ່ງໃບເກັບເງິນ</th>

        </tr>
        <?php
          $obj->select_cus('%%');
          $no_ = 0;
          foreach($result_cus as $row ){
        ?>
        <tr>
            <td><?php echo $no_ += 1;; ?></td>
            <td><?php echo $row['cus_id']; ?></td>
            <td><?php echo $row['cus_no']; ?></td>
            <td><?php echo $row['cus_name']; ?></td>
            <td><?php echo $row['cus_surname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['tel']; ?></td>
            <td style="display:none;"><?php echo $row['pro_id']; ?></td>
            <td><?php echo $row['pro_name']; ?></td>
            <td style="display:none;"><?php echo $row['cate_id']; ?></td>
            <td><?php echo $row['cate_name']; ?></td>
            <td><?php echo $row['delivery']; ?></td>
            <td>
            <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_customer"></a>&nbsp; &nbsp; 
              <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_customer"></a>
            </td>
        </tr>
        <?php
          }
        ?>
      </table>
    </div>

    <!-- pagination -->
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">ກັບຄືນ</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">ຕໍ່ໄປ</a></li>
  </ul>
</nav>

  </div>

  <form action="customer" id="formDelete" method="POST" enctype="multipart/form-data">
      <div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  ?>
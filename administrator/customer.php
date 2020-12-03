<?php
  $title = "ຂໍ້ມູນລູກຄ້າ";
  $path="../";
  $links = "../";
  $session_path = "../";
  include ("../header-footer/header.php");
?>
    <div style="width: 100%;">
        <div style="width: 48%; float: left;">
          <b><?php echo $title    ?></b>&nbsp <img src="../icon/hidemenu.ico" width="10px">
        </div>
        <div style="width: 46%; float: right;" align="right">
          <form action="customer.php" id="form1" method="POST" enctype="multipart/form-data">
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
                                    <label>ແຂວງ</label>
                                    <select name="province" id="province" >
                                      <option value="">--- ເລືອກແຂວງ ---</option>
                                      <option value="0001">ຜູ້ເບີກສິນຄ້າ</option>
                                      <option value="0002">ຜູ້ອະນຸມັດ</option>
                                      <option value="0003">ຜູ້ເບີກຈ່າຍ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ປະເພດຜູ້ໃຊ້ໄຟ</label>
                                    <select name="cus_type" id="cus_type" >
                                      <option value="">--- ເລືອກປະເພດຜູ້ໃຊ້ໄຟ ---</option>
                                      <option value="0001">ຜູ້ເບີກສິນຄ້າ</option>
                                      <option value="0002">ຜູ້ອະນຸມັດ</option>
                                      <option value="0003">ຜູ້ເບີກຈ່າຍ</option>
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

          <form action="customer.php" id="formUpdate" method="POST" enctype="multipart/form-data">
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
                              <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດລູກຄ້າ</label>
                                      <input type="text" name="cus_id_update" id="cus_id_update" placeholder="ລະຫັດລູກຄ້າ">
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
                                    <label>ແຂວງ</label>
                                    <select name="province_update" id="province_update" >
                                      <option value="">--- ເລືອກແຂວງ ---</option>
                                      <option value="1">ຜູ້ເບີກສິນຄ້າ</option>
                                      <option value="2">ຜູ້ອະນຸມັດ</option>
                                      <option value="3">ຜູ້ເບີກຈ່າຍ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ປະເພດຜູ້ໃຊ້ໄຟ</label>
                                    <select name="cus_type_update" id="cus_type_update" >
                                      <option value="">--- ເລືອກແຂວງ ---</option>
                                      <option value="1">ຜູ້ເບີກສິນຄ້າ</option>
                                      <option value="2">ຜູ້ອະນຸມັດ</option>
                                      <option value="3">ຜູ້ເບີກຈ່າຍ</option>
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
      <table class="table font12" style="width: 1500px;">
        <tr>
            <th>ລະຫັດລູກຄ້າ</th>
            <th>ຊື່</th>
            <th>ນາມສະກຸນ</th>
            <th>ເພດ</th>
            <th>ທີ່ຢູ່</th>
            <th>ແຂວງ</th>
            <th>ປະເພດຜູ້ໃຊ້ໄຟ</th>
            <th>ບ່ອນສົ່ງໃບເກັບເງິນ</th>
            <th></th>
        </tr>
        <tr>
            <td>1</td>
            <td>c</td>
            <td>1</td>
            <td>c</td>
            <td>1</td>
            <td style="display:none;">1</td>
            <td>c</td>
            <td style="display:none;">1</td>
            <td>1</td>
            <td>c</td>
            <td>
            <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_customer"></a>&nbsp; &nbsp; 
              <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_customer"></a>
            </td>
        </tr>
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

  <form action="customer.php" id="formDelete" method="POST" enctype="multipart/form-data">
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
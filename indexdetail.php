<?php
$path = "../";
include ("oop/obj.php");
$obj->searchdetail($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="image/edl_logo.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
</head>

<body>

<style>
body{
    background:#dcdcdc;
    margin-top:20px;}

.widget-26 {
  color: #3c4142;
  font-weight: 400;
}

.widget-26 tr:first-child td {
  border: 0;
}

.widget-26 .widget-26-job-emp-img img {
  width: 35px;
  height: 35px;
  border-radius: 50%;
}

.widget-26 .widget-26-job-title {
  min-width: 200px;
}

.widget-26 .widget-26-job-title a {
  font-weight: 400;
  font-size: 0.875rem;
  color: #3c4142;
  line-height: 1.5;
}

.widget-26 .widget-26-job-title a:hover {
  color: #68CBD7;
  text-decoration: none;
}

.widget-26 .widget-26-job-title .employer-name {
  margin: 0;
  line-height: 1.5;
  font-weight: 400;
  color: #3c4142;
  font-size: 0.8125rem;
  color: #3c4142;
}

.widget-26 .widget-26-job-title .employer-name:hover {
  color: #68CBD7;
  text-decoration: none;
}

.widget-26 .widget-26-job-title .time {
  font-size: 12px;
  font-weight: 400;
}

.widget-26 .widget-26-job-info {
  min-width: 100px;
  font-weight: 400;
}

.widget-26 .widget-26-job-info p {
  line-height: 1.5;
  color: #3c4142;
  font-size: 0.8125rem;
}

.widget-26 .widget-26-job-info .location {
  color: #3c4142;
}

.widget-26 .widget-26-job-salary {
  min-width: 70px;
  font-weight: 400;
  color: #3c4142;
  font-size: 0.8125rem;
}

.widget-26 .widget-26-job-category {
  padding: .5rem;
  display: inline-flex;
  white-space: nowrap;
  border-radius: 15px;
}

.widget-26 .widget-26-job-category .indicator {
  width: 13px;
  height: 13px;
  margin-right: .5rem;
  float: left;
  border-radius: 50%;
}

.widget-26 .widget-26-job-category span {
  font-size: 0.8125rem;
  color: #3c4142;
  font-weight: 600;
}

.widget-26 .widget-26-job-starred svg {
  width: 20px;
  height: 20px;
  color: #fd8b2c;
}

.widget-26 .widget-26-job-starred svg.starred {
  fill: #fd8b2c;
}
.bg-soft-base {
  background-color: #e1f5f7;
}
.bg-soft-warning {
    background-color: #fff4e1;
}
.bg-soft-success {
    background-color: #d1f6f2;
}
.bg-soft-danger {
    background-color: #fedce0;
}
.bg-soft-info {
    background-color: #d7efff;
}


.search-form {
  width: 80%;
  margin: 0 auto;
  margin-top: 1rem;
}

.search-form input {
  height: 100%;
  background: transparent;
  border: 0;
  display: block;
  width: 100%;
  padding: 1rem;
  height: 100%;
  font-size: 1rem;
}

.search-form select {
  background: transparent;
  border: 0;
  padding: 1rem;
  height: 100%;
  font-size: 1rem;
}

.search-form select:focus {
  border: 0;
}

.search-form button {
  height: 100%;
  width: 100%;
  font-size: 1rem;
}

.search-form button svg {
  width: 24px;
  height: 24px;
}

.search-body {
  margin-bottom: 1.5rem;
}

.search-body .search-filters .filter-list {
  margin-bottom: 1.3rem;
}

.search-body .search-filters .filter-list .title {
  color: #3c4142;
  margin-bottom: 1rem;
}

.search-body .search-filters .filter-list .filter-text {
  color: #727686;
}

.search-body .search-result .result-header {
  margin-bottom: 2rem;
}

.search-body .search-result .result-header .records {
  color: #3c4142;
}

.search-body .search-result .result-header .result-actions {
  text-align: right;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.search-body .search-result .result-header .result-actions .result-sorting {
  display: flex;
  align-items: center;
}

.search-body .search-result .result-header .result-actions .result-sorting span {
  flex-shrink: 0;
  font-size: 0.8125rem;
}

.search-body .search-result .result-header .result-actions .result-sorting select {
  color: #68CBD7;
}

.search-body .search-result .result-header .result-actions .result-sorting select option {
  color: #3c4142;
}

@media (min-width: 768px) and (max-width: 991.98px) {
  .search-body .search-filters {
    display: flex;
  }
  .search-body .search-filters .filter-list {
    margin-right: 1rem;
  }
}

.card-margin {
    margin-bottom: 1.875rem;
}

@media (min-width: 992px){
.col-lg-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
}
}

.card-margin {
    margin-bottom: 1.875rem;
}
.card {
    border: 0;
    box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #CEE3F6;
    background-clip: border-box;
    border: 1px solid #e6e4e9;
    border-radius: 8px;
}
body{
    font-family: 'Poppins','Noto Sans Lao','Phetsarath OT', sans-serif!important;
}
table {
    border: 1px solid black; 
    border-collapse: collapse;
    width: 100%;
}
th {
    border: 1px solid black;
}
td {
    border-right: 1px solid black;
    padding: 5px;
}

</style>


<div class="container">
<div class="row">
        <div class="col-12">
            <div class="card card-margin">
                <div class="card-body">
                    <div class="row search-body">
                        <div class="col-lg-12">
                            <div class="search-result">
                                    <div align="center">
                                        <h3>ໃບແຈ້ງຄ່າໄຟຟ້າ</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <label for="">ລັດວິສາຫະກິດໄຟຟ້າລາວ</label><br>
                                            <label for=""> ສາຂາ:</label> ຝ່າຍປະຕິບັດການໄຟຟ້ານະຄອນຫຼວງ<br>
                                            <label for="">ໂທຣ:</label> 243565<br>
                                            <label for=""> ວັນທີຜະລິດໃບເກັບເງິນຄ່າໄຟຟ້າ:</label> <?php echo date("d/m/Y",strtotime($arr_result['sell_date'])) ?><br>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4" align="center">
                                            <img src="image/edl_logo.png" width="70px" height="70px" alt=""><br>
                                            ປະຈຳເດືອນ:  <?php echo date("m/Y",strtotime($arr_result['sell_date'])) ?>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4" align="right">
                                            <label for="">ເລກບັນຊີຜູ້ໃຊ້ໄຟຟ້າ:</label> <?php echo $arr_result['cus_id'] ?><br>
                                            <label for="">ເລກທີປະຈຳຜູ້ໃຊ້ໄຟ:</label>  <?php echo $arr_result['cus_no'] ?><br>
                                            <label for="">ປະເພດຜູ້ໃຊ້ໄຟ:</label>  <?php echo $arr_result['cate_name'] ?><br>
                                            <label for="">ເລກບັນຊີ ກຸ່ມ/ແມ່:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>
                                    <hr size="1" width="98%">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>ຊື່ ແລະ ນາມສະກຸນຜູ້ໃຊ້ໄຟ:</label>  <?php echo $arr_result['cus_name'] ?>  <?php echo $arr_result['cus_name'] ?>
                                        </div>
                                        <div class="col-md-12">
                                            <label>ບ່ອນຢູ່ຜູ້ໃຊ້ໄຟ:</label>  <?php echo $arr_result['address'] ?>
                                        </div>
                                        <div class="col-md-12">
                                            <label>ບ່ອນສົ່ງໃບເກັບເງິນຄ່າໄຟ:</label>  <?php echo $arr_result['delivery'] ?>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <label for="">ໂທຣ:</label>  <?php echo $arr_result['tel'] ?> <br>
                                            <label for="">ຕູ້ໄປສະນີ:</label> 
                                        </div>
                                        <div class="col-xs-12 col-md-6" align="right">
                                            <label for="">ແຜນທີ່ອ້າງອີ:</label> 375/1 <br>
                                            <label for="">ລຳດັບເຮືອນຈົດໄຟ:</label> 400
                                        </div>
                                    </div>
                                    <div class="table-responsive">
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
                                              foreach($result as $row){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['meter'] ?></td>
                                                <td>0</td>
                                                <td><?php echo $row['no_after'] ?></td>
                                                <td>O</td>
                                                <td><?php echo $row['meter'] ?></td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td><?php echo $row['total'] ?></td>
                                            </tr>
                                            <?php
                                              }
                                            ?>
                                            <tr>
                                                <td>ລວມພະລັງງານໃນເດືອນ</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><?php echo $amount['total_qty'] ?></td>
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
                                                if($amount['total_qty'] > 151){
                                               $num1 = $amount['total_qty'] - 150;
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
                                            </tr>                                            <tr>
                                                <th colspan="5" style="text-align: left;">
                                                    ລວມເງິນໃນເດືອນ:<br>
                                                    ໜີ້ຄ້າງຈ່າຍ:
                                                </th>
                                                <th colspan="3">
                                                    <?php echo number_format($amount['amount']) ?><br>
                                                    0
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: left;">
                                                    ລວມເງິນຕ້ອງຈ່າຍທັງໝົດ:
                                                </th>
                                                <th colspan="3">
                                                  <?php echo number_format($amount['amount']) ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="8" style="text-align: left;">
                                                    ວັນທີຈ່າຍສຸດທ້າຍ: 21/10/2020<br>ຈຳນວນເງິນຈ່າຍສຸດທ້າຍ: 178,548
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
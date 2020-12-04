<?php
$conn = mysqli_connect("Localhost", "root", "", "edl_demo");
date_default_timezone_set("Asia/Bangkok");
$datenow = time();
$Time = date("H:i:s",$datenow);
class obj{
    public $conn;
    public $search;
    public static function login($email,$pass){
        global $conn;
        $sql1 = "select * from username where email='$email' and password='$pass';";
        $resultck = mysqli_query($conn, $sql1);
       //$num1 = MYSQLI_NUM_ROWS($sql1);
             if($email == "")
             {
                     echo"<script>";
                     echo"window.location.href='login?email=null';";
                     echo"</script>";
             }
                 else if($pass == "")
                 {
                     echo"<script>";
                     echo"window.location.href='login?pass=null';";
                     echo"</script>";
                 }
                 else if(!mysqli_num_rows($resultck))
                 {
                     echo"<script>";
                     echo"window.location.href='login?login=false';";
                     echo"</script>";
                 }
                 else 
                 {
                     $sql = "select * from username where email = '$email' and password = '$pass';";
                     $resultget = mysqli_query($conn, $sql);
                     
                     if(mysqli_num_rows($resultget) <= 0){
                         echo"<meta http-equiv-'refress' content='1;URL=login'>";
                     }
                     else{
                        
                         while($user = mysqli_fetch_array($resultget))
                         {
                             if($user['status'] == 1)
                             {
                                 $_SESSION['ses_id'] = session_id();
                                 $_SESSION['email'] = $user['email'];
                                 $_SESSION['user_name'] = $user['user_name'];
                                 $_SESSION['status'] = 1;
                                 echo"<meta http-equiv='refresh' content='1;URL=Main'>";
                             }
                             else
                             {
                                 $_SESSION['ses_id'] = session_id();
                                 $_SESSION['status'] > 2 ;
                                 echo"<script>";
                                 echo"window.location.href='login?permission=found';";
                                 echo"</script>";
                             }
    
                         }
                     }
                 }    
    }
    public static function category(){
        global $conn;
        global $result_cate;
        $result_cate = mysqli_query($conn,"select * from category order by cate_name asc");
    }
    public static function province(){
        global $conn;
        global $result_pro;
        $result_pro = mysqli_query($conn,"select * from province order by pro_name asc");
    }
    public static function select_cus($search){
        global $conn;
        global $result_cus;
        $result_cus = mysqli_query($conn,"select cus_id,cus_name,cus_surname,tel,address,c.pro_id,pro_name,c.cate_id,cate_name,gender,delivery,cus_no from customer c left join province p on c.pro_id=p.pro_id left join category d on c.cate_id=d.cate_id where cus_id like '$search' or cus_name like '$search' or gender like '$search' or pro_name like '$search' or cate_name like '$search' or cus_no like '$search' order by cus_name asc");
    }
    public static function insert_cus($cus_id,$cus_name,$cus_surname,$tel,$address,$pro_id,$cate_id,$gender,$delivery,$cus_no){
        global $conn;
        $result = mysqli_query($conn,"insert into customer values('$cus_id','$cus_name','$cus_surname','$tel','$address','$pro_id','$cate_id','$gender','$delivery','$cus_no')");
        if(!$result){
            echo"<script>";
            echo"window.location.href='customer?save=fail';";
            echo"</script>";
        }
        else{
            echo"<script>";
            echo"window.location.href='customer?save2=success';";
            echo"</script>";
        }
    }
    public static function update_cus($cus_id,$cus_name,$cus_surname,$tel,$address,$pro_id,$cate_id,$gender,$delivery,$cus_no){
        global $conn;
        $result = mysqli_query($conn,"update customer set cus_name='$cus_name',cus_surname='$cus_surname',tel='$tel',address='$address',pro_id='$pro_id',cate_id='$cate_id',gender='$gender',delivery='$delivery',cus_no='$cus_no' where cus_id='$cus_id'");
        if(!$result){
            echo"<script>";
            echo"window.location.href='customer?update=fail';";
            echo"</script>";
        }
        else{
            echo"<script>";
            echo"window.location.href='customer?update2=success';";
            echo"</script>";
        }
    }
    public static function delete_cus($cus_id){
        global $conn;
        $resultck = mysqli_query($conn,"select * from sell where cus_id='$cus_id'");
        if(!$resultck){
            echo"<script>";
            echo"window.location.href='customer?delete=fail';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"delete from customer where cus_id='$cus_id'");
            if(!$result){
                echo"<script>";
                echo"window.location.href='customer?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='customer?del2=success';";
                echo"</script>";
            }
        }
    }
    public static function add_list($meter,$no_after,$no_before){
        global $conn;
        $result = mysqli_query($conn,"insert into listselldetail(meter,no_after,no_before) values('$meter','$no_after','$no_before')");
        if(!$result){
            echo"<script>";
            echo"window.location.href='bill';";
            echo"</script>";
        }
        else{
            echo"<script>";
            echo"window.location.href='bill';";
            echo"</script>";
        }
    }
    public static function listselldetail(){
        global $conn;
        global $result_list;
        $result_list = mysqli_query($conn,"select id,meter,no_after,no_before,no_after-no_before as total from listselldetail order by id asc");
    }
    public static function sumlist(){
        global $conn;
        global $result_sumlist;
        $result_sumlist = mysqli_query($conn,"select sum(no_after-no_before) as amount from listselldetail order by id asc");
    }
    public static function del_list($id){
        global $conn;
        $result = mysqli_query($conn,"delete from listselldetail where id='$id'");
        echo"<script>";
        echo"window.location.href='bill';";
        echo"</script>";
    }
    public static function billno(){
        global $conn;
        global $billno;
        $result = mysqli_query($conn,"select max(billno) as billno from sell");
        $billno = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $billno = $billno['billno'] + 1;
    }
    public static function form_save($billno,$cus_id,$amount,$qty_amount,$sell_date,$monthly){
        global $conn;
        global $Time;
        $resultsell = mysqli_query($conn,"insert into sell values('$billno','$cus_id','$qty_amount','$amount','$sell_date','$Time','$monthly')");
        if(!$resultsell){
            echo"<script>";
            echo"window.location.href='bill?save=fail';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"insert into selldetail(meter,no_before,no_after,total,billno) select meter,no_before,no_after,no_after-no_before,'$billno' from listselldetail");
            if(!$result){
                echo"<script>";
                echo"window.location.href='bill?save=fail';";
                echo"</script>";
            }
            else{
                mysqli_query($conn,"delete from listselldetail");
                echo"<script>";
                echo"window.location.href='bill?save2=success';";
                echo"</script>";
            }
        }
    }
}
$obj = new obj();
// $obj->cookie_stock('1','2','3','4');
// $obj->select_product('%%','0');
// while($row = mysqli_fetch_array($resultproduct,MYSQLI_ASSOC)){
//     echo $row['code']." ";
//     echo $row['pro_name']."<br>";
// }

?>

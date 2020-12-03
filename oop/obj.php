<?php
$conn = mysqli_connect("Localhost", "root", "", "edl_demo");
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
}
$obj = new obj();
// $obj->cookie_stock('1','2','3','4');
// $obj->select_product('%%','0');
// while($row = mysqli_fetch_array($resultproduct,MYSQLI_ASSOC)){
//     echo $row['code']." ";
//     echo $row['pro_name']."<br>";
// }

?>

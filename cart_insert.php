<?php 
include_once './db/db_con.php';
$no = $_GET['no'];
$quan=$_POST['quantity'];

session_start();
$session_id=session_id();

$sql = "select * from shop_data where no=$no";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$regdate = date("Y-m-d(H:i:s)");
$money = $quan*$row['price'];

$name = $row['name'];
$parent = $row['no'];
$price = $row['price'];
$img = $row['img'];
$comment = $row['comment'];


$sqll = "insert into shop_temp(session_id,name,parent,count,price,money,regdate,img,comment) values('$session_id','$name','$parent',$quan,$price,$money,'$regdate','$img','$comment')";
mysqli_query($con, $sqll);

?>
<script>
location.href='./cart.php'
</script>

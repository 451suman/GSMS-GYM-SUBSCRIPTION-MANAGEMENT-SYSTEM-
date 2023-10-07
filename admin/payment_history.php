<?php
include('layout/header.php');
include('layout/left.php');
include('layout/adminsession.php');
?>
<style>
  img {
    height: 35px;
    width: 35px;
  }
</style>
<div id="right">
<link rel="stylesheet" href="../css/tableDecorate.css">

<table class="payment_table center" border="1px">
    <tr >
        <th colspan="9" >
        PAYMENT HISTORY
        </th>
    </tr>
    <tr>
        <th width="5%">SN</th>
        <th width="20%">Name</th>
        <th width="15%">Phone</th>
        <th width="5%">Photo</th>
        <th width="15%">Category Name</th>
        <th width="10%">PAckage Name</th>
        <th width="5%">Months</th>
        <th width="5%">Price</th>
        <th width="20%">Payment Date</th>
    </tr>
        <?php
         $conn = new mysqli("localhost", "root", "", "fitness");
         if ($conn->connect_error) {
             die("Database connection error");
         }
         
            $sql = "SELECT member.mid, member.image,member.phone, member.name, payment.cname, payment.package_name, payment.duration, payment.price, payment.date 
        FROM member
        INNER JOIN payment ON payment.mid = member.mid 
        ORDER BY payment.date DESC;";

$r = $conn->query($sql);
$i = 0;
if ($r -> num_rows > 0 ) {
    while ($row = $r->fetch_assoc()) {
        $image=$row['image'];
        $phone=$row['phone'];
        $name=$row['name'];
        $cname=$row['cname'];
        $package_name=$row['package_name'];
        $duration=$row['duration'];
       $price= $row['price'];
       $date=$row['date'];
        $i++;
        echo "
            <tr>
                <td>$i</td>
                <td>$name</td>
                <td>$phone</td>
                <td><img src='../img/$image' alt=' '> </td>
                <td>$cname</td>
                <td>$package_name</td>
                <td>$duration</td>
                <td>$price</td>
                <td>$date</td>
            </tr>
        ";
    }
}
else
{
   echo"
   <tr>
   <td colspan='9'> No Payment Found </td>
   </tr>
   ";
}
?>


</table>


</div>
<script src="../js/js.js"></script>

<?php
include('layout/footer.php');

?>
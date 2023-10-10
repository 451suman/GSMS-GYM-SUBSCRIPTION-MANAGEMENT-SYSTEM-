<?php
include('layout_member/header.php');
include('layout_member/left.php');
include('layout_member/member_session.php');
?>

<?php
 $conn = new mysqli("localhost", "root", "", "fitness");
 if ($conn->connect_error) {
     die("Database connection error");
 }
 $csql = "SELECT * FROM member_subscription_track where mid='$id'" ;
 $r=$conn->query($csql);
 if($r->num_rows>0 == false)
 {
    echo '<script type="text/javascript">';
    echo 'swal.fire({
        icon: "warning",
          
        text: "No enrollment found. to access this page you have to enroll package first",
    
    }).then(function() {
        window.location = "index.php";
    });';
        // echo 'alert("No enrollment found. to access this page you have to enroll package first");';
        // echo 'window.location.href = "index.php";';
        echo '</script>';
 }


 if(isset($_GET['request_routine']))
    {
        $conn=new mysqli("localhost","root","","fitness");
if($conn->connect_error)
{
    die("connect error");

}

$sql = "SELECT * FROM member_subscription_track where mid='$id'" ;
$result = $conn->query($sql);

if($result->num_rows>0) {
                    if(isset($_GET['request_routine'])){
                        $mid=$_GET['mid'];
                    $conn = new mysqli("localhost", "root", "", "fitness");
                        if ($conn->connect_error) {
                            die("Connection error");
                        }
                        $check_sql = "SELECT * FROM routine WHERE mid='$mid' ";
                        $r = $conn->query($check_sql);
                        
                        if ($r->num_rows > 0) {
                        $row=$r->fetch_assoc();
                        $rid=$row['rid'];
                    $update_sql="UPDATE routine SET verify = 'no' WHERE rid = $rid";
                    $update_r=$conn->query($update_sql);
                    if($update_r){
                        echo '<script type="text/javascript">';
                        echo 'swal.fire({
                            icon: "success",
                           text: "Request Successful. Wait for Admin to Submit your routine.",
                       }).then(function() {
                           window.location = "routine.php";
                       });';
                        // echo 'alert("Request Successful. Wait for Admin to Submit your routine.");';
                    //    echo 'window.location.href = "routine.php";';
                         echo '</script>';
                    }  
                        } 
                        else {
                        $insert_sql="INSERT INTO routine (mid) VALUES ('$mid')";
                        $insert_r=$conn->query($insert_sql);
                        if($insert_r){
                            echo '<script type="text/javascript">';
                            echo 'swal.fire({
                                icon: "success",
                               
                               text: "Request Successful. Wait for Admin to Submit your routine.",
                              
                           }).then(function() {
                               window.location = "routine.php";
                           });';
                            //  echo 'alert("Request Successful. Wait for Admin to Submit your routine.");';
                            //   echo 'window.location.href = "routine.php";';
                             echo '</script>';
                        }
                        }
                    }
         }
                else{
                    echo '<script type="text/javascript">';
                    echo 'swal.fire({
                        icon: "success",
                       text: "No enrollment found. to access this page you have to enroll package first.",
                   }).then(function() {
                       window.location = "index.php";
                   });';
                    // echo 'alert("No enrollment found. to access this page you have to enroll package first");';
                    // echo 'window.location.href = "index.php";';
                    echo '</script>';
                    
                }





    }

?>


<div id="routine_right">
<div class="father_li_class">
    <div class="li_class">
        <form action="routine.php" method="get">
            <input type="hidden" name="mid" id="" value="<?php  echo $id; ?>">  
            <input type="submit" name="request_routine" value="Request Routine" id="rr">
        </form>

        <h1 style="text-align: center; color: #FFA559;">ROUTINE</h1>
        <div class="li2_class">
            <?php
            $conn = new mysqli("localhost", "root", "", "fitness");
            if ($conn->connect_error) {
                die("Connection error");
            }
            $i = 0;
            $sql = "SELECT * FROM routine WHERE mid = '$id'";
            $r = $conn->query($sql);
            while ($row = $r->fetch_assoc()) {
                $i++;
                $rid = $row['rid'];
                $chest = $row['chest'];
                $back = $row['back'];
                $shoulder = $row['soulder'];
                $biceps = $row['biseps'];
                $triceps = $row['triceps'];
                $leg = $row['leg'];
                $abs = $row['abs'];

                echo "
                <div>
                    <strong>Chest</strong> 
                    $chest
                </div>

                <div>
                    <strong>Shoulder</strong> 
                    $shoulder
                </div>

                <div>
                    <strong>Back</strong>
                    $back
                </div>

                <div>
                    <strong>Biceps</strong> 
                    $biceps
                </div>

                <div>
                    <strong>Triceps</strong> 
                    $triceps
                </div>

                <div>
                    <strong>Leg</strong> 
                    $leg
                </div>

                <div>
                    <strong>Abs</strong> 
                    $abs
                </div>";
            }
            ?>
        </div>
    </div>
    </div>
</div>


<?php
include('layout_member/footer.php');
?>

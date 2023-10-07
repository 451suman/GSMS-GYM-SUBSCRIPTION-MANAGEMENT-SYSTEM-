<?php
include('layout/header.php');
include('layout/left.php');
include('layout/adminsession.php');

?>

<div id="right">
    
<?php


if (isset($_POST["add_category"])) {
    $pname = $_POST["pname"];
    $cname = $_POST["cname"];
    $duration = $_POST["duration"];
    $price = $_POST["price"];

    
    $file_name = $_FILES["image"]["name"];
    $file_size = $_FILES["image"]["size"];
    $file_tmp = $_FILES["image"]["tmp_name"];
    $file_type = $_FILES["image"]["type"];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $allowed_extensions = array("jpg", "jpeg", "png"); // Add any additional allowed extensions here

    if( !$file_name = $_FILES["image"]["name"]){
        echo '<script>';
                    echo "Swal.fire({
                        icon: 'error',
                        title: 'Please Upload Image.',
                    }).then(function() {
                        window.location = 'category.php';
                    });";
                    echo '</script>';
    }

    elseif (in_array($file_ext, $allowed_extensions)) {
        if ($file_size < 5242880) { // Max file size: 5MB (you can adjust this value)
            $destination = "../img/" . $file_name;

            if (move_uploaded_file($file_tmp, $destination)) {
                $conn = new mysqli("localhost", "root", "", "fitness");
                if ($conn->connect_error) {
                    die("database connection error");
                }  

                $sql = "INSERT INTO category (package_name,cname, duration, package_price,  image) VALUES ('$pname','$cname', '$duration', '$price',  '$file_name')";
                $result = $conn->query($sql);

                if ($result) {
                    echo '<script>';
                    echo "Swal.fire({
                        icon: 'success',
                        title: 'Category added Successfully',
                    }).then(function() {
                        window.location = 'category.php';
                    });";
                    echo '</script>';
                    // header("location:category.php");
                } else {
                     echo '<script type="text/javascript">';
                            echo 'swal.fire({
                                icon: "error",
                                title: "ERROR!",
                                text: "data insert unsuccessful",
                            })';
                            echo '</script>';
                    // echo "data insert unsuccessful";
                }
            } else {
                 echo '<script type="text/javascript">';
                            echo 'swal.fire({
                                icon: "error",
                                title: "ERROR!",
                                text: "Error moving uploaded file",
                            })';
                            echo '</script>';
                // echo "Error moving uploaded file.";
            }
        } else {
             echo '<script type="text/javascript">';
                            echo 'swal.fire({
                                icon: "error",
                                title: "ERROR!",
                                text: "File size exceeds the maximum limit.",
                            })';
                            echo '</script>';
            // echo "File size exceeds the maximum limit.";
        }
    } else {
         echo '<script type="text/javascript">';
                            echo 'swal.fire({
                                icon: "error",
                                title: "ERROR!",
                                text: "Invalid file format. Only JPG, JPEG, and PNG files are allowed.",
                            })';
                            echo '</script>';
        // echo "Invalid file format. Only JPG, JPEG, and PNG files are allowed.";
    }
}
?>

<form action="addcategory.php" method="post" class="addcategory_form" enctype="multipart/form-data">
    <div class="form_container">
        <div><b>ADD CATEGORY</b></div>
        <div>
            <label for="pname">Package Name</label><br>
            <input type="text" name="pname" maxlength="10"  class="transparent" id="name" ><br>
        </div>

        <div>
            <label for="cname">Category Name</label><br>
            <input type="text" name="cname" maxlength="10"  class="transparent" id="cname" required><br>
        </div>
        
        <div>
            <label for="duration">Duration</label><br>
            <input type="number" name="duration"   class="transparent" id="duration" required><br>
        </div>
        
        <div>
            <label for="price">Price</label><br>
            <input type="number" name="price"   class="transparent" id="price" required><br>
        </div>

     
        



        <div>
            <label for="image">Image</label><br>
            <input type="file" name="image" class="transparent" id="image" accept=".jpg, .jpeg, .png"><br>
        </div>

        <div>
            <input type="submit" name="add_category" id="add_category" value="Add Category">
        </div>
    </div>
</form>
</div>

<?php
include('layout/footer.php');
?>

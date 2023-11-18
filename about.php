<?php
include('layout_member/header.php');
include('layout_member/left.php');


?>
<?php
session_start();
if (!isset($_SESSION['member'])) {
    header("location:login.php");
}
$row = $_SESSION['member'];
$id = $row['mid'];
$n = $row['name'];
$e = $row['email'];
$p = $row['phone'];
?>

<div id="right">
    <div class="about">
        <h1 class="center">ABOUT US</h1>
        <div>
            <p>The Gym Subscription system is a web-based application that allows gym members to manage their
                subscriptions. The system provides users with the ability to sign up for gym memberships, view
                membership options and pricing. The system has two types of users: gym members, gym trainer and gym
                administrators. Gym members can sign up for memberships, view their membership details. Gym
                administrators can manage gym membership data,.Gym trainers can view member information regarding their
                exercise. The system uses CRUD operations to manage gym membership data. Users can create new membership
                records, update membership information, and delete memberships if necessary. The Gym Subscription system
                is designed to be user-friendly and easy to use. It provides users with a streamlined process for
                managing their gym memberships and attendance, making it a valuable tool for both gym members and
                administrators
            </p>
            <p style="font-size:25px; color:orange;">contact:xxxxxxxxx</p>
        </div>
        <br>
        <p style="color: #A7ECEE;">
            -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-
        </p>
        <!-- owner description -->
        <div>
            <h1 class="center">GYM OWNER </h1>


            <div class="about_author">
                <img src="img/static/aboutboy.jpg" alt="">
                <br>
                <p>Name: Suman Mushyakhwo <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus pariatur quos cumque! Voluptate
                    neque eligendi, qui soluta ex quisquam sint!
                </p>
            </div>

            <div class="about_author">
                <img src="img/static/aboutgirl.jpg" alt="">
                <br>
                <p>Name: Sharmila Pyatha <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus pariatur quos cumque! Voluptate
                    neque eligendi, qui soluta ex quisquam sint!
                </p>
            </div>
            <!-- gym discription00000000 -->
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, sint repudiandae similique
                    commodi, velit ipsum at excepturi libero aperiam quidem ad consequuntur nemo in sed delectus eos ea
                    quisquam quae cupiditate? Corrupti laudantium nemo voluptatem eum quos magni ullam accusantium fugit
                    eligendi amet? Adipisci et delectus quis vero. Saepe ab eligendi magni nisi possimus ut modi iure
                    ipsam fuga. Praesentium necessitatibus dolorum delectus dolore earum suscipit quos eos? Eaque
                    commodi distinctio facilis, vitae veritatis consequatur architecto aspernatur, assumenda voluptas
                    odio alias quo iure pariatur, maxime cupiditate reprehenderit animi. Quod, voluptatibus optio vel
                    minus rerum cum cupiditate officiis! Ut eos saepe molestias aperiam facilis, a optio vero suscipit
                    repellat perferendis nam quasi delectus distinctio adipisci nemo, magnam unde facere rerum beatae
                    libero maiores laborum. Et dolorem dolorum nostrum nesciunt blanditiis placeat quas autem, sed illo,
                    recusandae commodi eligendi veritatis aperiam labore quidem eos possimus, mollitia repellat
                    consequatur non debitis. Aperiam omnis voluptates temporibus obcaecati doloremque error quisquam
                    nemo, optio deleniti vero commodi animi maiores deserunt repellat dignissimos assumenda. Aliquid
                    similique repellendus nulla nobis sint repellat cupiditate eos quos. Doloremque, labore temporibus
                    nemo porro suscipit reiciendis excepturi ipsam repellat earum illo saepe accusantium consequatur ea
                    eum ratione sapiente, molestiae necessitatibus adipisci facere placeat quia. Repudiandae commodi
                    debitis architecto similique, ex reiciendis quam unde dolor perspiciatis maiores vero corrupti
                    tempore rem illum. Minus eligendi accusantium officiis. Repellat temporibus fuga impedit consequatur
                    deleniti, soluta sint suscipit eos est, ut ipsa omnis facilis expedita quia harum eligendi
                    repudiandae vel. Pariatur repellat maxime sit eveniet odit, cupiditate deleniti corporis ea
                    perferendis nemo magnam deserunt perspiciatis labore qui impedit, dolore soluta et assumenda itaque
                    doloremque reiciendis omnis, veritatis quibusdam officia! Vitae impedit deleniti hic sint soluta
                    veritatis quidem, eaque mollitia autem, in nobis praesentium totam pariatur. Incidunt quo fuga
                    delectus temporibus dolor deleniti, animi distinctio officiis error commodi culpa, libero qui ullam
                    nam enim nesciunt blanditiis laudantium pariatur rem eum. Amet sunt, molestias laborum, reiciendis
                    dolores tenetur deserunt tempore iusto eaque nisi rerum praesentium est odit voluptatem, modi dolore
                    perferendis quasi dignissimos. Quod eligendi quae, est magni nesciunt aliquam qui dolore dignissimos
                    ut excepturi totam provident dolores maxime eum dolorem repellat fugiat minus sed illo fugit </p>

            </div>

        </div>


    </div>


</div>
<?php
include('layout_member/footer.php');
?>
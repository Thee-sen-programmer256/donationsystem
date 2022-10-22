<?php
$con = mysqli_connect("localhost","root","","donation_procurement");



if(isset($_GET['input'])){
    $input = $_GET['input'];

    $query = "SELECT * FROM notifications WHERE notifications_name LIKE '$input%' Or message LIKE '$input%' Or status LIKE '$input%' ";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)>0){?>

        <table border="1" class="table table-bordered table-striped mt-4" style="background-color: black; text-align:center; width: 100%; border-color:black;">
            <thead>
                <tr style="background-color: black; color:white;">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Status</th>  

                </tr>
            </thead>

            <tbody>
            <?php
                while ( $row=mysqli_fetch_assoc($result)) {

                    ?>
                        <tr>
                            <td><?php echo $row['n_id'];  ?></td>
                            <td><?php echo $row['notifications_name'];  ?></td>

                             <td><?php echo $row['message'];  ?></td>
                             <td><?php echo $row['status'];  ?></td>
                        </tr>
                    <?php } ?>
            </tbody>


        </table>

        <?php

    }else{
        echo "<h6 class = 'text-danger text-center mt-3'>No data Found</h6>";
    }
}
?>
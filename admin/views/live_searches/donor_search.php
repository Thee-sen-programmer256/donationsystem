<?php
$con = mysqli_connect("localhost","root","","donation_procurement");



if(isset($_GET['input'])){
    $input = $_GET['input'];

    $query = "SELECT * FROM donor WHERE fname LIKE '$input%' Or email LIKE '$input%' Or bloodgroup Or bloodgroupstatus LIKE '$input%' or gender LIKE '$input%' ";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)>0){?>

        <table border="1" class="table table-bordered table-striped mt-4" style="background-color: black; text-align:center; width: 100%; border-color:black;">
            <thead>
                <tr style="background-color: black; color:white;">
                <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Blood group</th>
                            <th>Blood group status</th>
                            <th>Image</th>
                            <th>Gender</th>
                            <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <?php
                while ( $row=mysqli_fetch_assoc($result)) {

                    ?>
                        <tr>
                        <td><?php echo $row['donorId'];  ?></td>
                             <td><?php echo $row['fname'];  ?></td>
                             <td><?php echo $row['email'];  ?></td>
                             <td><?php echo $row['bloodgroup'];  ?></td>
                             <td><?php echo $row['bloodgroupstatus'];  ?></td>
                             <td><img src="../../images/<?php echo $row['image'];  ?>" style="width:40px; height:40px; border-radius:8px;" alt=""></td>
                            <td><?php echo $row['gender'];  ?></td>
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
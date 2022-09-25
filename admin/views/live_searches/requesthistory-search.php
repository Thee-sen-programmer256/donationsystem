<?php
$con = mysqli_connect("localhost","root","","donation_procurement");



if(isset($_GET['input'])){
    $input = $_GET['input'];

    $query = "SELECT * FROM request WHERE status = 'Approved' and status ='Rejected' Or organname LIKE '$input%' Or bloodgroup LIKE '$input%' Or statuss LIKE '$input%' Or date_added LIKE '$input%' ";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)>0){?>

        <table border="1" class="table table-bordered table-striped mt-4" style="background-color: black; text-alignment:center; width: 100%; border-color:black;">
            <thead>
                <tr style="background-color: black; color:white;">
                            <th>ID</th>
                            <th>Patient Name</th>
                            <th>Age </th>
                            <th>Organ Requested</th>
                            <th>Blood Group</th>
                            <th>Request Date</th>
                            <th>Status</th>

                </tr>
            </thead>

            <tbody>
            <?php
                while ( $row=mysqli_fetch_assoc($result)) {

                    ?>
                        <tr>
                            <td><?php echo $row['requestId'];  ?></td>
                             <td><?php echo $row['full_name'];  ?></td>
                             <td><?php echo $row['age'];  ?></td>
                             <td><?php echo $row['organ'];  ?></td>
                             <td><?php echo $row['blood_group'];  ?></td>
                             <td><?php echo $row['date_request'];  ?></td>
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
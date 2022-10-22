<?php
$con = mysqli_connect("localhost","root","","donation_procurement");



if(isset($_GET['input'])){
    $input = $_GET['input'];

    $query = "SELECT * FROM organ WHERE organname LIKE '$input%' Or bloodgroup LIKE '$input%' Or statuss LIKE '$input%' Or date_added LIKE '$input%' ";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)>0){?>

        <table border="1" class="table table-bordered table-striped mt-4" style="background-color: black; text-align:center; width: 100%; border-color:black;">
            <thead>
                <tr style="background-color: black; color:white;">
                <th>ID</th>
                            <th>Organ </th>
                            <th>Blood Group </th>
                            <th>Donor</th>
                            <th>Date Added</th>
                            <th>Status</th>

                </tr>
            </thead>

            <tbody>
            <?php
                while ( $row=mysqli_fetch_assoc($result)) {

                    ?>
                        <tr>
                        <td><?php echo $row['organId'];  ?></td>
                             <td><?php echo $row['organname'];  ?></td>
                             <td><?php echo $row['bloodgroup'];  ?></td>
                             <td><?php echo $row['donor'];  ?></td>
                             <td><?php echo $row['date_added'];  ?></td>
                             <td><?php echo $row['statuss'];  ?></td>
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
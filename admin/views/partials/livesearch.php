<?php

$con = mysqli_connect("localhost","root","","donation_procurement");

if(isset($_GET['input'])){
    $input = $_GET['input'];

    $query = "SELECT * FROM donation WHERE fname LIKE '$input%'OR lname LIKE '$input%'  ";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)>0){?>

        <table border="1" class="table table-bordered table-striped mt-4" style="background-color: black; text-alignment:center; width: 100%; border-color:black;">
            <thead>
                <tr style="background-color: black; color:white;">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Contact</th>
                    <th>Amount</th>
                    <th>Display</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
            <?php
                while ( $row=mysqli_fetch_assoc($result)) {

                    ?>
                        <tr>
                            <td><?php echo $row['donationId'];  ?></td>
                             <td><?php echo $row['fname'];  ?></td>
                             <td><?php echo $row['lname'];  ?></td>
                             <td><?php echo $row['contact'];  ?></td>
                             <td><?php echo $row['amount'];  ?></td>
                            <td><?php echo $row['display'];  ?></td>
                            <td><?php echo $row['email'];  ?></td>
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
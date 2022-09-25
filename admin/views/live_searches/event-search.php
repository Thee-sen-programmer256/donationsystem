<?php
$con = mysqli_connect("localhost","root","","donation_procurement");



if(isset($_GET['input'])){
    $input = $_GET['input'];

    $query = "SELECT * FROM schedule WHERE title LIKE '$input%' Or she_description LIKE '$input%' ";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)>0){?>

        <table border="1" class="table table-bordered table-striped mt-4" style="background-color: black; text-alignment:center; width: 100%; border-color:black;">
            <thead>
                <tr style="background-color: black; color:white;">
                    <th>ID</th>
                    <th>Event</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End date</th>
                </tr>
            </thead>

            <tbody>
            <?php
                while ( $row=mysqli_fetch_assoc($result)) {

                    ?>
                        <tr>
                            <td><?php echo $row['id'];  ?></td>
                            <td><?php echo $row['title'];  ?></td>
                             <td><?php echo $row['she_description'];  ?></td>
                             <td><?php echo $row['start_datetime'];  ?></td>
                             <td><?php echo $row['end_datetime'];  ?></td>
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
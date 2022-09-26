<?php

$con = mysqli_connect("localhost","root","","donation_procurement");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#live_search').keyup(function(){
                $("#searchresult").show();

                var input = $(this).val();
                //alert(input)

                if(input != ''){
                    $.ajax({
                        url:"livesearch.php",
                        method:"GET",
                        data:{input:input},

                        success:function(data){
                            $('#searchresult').html(data);
                        }
                    });
                }else{
                    $('#searchresult').css("display","none");
                }
            });
        });
</script>
    <title>Document</title>
    
</head>
<body>
    <div>
        <h1>Search</h1>
        <input type="search" placeholder="search here" id="live_search">
        <div id="searchresult"></div>
    </div>
    
    
</body>
</html>
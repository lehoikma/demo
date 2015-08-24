<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>List user</title>
    <style>
        .table{width: 700px; margin: auto;}
        .table tr td{border: 1px solid;}
        .table{}
    </style>

</head>
<body>

<div class='wrapper'>
            <h2 class="text-center">Bang cham công tháng:<?php echo date('m');?> </h2>
            <table class="table">
                <tr>
                    <td style="text-align: center">Ngay</td>
                    <td>Thoi gian online</td>
                    <td>Thoi gian thoat</td>
                    <td>Luong </td>
                </tr>
                 <?php
                $Y=date('Y');
                $m=date('m');
                $number = cal_days_in_month(CAL_GREGORIAN, $m, $Y);
                $arraytam = array();
                for($i=1;$i<$number;$i++){
                    $key=array_search($i,$so1,false);
                    if($key!==false){
                        $time_default=strtotime('15:00:00');
                        $time=strtotime($so2[$key]['time_star']);
                        $luong="";
                        $tt=$time_default-$time;
                        if($tt>300){
                            $luong=80;
                        }else{
                            $luong=100;
                            //return $luong;
                        }
                        echo " <tr>";
                        echo "<td style='text-align: center'>$i</td>";
                        echo "<td>".$so2[$key]['time_star']."</td>";
                        echo "<td>".$so2[$key]['time_out']."</td>";
                        echo "<td>$luong</td>";
                        echo "</tr>";

                    }else{
                        echo " <tr>";
                        echo "<td style='text-align: center'>$i</td>";
                        echo "<td></td>";
                        echo "<td><a href=''></a></td>";
                        echo "<td><a href=''></a></td>";
                        echo "</tr>";
                    }
                }
                ?>
</div>
</body>
</html>
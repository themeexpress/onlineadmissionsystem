<?php

include "../lib/Session.php";
Session::checkSession();
include "../lib/Database.php";
include "../lib/format.php";

$db = new Database();
$fm = new Format();
//echo $db->conect();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="css/bootstrap-theme.min.css">
       <script src="js/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
       
        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
    </head>
    <body style="background-image:url('img/inbg.jpg');">
      <form id="admincard" action="admincard.php" method="post">
          
                      <div class="container text-center">
                      	<h1 style="margin: 30px">Final Admission Result</h1>
                      	<hr>
                      	 <table id="example" class="table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>SSC Roll</th>
                            <th>SSC CGPA </th>
                            <th>HSC Roll</th>
                            <th>HSC GCPA</th>
                            <th>TOAL MARK</th>
                        </tr>
                    </thead>
                    <?php 

                          //All Student Query
                        $query="SELECT application1.name,application1.mark, application1.date_of_birth,ssc.ssc_roll,ssc.ssc_cgpa,hsc.hsc_roll,hsc.hsc_cgpa FROM application1, ssc, hsc WHERE application1.user_id= ssc.user_id AND application1.user_id=hsc.user_id";
                        $result= $db->select($query);
                       while ($row=$result->fetch_assoc()) {
                       			$mark=$row['mark'];

                                $ssc_cgpa=$row['ssc_cgpa'];

                                if($ssc_cgpa==5){
                                	$sscmark=40*.80;
                                }elseif($ssc_cgpa>=4 ||	$ssc_cgpa<=5){
                                	$sscmark=40*.70;
                                } 
                                elseif($ssc_cgpa>=3.5||	$ssc_cgpa<=4){
                                	$sscmark=40*.60;
                                } 
                                elseif($ssc_cgpa>=3|| $ssc_cgpa<=3.5){
                                	$sscmark=40*.50;
                                }
                                elseif($ssc_cgpa>=3||$ssc_cgpa<=3.5){
                                	$sscmark=40*.40;
                                }
                                else  {
                                	$sscmark=0;
                                }
                                ////////////////hssc
                                $hsc_cgpa=$row['hsc_cgpa'];
                                if($hsc_cgpa==5){
                                	$hscmark=60*.80;
                                }elseif($hsc_cgpa>=4 ||	$hsc_cgpa<=5){
                                	$hscmark=60*.70;
                                } 
                                elseif($hsc_cgpa>=3.5||	$hsc_cgpa<=4){
                                	$hscmark=60*.60;
                                } 
                                elseif($hsc_cgpa>=3|| $hsc_cgpa<=3.5){
                                	$hscmark=60*.50;
                                }
                                elseif($hsc_cgpa>=3||$hsc_cgpa<=3.5){
                                	$hscmark=60*.40;
                                }
                                else  {
                                	$sscmark=0;
                                }
                                $totalmark=$sscmark+$sscmark+$mark;                               


                        ?>
                        <tbody>
                        <tr>
                            <td style="text-transform:capitalize;"><?php echo $row['name'];?></td>
                            <td><?php echo $fm->formatdate($row['date_of_birth']);?></td>
                            <td><?php echo $row['ssc_roll'];?></td>
                            <td><?php echo $row['ssc_cgpa'];?></td>
                            <td><?php echo $row['hsc_roll']; ?></td>
                            <td><?php echo $row['hsc_cgpa']; ?></td>
                            <td><?php echo $totalmark; ?></td>
                        </tr>
                        </tbody>
                        <?php } ?>
                        
                    </table>
                     <input type="button" id="print" style="margin-top: 30px;" class="toggle btn btn-primary" value="Print Admit Card" onclick="printpage();"></center>

                      </div>
      
       
      </form>
    </body>
</html>


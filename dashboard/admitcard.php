<?php

include "../lib/Session.php";
Session::checkSession();
include "../lib/Database.php";
include "../lib/format.php";

$db = new Database();
$fm = new Format();
//echo $db->conect();
$userID=Session::get('userId');
$query="SELECT application1.name,images.profile_pic,images.signature FROM application1,images WHERE application1.user_id=images.user_id AND application1.user_id='$userID'";
$result=$db->select($query);
while($row = mysqli_fetch_array($result)) {
$stname= $row['name'];
$pic=$row['profile_pic'];
$signature=$row['signature'];
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
            
          <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                
                <tr>
                 <td style="width:3%;text-align: center;"><img src="img/logo.png" width="50%" style="margin-top: 60px;"> </td>
                 <td style="width:8%;"><center><font style="font-family:Arial Black; font-size:20px;">BANGLADESH UNIVERSITY OF BUSINESS AND TECHNOLOGY (BUBT) </font></center>
                
                <center><font style="font-family:Verdana; font-size:18px;">
                  Phone: 01967169189, 01680050630 <br/>Email: info@bubt.edu.bd
                    </font></center>                
                <hr>              
                <center><font style="font-family:Arial Black; font-size:20px;">
                  BUBT ADMIT CARD (2017-18)</font></center>
                </td>
                    <td colspan="2" width="3%" >
                        <img style="height:150px; width: 220px;" src="<?php echo $pic;?>" ><br/>
                        <img style="height:50px; width: 220px;" src="<?php echo $signature;?>">
                    </td>
                 </tr>       
                 
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Date</font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                        10th March 2018, Afternoon Session</font> </td>
                 </tr>
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Time </font> </td>
                    <td style="width:8%;" colspan="3"> <font style="font-family: Verdana; font-weight: bold">
                        2:00 PM - 4:00 PM </font></td>
                 </tr>
                 
                <tr>
                    <td> <font style="font-family: Verdana;">Registration No. </font> </td>
                    <td colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo mt_rand(1000,10000);//$id ?></font> </td>
                </tr>
                
                <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Name  </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stname;?></font> </td>
                 </tr>
                 
                 <tr>
                     <td style="width:4%;"> <font style="font-family: Verdana;">Exam Center  </font> </td>
                    <td style="width:8%;" colspan="3">
                       <font style="font-family: Verdana; font-weight: bold"> BANGLADESH UNIVERSITY OF BUSINESS AND TECHNOLOGY (BUBT)<br>
                        At - Permanent Campus<br>
                        Rupnagar, Mirpur-2 <br>
                        Dhaka -1216<br>                       
                        Phone: 01967169189<br>
                        </font>
                    </td>
                 </tr>
                <?php
                }
                ?>
                 
                    </table>
                </div>
             </div>
          </div>
          
          <center><font style="font-family: Verdana; font-weight: bold; font-size: 20px;"> Instructions to the Candidate</font></center><br>
          <font style="font-family: Verdana;  font-size: 13px;"> 
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                1. This Admit Card must be presented for verification at the time of examination, along with at least one
                   original(not photocopied or scanned copy) and valid (not expired) photo identification card
                   (e.g : Voter ID, Passport).
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                2. This Admit Card is valid only if the candidate's photograph and signature images are <b> legibly printed</b>.
                   Print this on an A4 sized paper using a laser printer preferably a color photo printer.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                3. Candidates should occupy their alloted seats <b><span style="color:red">25 minutes before</span></b> the scheduled start of the examination.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                4. Candidates will not be allowed to enter the examination hall <b><span style="color:red">30 minutes</span></b>
                after the commencement of the examination.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                5. Mobile phones or any other Electronic gadgets are <b><span style="color:red">NOT ALLOWED</span></b> inside the examination hall. There may not be any
                facility for the safe-keeping of your gadget outside the hall, so it may be easier to leave it at your residence.
            </p>
            
          </font>
          
          <center><input type="button" id="print" class="toggle btn btn-primary" value="Print Admit Card" onclick="printpage();"></center>
      </form>
    </body>
</html>


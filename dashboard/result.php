<?php include "inc/header.php" ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Admin Dashbord</h2>
                <div class="block">
                <h3 class="text-center" style="color:green;"> All Applicants Here</h3> 
                <hr>


                   <div class="container">
                       <div class="row">
                        <div class="col-md-10">
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
                    </div>

                           
                       </div>
                   </div>          
                        
                </div>
               
                
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
   <?php include "inc/footer.php";?>



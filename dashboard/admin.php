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
                            <th>Gender</th>
                            <th>Application Date</th>
                            <th>OMR Mark</th>
                            <th>Approve</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <?php 

                            //All Student Query
                        $query="SELECT * FROM application1";
                        $result= $db->select($query);
                       while ($row=$result->fetch_assoc()) {
                                                                           
                        ?>
                        <tbody>
                        <tr>
                            <td style="text-transform:capitalize;"><?php echo $row['name'];?></td>
                            <td><?php echo $fm->formatdate($row['date_of_birth']);?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['app_date'];?></td>
                            <td>
                            <a href="enteromrmark.php?regid=<?php echo $row['reg_id']; ?>">OMR Mark</a>
                            </td>
                            <td>
                            <a href="approvestudent.php?id=<?php echo $row['reg_id']; ?>">Approve</span></a>
                            </td>
                            <td>
                            <a href="deletestudent.php?id=<?php echo $row['user_id']; ?>">Delete</span></a>
                            </td>
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
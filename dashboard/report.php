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
                        	<table class="table-bordered">
                        		<tr>
	                        		<th>Total Student</th>
	                        		<th>CSE</th>
	                        		<th>EEE</th>
	                        		<th>Mechanical</th>
	                        		<th>Civil</th>
	                        		<th>Textile</th>
	                        		<th>Details</th>
                        		</tr>
                        		<?php 
                        		$query1="SELECT count(reg_id) as total  from application1";
                        		$totalstu=$db->select($query1);                        		
                        		$totals=$totalstu->fetch_assoc();
                        		//cse
                        		$query="SELECT count(first_choice) as cse  from application1
                        		WHERE first_choice='cse'";
                        		$totalcse=$db->select($query);                        		
                        		$totall=$totalcse->fetch_assoc();
                        		//EEE
                        		$query2="SELECT count(first_choice) as EEE from application1
                        		WHERE first_choice='eee'";
                        		$totaleee=$db->select($query2);                        		
                        		$total=$totaleee->fetch_assoc();
                        		//Mechanical
                        		$query3="SELECT count(first_choice) as Mechanical from application1
                        		WHERE first_choice='Mechanical'";
                        		$mtotal=$db->select($query3);                        		
                        		$totalm=$mtotal->fetch_assoc();
                        		//Civil
                        		$query4="SELECT count(first_choice) as Civil from application1
                        		WHERE first_choice='Civil'";
                        		$Civil=$db->select($query4);                        		
                        		$totalCivil=$Civil->fetch_assoc();
                        		//Civil
                        		$query5="SELECT count(first_choice) as Textile from application1
                        		WHERE first_choice='Textile'";
                        		$Textile=$db->select($query5);                        		
                        		$totalTextile=$Textile->fetch_assoc();

                        		?>

                        		<tr>
                        			<td><?php echo $totals['total'];?></td>
                        			<td><?php echo $totall['cse'];?></td>
                        			<td><?php echo $total['EEE'];?></td>
                        			<td><?php echo $totalm['Mechanical'];?></td>
                        			<td><?php echo $totalCivil['Civil'];?></td>
                        			<td><?php echo $totalTextile['Textile'];?></td>
                        			<td></td>                        			
                        		</tr>
                        		
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



?>

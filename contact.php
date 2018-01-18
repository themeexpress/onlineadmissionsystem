
<?php include('header.php');?>
  </div>
  <div class="container">   
      <!-- Carousel
    ================================================== -->  
    
  </div>
  <div class="content_area"><!--content container area-->
   <div class="container">
    <div class="col-md-8" style="margin-bottom: 30px">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h2 style="margin-bottom: 25px;" class="text-center">Contact With Us</h2>
                    <hr>
            <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>
</div>
<div class="col-md-4">
  <h2 style="margin-bottom: 25px;margin-top:39px;" class="text-center">Physical Address</h2>
                    <hr>
  <div class="text-center" style="margin-top:20px; margin-bottom: 20px;">
    <img src="img/address.png" height="100px" width="100px">
    <h5>Mirpur, Dhaka- 1215, Bangladesh</h5>
    <button class="button button-primary">Read More</button>
  </div>
  <div class="text-center">
    <img src="img/email.png"  height="100px" width="100px">
    <h5>Support@gmail.com</h5>
    <h5>admin@institute.com</h5>
    <button class="button button-primary">Read More</button>
  </div>
  
</div>
</div>
  </div><!--content container area-->
  
 <?php include('footer.php');?>
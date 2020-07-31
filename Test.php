<?php include ("header.php"); ?>

       <div class="container" style="margin-top: 70px;width: 1160px;">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                 <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#337ab7;color:#fff;"><strong>QUESTIONAIRE</strong></div>
                        <div class="panel-body">
                   <h4 style="text-align: center;"><u>Answer all questions as they apply to you</u></h4>
                        <form action="#"  method="post" class="form-horizonal">
                                          <div class="row space">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                  <label>What Is Your Full Name? *</label>
                                                  <input class="form-control" type="text" name="name"  placeholder="Enter Full Name" required>
                                                </div>
                                            </div>
                                          </div><br>


                                          <div class="row space">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                  <label>E-Mail *</label>
                                                  <input class="form-control" type="text" name="email" placeholder="Enter your E-mail" required>
                                                </div>
                                                <div class="col-md-6">
                                                  <label>How Old Are You? *</label>
                                                  <input class="form-control" type="text" name="age" placeholder="Enter Age" required>
                                                </div>
                                                 </div>
                                          </div><br>

                                                <div class="row space">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                  <label>What Is Your Favourite Hobby? *</label>
                                                  <input class="form-control" type="text" name="hobby" placeholder="Enter Favourite Hobby" required>
                                                </div>
                                                <div class="col-md-6">
                                                  <label>Phone Number *</label>
                                                  <input class="form-control" type="text" name="phone" placeholder="Enter your Phone Number" required>
                                                </div>
                                            </div>
                                          </div><br>
                      
                      
                                          <div class="row space">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                  <label>What would you like to become? *</label>
                                                  <input class="form-control" type="text" name="career" placeholder="Career" required>
                                                </div>
                                                <div class="col-md-6">
                                                  <label>Who is your role model (favorite personality)? *</label>
                                                  <input class="form-control" type="text" name="role_model" placeholder="Enter Role Model" required>
                                                </div>
                                            </div>
                                          </div><br>

                                         <div class="row space">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                  <label>What work/business does your role model do? *</label>
                                                  <input class="form-control" type="text" name="business_role_model" placeholder="Business Of Role Model" required>
                                                </div>
                                                <div class="col-md-6">
                                                  <label>What work do you do asides school? *</label>
                                                  <input class="form-control" type="text" name="work_aside_school" placeholder="work" required>
                                                </div>
                                            </div>
                                          </div><br>
                      
                      
                                         <div class="row space">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                  <label>What do you love the most about your work? *</label>
                                                  <input class="form-control" type="text" name="passion_of_work" placeholder="what do you love most" required>
                                                </div>
                                                <div class="col-md-6">
                                                  <label>What do you do when you’re bored? *</label>
                                                  <input class="form-control" type="text" name="what_do_you_when_bored" placeholder="what do you do when bored" required>
                                                </div>
                                            </div>
                                          </div><br>
                                          
                                          <div class="ln_solid"></div>
                                              <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                  <button type="submit" class="btn btn-primary">Cancel</button>
                                                  <input type="submit" name="submit" class="btn btn-success" value="Next">
                                                </div>
                                              </div>
                    
                                      <?php
                                                if (isset($_POST['submit']))
                                                  {    
                                                  include 'db.php';
                                                  
                                                          $userid=$_SESSION['id'] ;
                                                          $name=$_POST['name'] ;
                                                          $email= $_POST['email'] ;         
                                                          $age=$_POST['age'] ;
                                                          $hobby=$_POST['hobby'] ;
                                                          $phone=$_POST['phone'] ;
                                                          $career=$_POST['career'] ;
                                                          $role_model=$_POST['role_model'] ;
                                                          $business_role_model=$_POST['business_role_model'] ;
                                                          $work_aside_school=$_POST['work_aside_school'] ;
                                                          $passion_of_work=$_POST['passion_of_work'] ;
                                                          $what_do_you_when_bored=$_POST['what_do_you_when_bored'] ;
                                                                        
                                                     mysql_query("INSERT INTO `biodata`(userid,name,email,age,hobby,phone,career,role_model,business_role_model,work_aside_school,passion_of_work,what_do_you_when_bored) 
                                                     VALUES ('$userid','$name','$email','$age','$hobby','$phone','$career','$role_model','$business_role_model','$work_aside_school','$passion_of_work','$what_do_you_when_bored')"); 
                                                         
                                                         header("location: Test1");
                                                          }
                                                         

                                                ?>


                                    </form>

                </div>
                <div class="col-md-1">
                </div>

                </div>
                </div>
                </div>
                </div>

                        </div>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>


                    

  </body>
</html>
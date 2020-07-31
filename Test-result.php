
<?php include ("header.php"); ?>

       <div class="container" style="margin-top: 70px;width:900px;">
<div align="center" >
   <img src="img/logo1.jpg"  width="220px" >
   </div>
        <div class="row">
               
                <div class="col-md-12">
                 <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#337ab7;color:#fff;"><strong>BIO DATA</strong></div>
                        <div class="panel-body">
                               <?php
                                    require("db.php");
                                    $userid =$_SESSION['id'];
                                    $result = mysql_query("SELECT * FROM  biodata  WHERE userid  ='$_SESSION[id]'");
                                    $test = mysql_fetch_array($result);
                                    mysql_close($conn);
                                    ?>

                                <table class="table" border="1">
                                <thead>
                                <tr  >
                                    <td><strong>NAME:</strong> <?php echo $test['name']; ?> </td>
                              
                                    <td><strong>AGE:</strong> <?php echo $test['age']; ?> </td>
                                </tr>
                                <tr>
                                    <td><strong>EMAIL ADDRESS:</strong> <?php echo $test['email']; ?></td>
                               
                                    <td><strong>PHONE NUMBER:</strong> <?php echo $test['phone']; ?> </td>
                                </tr>
                                <tr>
                                    <td><strong>DESIRED CAREER:</strong> <?php echo $test['career']; ?></td>
                                
                                    <td><strong>WHAT DO YOU DO WHEN BORED:</strong> <?php echo $test['what_do_you_when_bored']; ?> </td>
                                </tr>
                                    </thead>
                                </table>

                            
                              
                                    </div>
                                    </div>
                                  
                                    </div>

                </div>

            <div class="row">
                
                <div class="col-md-12">
                 <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#337ab7;color:#fff;"><strong>RESULT</strong></div>
                        <div class="panel-body">
                               <p style="font-size: 14px;text-align: justify;line-height: 25px;">Good day. I believe you enjoyed your test, Below are your results.
                               <strong>KINDLY MAKE GOOD USE OF IT, STUDY IT & TAKE ALONG TO CAMP.</strong>
                               </p><br>
                                
                                          <table class="table" border="1" style="font-size: 17px;">
                                      <thead>
                                        
                                        <th style="text-align:center;">FIELD/CAREER</th>
                                        <th style="text-align:center;">SUGGESTION</th>
                                      </thead>
                                     <tbody>
                                     <?php
                                    require("db.php");
                                    $userid =$_SESSION['id'];
                                    $result = mysql_query("SELECT * FROM  question  WHERE userid  ='$_SESSION[id]'");
                                    $ques = mysql_fetch_array($result);
                                    mysql_close($conn);
                                    ?>
                                    <?php $q1=$ques['q1'];
                                                                                 
                                                                                  if ($q1 == "1") {
                                                                                   echo "<tr>
                                       
                                        <td>Computer Engineer</td>
                                        <td>Study more on physics, computer maintenance & hardware programming</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>

                                    <?php $q2=$ques['q2'];
                                                                                 
                                                                                  if ($q2 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Food Nutritionist/Technologist/caterer</td>
                                        <td>Study and practice more about how to make various world dishes including their health value</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>
                                  
                                  <?php $q3=$ques['q3'];
                                                                                 
                                                                                  if ($q3 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Health Care/Care giver</td>
                                        <td>Focus on health care, learn health management tips and take courses in it.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>

                                  <?php $q4=$ques['q4'];
                                                                                 
                                                                                  if ($q4 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Authors/Script-writer/Editor</td>
                                        <td>Study more books, learn and practice critical reasoning and writing</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>


                                  <?php $q5=$ques['q5'];
                                                                                 
                                                                                  if ($q4 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Statistician/Mathematician/Accountant</td>
                                        <td>Train your natural mind to be more calculative, watch trends& study more</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>                                       
                    
                                     
                                  <?php $q6=$ques['q6'];
                                                                                 
                                                                                  if ($q6 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Chemical Engineer/Chemist/pharmacy</td>
                                        <td>Learn more about chemicals, study body chemistry(organic and inorganic),take courses and volunteering jobs</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>


                                  <?php $q7=$ques['q7'];
                                                                                 
                                                                                  if ($q7 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Lawyer/corps member/judge/crime analyst</td>
                                        <td>Study history, laws, rights, governments, criminal intelligence, social intelligence, emotional intelligence& human psychology.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q8=$ques['q8'];
                                                                                 
                                                                                  if ($q8 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Social Scientist/Sociology/Psychology</td>
                                        <td>Study people& practice critical reasoning</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q9=$ques['q9'];
                                                                                 
                                                                                  if ($q9 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Fashion Designer/ Interior decorator/make-up</td>
                                        <td>Study colors critically, Study fashion trends, Study social & human psychology</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q10=$ques['q10'];
                                                                                 
                                                                                  if ($q10 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Coach/speaker/trainer</td>
                                        <td>Study wide and learn more</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q11=$ques['q11'];
                                                                                 
                                                                                  if ($q11 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Programmer/Computer Scientist</td>
                                        <td>Study various programming languages as the upgrade, study logic & computational analysis</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q12=$ques['q12'];
                                                                                 
                                                                                  if ($q12 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Biologist/Forester/Plant geography</td>
                                        <td>Study more on the biology of humans, plants animals& environment</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q13=$ques['q13'];
                                                                                 
                                                                                  if ($q13 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Entrepreneurship/Trainer</td>
                                        <td>Read wide, get volunteering jobs/experiences, get organizational skills, study executive intelligence& the human mind</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q14=$ques['q14'];
                                                                                 
                                                                                  if ($q14 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Coach/speaker/trainer</td>
                                        <td>Read wide, get volunteering jobs/experiences, get organizational skills, study executive intelligence& the human mind</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q15=$ques['q15'];
                                                                                 
                                                                                  if ($q15 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Health Care/Care giver</td>
                                        <td>Focus on health care, learn health management tips and take courses in it.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q16=$ques['q16'];
                                                                                 
                                                                                  if ($q16 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Researcher/Administrator/Journalist</td>
                                        <td>Study wide and learn more, keep as much information as possible</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q17=$ques['q17'];
                                                                                 
                                                                                  if ($q17 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Security expert & humanitarian work/NGOs</td>
                                        <td>Study history, laws, rights, governments, criminal intelligence, social intelligence, emotional intelligence& human psychology.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q18=$ques['q18'];
                                                                                 
                                                                                  if ($q18 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Politician/Reporter/Journalist</td>
                                        <td>Study wide and learn more, keep as much information as possible</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q19=$ques['q19'];
                                                                                 
                                                                                  if ($q19 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Artistry/Musician/Acting/Dancing</td>
                                        <td>Learn about every new wave of arts and specialize in one</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q20=$ques['q20'];
                                                                                 
                                                                                  if ($q20 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Human physiologist/trainer</td>
                                        <td>Study human physiology &human relations</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q21=$ques['q21'];
                                                                                 
                                                                                  if ($q21 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Engineer (software/hardware)</td>
                                        <td>Keep details, dimensions, study the most recent wave of hardware/software in the exact area of engineering you want.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q22=$ques['q22'];
                                                                                 
                                                                                  if ($q22 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Coach/consultant/Human Relations</td>
                                        <td>Same as 13 but study human relations& social intelligence</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q23=$ques['q23'];
                                                                                 
                                                                                  if ($q23 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Trainer/Teacher/Educationist</td>
                                        <td>Same as 10,stop memorizing, study to understand, practice all you teach, keep details</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q24=$ques['q24'];
                                                                                 
                                                                                  if ($q24 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Health Care/Care giver</td>
                                        <td>Focus on health care, learn health management tips and take courses in it.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q25=$ques['q25'];
                                                                                 
                                                                                  if ($q25 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Public Speaker/Journalism</td>
                                        <td>Study wide and learn more, keep as much information as possible</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q26=$ques['q26'];
                                                                                 
                                                                                  if ($q26 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Geography/weather analyst/Tourism</td>
                                        <td>Study maps, geography, weather, tourism, human relations</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q27=$ques['q27'];
                                                                                 
                                                                                  if ($q27 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Health Care/emergency worker</td>
                                        <td>Focus on health care, learn health management tips and take courses in it.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  

                                  <?php $q28=$ques['q28'];
                                                                                 
                                                                                  if ($q28 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Sociologist/philosopher</td>
                                        <td>Study social & human psychology</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q29=$ques['q29'];
                                                                                 
                                                                                  if ($q29 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Musician/sound engineer/Director</td>
                                        <td>Study and practice various sounds, train your voice, Get leadership skills</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q30=$ques['q30'];
                                                                                 
                                                                                  if ($q30 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Games creator/comedian/performer</td>
                                        <td>Study social & human psychology</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q31=$ques['q31'];
                                                                                 
                                                                                  if ($q31 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Programmer/web-developer/designer</td>
                                        <td>Study various programming languages as the upgrade, study logic & computational analysis</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q32=$ques['q32'];
                                                                                 
                                                                                  if ($q32 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Caterer</td>
                                        <td>Study and practice more about how to make various world dishes including their health value</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q33=$ques['q33'];
                                                                                 
                                                                                  if ($q33 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Trainer/Coach /Human Relations/recruiter</td>
                                        <td>Read wide, get volunteering jobs/experiences, get organizational skills, study executive intelligence& the human mind</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q34=$ques['q34'];
                                                                                 
                                                                                  if ($q34 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Coach/speaker/trainer</td>
                                        <td>Study wide and learn more</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q35=$ques['q35'];
                                                                                 
                                                                                  if ($q35 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Health Care</td>
                                        <td>Focus on health care, learn health management tips and take courses in it.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q36=$ques['q36'];
                                                                                 
                                                                                  if ($q36 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Editor/consultant/librarian</td>
                                        <td>Study people& practice critical reasoning ,Study wide and learn more, take courses and volunteering jobs</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q37=$ques['q37'];
                                                                                 
                                                                                  if ($q37 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Financial analyst/statistician/Data analyst</td>
                                        <td>Train your natural mind to be more calculative, watch trends& study more</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q38=$ques['q38'];
                                                                                 
                                                                                  if ($q38 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Geology/forestry</td>
                                        <td>Study maps, geography, weather, tourism, human relations, Study more on the biology of humans, plants animals& environment</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q39=$ques['q39'];
                                                                                 
                                                                                  if ($q39 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Lawyer/corps member/judge/crime analyst</td>
                                        <td>Study history, laws, rights, governments, criminal intelligence, social intelligence, emotional intelligence& human psychology.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q40=$ques['q40'];
                                                                                 
                                                                                  if ($q40 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Public Speaker/Journalism/Tourism/Researcher</td>
                                        <td>Study wide and learn more, keep as much information as possible, Study maps.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q41=$ques['q41'];
                                                                                 
                                                                                  if ($q41 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Theater arts/Actor/Dancer</td>
                                        <td>Learn about every new wave of arts and specialize in one</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q42=$ques['q42'];
                                                                                 
                                                                                  if ($q42 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Health nutritionist / Health expert</td>
                                        <td>Focus on health care, learn health management tips and take courses in it, also learn more about injurious health habits.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q43=$ques['q43'];
                                                                                 
                                                                                  if ($q43 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Technocrat</td>
                                        <td>Watch out for every latest technology & use it to your biggest profit</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q44=$ques['q44'];
                                                                                 
                                                                                  if ($q44 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Site worker/ Researcher/social analyst</td>
                                        <td>Learn sales skills, keep details carefully wherever you go-Be open to learn</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q45=$ques['q45'];
                                                                                 
                                                                                  if ($q45 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Humanitarian worker/ Health Care</td>
                                        <td>Never let your good emotions die, Study social & human psychology</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q46=$ques['q46'];
                                                                                 
                                                                                  if ($q46 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Trainer/Coach/educationist</td>
                                        <td>Read wide, get volunteering jobs/experiences, get organizational skills, study executive intelligence& the human mind, but study human relations& social intelligence.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q47=$ques['q47'];
                                                                                 
                                                                                  if ($q47 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Technician/Builder</td>
                                        <td>Be critical about everything it until you redefine it (innovation).</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  


                                  <?php $q48=$ques['q48'];
                                                                                 
                                                                                  if ($q48 == "1") {
                                                                                   echo "<tr>
                                        
                                        <td>Financial Analyst/Strategist</td>
                                        <td>Read wide, get volunteering jobs/experiences, get organizational skills, study executive intelligence& the human mind, also study financial intelligence.</td>
                                        
                                     </tr>";
                                                                                  }else {
                                                                                   echo "";
                                                                                  }
                                                                                  ?>  

                                        
                                              </tbody>
            
                                            </table>

                             
                              
                                    </div>
                                    </div>
                                    </div>
                                    </div>

               <div class="row">
               
                <div class="col-md-12">
                 <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#337ab7;color:#fff;"><strong>SUMMARY</strong></div>
                        <div class="panel-body">
                        <p style="font-size:15px;text-align: center;"><strong>GENERAL ADVICE FOR ALL TEENAGERS</strong></p>
                               <ul style="font-size: 17px;">
                               <li>Study more books, learn and practice critical reasoning</li>
                               <li>Study wide and learn more</li>
                               <li>Study social & human psychology</li>
                               <li>Study social intelligence, emotional intelligence</li>
                               <li>Read wide, get volunteering jobs/experiences, get organizational skills</li>
                               <li>Keep details</li>
                               <li>Be creative</li>
                               <li>Be innovative</li>
                               <li>Learn &practice leadership skills</li>
                               <li>Stop memorizing, study to understand</li>
                               <li>Study financial intelligence.</li>
                               <li>Be critical about everything it until you redefine it (innovation)</li>
                               <li>The highest & best investment that you can make is in your head</li>
                               <li>The highest impact you can make is in people</li>
                               <li>The more you learn, the more you know, the better you lead</li>
                               <li>Time is constant, every other thing changes| <strong>INVEST YOUR TIME!</strong></li>
                               </ul>

                            
                              
                                    </div>
                                    </div>
                                  
                                    </div>

                </div>

                                    </div>
                                    </div>
                </div>
                <div class="col-md-1">
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
<?php include("php/valid-session.php") ?>
<!doctype html>
<html lang="en-us">
<head>
   <?php
   $title = "Repairture - Dashboard";
   include "component/meta.php";
   include "component/css.php";
   include "component/js.php";
   ?>
   <link href="css/edit-info.css" rel="stylesheet">
   <script src="js/edit-info.js"></script>
</head>

<body>
   <?php include("component/nav.php") ?>
   <div class="col-2">
      <div id="user_appt-h3" class="h3">
         <h3>Appointment Detail</h3>
      </div>
      <div id="user_appt-back-icon">
         <a href="./my-appointment.php">
            <div id="appt-back-icon"><i class="fa fa-arrow-left"></i></div>
         </a>
      </div>
      <?php
      include('php/read-booking.php');
      ?>
      <div id="user_appt-layout">
         <form name="Edit Info" method="post" action="php/update-booking.php" id="appt-layout">
            <div class="row">
               <div class="col-1">
                  <label class="appoit-info" for="" id="appt-id">Appointment ID: <?php echo $booking_ID; ?></label>
                  <label class="appoit-info" for="" id="appt-createat">Created at: <?php echo $created_at; ?></label>
                  <div id="user_appt-techinfo">
                     <h6>Technician Info</h6><br />
                  </div>
                  <div id="user_appt-row1">
                     <div id="appt-row1">
                        <div class="row">
                           <div class="col-1">
                              <div id="user_lable-first-name">
                                 <p id="user_uid0"><span class="Form-lable">First Name</span></p>
                              </div>
                              <div id="user_data-first-name">
                                 <p><span class="p-dark"><?php echo $tech_firstname; ?></span></p>
                              </div>
                           </div>
                           <div class="col-2">
                              <div id="user_lable-last-name">
                                 <p id="user_uid1"><span class="Form-lable">Last Name</span></p>
                              </div>
                              <div id="user_data-last-name">
                                 <p><span class="p-dark"><?php echo $tech_lastname; ?></span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_appt-row2">
                     <div id="appt-row2">
                        <div class="row">
                           <div class="col-1">
                              <div id="user_lable-email">
                                 <p id="user_uid2"><span class="Form-lable">Email</span></p>
                              </div>
                              <div id="user_data-email">
                                 <p><span class="p-dark"><?php echo  $tech_email ; ?></span></p>
                              </div>
                           </div>
                           <div class="col-2">
                              <div id="user_lable-phone">
                                 <p id="user_uid3"><span class="Form-lable">Phone</span></p>
                              </div>
                              <div id="user_data-phone">
                                 <p><span class="p-dark"><?php echo $tech_mobilenum; ?></span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_appt-row3">
                     <div id="appt-row3">
                        <div class="row">
                           <div class="col-1">
                              <div id="user_lable-age">
                                 <p id="user_uid4"><span class="Form-lable">Age</span></p>
                              </div>
                              <div id="user_data-age">
                                 <p><span class="p-dark"><?php echo $tech_age; ?></span></p>
                              </div>
                           </div>
                           <div class="col-2">
                              <div id="user_lable-gender">
                                 <p id="user_uid5"><span class="Form-lable">Gender</span></p>
                              </div>
                              <div id="user_data-male">
                                 <p><span class="p-dark"><?php echo $tech_gender; ?></span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr id="split-line">
                  <div id="user_appt-apptinfo">
                     <h6>Appointment Info</h6><br />
                  </div>
                  <div id="user_appt-row4">
                     <div id="appt-row4">
                        <div class="row">
                           <div class="col-1">
                              <div id="user_lable-tittle">
                                 <p id="user_uid6"><span class="Form-lable">Tittle</span></p>
                              </div>
                              <div id="user_appt-tittle">
                                 <input type="text" id="appt-tittle" name="ba-tittle" value="<?php echo  $booking_title; ?>"
                                    maxlength="50" placeholder="Your Main Problem (Max 50 letter)">
                                 <div class="invalid-feedback">Please give technician know your problem</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_appt-row5">
                     <div id="appt-row5">
                        <div class="row">
                           <div class="col-1">
                              <div id="user_lable-comment">
                                 <p id="user_uid7"><span class="Form-lable">Extra Comment</span></p>
                              </div>
                              <div id="user_appt-cmnt">
                                 <textarea name="ba-comment" id="appt-cmnt" rows="6" cols="79" spellcheck="true"
                                    placeholder="Your comment about the problem"><?php echo $booking_comment; ?></textarea>
                                 <div class="invalid-feedback">Explain more detail about your problem</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_appt-row6">
                     <div id="appt-row6">
                        <div class="row">
                           <div class="col-1">
                              <div id="user_lable-service">
                                 <p id="user_uid8"><span class="Form-lable">Service</span></p>
                              </div>
                              <div id="user_data-service">
                                 <p><span class="p-dark"><?php echo $services_name; ?></span></p>
                              </div>
                           </div>
                           <div class="col-2">
                              <div id="user_lable-datetime">
                                 <p id="user_uid9"><span class="Form-lable">Date and Time</span></p>
                              </div>
                              <div id="user_appt-date-time">
                                 <div class="input-group date" id="appt-date-time">
                                    <input type="text" class="form-control" name="ba-date-time" value="" placeholder="<?php echo $booking_date_time; ?>">
                                    <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-date"></span>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <input type="hidden" name="booking_id" value="<?php echo $booking_ID; ?>">
                  <div id="user_acc-detail-row7">
                     <div id="acc-detail-row7">
                        <div class="row">
                           <div class="col-1">
                              <input type="submit" id="btn-change" value="Change">
                           </div>
                           <div class="col-2">
                              <input type="reset" id="btn-clear" name="" value="Clear Change">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
   </div>
   </section>
   </div>
   </div>
   </div>
   </main>
   </div>
   <?php include("component/footer.php") ?>
</body>

</html>
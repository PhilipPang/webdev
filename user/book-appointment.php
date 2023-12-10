<?php include("php/valid-session.php") ?>
<!doctype html>
<html lang="en-us">
<head>
<?php
$title = "Repairture - Book Appointment";
include "component/meta.php";
include "component/css.php";
include "component/js.php";
?>
<link href="css/book-appointment.css" rel="stylesheet">
<script src="js/book-appointment.js"></script>
</head>
<body>
<?php include("component/nav.php") ?>
   <div class="col-2">
      <div id="user_appt-h3" class="h3">
         <h3>Book Appointment</h3>
      </div>
      <div id="user_appt-h6-1" class="h6">
         <h6>Fill in the appointment detail</h6>
      </div>
      <div id="user_book-appointmet">
         <form name="book_appt" method="post" action="php/create-booking.php" target="_blank" id="book-appointmet">
            <div class="row">
               <div class="col-1">
                  <div id="user_appt-row1">
                     <div id="appt-row1">
                        <div class="row">
                           <div class="col-1">
                              <label class="Form-lable" for="appt-service" id="apptlable-service">Select a
                                 service</label>
                              <div id="user_appt-service">
                                 <select name="ba-service" size="1" id="appt-service">
                                    <option selected value="Upholstery Cleaning">Upholstery Cleaning</option>
                                    <option value="Plumbing">Plumbing</option>
                                    <option value="Electrical and Wiring">Electrical and Wiring</option>
                                    <option value="Air-Conditioner">Air-Conditioner</option>
                                    <option value="Painting and Dry wall">Painting and Dry wall</option>
                                    <option value="Gardening and Landscaping">Gardening and Landscaping</option>
                                 </select>
                                 <div class="invalid-feedback">Please select a services</div>
                              </div>
                           </div>
                           <div class="col-2"> <!--https://codepen.io/kanan-mahudhia/pen/eWexzP-->
                              <label class="Form-lable" for="appt-date-time" id="apptlable-date-time">Pick a prefer date
                                 and time</label>
                              <div id="user_appt-date-time">
                                 <div class="input-group date" id="appt-date-time">
                                    <input type="text" class="form-control" name="ba-date-time" value="">
                                    <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-date"></span>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_appt-h6-2" class="h6">
                     <h6>Write some detail to technician</h6>
                  </div>
                  <div id="user_appt-row2">
                     <div id="appt-row2">
                        <div class="row">
                           <div class="col-1">
                              <label class="Form-lable" for="appt-tittle" id="apptlable-tittle">Tittle</label>
                              <div id="user_appt-tittle">
                                 <input type="text" id="appt-tittle" name="ba-tittle" value="" maxlength="50"
                                    autocomplete="off" spellcheck="false"
                                    placeholder="Your Main Problem (Max 50 letter)">
                                 <div class="invalid-feedback">Please give technician know your problem</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_appt-row3">
                     <div id="appt-row3">
                        <div class="row">
                           <div class="col-1">
                              <label class="Form-lable" for="appt-cmnt" id="apptlable-cmnt">Extra Comment</label>
                              <div id="user_appt-cmnt">
                                 <textarea name="ba-comment" id="appt-cmnt" rows="6" cols="79" spellcheck="false"
                                    placeholder="Your comment about the problem"></textarea>
                                 <div class="invalid-feedback">Explain more detail about your problem</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_appt-row4">
                     <div id="appt-row4">
                        <div class="row">
                           <div class="col-1">
                              <input type="submit" id="appt-btn-book" name="" value="Book Now">
                           </div>
                           <div class="col-2">
                              <input type="reset" id="appt-btn-reset" name="" value="Reset">
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
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
   <link href="css/dashboard.css" rel="stylesheet">
   <script>

      document.addEventListener('DOMContentLoaded', function (event) {
         var acc_city_items = ["Batu Pahat", "Johor Baharu", "Kluang", "Kota Tinggi", "Muar", "Pontian", "Segamat", "Alor Setar", "Jitra", "Kulim", "Sungai Petani", "Kota Bharu", "Jasin", "Malacca", "Jelebu", "Kuala Pilah", "Seremban", "Bentong", "Jerantut", "Kuantan", "Raub", "Ipoh", "Kampar", "Kuala Kangsar", "Sitiawan", "Taiping", "Teluk Intan", "Arau", "Kangar", "Bayan Lepas", "Butterworth", "George Town", "Penang", "Prai", "Pulau Pinang", "Kuching", "Miri", "Sibu", "Sri Aman", "Ampang", "Bangi", "Cyberjaya", "Dengkil", "Kajang", "Klang", "Petaling Jaya", "Puchong", "Selayang Jaya", "Serdang", "Shah Alam", "Subang Jaya", "Ulu Kelang", "Dungun", "Jerteh", "Kemaman", "Kuala Terengganu", "Cheras", "Kuala Lumpur", "Sentul", "Beaufort", "Kota Kinabalu", "Kudat", "Labuan", "Nabawan", "Sandakan", "Kepong", "Damansara"];
         autoComplete(document.getElementById('acc-city'), acc_city_items, 2);
      });

      $(document).ready(function () {
         $("#acc-detail").submit(function (event) {
            var isValid = $.validate.form(this);
            return isValid;
         });
         $("#acc-phone").validate(
            {
               required: false,
               bootstrap: true,
               type: 'text',
               length_min: '11',
               length_max: '11',
               color_text: '#000000',
               color_hint: '#00FF00',
               color_error: '#FF0000',
               color_border: '#808080',
               nohint: false,
               font_family: 'Poppins',
               font_size: '13px',
               position: 'topleft',
               offsetx: 0,
               offsety: 0,
               effect: 'none',
               error_text: 'Please enter a valid phone number'
            });
         $("#acc-phone").inputmask('99999999999');
         $("#acc-age").validate(
            {
               required: false,
               bootstrap: true,
               type: 'number',
               expr_min: '<',
               expr_max: '>=',
               value_min: '150',
               value_max: '65',
               color_text: '#000000',
               color_hint: '#00FF00',
               color_error: '#FF0000',
               color_border: '#808080',
               nohint: false,
               font_family: 'Poppins',
               font_size: '13px',
               position: 'topleft',
               offsetx: 0,
               offsety: 0,
               effect: 'none',
               error_text: 'Only number less than 150 and more than 64 is accepted !'
            });
         $("#acc-state").validate(
            {
               required: false,
               bootstrap: true,
               type: 'select',
               color_text: '#000000',
               color_hint: '#00FF00',
               color_error: '#FF0000',
               color_border: '#808080',
               nohint: false,
               font_family: 'Poppins',
               font_size: '13px',
               position: 'topleft',
               offsetx: 0,
               offsety: 0,
               effect: 'none',
               error_text: 'Please select an option'
            });
         $("#acc-zipcode").inputmask('99999');
         $("#acc-delete-form").submit(function (event) {
            var isValid = $.validate.form(this);
            return isValid;
         });
         $("#acc-delacc-tbox").validate(
            {
               required: true,
               bootstrap: true,
               type: 'checkbox',
               color_text: '#000000',
               color_hint: '#00FF00',
               color_error: '#FF0000',
               color_border: '#808080',
               nohint: false,
               font_family: 'Poppins',
               font_size: '13px',
               position: 'topleft',
               offsetx: 0,
               offsety: 0,
               effect: 'none',
               error_text: 'Please tick the box'
            });
         $("#acc-delacc-tbox").change(function () {
            if ($('#acc-delacc-tbox').is(':checked')) {
               $('#btn-deleteacc').prop('disabled', false);
            }
            if (!$('#acc-delacc-tbox').is(':checked')) {
               $('#btn-deleteacc').prop('disabled', true);
            }
         });
         $("#acc-delacc-tbox").trigger('change');
         $("#acc-pfpic :file").on('change', function () {
            var input = $(this).parents('.input-group').find(':text');
            input.val($(this).val());
            input.blur();
         });
         $("#acc-pfpic .form-control").validate(
            {
               required: false,
               bootstrap: true,
               type: 'custom',
               param: /([^\/\\]+)\.(jpeg|jpg|png)$/i,
               color_text: '#000000',
               color_hint: '#00FF00',
               color_error: '#FF0000',
               color_border: '#808080',
               nohint: false,
               font_family: 'Poppins',
               font_size: '13px',
               position: 'topleft',
               offsetx: 0,
               offsety: 0,
               effect: 'none',
               error_text: ''
            });
      });

   </script>
</head>

<body>
   <?php// include_once('component/preloader.php')?>
   <?php include("component/nav.php") ?>
   <div class="col-2">
      <div id="user_acc-detail">
         <form name="acc_Info_form" method="post" action="php/update-acc-info.php" enctype="multipart/form-data" id="acc-detail">
            <div class="row">
               <div class="col-1">
                  <div id="user_acc-detail-h3" class="h3">
                     <h3>Account Detail</h3>
                  </div>
                  <div id="user_acc-detail-h6" class="h6">
                     <h6>Basic Info</h6>
                  </div>
                  <div id="user_acc-detail-row1">
                     <div id="acc-detail-row1">
                        <div class="row">
                           <div class="col-1">
                              <label class="Form-lable" for="acc-first_name" id="acclable-first_name">First Name</label>
                              <input type="text" id="acc-first_name" name="acc-first_name"
                                 value="<?php echo $firstname; ?>" readonly>
                           </div>
                           <div class="col-2">
                              <label class="Form-lable" for="acc-last_name" id="acclable-last_name">Last Name</label>
                              <input type="text" id="acc-last_name" name="acc-last_name"
                                 value="<?php echo $lastname; ?>" readonly>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_acc-detail-row2">
                     <div id="acc-detail-row2">
                        <div class="row">
                           <div class="col-1">
                              <label class="Form-lable" for="acc-email" id="acclable-email">Email Address</label>
                              <input type="text" id="acc-email" name="acc-email" value="<?php echo $email; ?>" readonly>
                           </div>
                           <div class="col-2">
                              <label class="Form-lable" for="acc-gender" id="acclable-gender">Gender</label>
                              <input type="text" id="acc-gender" name="acc-email" value="<?php echo $gender; ?>"
                                 readonly>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_acc-detail-row3">
                     <div id="acc-detail-row3">
                        <div class="row">
                           <div class="col-1">
                              <label class="Form-lable" for="acc-phone" id="acclable-phone">Phone Number</label>
                              <div id="user_acc-phone">
                                 <input type="tel" id="acc-phone" name="acc-phone" value="" maxlength="11"
                                    placeholder="<?php echo $phone; ?>">
                                 <div class="invalid-feedback">Please enter a valid phone number</div>
                              </div>
                           </div>
                           <div class="col-2">
                              <label class="Form-lable" for="acc-age" id="acclable-age">Age</label>
                              <div id="user_acc-age">
                                 <input type="number" id="acc-age" name="acc-age" value="" maxlength="3"
                                    placeholder="<?php echo $age; ?>">
                                 <div class="invalid-feedback">Only number less than 150 and more than 64 is accepted !
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_acc-detail-row4">
                     <div id="acc-detail-row4">
                        <div class="row">
                           <div class="col-1">
                              <label class="Form-lable" for="acc-ic" id="acclable-ic">NRIC Number</label>
                              <input type="text" id="acc-ic" name="acc-ic" value="<?php echo $ic; ?>" readonly>
                           </div>
                           <div class="col-2">
                              <label class="Form-lable" for="acc-state" id="acclable-state">State</label>
                              <div id="user_acc-state">
                                 <select name="acc-state" size="1" id="acc-state">
                                    <option selected value="<?php echo $state; ?>">
                                       <?php echo $state; ?>
                                    </option>
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Sabah">Sabah</option>
                                    <option value="Sarawak">Sarawak</option>
                                    <option value="Selangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                                 </select>
                                 <div class="invalid-feedback">Please select an option</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_acc-detail-row5">
                     <div id="acc-detail-row5">
                        <div class="row">
                           <div class="col-1">
                              <label class="Form-lable" for="acc-city" id="acclable-city">City</label>
                              <div id="user_acc-city">
                                 <input type="text" id="acc-city" name="acc-city" value=""
                                    placeholder="<?php echo $city; ?>">
                              </div>
                           </div>
                           <div class="col-2">
                              <label class="Form-lable" for="acc-zipcode" id="acclable-zipcode">Postcode</label>
                              <input type="text" id="acc-zipcode" name="acc-zipcode" value="" maxlength="5"
                                 placeholder="<?php echo $postcode; ?>">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_acc-detail-row6">
                     <div id="acc-detail-row6">
                        <div class="row">
                           <div class="col-1">
                              <label class="Form-lable" for="acc-address" id="acclable-address">Address Line</label>
                              <input type="text" id="acc-address" name="acc-address" value=""
                                 placeholder="<?php echo $address; ?>">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_acc-pfpic">
                     <div id="acc-pfpic" class="input-group">
                        <input class="form-control" type="text" readonly id="acc-pfpic-input"
                           placeholder="Change Profile Picture">
                        <label class="input-group-btn">
                           <input type="file" accept=".jpeg,.jpg,.png" value="" name="acc-pfpic" id="acc-pfpic-file"><span
                              class="btn">Browse...</span>
                        </label>
                     </div>
                  </div>
                  <div id="user_acc-detail-row7">
                     <div id="acc-detail-row7">
                        <div class="row">
                           <div class="col-1">
                              <input type="submit" id="btn-change" onclick="alert('Information Updated');"
                                 value="Change">
                           </div>
                           <div class="col-2">
                              <input type="reset" id="btn-clear" value="Clear Change">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <div id="user_acc-detail-rowline">
         <div id="acc-detail-rowline">
            <div class="row">
               <div class="col-1">
                  <hr id="acc-line">
               </div>
            </div>
         </div>
      </div>
      <div id="user_acc-delacc" class="h6">
         <h6>Delete Account</h6>
      </div>
      <div id="user_acc-delacc-par">
         <span class="About">When you delete your account, your profile will be deactivated immediately. You're not able
            to use our service anymore. If you want use our service again, you need to re-register a new account.</span>
      </div>
      <div id="user_acc-delete-form">
         <form name="acc_delete_form" method="post" action="php/delete-acc.php"
            enctype="application/x-www-form-urlencoded" target="_blank" id="acc-delete-form">
            <div class="row">
               <div class="col-1">
                  <div id="user_acc-delacc-tbox">
                     <input type="checkbox" id="acc-delacc-tbox" name="accdel-heckbox" value=""><label
                        for="acc-delacc-tbox"></label>
                     <div class="invalid-feedback">Please tick the box</div>
                  </div>
                  <label for="" id="acc-delacc-mess">Yes, I want to delete my account.</label>
                  <div id="user_acc-delacc-btngrid">
                     <div id="acc-delacc-btngrid">
                        <div class="row">
                           <div class="col-1">
                              <input type="submit" id="btn-deleteacc"
                                 onclick="alert('Account has been deleted, You will be logout now !');"
                                 value="Delete Account">
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
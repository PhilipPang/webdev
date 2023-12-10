<?php include("php/valid-session.php") ?>
<!doctype html>
<html lang="en-us">
<head>
   <meta charset="utf-8">
   <?php
   $title = "Repairture - Security";
   include "component/meta.php";
   include "component/css.php";
   include "component/js.php";
   ?>
   <link href="css/security.css" rel="stylesheet">
   <script>
      $(document).ready(function()
   {
      $("#acc-password1").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
         length_min: '8',
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
         error_text: 'Please enter your password'
      });
      $("#acc-password2").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
         length_min: '8',
         match_id: 'acc-password1',
         match_text: 'Password does not match, try again',
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
         error_text: 'Password does not match, try again'
      });
   $('#acc-password1').passwordStrength();
      $("#acc-pass-form").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
   });
   
   function showPW(){var x=document.getElementById("acc-password1");if(x.type==="password"){x.type="text";}else{x.type="password";}}
   </script>
</head>

<body>
   <?php include("component/nav.php") ?>
   <div class="col-2">
      <div id="user_acc-pass">
         <form name="LayoutGrid1" method="post" action="mailto:yourname@yourdomain.com" enctype="multipart/form-data"
            id="acc-pass">
            <div class="row">
               <div class="col-1">
                  <div id="user_acc-pass-h3" class="h3">
                     <h3>Account Detail</h3>
                  </div>
                  <div id="user_acc-pass-h6" class="h6">
                     <h6>Password</h6>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <div id="user_acc-pass-form">
         <form name="acc_pw_change" method="post" action="php/update-password.php" id="acc-pass-form">
            <div class="row">
               <div class="col-1">
                  <label class="Form-lable" for="acc-password1" id="acclabel-password1">New Password</label>
                  <div id="user_acc-password1">
                     <input type="password" id="acc-password1" name="acc-password-1" value="" autocomplete="off"
                        spellcheck="false" placeholder=".  .  .  .  .">
                     <div class="invalid-feedback">Please enter your password</div>
                  </div>
                  <div id="user_acc-pass-spgrid">
                     <div id="acc-pass-spgrid">
                        <div class="row">
                           <div class="col-1">
                              <div id="user_acc-pass-shpass">
                                 <label class="cbox"><input type="checkbox" onclick="showPW()">Show Password</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-2">
                  <label class="Form-lable" for="acc-password2" id="acclabel-password2">Confirm new password</label>
                  <div id="user_acc-password2">
                     <input type="password" id="acc-password2" name="acc-password-2" value="" autocomplete="off"
                        spellcheck="false" placeholder=".  .  .  .  .">
                     <div class="invalid-feedback">Password does not match, try again</div>
                  </div>
                  <div id="user_acc-pass-btngrid">
                     <div id="acc-pass-btngrid">
                        <div class="row">
                           <div class="col-1">
                              <input type="submit" id="acc-pass-btn" onclick="alert('Password Updated');">
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
</body>
<?php include("component/footer.php") ?>

</html>
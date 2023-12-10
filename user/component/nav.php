<!--Main Nav-->
<?php include("navcss.php") ?>
<?php include('php/read-user.php')?>
<div id="user_nav-info">
      <header id="nav-info">
         <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
               <div id="user_nav-info-icon-phone">
                  <a href="tel:+123456789"><div id="nav-info-icon-phone"><i class="nav-info-icon-phone"></i></div></a>
               </div>
               <label for="" id="nav-info-text-phone">Call +123 456 7890</label>
               <div id="user_nav-info-icon-email">
                  <a href="mailto:info@repairture.com"><div id="nav-info-icon-email"><i class="nav-info-icon-email"></i></div></a>
               </div>
               <label for="" id="nav-info-text-email">Email: info@repairture.com</label>
            </div>
            <div class="col-3">
            </div>
            <div class="col-4">
               <div id="user_nav-info-icon-fb">
                  <a href="https://facebook.com"><div id="nav-info-icon-fb"><i class="nav-info-icon-fb"></i></div></a>
               </div>
               <div id="user_nav-info-icon-ig">
                  <a href="https://instagram.com"><div id="nav-info-icon-ig"><i class="nav-info-icon-ig"></i></div></a>
               </div>
               <div id="user_nav-info-icon-tt">
                  <a href="https://twitter.com"><div id="nav-info-icon-tt"><i class="nav-info-icon-tt"></i></div></a>
               </div>
            </div>
         </div>
      </header>
   </div>
   <div id="user_navigation">
      <nav id="navigation">
         <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
               <div id="user_nav-logo">
                  <a href="/home.php"><img src="/images/logo-nav.png" id="nav-logo" alt="" width="183" height="34"></a>
               </div>
            </div>
            <div class="col-3">
               <div id="user_nav-menu-grid">
                  <div id="nav-menu-grid">
                     <div class="row">
                        <div class="col-1">
                           <nav id="user_nav-menu">
                              <span><a href="/about.php" class="Nav-Menu">About</a></span><span><a href="/services.php" class="Nav-Menu">Make Appointment</a></span><span><a href="/contact.php" class="Nav-Menu">Contact</a></span>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-4">
               <div id="user_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                           <div id="user_JavaScript1">
                              <div id="greeting"></div> 
                              <script>                              
                              var datenow = new Date(); 
                              var timenow = datenow.getTime(); 
                              datenow.setTime(timenow); 
                              var hournow = datenow.getHours(); 
                              var greeting = document.getElementById('greeting');
                              if (hournow >= 18)
                              { 
                                 greeting.innerHTML = "Good Night!"; 
                              }
                              else 
                              if (hournow >= 12) 
                              {
                                 greeting.innerHTML = "Good Afternoon!"; 
                              }
                              else 
                              {
                                 greeting.innerHTML = "Good Morning!"; 
                              }
                              </script>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-5">
               <div id="user_LayoutGrid2">
                  <div id="LayoutGrid2">
                     <div class="row">
                        <div class="col-1">
                           <div id="user_JavaScript2">
                              <div id="basicdate"></div>
                              <script>                              
                                 var now = new Date();
                                 var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
                                 var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
                                 var date = ((now.getDate() < 10) ? "0" : "") + now.getDate();
                                 var year = (now.getYear() < 1000) ? now.getYear() + 1900 : now.getYear();
                                 today = days[now.getDay()] + ", " + months[now.getMonth()] + " " + date + ", " + year;
                                 var basicdate = document.getElementById('basicdate');
                                 basicdate.innerHTML = today;
                              </script>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </nav>
   </div>
<!--Sidebar-->
   <div id="user_user-dashboard-full">
      <main id="user-dashboard-full">
         <div class="row">
            <div class="col-1">
               <div id="user_user-account_detail">
                  <section id="user-account_detail">
                     <div class="row">
                        <div class="col-1">
                           <div id="user_user-profile_picture">
                              <img src="data:image;base64,<?php echo $prfpic; ?>" id="user-profile_picture" alt="" width="100" height="100">
                           </div>
                           <div id="user_user-user_name" class="Info">
                              <p><p><?php echo $name; ?></p></p>
                           </div>
                           <div id="user_user-user_email" class="p">
                              <p><?php echo $email; ?></p>
                           </div>
                           <div id="user_user-menu-account_detail">
                              <a class="ui-button ui-corner-all" id="user-menu-account_detail" href="./dashboard.php"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Account Detail</a>
                           </div>
                           <div id="user_user-menu-security">
                              <a class="ui-button ui-corner-all" id="user-menu-security" href="./security.php"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Security</a>
                           </div>
                           <div id="user_user-menu-inbox">
                              <a class="ui-button ui-corner-all" id="user-menu-inbox" href="./inbox.php"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Inbox</a>
                           </div>
                           <div id="user_user-menu-book_service">
                              <a class="ui-button ui-corner-all" id="user-menu-book_service" href="./book-appointment.php"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Book Appointment</a>
                           </div>
                           <div id="user_user-menu-my_appointment">
                              <a class="ui-button ui-corner-all" id="user-menu-my_appointment" href="./my-appointment.php"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>My Appointment</a>
                           </div>
                           <div id="user_user-menu-sign_out">
                              <a class="ui-button ui-corner-all" id="user-menu-sign_out" href="/src/action/signout.php"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Sign Out</a>
                           </div>
                        </div>
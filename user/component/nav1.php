<?php include("navcss.php") ?>
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
<?php include("footercss.php") ?>
<div id="user_Footer">
      <div id="Footer-divider-top">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200" preserveAspectRatio="none">
            <rect width="1000" height="200" class="divider-fill"/>
         </svg></div>
      <footer id="Footer">
         <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
               <div id="user_Footer-logo">
                  <div id="Footer-logo"></div>
               </div>
               <div id="user_Footer-Text-H3" class="h3">
                  <h3>Every elderly home matters</h3>
               </div>
               <div id="user_Footer-Text-Phone" class="h4">
                  <h4>+60 123456789</h4>
               </div>
               <div id="user_Footer-Text-email" class="Feature">
                  <p>info@repairture.com</p>
               </div>
               <div id="user_Footer-social-grid">
                  <div id="Footer-social-grid">
                     <div class="row">
                        <div class="col-1">
                           <div id="user_Footer-Icon-TT">
                              <a href="https://twitter.com"><div id="Footer-Icon-TT"><i class="Footer-Icon-TT"></i></div></a>
                           </div>
                           <div id="user_Footer-Icon-FB">
                              <a href="https://facebook.com"><div id="Footer-Icon-FB"><i class="Footer-Icon-FB"></i></div></a>
                           </div>
                           <div id="user_Footer-Icon-IG">
                              <a href="https://instagram.com"><div id="Footer-Icon-IG"><i class="Footer-Icon-IG"></i></div></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="user_Footer-Menu">
                  <div id="Footer-Menu">
                     <div class="row">
                        <div class="col-1">
                           <div id="user_terms-condition">
                              <p><a href="./../terms-condition.php" class="Nav-Menu">Terms Condition</a></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="user_privacy-policy">
                              <p><a href="./../privacy-policy.php" class="Nav-Menu">Privacy Policy</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="user_Text1">
                  <span id="user_uid0">&#0169;</span><span id="user_uid1"> 2023 Repairture, Webdev Assignment. All right reserve</span>
               </div>
            </div>
            <div class="col-3">
            </div>
         </div>
      </footer>
   </div>
   <div class="cursor" id="cursor"></div><div class="cursor2" id="cursor2"></div>
   <script>   
   document.getElementsByTagName("html")[0].addEventListener("mousemove", function(n) {t.style.left = n.clientX + "px",t.style.top = n.clientY + "px",e.style.left = n.clientX + "px",e.style.top = n.clientY + "px"});
   var t = document.getElementById("cursor"),e = document.getElementById("cursor2");
   function n(t){e.classList.add("hover")}
   function s(t){e.classList.remove("hover")}
   s();
   for (var r = document.querySelectorAll("[href]"), a = r.length - 1; a >= 0; a--) {o(r[a])}
   function o(t){t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)}
   
   </script>
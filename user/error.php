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
<link href="css/error.css" rel="stylesheet">
<script src="js/lottie-player.js"></script>
</head>
<body>
<?php include("component/nav1.php") ?>
   <div id="user_LayoutGrid1">
      <div id="LayoutGrid1">
         <div class="row">
            <div class="col-1">
               <div id="user_LayoutGrid2">
                  <div id="LayoutGrid2">
                     <div class="row">
                        <div class="col-1">
                           <div id="user_Text1">
                              <h2>Error on your submition</h2><br/>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="user_Lottie1">
                  <lottie-player id="Lottie1" autoplay speed="2" mode="normal" src="https://assets3.lottiefiles.com/packages/lf20_j45vpbyx.json"></lottie-player>
               </div>
               <div id="user_Text2">
                  <h6>Make sure your booking date time is 24hour after your current date time</h6><br/><h6>Click </h6><a href="./book-appointment.php"><h6>here</h6></a><h6> to </h6><h6>re-submit your appointment again</h6><br/>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include("component/footer.php") ?>
</body>
</html>
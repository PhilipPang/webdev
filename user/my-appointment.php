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
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.dropdown.min.js" defer></script>
   <link href="css/my-appointment.css" rel="stylesheet">
   <script>
      document.addEventListener('DOMContentLoaded', function (event) {
         var myappt_menu_dropdownToggle = document.querySelectorAll('#myappt-menu .dropdown-toggle');
         myappt_menu_dropdownToggle.forEach(item => {
            var dropdown = new bootstrap.Dropdown(item, { popperConfig: { placement: item.getAttribute('data-bs-placement') } });
         });
         var myappt_menu_dropdown = document.querySelectorAll('#myappt-menu .dropdown');
         myappt_menu_dropdown.forEach(item => {
            item.addEventListener('shown.bs.dropdown', function (e) {
               e.currentTarget.classList.add('show');
            });
            item.addEventListener('hidden.bs.dropdown', function (e) {
               e.currentTarget.classList.remove('show');
            });
         });
      });
   </script>
   <script>
function clicked(e)
{
    if(!confirm('Are you sure?')) {
        e.preventDefault();
    }
}
</script>
</head>

<body>
   <?php include("component/nav.php") ?>
   <div class="col-2">
      <div id="user_myappt">
         <div id="myappt">
            <div class="row">
               <div class="col-1">
                  <div id="user_myappt-row1">
                     <div id="myappt-row1">
                        <div class="row">
                           <div class="col-1">
                              <div id="user_myappt-h3" class="h3">
                                 <h3>My Appointment</h3>
                              </div>
                           </div>
                           <div class="col-2">
                              <nav id="user_myappt-menu">
                                 <div id="myappt-menu" class="myappt-menu" style="width:100%;height:auto !important;">
                                    <div class="container">
                                       <div class="navbar-header">
                                          <button title="Dropdown Menu" type="button" class="navbar-toggle"
                                             data-bs-toggle="collapse" data-bs-target=".myappt-menu-navbar-collapse">
                                             <span class="icon-bar"></span>
                                             <span class="icon-bar"></span>
                                             <span class="icon-bar"></span>
                                          </button>
                                       </div>
                                       <div class="myappt-menu-navbar-collapse collapse">
                                          <ul class="nav navbar-nav">
                                             <li class="nav-item dropdown-hover dropdown">
                                                <a href="#" class="dropdown-toggle" data-bs-placement="top-start"
                                                   data-bs-toggle="dropdown"><i
                                                      class="fa fa-exclamation-circle"></i>Comming Soon<b
                                                      class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                   <li class="nav-item dropdown-item">
                                                      <a href="./change-date.php" class="nav-link"><i
                                                            class="fa fa-circle"></i>Change Date</a>
                                                   </li>
                                                   <li class="nav-item dropdown-item">
                                                      <a href="./complete.php" class="nav-link"><i
                                                            class="fa fa-check-circle"></i>Complete</a>
                                                   </li>
                                                   <li class="nav-item dropdown-item">
                                                      <a href="./pending.php" class="nav-link"><i
                                                            class="fa fa-question-circle"></i>Pending</a>
                                                   </li>
                                                   <li class="nav-item dropdown-item">
                                                      <a href="./cancel.php" class="nav-link"><i
                                                            class="fa fa-times-circle"></i>Cancel</a>
                                                   </li>
                                                </ul>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                  $user_id = $_SESSION['user_id'];
                  include('php/conn.php');
                  $sql = "SELECT booking.*, technicians.* FROM (booking INNER join technicians ON booking.tech_ID = technicians.tech_ID) 
                  WHERE booking.user_ID = '$user_id' AND booking.booking_status = 'ComingSoon' ORDER BY booking.booking_ID DESC;";
                  //Query data from database
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                     // Loop through the data and display it in the HTML
                     while ($row = mysqli_fetch_assoc($result)) {
                        $booking_ID = $row['booking_ID'];
                        $created_at = $row['created_at'];
                        $services_name = $row['services_name'];
                        $tech_firstname = $row['tech_firstname'];
                        $tech_lastname = $row['tech_lastname'];
                        $name = $tech_firstname . ' ' . $tech_lastname;
                        $booking_date_time = $row['booking_date_time'];
                        $tech_mobilenum = $row['tech_mobilenum'];
                        $tech_email  = $row['tech_email'];
                        echo ' <div id="user_coming-soon">
                        <div id="coming-soon">
                           <div class="row">
                              <div class="col-1">
                                 <hr id="trans-line">
                              </div>
                              <div class="col-2">
                                 <label class="appoit-info" for="" id="appt-id">Appointment ID: ' . $booking_ID  . '</label>
                                 <label class="appoit-info" for="" id="appt-creatat">Created at: ' . $created_at  . '</label>
                                 <div id="user_appt-ser_id" class="h4">
                                    <h4>' . $services_name  . '</h4>
                                 </div>
                                 <div id="user_appt-by" class="p">
                                    <p>By: ' . $name  . '</p>
                                 </div>
                                 <div id="user_appt-date" class="p">
                                    <p>Appointment Date &amp; Time: ' . $booking_date_time  . '</p>
                                 </div>
                                 <div id="user_appt-phone" class="p">
                                    <p>Phone: +' . $tech_mobilenum  . '</p>
                                 </div>
                                 <div id="user_appt-email" class="p">
                                    <p>Email: ' . $tech_email  . '</p>
                                 </div>
                                 <div id="user_btn-row">
                                    <div id="btn-row">
                                       <div class="row">
                                          <div class="col-1">
                                          <form action="edit-info.php" method="post">
                                             <button type="submit" id="btn-cd" name="edit_info" value="' . $booking_ID  . '" class="ui-button ui-corner-all"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Edit Info</button>
                                          </form>
                                             </div>
                                          <div class="col-2">
                                          <form action="php/cancel-booking.php" method="post">
                                             <button type="submit" onclick="clicked(event)" id="btn-ca" name="cance-appt" value="' . $booking_ID  . '" class="ui-button ui-corner-all"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Cancel Appointment</button>
                                          </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr id="appt-linesplit">';
                     }
                  } else {
                     echo "<div id='no-record-grid'>";
                     echo "<div class='row'>";
                     echo "<div class='col-1'>";
                     echo "<div id='user_no-record-found' class='No-record'>";
                     echo "<p>No Record Found</p>";
                     echo "</div>";
                     echo "</div>";
                     echo "</div>";
                     echo "</div>";
                  }

                  // Close the database connection
                  mysqli_close($conn);
                  ?>
               </div>
            </div>
         </div>
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
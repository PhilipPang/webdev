<?php include("php/valid-session.php");
$user_id = $_SESSION['user_id'];
?>
<!doctype html>
<html lang="en-us">

<head>
   <?php
   $title = "Repairture - Inbox";
   include "component/meta.php";
   include "component/css.php";
   include "component/js.php";
   ?>
   <link href="css/inbox.css" rel="stylesheet">
</head>

<body>
   <?php include("component/nav.php") ?>
   <div class="col-2">
      <div id="user_inbox-head">
         <div id="inbox-head">
            <div class="row">
               <div class="col-1">
                  <div id="user_inbox-h3" class="h3">
                     <h3>Inbox</h3>
                  </div>
               </div>
               <div class="col-2">
                  <form action="php/delete-inbox.php" method="post">
                     <input type="hidden" name="del-inbox" value="">
                     <button type="submit" id="btn-dar" name="" value="Delete All Record"
                        class="ui-button ui-corner-all"><span class="ui-button-icon ui-icon ui-primary"></span><span
                           class="ui-button-icon-space"> </span>Delete All Record</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div id="user_inbox-row">
         <div id="inbox-row">
            <div class="row">
               <div class="col-1">
                  <div id="user_inbox-from" class="Form-lable">
                     <p>From</p>
                  </div>
               </div>
               <div class="col-2">
                  <div id="user_inbox-mess" class="Form-lable">
                     <p>Message</p>
                  </div>
               </div>
               <div class="col-3">
                  <div id="user_inbox-date" class="Form-lable">
                     <p>Date</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
      include("php/conn.php");
      $sql = "SELECT * FROM inbox WHERE user_ID = '$user_id' AND inbox_read = '0' ORDER BY inbox_ID DESC";
      $result = mysqli_query($conn, $sql);
      $from = 'System';
      if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_assoc($result)) {
            $inbox = $row['inbox_message'];
            $created_at = $row['created_at'];
            echo "<div id='user_inbox-unread-d'>";
            echo "<div id='inbox-unread-d'>";
            echo "<div class='row'>";
            echo "<div class='col-1'>";
            echo "<div id='user_inbox-from-ur' class='Inbox-unread'>";
            echo "<p>" . $from . "</p>";
            echo "</div>";
            echo "</div>";
            echo "<div class='col-2'>";
            echo "<div id='user_inbox-mess-ur' class='Inbox-unread'>";
            echo "<p>" . $inbox . "</p>";
            echo "</div>";
            echo "</div>";
            echo "<div class='col-3'>";
            echo "<div id='user_inbox-date-ur' class='Inbox-unread'>";
            echo "<p>" . $created_at . "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
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
   </section>
   </div>
   </div>
   </div>
   </main>
   </div>
   <?php include("component/footer.php") ?>
</body>

</html>
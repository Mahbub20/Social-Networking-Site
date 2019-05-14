    <?php

                  include("includes/header.php");

                $message = $_POST['message'];
               $sel_msg = "select * from user_messages where (user_to='$user_to_msg' AND user_from='$user_from_msg') OR (user_from='$user_to_msg' AND user_to='$user_from_msg') AND msg_body='$message' ORDER by 1 ASC";

               $run_msg = mysqli_query($con,$sel_msg);

               while($row_msg = mysqli_fetch_array($run_msg)){

               $user_to = $row_msg['user_to'];
               $user_from = $row_msg['user_from'];
               $msg_body = $row_msg['msg_body'];
               $msg_date = $row_msg['date'];

               ?>
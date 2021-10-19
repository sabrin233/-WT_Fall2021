<html>
    <body>
        
        <?php
        $fname=$lname=$email=$gender=$mobile=$dob=$hsc=$ssc=$course=$yenroll=$menroll="";
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $fname = test_input($_POST["fname"]);
            $lname = test_input($_POST["lname"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
            $mobile = test_input($_POST["mobile"]);
            $dob = test_input($_POST["dob"]);
            $hsc = test_input($_POST["hsc"]);
            $ssc = test_input($_POST["ssc"]);
            $course = test_input($_POST["course"]);
            $yenroll = test_input($_POST["yenroll"]);
            $menroll = test_input($_POST["menroll"])
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        ?>

    </body>
</html>
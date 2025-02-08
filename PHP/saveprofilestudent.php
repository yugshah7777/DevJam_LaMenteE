<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session
    $_SESSION['user_data'] = $_POST;
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $mobile = $_POST['mobile'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $pincode = $_POST['pincode'];
        $state = $_POST['state'];
        $area = $_POST['area'];
        $email = $_POST['email'];
        $education = $_POST['education'];
        $region = $_POST['region'];
        $country = $_POST['country'];
        $experience = $_POST['experience'];
        $additional_details = NULL;
        if (empty($first_name) || empty($last_name) || empty($mobile) || empty($email)) {
            echo "<script>
                    alert('Please fill in all required fields (First_Name, Last_Name, Mobile, Email)');
                    window.history.back();
                  </script>";
            exit;
        }
        $check = $conn->query("SELECT id FROM users WHERE email = '$email' ");
        if ($check->num_rows > 0) {
            $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', mobile='$mobile', address1='$address1', address2='$address2', pincode='$pincode', state='$state', area='$area', education='$education', region='$region', country='$country', experience='$experience', additional_details='$additional_details' WHERE email='$email'";
        } else {
            $sql = "INSERT INTO users (first_name, last_name, mobile, address1, address2, pincode, state, area, email, education, region, country, experience, additional_details) VALUES ('$first_name','$last_name' , '$mobile', '$address1', '$address2','$pincode','$state', '$area','$email','$education', '$region','$country', '$experience', '$additional_details')";
        }
        $result=mysqli_query($conn,$sql);
        if ($result) {
            echo "<script>
                    alert('Profile saved successfully!');
                    window.location.href = 'studentProfile.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Error saving profile. Please try again.');
                    window.history.back();
                  </script>";
        }
        
    header("Location: studentProfile.php");
    exit();
} else {
    header("Location: studentProfileEdit.php");
    exit();
}
?>

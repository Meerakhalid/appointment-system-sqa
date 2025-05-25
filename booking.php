<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $doctor = $_POST["doctor"];

    echo "Congrats, Appointment booked successfully .";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Appointment</title>
</head>
<body>
    <h2>Book an Appointment</h2>
    <form method="POST" action="booking.php">
        Name: <input type="text" name="name" required><br><br>
        Date: <input type="date" name="date" required><br><br>
        Doctor:
        <select name="doctor">
            <option value="Ahmed">Dr. Ahmed</option>
            <option value="Sara">Dr. Sara</option>
        </select><br><br>
        <input type="submit" value="Book Now">
    </form>
</body>
</html>

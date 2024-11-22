<?php 
require_once "conn.php";

if (isset($_POST['submit'])) {
    // Collecting form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $station_from = $_POST['station_from'];
    $station_to = $_POST['station_to'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $coupon = $_POST['coupon'] ?? ''; // Optional coupon
    $adult = $_POST['adult'];
    $senior = $_POST['senior'];
    $youth = $_POST['youth'];
    $child = $_POST['child'];
    $infant = $_POST['infant'];

    // Generate a 16-digit ticket number
    $ticket_number = str_pad((string)random_int(0, 9999999999999999), 16, '0', STR_PAD_LEFT);

    if ($name != "" && $email != "" && $station_from != "" && $station_to != "" && $departure != "" && $arrival != ""
    && $adult != "" && $senior != "" && $youth != "" && $child != "") {

        // Prepare SQL query
        $sql = "INSERT INTO ticket (ticket_number, name, email, station_from, station_to, departure, arrival, 
                coupon, adult, senior, youth, child, infant) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Prepare the statement
        if ($stmt = $conn->prepare($sql)) {
            // Bind parameters, including ticket_number
            $stmt->bind_param("ssssssssiiiii", $ticket_number, $name, $email, $station_from, $station_to, 
                              $departure, $arrival, $coupon, $adult, $senior, $youth, $child, $infant);

            // Execute the statement
            if ($stmt->execute()) {
                // Redirect with ticket number in URL
                header("Location: http://localhost/amtrak/ticket.php?ticket_number=$ticket_number");
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "Please fill in all required fields.";
    }

    $conn->close();
}
?>


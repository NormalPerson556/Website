<?php
require_once "crud/conn.php"; // Include the database connection

// Initialize variables to avoid undefined variable errors
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ticket_number'])) {
    // Get the POST data from the form
    $ticket_number = $_POST['ticket_number'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $station_from = $_POST['station_from'];
    $station_to = $_POST['station_to'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $coupon = $_POST['coupon'];
    $adult = $_POST['adult'];
    $senior = $_POST['senior'];
    $youth = $_POST['youth'];
    $child = $_POST['child'];
    $infant = $_POST['infant'];

    // Debug: Print POST data to check if it's received correctly
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Prepare SQL query to update ticket details
    $sql = "UPDATE ticket 
            SET name = ?, email = ?, station_from = ?, station_to = ?, 
                departure = ?, arrival = ?, coupon = ?, adult = ?, senior = ?, youth = ?, 
                child = ?, infant = ? 
            WHERE ticket_number = ?";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the parameters to the query
        $stmt->bind_param("ssssssssiiiii", $name, $email, $station_from, $station_to, 
        $departure, $arrival, $coupon, $adult, $senior, $youth, $child, $infant, $ticket_number);

        // Execute the query
        if ($stmt->execute()) {
            // Set a success message and redirect to the ticket check page
            $message = "Ticket details successfully updated.";
            // Optionally, you can redirect back to the `check_ticket.php` page to reflect the changes
            header("Location: check_ticket.php?ticket_number=" . urlencode($ticket_number));
            exit; // Stop further script execution after redirect
        } else {
            // Set an error message if the query fails
            $message = "Error updating ticket: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        // Set an error message if the query preparation fails
        $message = "Error preparing query: " . $conn->error;
    }

    $conn->close();
} else {
    // Set an error message if the request is invalid
    $message = "Invalid request. Ticket number missing.";
}

// Debug: Print message
echo $message;

?>

<!-- Displaying the message to the user -->
<?php if ($message): ?>
    <p class="alert alert-info"><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

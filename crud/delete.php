<?php
require_once "conn.php"; // Database connection

if (isset($_GET['ticket_number'])) {
    $ticket_number = $_GET['ticket_number'];

    $sql = "DELETE FROM ticket WHERE ticket_number = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $ticket_number);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Ticket deleted successfully!</div>";
            header("Location: http://localhost/amtrak/check.php"); // Redirect to a ticket list page or homepage
            exit;
        } else {
            echo "<div class='alert alert-danger'>Error deleting ticket: " . $stmt->error . "</div>";
        }

        $stmt->close();
    } else {
        echo "<div class='alert alert-danger'>Error preparing statement: " . $conn->error . "</div>";
    }

    $conn->close();
} else {
    echo "<div class='alert alert-warning'>No ticket number provided.</div>";
}
?>

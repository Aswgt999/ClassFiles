<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accno = $_POST['accno'];
    $amt = $_POST['amt'];
    $trn = $_POST['type'];
    
    // Connect to PostgreSQL database
    $db = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");
    
    if (!$db) {
        echo "Connection failed";
        exit;
    }

    if ($trn == 'Deposit') {
        $rs = pg_query_params($db, "UPDATE bank5 SET balance = balance + $1 WHERE accno = $2", array($amt, $accno));
        $message = $rs ? "Amount deposited successfully" : "Failed to deposit amount";
    } elseif ($trn == 'Withdrawal') {
        $rs = pg_query_params($db, "UPDATE bank5 SET balance = balance - $1 WHERE accno = $2", array($amt, $accno));
        $message = $rs ? "Amount withdrawn successfully" : "Failed to withdraw amount";
    }

    // Fetch and display the updated account details
    $result = pg_query_params($db, "SELECT * FROM bank5 WHERE accno = $1", array($accno));

    if ($result) {
        echo "<h1 align='center'>{$message}</h1>";
        echo "<table border='2' align='center' width='30%'>";
        while ($row = pg_fetch_assoc($result)) {
            echo "<tr><td>Account Number</td><td>{$row['accno']}</td></tr>";
            echo "<tr><td>Customer Name</td><td>{$row['cust_name']}</td></tr>";
            echo "<tr><td>Balance Amount</td><td>{$row['balance']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<h1 align='center'>Failed to retrieve account details</h1>";
    }

    pg_close($db);
} else {
    echo "Invalid request method";
}
?>

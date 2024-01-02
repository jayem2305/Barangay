<?php
// fetch_statistics.php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['selectedYear'])) {
    // Include your database connection file
    include 'dbh.inc.php';

    // Get the selected year from the POST data
    $selectedYear = $_POST['selectedYear'];

    // Initialize an array to store counts for each month and week
    $monthWeekCounts = [];

    // Fetch data from the database for the selected year
    $sql = "SELECT * FROM requested_certs";
    $result = mysqli_query($conn, $sql);

    // Process the query results and populate the monthWeekCounts array for the selected year
    while ($row = mysqli_fetch_assoc($result)) {
        $timestamp = strtotime($row['date']); // Assuming you have a 'date' column in your table
        $year = date('Y', $timestamp);

        // Check if the year matches the selected year
        if ($year == $selectedYear) {
            $month = date('F', $timestamp);
            $week = ceil(date('j', $timestamp) / 7); // Calculate the week within the month

            // Increment the count for the corresponding month and week
            if (!isset($monthWeekCounts[$month][$week])) {
                $monthWeekCounts[$month][$week] = 1;
            } else {
                $monthWeekCounts[$month][$week]++;
            }
        }
    }

    // Output the HTML content for the table body
    $output = '';
    $monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    foreach ($monthNames as $month) {
        $output .= "<tr>";
        $output .= "<td>$month</td>";
        $totalMonthCount = 0;

        // Modify the loop to handle up to 5 weeks
        for ($week = 1; $week <= 5; $week++) {
            $count = isset($monthWeekCounts[$month][$week]) ? $monthWeekCounts[$month][$week] : 0;
            $totalMonthCount += $count;
            $output .= "<td>$count</td>";
        }

        $output .= "<td class='bg-primary text-white'>$totalMonthCount</td>";
        $output .= "</tr>";
    }

    $output .= "<tr class='bg-primary text-white'>";
    $output .= "<td>Total</td>";
    $totalAllWeeks = 0;

    // Modify the loop to handle up to 5 weeks
    for ($week = 1; $week <= 5; $week++) {
        $totalWeekCount = 0;

        foreach ($monthNames as $month) {
            $count = isset($monthWeekCounts[$month][$week]) ? $monthWeekCounts[$month][$week] : 0;
            $totalWeekCount += $count;
        }

        $totalAllWeeks += $totalWeekCount;
        $output .= "<td>$totalWeekCount</td>";
    }

    $output .= "<td>$totalAllWeeks</td>";
    $output .= "</tr>";

    echo $output;
}
?>

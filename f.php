<?php
// Assuming you have fetched the data from the database and stored it in an array called $rows
$rows = [
    ['wid' => 1, 'issue' => 'Issue 1', 'status' => 'Open'],
    ['wid' => 2, 'issue' => 'Issue 2', 'status' => 'Closed'],
    ['wid' => 3, 'issue' => 'Issue 3', 'status' => 'In Progress'],
    // Add more rows as needed
];

// Process the button click
if (isset($_POST['button'])) {
    $pressedButton = $_POST['button'];
    echo "Pressed Button: $pressedButton";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Table with Buttons Example</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        button {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>WID</th>
            <th>Issue</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?php echo $row['wid']; ?></td>
                <td><?php echo $row['issue']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>
                    <form method="POST" action="">
                        <?php if (!isset($_POST['button'])) : ?>
                            <button type="submit" name="button" value="<?php echo $row['wid']; ?>">Button 1</button>
                            <button type="submit" name="button" value="<?php echo $row['wid']; ?>">Button 2</button>
                        <?php endif; ?>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

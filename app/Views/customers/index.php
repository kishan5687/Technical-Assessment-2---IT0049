<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>
</head>
<body>
    <?= view('templates/nav'); ?>
    <h1>Customer Accounts (Live Database)</h1>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $customer['id']; ?></td>
                    <td><?= $customer['full_name']; ?></td>
                    <td><?= $customer['email']; ?></td>
                    <td><?= $customer['phone']; ?></td>
                    <td><?= $customer['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

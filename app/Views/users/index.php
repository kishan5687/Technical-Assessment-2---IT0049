<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>
</head>
<body>
    <?= view('templates/nav'); ?>
    <h1>User/Staff Accounts (Live Database)</h1>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['full_name']; ?></td>
                    <td><?= $user['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

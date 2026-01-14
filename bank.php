<?php
include 'classes/Account.php';
include 'classes/Customer.php';

$accounts = [
    new Account(20489446, "Checking", -20),
    new Account(20148896, "Savings", 380),
    new Account(30911245, "Payroll", 1250),
    new Account(41109877, "Emergency Fund", -500)
];

$customer = new Customer("Ivy", "Stone", $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Accounts</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<header>
    <img src="assets/logo.png" alt="Bank Logo">
</header>

<section>
    <h2>NAME: <span class="important"><?= $customer->getFullName(); ?></span></h2>

    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>

        <?php foreach ($customer->accounts as $account): ?>
        <tr>
            <td><?= $account->accountNumber; ?></td>
            <td><?= $account->accountType; ?></td>

            <?php if ($account->balance >= 0): ?>
                <td>₱ <?= number_format($account->balance, 2); ?></td>
            <?php else: ?>
                <td class="overdrawn">₱ <?= number_format($account->balance, 2); ?></td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>

    </table>
</section>

</body>
</html>

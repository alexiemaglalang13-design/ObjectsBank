<!-- Maglalang, Alexie T. | WD-201 -->

<?php
include 'classes/Account.php';
include 'classes/Customer.php';
include "includes/header.php";

$accounts = [
    new Account(20489446, "Checking", -20),
    new Account(20148896, "Savings", 380),
    new Account(30911245, "Payroll", 1250),
    new Account(41109877, "Concert Fund", -500)
];

$customer = new Customer("Alexie", "Maglalang", "atmaglalang@gmail.com", "wd_201", $accounts);
?>

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
            <td><?= $account->number; ?></td>
            <td><?= $account->type; ?></td>

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

<?php
include "includes/footer.php";
?>

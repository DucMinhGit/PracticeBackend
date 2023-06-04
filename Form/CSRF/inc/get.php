<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <header>
        <h1>Fund Transfer</h1>
    </header>
    <div>
        <label for="amount">Amount (between $1-$500):</label>
        <input type="number" name="amount" value="<?= $inputs['amount'] ?? '' ?>">
        <small><?= $errors['amount'] ?? ''?></small>
    </div>

    <div>
        <label for="recipient_account">Recipient Account:</label>
        <input type="number" name="recipient_account" value="<?= $inputs['recipient_account'] ?? '' ?>">
        <small><?= $errors['recipient_account'] ?? ''?></small>
    </div>

    <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
    <button type="submit">Transfer Now</button>
</form>
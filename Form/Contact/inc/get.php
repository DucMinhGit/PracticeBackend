<?php if (isset($message)) : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php endif ?>
<?php if (isset($message_err)) : ?>
    <div class="alert alert-error">
        <?= $message_err ?>
    </div>
<?php endif ?>

<form action="index.php" method="post">
    <header>
        <h1>Send Us a Message</h1>
    </header>

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $inputs['name'] ?? '' ?>" placeholder="Full name">
        <small><?= $errors['name'] ?? '' ?></small>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $inputs['email'] ?? '' ?>" placeholder="Enter email">
        <small><?= $errors['email'] ?? '' ?></small>
    </div>

    <div>
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" value="<?= $inputs['subject'] ?? '' ?>" placeholder="Enter subject">
        <small><?= $errors['subject'] ?? '' ?></small>
    </div>

    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
        <small><?= $errors['message'] ?? '' ?></small>
    </div>

    <label for="nickname" aria-hidden="true" class="user-cannot-see">Nick Name
        <input type="text" name="nickname" id="nickname" class="user-cannot-see" tabindex="-1" autocomplete="off">
    </label>

    <button type="submit">Send Message</button>
</form>
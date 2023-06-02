<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <header>
        <h1>Get FREE Update</h1>
        <p>Join us for FREE to get email updates!</p>
    </header>
    <div>
        <label for="name">Name:</label>
        <input  type="text" 
                name="name" 
                id="name" 
                placeholder="Full Name" 
                value="<?php echo $inputs['name'] ?? ''?>"
                class="<?php echo isset($errors['name']) ? 'error' : ''?>"
                >
        <small><?php echo $errors['name'] ?? ''; ?></small>

        <label for="name">Email:</label>
        <input  type="email" 
                name="email" 
                id="email" 
                placeholder="Enter email" 
                value="<?php echo $inputs['email'] ?? ''?>"
                class="<?php echo isset($errors['email']) ? 'error' : ''?>"
                >
        <small><?php echo $errors['email'] ?? ''; ?></small>
    </div>

    <button type="submit">Subscribe</button>

</form>
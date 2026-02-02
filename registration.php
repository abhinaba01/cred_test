<div class="container mt-4">
    <form action="process_registration.php" method="POST">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name:</label>
            <input type="text" name="fullname" class="form-control" id="fullName" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Contact:</label>
            <input type="tel" name="contact" class="form-control" id="contact" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <div class="mb-4 float-end">
            Already have an account? 
            <a href="index.php">Login Here</a>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</div>
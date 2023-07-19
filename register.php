<!DOCTYPE html>

<html>
<head>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <form action="process.php" method="post">
        <div>
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname">
        </div>

        <div>
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="Gender">Gender:</label>
            <input type="radio" name="gender" value="male" required>male
            <input type="radio" name="gender" value="female" required>female
            <input type="radio" name="gender" value="other" required>other
        </div>
        <div>
            <label for="date_of_birth">Date of birth:</label>
            <input type="date" name="date_of_birth">
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
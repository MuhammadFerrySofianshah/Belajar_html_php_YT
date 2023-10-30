<!DOCTYPE html>
<html>
<head>
    <title>Formulir MySQL</title>
</head>
<body>
    <h1>Formulir Input Data</h1>

    <form method="post" action="conn.php">
        <label for="username">username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">password:</label>
        <input type="text" name="password" id="password" required><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>

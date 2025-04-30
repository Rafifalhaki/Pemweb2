<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Dummy login: username: admin, password: admin123
    if ($user == 'admin' && $pass == 'admin123') {
        $_SESSION['username'] = $user;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Puskesmas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <form method="POST" class="bg-white p-8 rounded shadow w-96 space-y-4">
        <h2 class="text-xl font-bold text-center text-blue-600">Login Admin</h2>
        <?php if (isset($error)): ?>
            <div class="bg-red-100 text-red-600 p-2 rounded"><?= $error ?></div>
        <?php endif; ?>
        <input name="username" type="text" placeholder="Username" class="w-full border px-3 py-2 rounded" required>
        <input name="password" type="password" placeholder="Password" class="w-full border px-3 py-2 rounded" required>
        <button class="w-full bg-blue-600 text-white py-2 rounded">Login</button>
    </form>
</body>
</html>

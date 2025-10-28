<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    function simpleEmailCheck($email) {
        if (substr_count($email, '@') !== 1) {
            return "❌ Invalid: More than one '@'";
        }

        $parts = explode('@', $email);
        $local = $parts[0];
        $domain = $parts[1];

        if (!preg_match('/^[a-zA-Z]/', $local)) {
            return "❌ Invalid: Local part must start with a letter";
        }

        $dotBefore = substr_count($local, '.');
        $dotAfter = substr_count($domain, '.');

        if ($dotBefore > 1) {
            return "❌ Invalid: Too many dots before '@'";
        }

        if ($dotAfter < 1 || $dotAfter > 2) {
            return "❌ Invalid: Dot count after '@' must be 1 or 2";
        }

        return "✅ Valid email!";
    }

    echo "<h3>Result: " . simpleEmailCheck($email) . "</h3>";
}
?>
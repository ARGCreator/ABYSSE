
<?php
// Start or resume the session
session_start();

// Check if the session variable 'mdta' is set (Name this variable as you see fit. I chose 'mdta' because it's not telling of what it does)
if (isset($_SESSION['mdta'])) {
    // Subsequent visit: include the 'myaccount.php' This is the "User has already visited" check. It's the powerhouse portion of the code.
    include 'myaccount.php';
} else {
    // First visit: include a specific file. I use this directory tree as a built-in numeric combination leading to a deeply nested, obscure php file (This is the "weird page")
    include '1/2/25/19/19/5/122519195.php';

    // Set the session variable to mark the user as visited, thus making subsequent visits redirect to the myaccount.php file, hiding the "weird page" from resurfacing.
    $_SESSION['mdta'] = true;

    // JavaScript code to reload the page after 3 seconds. This is an important bit, as it will change from the "weird page" to the regular page.
    echo '<script>
    setTimeout(function() {
        location.reload();
    }, 3000);
    </script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | SecuroScanner</title>
    <?php include ("assets/inc/head-links.html"); ?>
    <link rel="stylesheet" href="assets/css/signup.css">
</head>
<body class="bg-blue-800">

<div class="min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded shadow-md w-full max-w-xl">
    <h2 class="text-2xl font-semibold text-center mb-6 text-blue-900">The SecuroScanner Password Manager</h2>
    <form id="signupForm" action="assets/php/signup-logic.php" method="post">
      <div class="mb-4">
        <label for="email" class="block text-sm font-semibold text-gray-700">Email address (required)</label>
        <input type="email" id="email" name="email" placeholder="You'll use your email address to log in." class="mt-1 p-2 border rounded w-full" required />
      </div>
      <div class="mb-4">
        <label for="name" class="block text-sm font-semibold text-gray-700">Name</label>
        <input type="text" id="name" name="name" placeholder="What should we call you?" class="mt-1 p-2 border rounded w-full" />
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-semibold text-gray-700">Master password (required)</label>
        <input type="password" id="password" name="password" placeholder="12 character minimum" class="mt-1 p-2 border rounded w-full" required />
        <div id="strengthBarContainer" class="mt-2">
          <div id="strengthBar" class=""></div>
        </div>
      </div>
      <div class="mb-4">
        <label for="confirm-password" class="block text-sm font-semibold text-gray-700">Re-type master password (required)</label>
        <input type="password" id="confirm-password" name="confirm-password" class="mt-1 p-2 border rounded w-full" required />
      </div>
      <div class="mb-4">
        <label for="password-hint" class="block text-sm font-semibold text-gray-700">Master password hint</label>
        <input type="text" id="password-hint" name="password-hint" placeholder="A master password hint can help you remember your password!" class="mt-1 p-2 border rounded w-full" />
      </div>
      <div class="flex items-center mb-6">
        <input type="checkbox" id="terms" name="terms" class="mr-2" required />
        <label for="terms" class="text-sm">By checking this box you agree to the following: <a href="#" class="text-blue-500">Terms of service</a>, <a href="#" class="text-blue-500">Privacy policy</a></label>
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Create account</button>
    </form>
    <p class="text-center text-sm text-gray-600 mt-4">Already have an account? <a href="login.php" class="text-blue-500">Log in</a></p>
  </div>
</div>

    <script src="assets/js/signup.js"></script>

</body>
</html>
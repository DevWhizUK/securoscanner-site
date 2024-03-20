<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | SecuroScanner</title>
  <?php include ("assets/inc/head-links.html"); ?>
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="bg-blue-800 flex items-center justify-center h-screen">
  <div class="container max-w-screen-lg mx-auto flex p-6 bg-white rounded-lg shadow-xl">
    <div class="flex-1 text-center px-6 py-4">
      <div class="mb-4">
        <!-- Replace src with actual QR code -->
        <img src="assets/img/login/example_qr.png" alt="QR Code" class="mx-auto">
      </div>
      <h2 class="text-2xl font-semibold">Log in with QR Code</h2>
      <p class="text-gray-600">Scan this with the SecuroScanner mobile app to log in instantly.</p>
    </div>

    <div class="flex-1 px-6 py-4">
      <div class="mb-4">
        <div class="text-3xl font-semibold py-1 text-center text-blue-900">SecuroScanner</div>
      </div>
      <form id="loginForm" class="mb-4">
        <div class="mb-4">
          <input type="email" id="email" placeholder="Email address (required)" required
            class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" />
        </div>
        <div class="mb-4">
          <input type="password" id="password" placeholder="Password" required
            class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" />
        </div>
        <div class="mb-4 flex justify-between items-center">
          <div class="flex items-center">
            <input id="rememberEmail" type="checkbox" class="mr-2" />
            <label for="rememberEmail" class="text-sm text-gray-600">Remember email</label>
          </div>
          <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
        </div>
        <button type="submit"
          class="w-full px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none">Continue</button>
      </form>
      <div class="text-center">
        <p class="text-gray-600">or</p>
        <p class="mt-3 mb-10">
          <a href="signup.html" class="text-blue-600 hover:underline">New around here? Create account</a>
        </p>
      </div>
    </div>
  </div>

</body>

</html>
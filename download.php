<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download | SecuroScanner</title>
    <?php include ("assets/inc/head-links.html"); ?>
    <link rel="stylesheet" href="assets/css/download.css">
</head>

<body class="bg-grey-100 text-gray-600 work-sans leading-normal text-base tracking-normal">
    
    <?php include ("assets/inc/nav/nav.html"); ?>

    <div class="container mx-auto px-6 py-10">
        <!-- Header Section -->
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-2">Install and Sync All of Your Devices</h1>
            <p class="mb-6 text-gray-700">Secure cloud syncing lets you access your sensitive information from any device</p>
            <button class="bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2 hover:bg-blue-700">Get started today</button>
            <button class="bg-transparent border border-blue-600 text-blue-600 font-semibold py-2 px-4 rounded">Sign In</button>
        </div>

        <!-- Mobile Applications Section -->
        <div class="mt-10">
            <h2 class="text-center text-3xl font-semibold mb-10">Mobile Applications</h2>
            <div class="flex flex-row justify-center items-center space-x-4">
                <!-- Apple App Store Card -->
                <div class="bg-blue-900 text-white rounded shadow p-4 flex-1 hover:scale-105 ease-in-out duration-300">
                    <div class="flex justify-center mb-4">
                        <img src="assets/img/download/apple.png" alt="iOS" class="h-20">
                    </div>
                    <a href="#" class="block">
                        <img src="assets/img/download/apple-showcase.png" alt="App Store" class="mx-auto">
                    </a>
                </div>
                <!-- Google Play Store Card -->
                <div class="bg-blue-900 text-white rounded shadow p-4 flex-1 hover:scale-105 ease-in-out duration-300">
                    <div class="flex justify-center mb-4">
                        <img src="assets/img/download/play.png" alt="Android" class="h-20">
                    </div>
                    <a href="#" class="block">
                        <img src="assets/img/download/play-showcase.png" alt="Google Play" class="mx-auto">
                    </a>
                </div>
            </div>
        </div>

        <!-- Web Application Section -->
        <div class="text-center mt-10">
            <div class="p-6 inline-block">
                <h2 class="text-center text-3xl font-semibold mb-5">Web Application</h2>
                <p class="mb-4">Need to access account settings or using a friend's computer? Access your password manager from any web browser with the SecuroScanner web app.</p>
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Access Web App</button>
            </div>
        </div>
    </div>

    <!-- Bottom Hero -->
    <section class="bg-blue-900 text-white py-12">
        <div class="container mx-auto px-8 text-center">
        <h3 class="text-center text-xl font-semibold mb-4">Have questions? We're here to help</h3>
            <div class="flex justify-center space-x-4">
                <button class="button-style bg-blue-100 text-blue-500 hover:bg-gray-100 focus:ring-blue-500 font-bold py-2 px-4 rounded border border-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2">Talk to Sales</button>
                <button class="button-style bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500 font-bold py-2 px-4 rounded border border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2">Read our blog</button>
                <button class="button-style bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500 font-bold py-2 px-4 rounded border border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2">Help center</button>
                <button class="button-style bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500 font-bold py-2 px-4 rounded border border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2">Resources</button>
            </div>
        </div>
    </section>

    <?php include ("assets/inc/footer/footer.html"); ?>
</body>
</html>
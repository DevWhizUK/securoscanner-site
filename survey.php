<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Survey | SecuroScanner</title>
    <?php include ("assets/inc/head-links.html"); ?>
</head>

<body class="bg-grey-100 text-gray-600 work-sans leading-normal text-base tracking-normal">

    <?php include ("assets/inc/nav/nav.html"); ?>

    <div class="container mx-auto px-6 py-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-5">Take the Survey!</h1>
        </div>
        <!-- Mobile Applications Section -->
        <div class="flex-grow">
            <iframe
                src="https://docs.google.com/forms/d/e/1FAIpQLSdJF2A4XGNYZ3J0FGH3ahRpbq0u6d9bP0K_nUcz0NycaNPdQg/viewform?usp=sf_link"
                frameborder="0" style="width:100%; height:70vh;" title="Content Frame"></iframe>
        </div>
    </div>

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
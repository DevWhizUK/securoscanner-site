<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | SecuroScanner</title>
    <?php include ("assets/inc/head-links.html"); ?>
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <?php include ("assets/inc/nav/nav.html"); ?>

    <!-- Title Area -->
    <section class="bg-blue-900 text-white py-12">
        <div class="container mx-auto px-8 text-center">
            <h1 class="text-4xl font-bold mb-2">Get In Touch!</h1>
            <p class=" text-white">We apologise if our site has left you with unanswered questions. If our <a
                    class="underline" href="faq.php">FAQ's</a> and <a class="underline" href="mission.php">Misson
                    Page</a> didn't give you all the info you needed, feel free to contact us with the form below.</p>
        </div>
    </section>

    <!-- Contact Us Section -->
    <div class="container mx-auto px-4 py-8">
        <?php include ("assets/php/contact-form.php"); ?>
    </div>

    <?php include ("assets/inc/footer/footer.html"); ?>
    
</body>

</html>
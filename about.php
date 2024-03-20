<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | SecuroScanner</title>
    <?php include ("assets/inc/head-links.html"); ?>
    <link rel="stylesheet" href="assets/css/about.css">
</head>

<body class="bg-grey-100 text-gray-600 work-sans leading-normal text-base tracking-normal">

    <?php include ("assets/inc/nav/nav.html"); ?>

    <!-- Header -->
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-2 mt-5">About SecuroScanner</h1>
        <p class="mb-6 text-gray-700">Below, you find out some info about us, if you have more questions, check out the
            <a class="underline" href="faq.php">FAQ's</a> and <a class="underline" href="mission.php">Our Misson</a>, or
            feel free to get in touch!</p>
    </div>

    <!-- Main content -->
    <main class="container mx-auto my-8">
        <div class="flex flex-wrap md:flex-nowrap">
            <div class="md:w-1/2 p-4">
                <section class="mb-8 mt-1">
                    <p class="text-gray-700 text-base mb-4">
                        Welcome to SecuroScanner, where we are dedicated to empowering individuals and organizations
                        with the tools they need to protect their digital identities. Based in the historic city of
                        Chichester, UK, our mission is to make cybersecurity accessible to everyone, everywhere. In a
                        world where online threats are ever-evolving, we provide a solution designed to offer peace of
                        mind and enhanced security without compromising on convenience.
                    </p>
                    <p class="text-gray-700 text-base mb-4">
                        We believe that protecting your online presence shouldn't be a luxury or a complex task. It
                        should be a straightforward, accessible practice for everyone. That's why SecuroScanner is free
                        to use, ensuring that no individual or organization is left vulnerable due to financial
                        constraints. Our approach is centered on providing a seamless experience that encourages the
                        adoption of better security habits, transforming the way people think about and manage their
                        digital security.
                    </p>
                    <p class="text-gray-700 text-base mb-4">
                        Based in Chichester, UK, we're proud to be part of a vibrant community and to serve users around
                        the world. Our local roots, combined with a global outlook, enable us to understand and address
                        the diverse needs of our users.
                    </p>
                    <p class="text-gray-700 text-base mb-4">
                        As we continue our journey, we invite you to join us in making online security a priority.
                        Whether you're an individual looking to protect your personal information or an organization
                        aiming to safeguard your operations, SecuroScanner is here to support you every step of the way.
                        Together, we can create a safer digital environment for everyone.
                    </p>
                    <!-- Call-to-action button -->
                    <div class="flex justify-center md:justify-center text-center">
                        <a href="signup.html"
                            class="px-6 py-2 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none mt-3">
                            Get started now
                        </a>
                    </div>
                </section>
            </div>

            <!-- Iframe and Logo -->
            <div class="md:w-1/2 p-4 flex flex-col items-center">
                <div class="logo w-full mb-4"></div>
                <iframe class="w-full" frameborder="0" style="border:0; height: 100%;" /* Adjust height as needed */
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5038.9032804465!2d-0.7790487523671474!3d50.84132033667779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48744d7d47c733ab%3A0x4fe7a9a44e3150fc!2sUniversity%20of%20Chichester!5e0!3m2!1sen!2suk!4v1708882649419!5m2!1sen!2suk"
                    allowfullscreen>
                </iframe>
            </div>

        </div>
    </main>

    <section class="bg-blue-900 text-white py-12">
        <div class="container mx-auto px-8 text-center">
            <div class="flex justify-around">
                <img src="assets/img/about/bottom-hero/hours.png" alt="Icon 1" class="h-36 w-auto bg-transparent">
                <img src="assets/img/about/bottom-hero/costs.png" alt="Icon 2" class="h-36 w-auto bg-transparent">
                <img src="assets/img/about/bottom-hero/limit.png" alt="Icon 3" class="h-36 w-auto bg-transparent">
            </div>
        </div>
    </section>

    <?php include ("assets/inc/footer/footer.html"); ?>
</body>

</html>
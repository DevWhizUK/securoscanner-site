<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | SecuroScanner</title>
    <?php include ("assets/inc/head-links.html"); ?>
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <?php include ("assets/inc/nav/nav.html"); ?>

    <header class="bg-blue-900 text-white text-center py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
            <!-- Text Container -->
            <div class="md:flex-1 md:pr-10">
                <h1 class="text-3xl font-bold mb-4 md:mb-0 text-left">The password manager you've always needed</h1>
                <p class="mb-8 text-left py-3">At home, at work, or on the go, SecuroScanner easily secures all your
                    passwords,
                    passkeys, and sensitive information.</p>
                <div class="flex justify-center md:justify-start">
                    <a href="signup.html"
                        class="bg-blue-600 text-white px-6 py-3 rounded-md text-lg font-medium hover:bg-blue-700 mr-4">Sign
                        Up!</a>
                    <a href="login.html"
                        class="border border-blue-600 text-blue-600 px-6 py-3 rounded-md text-lg font-medium hover:border-blue-700 hover:bg-white hover:text-blue-700">Login</a>
                </div>
            </div>
            <!-- Image Container -->
            <div class="md:flex-1 mt-5 md:mt-0 md:pl-40">
                <img src="assets/img/index/hero/isolated_tablet_laptop_and_smartphone_composition.png" alt="Hero Image"
                    class="max-w-xs md:max-w-lg mx-auto md:mx-0">
            </div>
        </div>
    </header>

    <!-- Feature Highlights -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-center text-4xl font-semibold mb-10">Everything you need out of a password manager</h2>
            <!-- Feature Columns -->
            <div class="flex flex-wrap justify-around items-center">
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-2">
                    <div class="text-center">
                        <img src="assets/img/index/features/clock.png" alt="Powerful Security"
                            class="mx-auto mb-4 h-auto w-24 sm:w-32 lg:w-40 xl:w-48" />
                        <h3 class="font-semibold mb-2">Powerful security within minutes</h3>
                        <p>For those who want to do more, secure more and collaborate more. SecuroScanner is fast and easy
                            to set up for
                            both individuals and businesses.</p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-2">
                    <div class="text-center">
                        <img src="assets/img/index/features/infinity.png" alt="Powerful Security"
                            class="mx-auto mb-4 h-auto w-24 sm:w-32 lg:w-40 xl:w-48" />
              <h3 class=" font-semibold mb-2">Powerful security within minutes</h3>
                        <p>For those who want to do more, secure more and collaborate more. SecuroScanner is fast and easy
                            to set up for
                            both individuals and businesses.</p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-2">
                    <div class="text-center">
                        <img src="assets/img/index/features/security.png" alt="Powerful Security"
                            class="mx-auto mb-4 h-auto w-24 sm:w-32 lg:w-40 xl:w-48" />
              <h3 class=" font-semibold mb-2">Powerful security within minutes</h3>
                        <p>For those who want to do more, secure more and collaborate more. SecuroScanner is fast and easy
                            to set up for
                            both individuals and businesses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Socials Callout with Image -->
    <section class="container mx-auto px-10 py-12">
        <div
            class="flex flex-col md:flex-row items-center bg-blue-900 text-white p-6 rounded-lg shadow-lg max-w-7.1xl mx-auto">
            <div class="md:flex-shrink-0">
                <img src="assets/img/index/callout/socials.png" alt="Feature Callout Image"
                    class="rounded-md mb-4 md:mb-0 w-48 md:w-64" />
            </div>
            <div class="flex-1 px-6">
                <h3 class="font-semibold text-xl">A high-wire balancing act: business innovation and data security</h3>
                <p class="mt-4 mb-10">The new ebook, Balancing Security and Innovation in the Age of AI presents
                    findings from a
                    recent survey of 700 IT professionals to help address the dilemma of balancing innovation while
                    staying
                    secure.</p>
                <a href="linktree.php"
                    class="mt-8 bg-blue-600 text-white px-6 py-3 rounded-md text-lg font-medium hover:bg-blue-700">Discover
                    more</a>
            </div>
        </div>
    </section>

    <?php include ("assets/inc/footer/footer.html"); ?>

</body>

</html>
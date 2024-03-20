<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Source | SecuroScanner</title>
    <?php include ("assets/inc/head-links.html"); ?>
</head>

<body class="bg-white text-gray-800">

    <?php include ("assets/inc/nav/nav.html"); ?>

    <!-- Hero -->
    <section class="bg-blue-900 text-white py-12 flex flex-col md:flex-row items-center justify-between mx-auto px-36">
        <div class="flex-1 flex flex-col items-center md:items-start py-10 px-4 md:px-10">
            <h1 class="text-4xl font-bold mb-4 text-center md:text-left">Our only secrets, are your passwords!</h1>
            <p class="mb-4 text-center md:text-left">The source code for SecuroScanner is openly available on GitHub,
                inviting everyone to review, audit, and contribute to its development.</p>
            <p class="mb-6 text-center md:text-left">At SecuroScanner, we hold the conviction that open source is a
                critical
                component of our identity and mission. This commitment to openness ensures that our community can
                actively
                participate in enhancing and securing the SecuroScanner platform, reinforcing our dedication to building
                a
                safer digital world together.</p>
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Check out SecuroScanner on Github
            </button>
        </div>
        <div class="flex-1 flex justify-center md:justify-end px-4 md:px-16">
            <img src="assets/img/open-source/open-source.png" alt="" class="w-auto h-auto max-h-96 object-cover">
        </div>
    </section>

    <div class="container mx-auto px-4 ">
        <section class="py-10">
            <h2 class="text-3xl font-bold text-center mb-10">GitHub Code Repositories</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Server -->
                <div
                    class="text-center text-white p-6 shadow-md rounded-lg bg-blue-900 hover:scale-105 ease-in-out duration-300">
                    <a href="#">
                        <img class="block h-40 mx-auto mb-4" src="assets/img/open-source/git/data.png" alt="">
                        <h3 class="font-semibold mb-2 text-white">Database</h3>
                        <p>The SecuroScanner Server project encompasses the databaseand comprehensive documentation
                            necessary for the 'backend' operations of all SecuroScanner client applications. </p>
                    </a>
                </div>
                <!-- Browser -->
                <div
                    class="text-center p-6 shadow-md rounded-lg bg-blue-900 text-white hover:scale-105 ease-in-out duration-300">
                    <a href="#">
                        <img class="block h-40 mx-auto mb-4" src="assets/img/open-source/git/web.png" alt="">
                        <h3 class="font-semibold mb-2">Browser</h3>
                        <p>
                            The SecuroScanner Web Project houses the codebase for both the website and web app versions
                            of
                            SecuroScanner, serving as the foundation for our online presence and user interface.</p>
                    </a>
                </div>
                <!-- Web -->
                <div
                    class="text-center p-6 shadow-md rounded-lg bg-blue-900 text-white hover:scale-105 ease-in-out duration-300">
                    <a href="#">
                        <img class="block h-40 mx-auto mb-4" src="assets/img/open-source/git/mobile.png" alt="">
                        <h3 class="font-semibold mb-2">Mobile</h3>
                        <p>The SecuroScanner Mobile Project, is the repository for the mobile version of the
                            SecuroScanner
                            app. This project leverages Flutter's framework to deliver a cross-platform mobile
                            application .
                        </p>
                    </a>
                </div>
            </div>
        </section>

        <section
            class="bg-blue-900 text-white py-12 flex flex-col md:flex-row items-center justify-between mx-auto px-36 rounded-lg mb-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4">Community</h2>
                <p class="mb-6">Join us in our Gitter chat channel to talk directly with SecuroScanner developers about
                    code
                    contributions or swing by our Facebook to ask questions or discuss product features.</p>
                <a href=""
                    class="button-style bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500 font-bold py-2 px-4 rounded border border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2 mr-6">
                    Gitter Chat
                </a>
                <a href="https://www.facebook.com/profile.php?id=61556597019147"
                    class="bbutton-style bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500 font-bold py-2 px-4 rounded border border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2">
                    Facebook
                </a>
            </div>
        </section>
    </div>

    <?php include ("assets/inc/footer/footer.html"); ?>

</body>

</html>
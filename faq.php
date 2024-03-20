<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ's | SecuroScanner</title>
    <?php include ("assets/inc/head-links.html"); ?>
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <?php include ("assets/inc/nav/nav.html"); ?>

    <!-- Title Area -->
    <section class="bg-blue-900 text-white py-12">
        <div class="container mx-auto px-8 text-center">
            <h1 class="text-4xl font-bold mb-2">Frequently Asked Questions</h1>
            <p class=" text-white">Find out what other customers where curious about, and if your questions aren't
                answered here, feel free to ask using the form at the bottom and we'll get back to you ASAP!</p>
        </div>
    </section>

    <!-- Accordion Items -->
    <div class="container mx-auto px-4 py-8">
        <div id="faq" class="space-y-3">
            <div class="border-b">
                <h3 class="font-semibold p-3 cursor-pointer text-blue-900" onclick="toggleAccordion(this)">What is
                    SecuroScanner?</h3>
                <div class="hidden p-3">
                    <p>SecuroScanner is a free password manager designed to help users generate, store, and manage their
                        passwords securely. Our platform encourages stronger and better security practices, such as
                        using unique, randomly generated passwords for every account.</p>
                </div>
            </div>
            <div class="border-b">
                <h3 class="font-semibold p-3 cursor-pointer text-blue-900" onclick="toggleAccordion(this)">How does
                    SecuroScanner enhance my online security?</h3>
                <div class="hidden p-3">
                    <p>By providing an easy-to-use platform for managing your passwords, SecuroScanner ensures that each
                        of your accounts has a strong, unique password. This significantly reduces the risk of security
                        breaches and identity theft.</p>
                </div>
            </div>
            <div class="border-b">
                <h3 class="font-semibold p-3 cursor-pointer text-blue-900" onclick="toggleAccordion(this)">Is
                    SecuroScanner really free?</h3>
                <div class="hidden p-3">
                    <p>Yes, SecuroScanner is completely free. Our mission is to make online security accessible to
                        everyone, ensuring that every user has the tools they need to protect their digital identity
                        without cost being a barrier.</p>
                </div>
            </div>
            <div class="border-b">
                <h3 class="font-semibold p-3 cursor-pointer text-blue-900" onclick="toggleAccordion(this)">Can I use
                    SecuroScanner on multiple devices?</h3>
                <div class="hidden p-3">
                    <p>Absolutely! SecuroScanner is designed to work across multiple devices, allowing you to access
                        your passwords anytime, anywhere, whether you're on your phone, tablet, or computer.</p>
                </div>
            </div>
            <div class="border-b">
                <h3 class="font-semibold p-3 cursor-pointer text-blue-900" onclick="toggleAccordion(this)">How does
                    SecuroScanner store my passwords securely?</h3>
                <div class="hidden p-3">
                    <p>SecuroScanner uses advanced encryption algorithms to secure your passwords. Your data is
                        encrypted on your device before it's ever sent to our servers, ensuring that only you can access
                        your information.</p>
                </div>
            </div>
            <div class="border-b">
                <h3 class="font-semibold p-3 cursor-pointer text-blue-900" onclick="toggleAccordion(this)">What happens
                    if I forget my SecuroScanner master password?</h3>
                <div class="hidden p-3">
                    <p>Your master password is the key to accessing your vault. We do not store your master password on
                        our servers, so it's crucial to remember it.</p>
                </div>
            </div>
            <div class="border-b">
                <h3 class="font-semibold p-3 cursor-pointer text-blue-900" onclick="toggleAccordion(this)">Can I import
                    passwords from other password managers or browsers into SecuroScanner?</h3>
                <div class="hidden p-3">
                    <p>Unfortunatly, we're not quite there yet. However, this feature is in development and we will
                        notify all users once it's avaliable.</p>
                </div>
            </div>
            <div class="border-b">
                <h3 class="font-semibold p-3 cursor-pointer text-blue-900" onclick="toggleAccordion(this)">How can I
                    ensure my SecuroScanner account remains secure?</h3>
                <div class="hidden p-3">
                    <p>In addition to using a strong master password, we recommend regularly updating your passwords and
                        reviewing your security settings </p>
                </div>
            </div>
            <div class="border-b">
                <h3 class="font-semibold p-3 cursor-pointer text-blue-900" onclick="toggleAccordion(this)">Does
                    SecuroScanner have a feature for generating strong passwords?</h3>
                <div class="hidden p-3">
                    <p>Yes, SecuroScanner includes a password generator that can create strong, unique passwords for
                        you. You can customize the length and complexity of these passwords according to your needs.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us Section -->
    <div class="container mx-auto px-4 py-8">
        <h2 class="font-semibold text-lg mb-4 text-center">CONTACT US - GENERAL QUESTIONS/FEEDBACK</h2>
        <?php include ("assets/php/contact-form.php"); ?>
    </div>

    <?php include ("assets/inc/footer/footer.html"); ?>

    <script src="assets/js/faq.js"></script>
    
</body>

</html>
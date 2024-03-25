<nav class="bg-white text-gray-600 p-4 border-b-2 border-blue-800">
    <div class="flex justify-between items-center w-full px-4">
        <!-- Logo Section -->
        <a href="index.php" class="text-blue-800 hover:text-blue-500">
            <span class="font-bold">SecuroScanner</span>
        </a>
        <!-- Navigation Links for Medium and Larger Screens -->
        <div class="hidden md:flex items-center space-x-1">
            <a href="index.php" class="py-5 px-3 hover:text-blue-500">Home</a>
            <a href="about.php" class="py-5 px-3 hover:text-blue-500">About</a>
            <a href="download.php" class="py-5 px-3 hover:text-blue-500">Download</a>
            <a href="mission.php" class="py-5 px-3 hover:text-blue-500">Our Mission</a>
            <!-- Dropdown for Help Section -->
            <div class="relative group">
                <button class="py-5 px-3 hover:text-blue-800">Help <strong>v</strong></button>
                <div class="absolute hidden group-hover:block bg-blue-800 text-white py-2 mt-[2px] rounded-lg"
                    style="width: 200px;">
                    <a href="coming-soon.php" class="block px-4 py-2 hover:bg-blue-700">App Troubleshooting</a>
                    <a href="faq.php" class="block px-4 py-2 hover:bg-blue-700">FAQ</a>
                    <a href="contact.php" class="block px-4 py-2 hover:bg-blue-700">Contact Us</a>
                </div>
            </div>
            <a href="faq.php" class="py-5 px-3 mr-10 hover:text-blue-500">FAQ</a>
            <!-- Search Section -->
            <div class="flex items-center" style="margin-left: 50px;">
                <input type="search" placeholder="Search..."
                    class="bg-gray-100 py-2 pl-4 rounded-l-lg text-black focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <button
                    class="bg-blue-800 py-2 px-4 rounded-r-lg text-white focus:outline-none hover:bg-blue-600 transition-colors">Go</button>
            </div>
        </div>
        <!-- Login Button for Medium and Larger Screens / User Dropdown if Logged In -->
        <div class="hidden md:block">
            <?php
    // Check if the user is logged in by checking a session variable (e.g., user_name)
    if (isset($_SESSION['user_name'])) {
        $userName = $_SESSION['user_name']; // Assuming you store user's name in session
        echo '<div class="relative group">';
        echo '<button class="bg-blue-800 py-2 px-4 rounded-lg text-white focus:outline-none hover:bg-blue-600 transition-colors">' . htmlspecialchars($userName) . ' <strong>v</strong></button>';
        // Dropdown menu
        echo '<div class="absolute hidden group-hover:block bg-blue-800 text-white py-2 mt-[2px] rounded-lg" style="width: 200px;">';
        echo '<a href="profile.php" class="block px-4 py-2 hover:bg-blue-700">Profile</a>';
        echo '<a href="settings.php" class="block px-4 py-2 hover:bg-blue-700">Settings</a>';
        echo '<a href="logout.php" class="block px-4 py-2 hover:bg-blue-700">Logout</a>';
        echo '</div>';
        echo '</div>';
    } else {
        // Show login button if not logged in
        echo '<button onclick="location.href=\'login.php\';" class="bg-blue-800 py-2 px-4 rounded-lg text-white focus:outline-none hover:bg-blue-600 transition-colors">Login</button>';
    }
    ?>
        </div>

        <!-- Hamburger Menu for Small Screens -->
        <div class="md:hidden flex items-center">
            <button class="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden mt-2">
        <?php if (isset($_SESSION['user_name'])): ?>
        <div class="user-dropdown">
            <button class="dropdown-toggle block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white w-full text-left">
                <?= htmlspecialchars($_SESSION['user_name']); ?> <svg class="w-5 h-5 inline-block ml-2" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="dropdown-content hidden">
                <a href="profile.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">Profile</a>
                <a href="settings.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">Settings</a>
                <a href="logout.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">Logout</a>
            </div>
        </div>
        <?php endif; ?>
        <a href="index.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">Home</a>
        <a href="about.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">About</a>
        <a href="download.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">Download</a>
        <a href="mission.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">Our Mission</a>
        <!-- Dropdown for Help Section in Mobile Menu -->
        <div>
            <button class="dropdown-toggle block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white w-full text-left"
                type="button">
                Help <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="dropdown-content hidden">
                <a href="coming-soon.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">App
                    Troubleshooting</a>
                <a href="faq.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">FAQ</a>
                <a href="contact.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">Contact Us</a>
            </div>
        </div>
        <a href="faq.php" class="block py-2 px-4 text-sm hover:bg-blue-800 hover:text-white">FAQ</a>

    </div>
</nav>

<script src="assets/js/nav.js"></script>
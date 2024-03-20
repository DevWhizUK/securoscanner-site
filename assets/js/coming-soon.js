(function() {
    var countdownElement = document.getElementById('countdown');
    var countdownTime = 10; // seconds

    var intervalId = setInterval(function() {
        countdownTime--;
        countdownElement.textContent = countdownTime;

        if (countdownTime <= 0) {
            clearInterval(intervalId);
            window.history.back(); // Go back to the previous page
        }
    }, 1000);
})();
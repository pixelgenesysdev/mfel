

    window.addEventListener("load", function () {
    // Fade out loader
    const loader = document.getElementById("loader");
    loader.style.opacity = "0";
    setTimeout(() => {
        loader.style.display = "none";

        // Animate elements
        document.querySelector(".animate-header").classList.add("show");
        document.querySelector(".animate-sidebar").classList.add("show");
        document.querySelector(".animate-content").classList.add("show");
        document.querySelector(".animate-sidebar2").classList.add("show");
    }, 500);
    });


    // Function to show the success popup for stepform

    function showTaskDonestepform() {
        const popup = document.getElementById('success-popup');
         // Change the popup message (optional)
        document.querySelector('#success-popup .popup-message').textContent = "All Doness Of this Task!";
        popup.classList.add('active');

        document.getElementById('success-ok-btn').addEventListener('click', function () {
            popup.classList.remove('active');
            // Optional: redirect or do anything after OK
            window.location.href = "dashboard.php";
        });
    }

    // Function to show the success popup for Contact form

    function ShowContactFormPopup() {
        const popup = document.getElementById('success-popup');
         // Change the popup message (optional)
        document.querySelector('#success-popup .popup-message').textContent = "Contact form submitted successfully!";
        popup.classList.add('active');

        document.getElementById('success-ok-btn').addEventListener('click', function () {
            popup.classList.remove('active');
            // Optional: redirect or do anything after OK
            window.location.href = "dashboard.php";
        });
    }

    // Function to show the success popup for Add Goals form
    function ShowAddGoalsFormPopup() {
        const popup = document.getElementById('success-popup');
         // Change the popup message (optional)
        document.querySelector('#success-popup .popup-message').textContent = "Goals form submitted successfully!";
        document.querySelector('#success-popup #success-ok-btn').textContent = "View Goals";
        popup.classList.add('active');


        document.getElementById('success-ok-btn').addEventListener('click', function () {
            popup.classList.remove('active');
            // Optional: redirect or do anything after OK
            window.location.href = "goals.php";
        });
    }

  // Function to show the success popup for Logout form

    function ShowLogoutSuccessPopup() {
        const popup = document.getElementById('logout_success-popup');
         // Change the popup message (optional)
        // document.querySelector('#logout_success-popup .logout_popup-message').textContent = "Contact form submitted successfully!";
        popup.classList.add('active');

     
    }






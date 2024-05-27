// File: ../js/admin-script.js
document.addEventListener("DOMContentLoaded", function() {
    var dropdownToggles = document.querySelectorAll(".dropdown-toggle");
    var sidebarToggle = document.getElementById("sidebarToggle");
    var sidebar = document.querySelector(".sidebar");
    var mainContent = document.querySelector(".main-content");

    dropdownToggles.forEach(function(toggle) {
        toggle.addEventListener("click", function() {
            var dropdownMenu = this.nextElementSibling;
            if (dropdownMenu.style.display === "none" || !dropdownMenu.style.display) {
                dropdownMenu.style.display = "block";
            } else {
                dropdownMenu.style.display = "none";
            }
        });
    });

    sidebarToggle.addEventListener("click", function() {
        sidebar.classList.toggle("sidebar-hidden");
        mainContent.classList.toggle("content-expanded");
    });
});

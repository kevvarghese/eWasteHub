document.addEventListener("DOMContentLoaded", function () {
    const authButton = document.getElementById("authButton");
    const isLoggedIn = localStorage.getItem("userLoggedIn");

    if (isLoggedIn) {
        authButton.textContent = "Logout";
        authButton.href = "#";
        
        authButton.addEventListener("click", function (e) {
            e.preventDefault();
            localStorage.removeItem("userLoggedIn");
            window.location.href = "./homepage.html";
        });
    }
});

// Handle Login Submission
const loginForm = document.getElementById("loginForm");
if (loginForm) {
    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();
        localStorage.setItem("userLoggedIn", "true");
        window.location.href = "./dashboard.html";
    });
}


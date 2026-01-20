const form = document.getElementById("contactForm");
const status = document.getElementById("status");

form.addEventListener("submit", function () {
    status.innerText = "Sending message...";
});

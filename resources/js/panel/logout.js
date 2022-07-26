var logoutBtn = document.getElementById("logoutBtn"),
    logoutForm = document.getElementById("logoutForm");

logoutBtn.addEventListener("click", function () {
    logoutForm.submit();
});

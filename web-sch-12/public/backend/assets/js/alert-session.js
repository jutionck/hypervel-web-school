// Tunggu hingga halaman selesai dimuat
document.addEventListener("DOMContentLoaded", function () {
    const alerts = document.querySelectorAll(".alert");
    setTimeout(() => {
        alerts.forEach((alert) => {
            alert.style.transition = "opacity 0.5s ease-out";
            alert.style.opacity = "0";
            setTimeout(() => {
                alert.remove();
            }, 500);
        });
    }, 5000);
});

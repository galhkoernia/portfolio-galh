// * Port Folio GALH KURNIA * //
document.addEventListener("DOMContentLoaded", () => {
    const heroText = document.querySelector(".hero-text");
    if (heroText) {
        heroText.classList.add("fade-in");
    }
});

// * FOTO SECTION ABOUT US FOTO 1 & 2 * //
function previewImage(input, previewId) {
    const file = input.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const preview = document.getElementById(previewId);
            if (preview) {
                preview.src = e.target.result;
                preview.style.display = 'inline-block';
            }
        };
        reader.readAsDataURL(file);
    }
}

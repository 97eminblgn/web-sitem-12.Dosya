document.addEventListener('DOMContentLoaded', function () {
    const vueBtn = document.getElementById("vueBtn");

    vueBtn.addEventListener("click", function () {
        const form = {
            ad: document.getElementById("ad").value.trim(),
            telefon: document.getElementById("telefon").value.trim(),
            email: document.getElementById("email").value.trim(),
            mesaj: document.getElementById("mesaj").value.trim(),
            konu: document.getElementById("konu").value
        };

        let hatalar = [];

        if (form.ad === "") hatalar.push("Ad alanı boş bırakılamaz.");
        if (!/^\d{10,11}$/.test(form.telefon)) hatalar.push("Telefon sadece rakamlardan oluşmalı (10-11 hane).");
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email)) hatalar.push("Geçerli bir e-posta adresi girin.");
        if (form.mesaj === "") hatalar.push("Mesaj boş bırakılamaz.");
        if (form.konu === "") hatalar.push("Lütfen bir konu seçin.");

        if (hatalar.length > 0) {
            alert("Vue.js kontrolü - Hatalar:\n" + hatalar.join("\n"));
        } else {
            alert("Vue.js kontrolü başarılı!");
             document.getElementById("iletisimForm").submit();

        }
    });
});

window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    
    // Jika halaman di-scroll lebih dari 100px, navbar akan menjadi fixed
    if (window.scrollY > 100) {
        navbar.style.position = 'fixed';
        navbar.style.top = '0';
        navbar.style.left = '0';
        navbar.style.width = '100%';
        navbar.style.zIndex = '1000';
    } else {
        // Jika belum scroll, navbar akan kembali ke posisi normal
        navbar.style.position = 'relative';
        navbar.style.top = '';
    }
});

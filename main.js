// Dapatkan semua elemen <section> dan tautan navigasi di dalam header
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

// Fungsi yang akan dijalankan saat pengguna menggulir halaman
window.onscroll = () => {
    // Dapatkan posisi vertikal halaman saat ini
    let scrollPosition = window.scrollY;

    // Loop melalui setiap elemen <section>
    sections.forEach(section => {
        let sectionTop = section.offsetTop - 150; // Posisi atas elemen <section> dikurangi 150px
        let sectionHeight = section.offsetHeight; // Tinggi elemen <section>
        let sectionId = section.getAttribute('id'); // Dapatkan ID elemen <section>

        // Jika posisi scroll berada di dalam jangkauan elemen <section>
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            // Loop melalui setiap tautan navigasi dan hapus kelas 'active'
            navLinks.forEach(link => {
                link.classList.remove('active');
            });

            // Tambahkan kelas 'active' pada tautan yang sesuai dengan ID elemen <section>
            document.querySelector(`header nav a[href*=${sectionId}]`).classList.add('active');
        }
    });
};


var input = document.getElementById("form");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("submit").click();
  }
});


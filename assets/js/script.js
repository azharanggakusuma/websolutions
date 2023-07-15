// Menentukan waktu delay dan indeks kartu saat ini
var delay = 5000; // 5 detik
var currentCardIndex = 1; // Kartu pertama yang akan ditampilkan

// Fungsi untuk mengganti kartu secara otomatis
function changeCard() {
  // Mengubah tampilan kartu saat ini menjadi tersembunyi
  document.getElementById("card" + currentCardIndex).style.display = "none";

  // Mengupdate indeks kartu saat ini
  currentCardIndex = (currentCardIndex % 5) + 1;

  // Menampilkan kartu berikutnya
  document.getElementById("card" + currentCardIndex).style.display = "block";
}

// Memanggil fungsi changeCard setelah waktu delay
setTimeout(function () {
  changeCard();
  setInterval(changeCard, delay);
}, delay);

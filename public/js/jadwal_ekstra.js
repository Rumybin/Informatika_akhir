document.addEventListener('DOMContentLoaded', () => {
    // Mendapatkan elemen tempat menampilkan ekstrakurikuler aktif
    const aktifEkstraElem = document.getElementById('aktif-ekstra');

    // Mengambil data ekstrakurikuler aktif hari ini dari server
    fetch('/ekstra/hariini')
        .then(response => response.json())
        .then(data => {
            data.forEach(ekstra => {
                const li = document.createElement('li');
                const a = document.createElement('a');
                
                // Gunakan tanda kurung siku untuk mengakses properti dengan spasi
                a.href = `ekstrakurikuler.html?ekstra=${ekstra['Nama ekstrakurikuler']}`;
                a.textContent = ekstra['Nama ekstrakurikuler'].toUpperCase(); // Menampilkan nama ekstrakurikuler dalam format huruf besar
                
                li.appendChild(a);
                aktifEkstraElem.appendChild(li);
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });

    console.log(data); // Untuk melihat data yang diterima dari server
});

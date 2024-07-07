
// Ketika tombol "Hapus" ditekan
document.getElementById("hapusOrderBtn").addEventListener("click", function() {
    // Ambil semua checkbox yang dicentang
    var checkboxes = document.querySelectorAll('#orderStatusTable tbody input[type="checkbox"]:checked');

    checkboxes.forEach(function(checkbox) {
        var row = checkbox.closest('tr'); // Temukan baris terdekat yang mengandung checkbox ini
        var totalRow = row.querySelector('td:last-child').innerText;
        var total = parseFloat(totalRow.replace('Rp. ', '').replace(',', ''));

        // Kurangi dari subtotal
        subtotal -= total;

        row.remove(); // Hapus baris dari DOM
    });

    // Hitung ulang pajak dan total akhir setelah pengurangan
    var pajak = subtotal * 0.11;
    var totalAkhir = subtotal + pajak;

    // Tampilkan kembali subtotal, pajak, dan total akhir di UI
    document.getElementById("subtotal").innerText = 'Rp. ' + subtotal.toLocaleString('id-ID');
    document.getElementById("pajak").innerText = 'Rp. ' + pajak.toLocaleString('id-ID');
    document.getElementById("totalAkhir").innerText = 'Rp. ' + totalAkhir.toLocaleString('id-ID');
});


// Checkbox untuk memilih semua
document.getElementById("checkAll").addEventListener("change", function() {
    var checkboxes = document.querySelectorAll('#orderStatusTable tbody input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = document.getElementById("checkAll").checked;
    });

    // Hitung ulang subtotal, pajak, dan total akhir
    subtotal = total;

    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            var row = checkbox.closest('tr');
            var totalRow = row.querySelector('td:last-child').innerText;
            var total = parseFloat(totalRow.replace('Rp. ', '').replace(',', ''));
            subtotal += total;
        }
    });

    var pajak = subtotal * 0.11;
    var totalAkhir = subtotal + pajak;

    // Tampilkan kembali subtotal, pajak, dan total akhir di UI
    document.getElementById("subtotal").innerText = 'Rp. ' + subtotal.toLocaleString('id-ID');
    document.getElementById("pajak").innerText = 'Rp. ' + pajak.toLocaleString('id-ID');
    document.getElementById("totalAkhir").innerText = 'Rp. ' + totalAkhir.toLocaleString('id-ID');
});



        
            // Ketika tombol "Pesan Menu" di modal ditekan
            document.getElementById("pesanMenuBtn").addEventListener("click", function() {
                var menu = document.getElementById("data-menu").innerText;
                var harga = document.getElementById("data-harga").innerText;
                var quantity = document.getElementById("quantity").value;

                var total = harga * quantity;

                // Tambahkan ke subtotal
                subtotal += total;

                // Tampilkan subtotal di UI jika diperlukan
                // Misalnya: document.getElementById("subtotal").innerText = 'Rp. ' + subtotal.toFixed(2);

                // Hitung pajak (11%)
                var pajak = subtotal * 0.11;

                // Hitung total akhir
                var totalAkhir = subtotal + pajak;

                // Lakukan pengiriman data dengan AJAX ke endpoint yang sesuai
                $.ajax({
                    type: 'POST'
                    , url: '{{ route("pembayaran.store") }}', // Ganti dengan route yang benar untuk menyimpan order
                    data: {
                        menu: menu
                        , harga: harga
                        , quantity: quantity
                        , _token: '{{ csrf_token() }}'
                    }
                    , success: function(response) {
                        // Handle success: bisa update tampilan order status di sini
                        // Misalnya, tambahkan baris baru ke tabel order status
                        var newRow = '<tr>' +
                            '<td><input class="form-check-input ms-0" type="checkbox"></td>' +
                            '<td>' + menu + '</td>' +
                            '<td>Rp. ' + harga + '</td>' + // Ganti dengan harga yang sesuai
                            '<td>' + quantity + '</td>' +
                            '<td>Rp. ' + total + '</td>' + // Ganti dengan perhitungan total yang sesuai
                            '</tr>';
                        $('#orderStatusTable tbody').append(newRow);


                        // Format angka menjadi string dengan dua angka di belakang koma dan menggunakan pemisah ribuan
                        var formattedSubtotal = subtotal.toLocaleString('id-ID', {
                            maximumFractionDigits: 2
                        });
                        var formattedPajak = pajak.toLocaleString('id-ID', {
                            maximumFractionDigits: 2
                        });
                        var formattedTotalAkhir = totalAkhir.toLocaleString('id-ID', {
                            maximumFractionDigits: 2
                        });

                        // Menampilkan hasilnya di UI
                        document.getElementById("subtotal").innerText = 'Rp. ' + formattedSubtotal;
                        document.getElementById("pajak").innerText = 'Rp. ' + formattedPajak;
                        document.getElementById("totalAkhir").innerText = 'Rp. ' + formattedTotalAkhir;



                        // Tutup modal setelah berhasil memproses
                        $('#myModal').modal('hide');
                    }
                    , error: function(xhr) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
            });

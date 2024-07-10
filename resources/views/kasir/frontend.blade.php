        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>POS</title>
            <!--favicon-->
            {{-- <link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png"> --}}
            <!-- loader-->
            <link href="    assets/css/pace.min.css')}}" rel="stylesheet">
            <script src="{{asset('backend/assets/js/pace.min.js')}}"></script>

            <!--plugins-->
            <link href="{{asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/metismenu/metisMenu.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/metismenu/mm-vertical.css')}}">
            <link href="{{asset('backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
            <!--bootstrap css-->
            <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
            <!--main css-->
            <link href="{{asset('backend/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
            <link href="{{asset('backend/sass/main.css')}}" rel="stylesheet">
            <link href="{{asset('backend/sass/dark-theme.css')}}" rel="stylesheet">
            <link href="{{asset('backend/sass/blue-theme.css')}}" rel="stylesheet">
            <link href="{{asset('backend/sass/semi-dark.css')}}" rel="stylesheet">
            <link href="{{asset('backend/sass/bordered-theme.css')}}" rel="stylesheet">
            <link href="{{asset('backend/sass/responsive.css')}}" rel="stylesheet">
        </head>
        <body class="bg-primary" style="overflow-x: hidden;">
            <div class="main-content">
                <div class="card bg-primary" style="margin-bottom: 0.4rem">
                    <div class="card-body">
                        <div class="d-flex align-items-lg-center justify-content-between gap-3">
                            <div class="flex-grow-1" style="margin-left: 20px">
                                <h1 class="fw-bold pl text-light">KASIR</h1>
                            </div>
                            <h5 class="user-name mb-0 fw-bold text-light">{{ Auth::user()->name}}</h5>
                            <li class="nav-item dropdown" style="list-style:none;">
                                <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                    <img src="https://placehold.co/110x110/png" class="rounded-circle p-1" width="40" height="40" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="material-icons-outlined">power_settings_new</i>Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8 d-flex" style="margin-left:0.5rem;margin-top: -1rem">
                        <div class="card w-100 ">
                            <div class="card-body">
                                <nav class="navbar navbar-expand align-items-center gap-4">
                                    <h2 class="fw-bold" style="margin-left: 20px">Kategori</h2>
                                    <div class="search-bar flex-grow-1" style="padding-left: 30rem">
                                        <div class="position-relative">
                                            <input id="searchInput" class="form-control rounded-5 px-5 search-control" type="search" placeholder="Cari Menu">
                                            <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                                        </div>
                                    </div>

                                </nav>
                                <hr>
                                <div class="product-table">
                                    <div class="table-responsive">
                                        <div style=" overflow-x: hidden; overflow-y: scroll; width:100%px; height:380px; padding-left:50px; border:1px solid white">
                                            <div class="row row-cols-1 row-cols-xl-5">
                                                <!-- Tambahkan event listener pada gambar di dalam loop foreach -->
                                                @foreach ($menu as $data)
                                                <div class="card">
                                                    <div class="img-hover-zoom" onclick="tampilkanInfo('{{ $data->menu }}', {{ $data->harga }})">
                                                        <img src="{{ asset('images/menu/' . $data->gambar) }}">
                                                    </div>
                                                    <div class="pt-3">
                                                        <div class="d-flex justify-content-between">
                                                            <p class="card-text">{{ $data->menu }}</p>
                                                            <p class="kategori">{{ $data->kategori->nama_kategori }}</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <p class="fw-semi-bold"></p>
                                                            <p class="card-text">Rp. {{ $data->harga }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach


                                            </div>
                                        </div>
                                        <hr>
                                        {{-- kategori --}}
                                        <div class="card-body">
                                            <div style=" overflow-x: scroll; overflow-y: hidden; width:100%px; padding-bottom:1rem; border:1px solid white">
                                                <div class="row row-cols-auto g-4 justify-content-space-between">
                                                    @foreach ($kategori as $data)
                                                    <div class="col">
                                                        <button type="button" class="btn btn-secondary px-5 p-4" onclick="tampilkanMenu('{{ $data->nama_kategori }}')">{{ $data->nama_kategori }}</button>
                                                    </div>
                                                    @endforeach
                                                    <div class="col">
                                                        <button type="button" class="btn btn-secondary px-5 p-4" onclick="resetKategori()">Tampilkan semua kategori</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End Kategori --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex" style="margin-left:-1rem;margin-top: -1rem">
                        <div class="w-100">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4 fw-bold">Pesanan</h4>
                                    <div style=" overflow-x: hidden; overflow-y: scroll; width:100%px; height:274px; border:1px solid white ">
                                        <table id="orderStatusTable" class="table align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>
                                                        <input class="form-check-input ms-0" type="checkbox" id="selectAllCheckbox">
                                                    </th>
                                                    <th>Menu</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- untuk isinya ada pada JS -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="btn btn-danger px-5" onclick="hapusPesanan()">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <p class="fw-semi-bold">Subtotal :</p>
                                            <p class="fw-semi-bold" id="subtotal">Rp. 0</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="fw-semi-bold">Pajak :</p>
                                            <p class="fw-semi-bold" id="pajak">Rp. 0</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between border-top pt-4">
                                        <h5 class="mb-0 fw-bold">Total :</h5>
                                        <h5 class="mb-0 fw-bold" id="totalAkhir">Rp. 0</h5>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row row-cols-auto g-4 justify-content-space-between">
                                        <div class="col">
                                            <button type="button" class="btn btn-primary px-5">Baru</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-primary px-5">Rekapan</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#BayarModal">Bayar</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- modal pembayaran--}}
                                <div class="modal fade" id="BayarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onclick="tampilkanDetailPesanan()">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <nav class="bg-primary">
                                                <div class="modal-header border-bottom-0 py-2">
                                                    <h5 class="modal-title text-light">Pembayaran</h5>
                                                    <button type="button" class="btn-close close" aria-label="Close"></button>
                                                </div>
                                            </nav>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-0 fw-bold">Nama Menu</h5>
                                                        <h5 class="mb-0 fw-bold" id="detailMenu"></h5>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-0 fw-bold">Subtotal</h5>
                                                        <h5 class="mb-0 fw-bold" id="detailSubtotal">Rp. 0</h5>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-0 fw-bold">Pajak</h5>
                                                        <h5 class="mb-0 fw-bold" id="detailPajak">Rp. 0</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-0 fw-bold">Total :</h5>
                                                        <h5 class="mb-0 fw-bold" id="detailTotal">Rp. 0</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-between pt-4">
                                                        <h5 class="mb-0 fw-bold">Bayar :</h5>
                                                        <h5 class="mb-0 fw-bold">
                                                            <input type="number" class="form-control" id="inputBayar" placeholder="Masukkan jumlah uang">
                                                        </h5>
                                                    </div>
                                                    <div style="margin-left:22.5rem;" class="pt-2">
                                                        <button type="button" class="btn btn-primary" id="prosesBayarBtn" onclick="prosesBayar()">Proses</button>
                                                    </div>
                                                    <div class="d-flex justify-content-between pt-4">
                                                        <h5 class="mb-0 fw-bold">Kembalian :</h5>
                                                        <h5 class="mb-0 fw-bold" id="kembalian">Rp. 0</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <hr>
                                            <div class="modal-footer border-top-0">
                                                <button type="button" class="btn btn-primary" id="prosesBayarBtn">Bayar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--End modal pembayaran--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </main>
            {{-- Js.Modal --}}

            <script>
                // Fungsi untuk menampilkan informasi di tabel pesanan
                function tampilkanInfo(menu, harga) {
                    var jumlah = 1; // Default jumlah saat pertama kali menambahkan ke pesanan
                    var total = harga * jumlah;

                    // Periksa apakah menu sudah ada di dalam tabel pesanan
                    var table = document.getElementById("orderStatusTable");
                    var rows = table.getElementsByTagName("tr");
                    var menuExists = false;

                    // Mulai dari baris kedua karena baris pertama adalah header
                    for (var i = 1; i < rows.length; i++) {
                        var row = rows[i];
                        var menuCell = row.cells[1]; // Kolom kedua (index 1) berisi teks menu
                        var existingMenu = menuCell.innerText.trim(); // Ambil teks menu dan hapus spasi di awal dan akhir

                        // Jika menu sudah ada, atur flag dan keluar dari loop
                        if (existingMenu.toLowerCase() === menu.toLowerCase()) {
                            menuExists = true;
                            break;
                        }
                    }

                    // Jika menu belum ada, tambahkan ke dalam tabel
                    if (!menuExists) {
                        var tableBody = table.getElementsByTagName('tbody')[0];
                        var newRow = tableBody.insertRow();

                        // Isi baris baru dengan informasi menu, harga, jumlah, dan total
                        newRow.innerHTML = '<td><input class="form-check-input ms-0" type="checkbox"></td>' +
                            '<td>' + menu + '</td>' +
                            '<td>Rp. ' + harga.toLocaleString('id-ID') + '</td>' +
                            '<td><button class="btn btn-sm btn-outline-primary" onclick="kurangJumlah(this)">-</button> ' +
                            '<span class="jumlah-item">1</span> ' +
                            '<button class="btn btn-sm btn-outline-primary" onclick="tambahJumlah(this)">+</button></td>' +
                            '<td>Rp. ' + total.toLocaleString('id-ID') + '</td>';

                        // Hitung kembali subtotal, pajak, dan total akhir
                        updateTotal();
                    } else {
                        // Jika menu sudah ada, mungkin tampilkan pesan atau tidak melakukan apa-apa
                        alert('Menu sudah ada dalam pesanan!');
                    }
                }

                // Fungsi untuk mengurangi jumlah item
                function kurangJumlah(button) {
                    var row = button.parentNode.parentNode; // Dapatkan baris (row) yang mengandung tombol
                    var jumlahElement = row.querySelector('.jumlah-item');
                    var jumlah = parseInt(jumlahElement.textContent);

                    if (jumlah > 1) {
                        jumlah--;
                        jumlahElement.textContent = jumlah;
                        updateTotal();
                    }
                }

                // Fungsi untuk menambah jumlah item
                function tambahJumlah(button) {
                    var row = button.parentNode.parentNode; // Dapatkan baris (row) yang mengandung tombol
                    var jumlahElement = row.querySelector('.jumlah-item');
                    var jumlah = parseInt(jumlahElement.textContent);

                    jumlah++;
                    jumlahElement.textContent = jumlah;
                    updateTotal();
                }

                // Fungsi untuk menghitung kembali subtotal, pajak, dan total akhir
                function updateTotal() {
                    var table = document.getElementById("orderStatusTable");
                    var rows = table.getElementsByTagName("tr");

                    var subtotal = 0;

                    // Mulai dari baris kedua karena baris pertama adalah header
                    for (var i = 1; i < rows.length; i++) {
                        var row = rows[i];
                        var hargaText = row.cells[2].innerText.replace('Rp. ', '').replace(/\D/g, ''); // Ambil harga dan hapus karakter non-digit
                        var harga = parseFloat(hargaText);

                        var jumlahElement = row.querySelector('.jumlah-item');
                        var jumlah = parseInt(jumlahElement.textContent);

                        var total = harga * jumlah;
                        row.cells[4].innerText = 'Rp. ' + total.toLocaleString('id-ID'); // Update total di dalam tabel

                        subtotal += total;
                    }

                    var pajak = subtotal * 0.1; // Misalnya pajak 10%
                    var totalAkhir = subtotal + pajak;

                    // Tampilkan subtotal, pajak, dan total akhir di UI
                    document.getElementById("subtotal").innerText = 'Rp. ' + subtotal.toLocaleString('id-ID');
                    document.getElementById("pajak").innerText = 'Rp. ' + pajak.toLocaleString('id-ID');
                    document.getElementById("totalAkhir").innerText = 'Rp. ' + totalAkhir.toLocaleString('id-ID');
                }


                // Fungsi untuk menghitung subtotal dari pesanan saat ini
                function hitungSubtotal() {
                    var subtotal = 0;
                    var table = document.getElementById("orderStatusTable");
                    var rows = table.getElementsByTagName("tr");

                    // Mulai dari baris kedua karena baris pertama adalah header
                    for (var i = 1; i < rows.length; i++) {
                        var row = rows[i];
                        var hargaText = row.cells[2].innerText.replace('Rp. ', '').replace(/\D/g, ''); // Ambil harga dan hapus karakter non-digit
                        var harga = parseFloat(hargaText);
                        subtotal += harga;
                    }

                    return subtotal;
                }

            </script>

            <script>
                // Fungsi untuk menghapus item yang dipilih menggunakan checkbox
                function hapusPesanan() {
                    var table = document.getElementById("orderStatusTable");
                    var checkboxes = table.querySelectorAll('tbody input[type="checkbox"]:checked');

                    checkboxes.forEach(function(checkbox) {
                        var row = checkbox.parentNode.parentNode; // Dapatkan baris (row) yang mengandung checkbox
                        row.remove(); // Hapus baris dari tabel
                    });

                    // Setelah menghapus, hitung ulang subtotal, pajak, dan total akhir
                    var subtotal = hitungSubtotal();
                    var pajak = subtotal * 0.11; // Misalnya pajak 10%
                    var totalAkhir = subtotal + pajak;

                    // Tampilkan kembali subtotal, pajak, dan total akhir di UI
                    document.getElementById("subtotal").innerText = 'Rp. ' + subtotal.toLocaleString('id-ID');
                    document.getElementById("pajak").innerText = 'Rp. ' + pajak.toLocaleString('id-ID');
                    document.getElementById("totalAkhir").innerText = 'Rp. ' + totalAkhir.toLocaleString('id-ID');
                }

                // Event listener untuk checkbox di header tabel (pilih semua)
                document.getElementById("selectAllCheckbox").addEventListener("change", function() {
                    var checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
                    checkboxes.forEach(function(checkbox) {
                        checkbox.checked = this.checked;
                    }, this);
                });

            </script>

            {{-- Js.Modal Pembayaran bayar --}}

            {{-- End Js.Modal Pembayaran bayar --}}

            {{-- Js.pencarian --}}
            <script>
                // Fungsi untuk menangani pencarian
                document.getElementById("searchInput").addEventListener("input", function() {
                    var keyword = this.value.toLowerCase(); // Ambil teks pencarian dan ubah ke huruf kecil

                    // Ambil semua kartu produk (menu)
                    var cards = document.querySelectorAll(".product-table .card");

                    // Loop melalui setiap kartu untuk memeriksa teks pencarian
                    cards.forEach(function(card) {
                        var menu = card.querySelector(".card-text").innerText.toLowerCase(); // Ambil teks menu dan ubah ke huruf kecil

                        // Jika teks pencarian cocok dengan teks menu, tampilkan kartu; jika tidak, sembunyikan
                        if (menu.includes(keyword)) {
                            card.style.display = "block";
                        } else {
                            card.style.display = "none";
                        }
                    });
                });

            </script>
            {{-- End Js.pencarian --}}

            {{-- Js.Kategori --}}
            <script>
                function tampilkanMenu(kategori) {
                    var cards = document.querySelectorAll(".product-table .card");

                    cards.forEach(function(card) {
                        var menuKategori = card.querySelector(".kategori").innerText.toLowerCase();

                        if (menuKategori.includes(kategori.toLowerCase())) {
                            card.style.display = "block";
                        } else {
                            card.style.display = "none";
                        }
                    });
                }

            </script>
            {{-- End Js.Kategori --}}

            {{-- Js.menampilkan semua kategori --}}
            <script>
                function resetKategori() {
                    var cards = document.querySelectorAll(".product-table .card");
                    cards.forEach(function(card) {
                        card.style.display = "block"; // Tampilkan semua kartu
                    });
                }

            </script>
            {{-- End Js.menampilkan semua kategori --}}


            <script>
                function tampilkanDetailPesanan() {
                    var table = document.getElementById("orderStatusTable");
                    var rows = table.getElementsByTagName("tr");

                    var namaMenu = "";
                    var subtotal = 0;

                    // Mulai dari baris kedua karena baris pertama adalah header
                    for (var i = 1; i < rows.length; i++) {
                        var row = rows[i];
                        var menuCell = row.cells[1];
                        var jumlahElement = row.querySelector('.jumlah-item');
                        var jumlah = parseInt(jumlahElement.textContent);
                        var hargaText = row.cells[2].innerText.replace('Rp. ', '').replace(/\D/g, '');
                        var harga = parseFloat(hargaText);
                        var total = harga * jumlah;
                        subtotal += total;
                        namaMenu += `${menuCell.innerText} (${jumlah}), `;
                    }

                    var pajak = subtotal * 0.1; // Misalnya pajak 10%
                    var totalAkhir = subtotal + pajak;

                    // Tampilkan detail pesanan di modal
                    document.getElementById("detailMenu").innerText = namaMenu;
                    document.getElementById("detailSubtotal").innerText = 'Rp. ' + subtotal.toLocaleString('id-ID');
                    document.getElementById("detailPajak").innerText = 'Rp. ' + pajak.toLocaleString('id-ID');
                    document.getElementById("detailTotal").innerText = 'Rp. ' + totalAkhir.toLocaleString('id-ID');
                }

            </script>
            <script>
                function prosesBayar() {
                    var totalAkhirText = document.getElementById("detailTotal").innerText.replace('Rp. ', '').replace(/\D/g, '');
                    var totalAkhir = parseFloat(totalAkhirText);

                    var inputBayar = document.getElementById("inputBayar").value;
                    var bayar = parseFloat(inputBayar);

                    var kembalian = bayar - totalAkhir;

                    if (kembalian >= 0) {
                        document.getElementById("kembalian").innerText = 'Rp. ' + kembalian.toLocaleString('id-ID');
                    } else {
                        alert('Jumlah uang yang dimasukkan kurang!');
                    }
                }

            </script>

            <!--bootstrap js-->
            <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>

            <!--plugins-->
            <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
            <!--plugins-->
            <script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
            <script src="{{asset('backend/assets/plugins/metismenu/metisMenu.min.js')}}"></script>
            <script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
            <script src="{{asset('backend/assets/js/main.js')}}"></script>


        </body>

        </html>

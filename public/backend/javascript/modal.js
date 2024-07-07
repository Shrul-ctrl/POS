
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // Get all images that open modals
            var openModals = document.querySelectorAll(".open-modal");

            // Function to handle clicks on images
            openModals.forEach(function(data) {
                data.onclick = function() {
                    var dataMenu = this.getAttribute('data-menu');
                    var dataHarga = this.getAttribute('data-harga');

                    var modalMenu = document.getElementById("data-menu");
                    var modalHarga = document.getElementById("data-harga");

                    modalMenu.textContent = dataMenu;
                    modalHarga.textContent = dataHarga;

                    modal.style.display = "block";
                }
            });

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

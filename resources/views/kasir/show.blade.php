<form action="" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="BasicModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 py-2">
                    <h5 class="modal-title">Order</h5>
                    <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="modal">
                        <i class="material-icons-outlined">close</i>
                    </a>
                </div>
                <div class="modal-body"> <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-0 fw-bold">Menu :</h5>
                        <h5 class="mb-0 fw-bold"></h5>
                    </div>
                    <div class="d-flex justify-content-between pt-4">
                        <h5 class="mb-0 fw-bold">Harga :</h5>
                        <h5 class="mb-0 fw-bold"></h5>
                    </div>
                </div></div>
                <div class="modal-footer border-top-0">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batalkan</button>
                    <a href="{{url('/')}}" type="button" class="btn btn-info">Order Menu</a>
                </div>
            </div>
        </div>
    </div>
    </form>
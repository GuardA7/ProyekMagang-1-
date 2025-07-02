<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus pengguna ini?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="formHapus" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

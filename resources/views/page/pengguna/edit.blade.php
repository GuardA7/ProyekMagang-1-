
<!-- Modal Edit Pengguna -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title">Edit Pengguna</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" value="Andi Susanto">
                </div>
                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select class="form-select">
                        <option value="owner" selected>Owner</option>
                        <option value="mod">Moderator</option>
                        <option value="packing">Packing</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="andi@email.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kata Sandi (kosongkan jika tidak ingin diubah)</label>
                    <input type="password" class="form-control" placeholder="••••••">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-warning">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>

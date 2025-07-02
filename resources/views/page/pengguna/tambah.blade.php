
<!-- Modal Tambah Pengguna -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Pengguna</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select class="form-select">
                        <option value="">Pilih role</option>
                        <option value="owner">Owner</option>
                        <option value="mod">Moderator</option>
                        <option value="packing">Packing</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Masukkan email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Buat kata sandi">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

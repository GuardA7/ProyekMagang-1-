<!-- Modal Edit Produk -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditLabel">Edit Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <form>
          <input type="hidden" id="editId">
          <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="editNama">
          </div>
          <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" class="form-control" id="editKategori">
          </div>
          <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" class="form-control" id="editStok">
          </div>
          <div class="mb-3">
            <label class="form-label">Modal</label>
            <input type="number" class="form-control" id="editModal">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-warning">Update</button>
      </div>
    </div>
  </div>
</div>

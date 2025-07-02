<!-- Modal Tambah Produk -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahLabel">Tambah Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="inputNamaTambah" placeholder="Masukkan nama produk" oninput="generateBarcode()">
          </div>
          <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" class="form-control" placeholder="Contoh: Makanan">
          </div>
          <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" class="form-control" placeholder="Jumlah stok awal">
          </div>
          <div class="mb-3">
            <label class="form-label">Modal</label>
            <input type="number" class="form-control" placeholder="Harga modal">
          </div>
          <div class="mb-3">
            <label class="form-label">Barcode</label>
            <input type="text" class="form-control" id="inputBarcode" readonly>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

{{-- Barcode Auto Generate Script --}}
<script>
  function generateBarcode() {
    const name = document.getElementById('inputNamaTambah').value;
    const barcode = 'PRD-' + btoa(name).slice(0, 10).replace(/[^A-Z0-9]/gi, '').toUpperCase();
    document.getElementById('inputBarcode').value = barcode;
  }
</script>

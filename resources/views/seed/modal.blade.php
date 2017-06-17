<div id="addSupplier" tabindex="-1" role="dialog" aria-labelledby="addSupplierLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title">Tambah supplier</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <p>Supplier kelompok tani - <b>{{ $onfarm->user->poktan->name }}</b></p>
        <form action="/supplier" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Nama</label>
            <input type="text" placeholder="Nama supplier" name="name" class="form-control">
          </div>
          <div class="form-group">       
            <label>Keterangan</label>
            <input type="text" name="description" placeholder="Keterangan supplier (jenis barang)" class="form-control">
          </div>
          <div class="form-group">       
            <label>Alamat</label>
            <input type="text" placeholder="Alamat supplier" name="address" class="form-control">
          </div>
          <div class="form-group">       
            <label>Kontak</label>
            <input type="text" placeholder="No Hp / Telepon supplier" name="contact" class="form-control">
          </div>
          @if (auth()->user()->privilage->is_superadmin)
            <input type="hidden" name="poktan_id" value="{{ $onfarm->user->poktan->id }}">
            <input type="hidden" name="user_id" value="{{ $onfarm->user->id }}">
          @endif
          <input type="hidden" name="url" value="{{ $url }}">
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
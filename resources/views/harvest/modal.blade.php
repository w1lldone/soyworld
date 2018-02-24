<div class="modal fade" id="tambahStok{{$harvest->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2>Tambah stok</h2>
        <form action="/stock" method="POST">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-12 form-group input-group">
              <input name="quantity" type="number" step="any" class="form-control" placeholder="Masukkan stok" aria-describedby="basic-addon1">
              <span class="input-group-addon" id="basic-addon1">Kg</span>
              <input type="hidden" name="harvest_id" value="{{ $harvest->id }}">
            </div>
            <div class="col-12 clearfix">
              <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
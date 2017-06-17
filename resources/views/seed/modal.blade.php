<div id="addSupplier" tabindex="-1" role="dialog" aria-labelledby="addSupplierLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title">Tambah supplier</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <p>Supplier kelompok tani - <b>{{ $onfarm->user->poktan->name }}</b></p>
        <form>
          {{-- <div class="form-group">
            <label>Email</label>
            <input type="email" placeholder="Email Address" class="form-control">
          </div>
          <div class="form-group">       
            <label>Password</label>
            <input type="password" placeholder="Password" class="form-control">
          </div>
          <div class="form-group">       
            <input type="submit" value="Signin" class="btn btn-primary">
          </div> --}}
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
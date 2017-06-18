<div id="plantSeed" tabindex="-1" role="dialog" aria-labelledby="plantSeedLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title">Penanaman bibit kedelai</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <form action="onfarm/$onfarm->id/plant" method="POST">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          {{-- INPUT NAME --}}
          <div class="form-group">
              <label>Tanggal tanam - {{ $onfarm->name }}</label>
              <input data-provide="datepicker" type="text" placeholder="Tanggal tanam" name="planted_at" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
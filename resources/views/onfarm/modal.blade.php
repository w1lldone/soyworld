{{-- PLANT SEED MODAL --}}
<div id="plantSeed" tabindex="-1" role="dialog" aria-labelledby="plantSeedLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title">Penanaman benih kedelai</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <form action="/plant/{{$onfarm->id}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{-- HIDDEN INPUT --}}
          <input type="hidden" name="name" value="Penanaman benih">
          <input type="hidden" name="description" value="Penanaman benih '{{$onfarm->name}}' sejumlah {{ $onfarm->seed->quantity }} Kg">
          {{-- DATE INPUT --}}
          <div class="form-group">
              <label>Tanggal tanam - {{ $onfarm->name }}</label>
              <input data-provide="datepicker" type="text" placeholder="Tanggal tanam" name="planted_at" class="form-control datepicker">
          </div>
          {{-- AREA INPUT --}}
          <div class="form-group">
              <label>Luas lahan (m<sup>2</sup>)</label>
              <input type="number" placeholder="Luas lahan dalam meter persegi" name="area" class="form-control">
          </div>
          {{-- PHOTOS INPUT --}}
          <div class="form-group">
              <label>Foto</label>
              <input type="file" name="photo[0]" class="form-control">
              <input type="file" name="photo[2]" class="form-control">
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
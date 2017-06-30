@foreach (\App\Privilage::all() as $privilage)
  @if(auth()->user()->hasRole($privilage->name))
    @include("layouts.sidebars.$privilage->name")
  @endif
@endforeach
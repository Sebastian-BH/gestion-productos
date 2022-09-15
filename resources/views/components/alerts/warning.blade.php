@if (session('warning'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ session('warning') }}</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
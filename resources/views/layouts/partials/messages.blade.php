@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">

        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert">cerrar</button>
    </div>
@endif

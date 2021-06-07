@extends('backend.app')
@section('sub-judul','Create Categories')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h4>@yield('sub-judul')</h4>
        <div class="card-header-action">
            <a href="{{ url('category') }}" class="btn btn-primary"><i class="fas fa-undo"> Back</i></a>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('category.store') }}">
            @csrf
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                  </div>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Save</i></button>
            </div>
        </form>
       </div>
</div>
@endsection

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
        llorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta expedita, dolorum enim consequuntur rerum, corporis architecto laudantium corrupti aspernatur eligendi nesciunt hic ipsam qui doloremque voluptate veniam amet? Vel, quasi.
    </div>
</div>
@endsection

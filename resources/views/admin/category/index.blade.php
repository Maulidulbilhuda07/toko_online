@extends('backend.app')
@section('sub-judul','Data  Categories')
@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            {{ $message }}
        </div>
    </div>
    @endif
    @if ($message = Session::get('update'))
    <div class="alert alert-info alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            {{ $message }}
        </div>
    </div>
    @endif
    @if ($message = Session::get('delete'))
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ $message }}
            </div>
        </div>
        @endif
<div class="card card-primary">
    <div class="card-header">
        <h4>@yield('sub-judul')</h4>
        <div class="card-header-action">
            <a href="{{ url('category/create') }}" class="btn btn-primary"><i class="fas fa-plus"> Add</i>
            </a>
        </div>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-md">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Parent</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
@foreach ($data as $result=>$value)
<tr>
    <td>{{$result+$data->firstitem()  }}</td>
    <td>{{ $value->name }}</td>
    <td>{{ $value->slug}}</td>
    <td>{{ $value->parent_id}}</td>
    <td>
        <form method="POST" action="{{ route('category.destroy',$value->id) }}">
            <a href="{{ route('category.edit',$value->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
            @csrf
            @method('delete')
            <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
        </form>
    </td>
</tr>
@endforeach
@if ($data->count()<1)
    <tfoot>
    <tr>
        <td colspan="5"class="font-weight-bold">
            No Records Found.
        </td>
    </tr>
</tfoot>
@endif
            </tbody>
        </table>
        <div class="float-right">{{ $data->links() }}</div>
    </div>
    </div>
</div>
@endsection

@extends('layouts.template')


@section('content')

<div class="row">
    
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>จัดการสิทธิ์การใช้งาน</h2>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success btn-sm mb-2" href="{{ route('roles.create') }}"> สร้างโปร์ไฟล์สิทธิ์</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<div class="row">

    <div class="col-lg-12 connectedSortable">
        <div class="card mb-4">
          <div class="card-body">
<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info btn-sm" href="{{ route('roles.show',$role->id) }}"> <i class="bi bi-eye"></i> แสดง</a>
            @can('role-edit')
                <a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}"> <i class="bi bi-pencil-square"></i> แก้ไข</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('ลบ', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
          </div>
          </div>
          </div>
          </div>


{!! $roles->render() !!}


@endsection
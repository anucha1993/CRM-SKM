@extends('layouts.template')


@section('content')


<div class="row">
  @if ($message = Session::get('success'))
<div class="alert alert-success">
  {{ $message }}
</div>
@endif

  <div class="col-lg-12 connectedSortable">
    <div class="card mb-4">
      <div class="card-body">
        <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>ระบบสมาชิก</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-success" href="{{ route('users.create') }}">เพิ่มสมาชิก</a>
          </div>
      </div>
      </div>
    </div>
</div>




<div class="row">
  <div class="col-lg-12 connectedSortable">
    <div class="card mb-4">
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th>ลำดับ</th>
            <th>ชื่อนามสกุล</th>
            <th>Email</th>
            <th>สิทธิ์การใช้งานระบบ</th>
            <th width="280px">การจัดการ</th>
          </tr>
          @foreach ($data as $key => $user)
           <tr>
             <td>{{ ++$i }}</td>
             <td>{{ $user->name }}</td>
             <td>{{ $user->email }}</td>
             <td>
               @if(!empty($user->getRoleNames()))
                 @foreach($user->getRoleNames() as $v)
                    <label class="badge bg-success">{{ $v }}</label>
                 @endforeach
               @endif
             </td>
             <td>
                <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}"><i class="bi bi-eye"></i> แสดง</a>
                <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="bi bi-pencil-square"></i> แก้ไข</a>
                 {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                     {!! Form::submit('ลบ', ['class' => 'btn btn-danger btn-sm'],) !!}
                 {!! Form::close() !!}
             </td>
           </tr>
          @endforeach
         </table>
      </div>
    </div>
</div>

{!! $data->render() !!}

@endsection
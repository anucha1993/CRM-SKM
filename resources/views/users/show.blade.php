@extends('layouts.template')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> ข้อมูลสมาชิก</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary btn-sm mb-2" href="{{ route('users.index') }}"> ย้อนกลับ</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 connectedSortable">
        <div class="card mb-4">
          <div class="card-body">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="">{{ $v }}</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
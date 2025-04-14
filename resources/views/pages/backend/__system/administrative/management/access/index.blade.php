@extends('layouts.backend.__templates.datatable.index', ['page' => 'datatable-index', 'active' => 'false', 'date' => 'false'])
@section('title', 'Management Permissions')

@section('table-header')
<th> Role </th>
<th> User </th>
<th> Username </th>
<th> Email </th>
<th> Phone </th>
@endsection

@section('table-body')
{ data: 'role_id' },
{ data: 'name' },
{ data: 'model_id' },
{ data: 'email' },
{ data: 'phone' },
@endsection

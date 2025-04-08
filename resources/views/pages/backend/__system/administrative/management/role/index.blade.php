@extends('layouts.backend.__templates.datatable.index', ['page' => 'datatable-index', 'active' => 'false', 'date' => 'false'])
@section('title', 'Management Roles')

@section('table-header')
<th> Name </th>
@endsection

@section('table-body')
{ data: 'name' },
@endsection

@extends('layouts.excel')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>Список</h3>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DATE</th>
                </tr>
            @foreach($rows as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->date }}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

@extends('layout.base')
@section('contents')
<h1 class="text-center"></h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">Numero fattura</th>
                <th class="text-center" scope="col">Anno</th>
                <th class="text-center" scope="col">incassata</th>
                <th class="text-center" scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bills as $bill)
                <tr>
                    <th class="text-center" scope="row">{{ $bill->id }}</th>
                    <td class="text-center">{{ $bill->number }}</td>
                    <td class="text-center">{{ $bill->year }}</td>
                    <td class="text-center">{{ $bill->paid? 'si' : 'no' }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="{{ route('bills.show', ['bill' => $bill->id]) }}">View</a>
                        <a class="btn btn-warning" href="">Edit</a>
                        <a class="btn btn-success" href="{{ route('bills.create') }}">+</a>
                        <a class="btn btn-danger" href="">X</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

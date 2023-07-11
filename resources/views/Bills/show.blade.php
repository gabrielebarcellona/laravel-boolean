@extends ('layout.base');

@section('contents')
    <table class="table m-3">
        <thead>
        <tr>
            <th scope="col">Number</th>
            <th scope="col">Year</th>
            <th scope="col">Paid</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $bill->number }}</td>
            <td>{{ $bill->year }}</td>
            <td>{{ $bill->paid ? 'si' : 'no'}}</td>
        </tr>
        </tbody>
    </table>
@endsection
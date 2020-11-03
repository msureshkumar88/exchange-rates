@extends('base')
@section('content')
    <h1 class="mt-4">Transactions</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Transaction id</th>
            <th scope="col">Currency from</th>
            <th scope="col">Currency to</th>
            <th scope="col">Amount sell</th>
            <th scope="col">Amount Buy</th>
            <th scope="col">Rate</th>
            <th scope="col">Originating Country</th>
            <th scope="col">Time Placed</th>
        </tr>
        </thead>
        <tbody id="exchange-data-list">


        </tbody>
    </table>
@endsection


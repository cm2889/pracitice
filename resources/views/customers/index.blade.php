
@extends('layout')

@section('title')
    Customer List

    @endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1> Customer </h1>
            <p > <a href="customers/create"> Add Customer </a> </p>
        </div>
    </div>



<hr>

    @foreach($customers as $customer)
        <div class="row">
            <div class="col-2">{{$customer->id}}</div>
            <div class="col-2">{{$customer->name}}</div>
            <div class="col-4">{{$customer->company->name}}</div>
            <div class="col-2">{{$customer->active }}</div>

        </div>

    @endforeach

@endsection


@extends('layout')

@section('title', 'Details for '.$customer->name)


@section('content')

    <div class="row">
        <div class="col-12">
            <h1> Details for {{$customer->name}}</h1></div>
        <p><a href="/customer/{{$customer->id}}/edit"> Edit </a></p>

        <form action="/customer/{{$customer->id}}" method="POST">
@method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger"> Delete</button>


        </form>

    </div>

    <div class="row">
        <div class="col-12">
            <p><strong> Name </strong> {{$customer->name}}</p>
            <p><strong> Email </strong> {{$customer->email}}</p>
            <p><strong> Company </strong> {{$customer->company->name}}</p>

        </div>
    </div>


@endsection


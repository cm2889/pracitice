
@extends('layout')

@section('title','Edit Details Form'.$customer->name)


@section('content')

    <div class="row">
        <div class="col-12">
            <h1> Edit  Details For {{$customer->name}} </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customer/{{$customer->id}}" method="POST" >
                @method('PATCH')
            @include('customer.form')
            <button type="submit" class="btn btn-primary"> Save Customer </button>
            </form>

        </div>
    </div>


@endsection


@extends('layout')

@section('title', 'Add New Customer')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Customer</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">


            <form action="/customer" method="POST" >




                <div class="form-group">
                    <label for="name"> Name </label>

                    <input type="text" name="name" value="{{old('name') ?? $customer->name }}" class="form-control">
                    <div> {{$errors->first('name')}} </div>

                </div>

                <div class="form-group pb-2" >
                    <label for="name"> Email </label>

                    <input type="text" name="email" value="{{old('email') ?? $customer->email}}" class="form-control" >
                    <div> {{$errors->first('email')}} </div>

                </div>
                <div class="form-group">
                    <label for="name"> Status </label>

                    <select name="active" id="active">
                        <option value="" disabled> Select Customer Status </option>
                        <option value="1"> Active</option>
                        <option value="0"> InActive</option>

                    </select>
                    <div> {{$errors->first('active')}} </div>

                </div>
                <div class="form-group pb-2" >
                    <label for="company_id"> Company </label>

                    <select name="company_id" id="company_id">
                        @foreach($companies as $company)
                            <option value="{{$company->id }}"> {{$company->name}} </option>

                        @endforeach

                    </select>

                </div>


                @csrf



                <button type="submit" class="btn btn-primary"> Save Customer </button>
            </form>
        </div>
    </div>
@endsection
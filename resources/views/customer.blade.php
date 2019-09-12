


<h1> Customer </h1>

<form action="customer" method="POST" >
    <p> Name:</p>
    <div class="input-group">

        <input type="text" name="name" value="{{old('name')}}">
        <div>

            {{$errors->first('name')}}
        </div>

    </div>
    <p> Email </p>
    <div class="input-group pb-2" >

        <input type="text" name="email" value="{{old('email')}}" >
        <div>

            {{$errors->first('email')}}
        </div>

    </div>
    <div class="form-group">

        <select name="active" id="active">
            <option value="" disabled> Select Customer Status </option>
            <option value="1"> Active</option>
            <option value="0"> InActive</option>

        </select>
        <div>

            {{$errors->first('active')}}
        </div>

    </div>
    <div class="form-group pb-2" >
        <label for="company_id"> Company </label>

        <select name="company_id" id="company_id">
           @foreach($companies as $company)
               <option value="{{$company->id }}"> {{$company->name}} </option>

               @endforeach

        </select>
        <div>

            {{$errors->first('active')}}
        </div>

    </div>

    <button type="submit"> Add Customer </button>
@csrf
</form>
<p> Active Customer List</p>
    <ul>
    @foreach($activeCustomer as $activeCustomer)
        <li>{{$activeCustomer->name}} {{$activeCustomer->company->name}} </li>

        @endforeach



    </ul>

</form>

<form>
    <div class="row">
        <div class="col12"></div>
        <p> InActive Customer List</p>
        <ul>
            @foreach($inactiveCustomer as $inactiveCustomer)
                <li>{{$inactiveCustomer->name}} {{$inactiveCustomer->company->name}} </li>

            @endforeach

        </ul>
    </div>

    <div class="row">
        <div class="col12">
            @foreach($companies as $company)
                <h3>{{ $company->name }}</h3>

                <ul>
                    @foreach($company->customer as $customer)
                        <li> {{ $customer->name }}</li>

                        @endforeach
                </ul>
                @endforeach
        </div>
    </div>
</form>

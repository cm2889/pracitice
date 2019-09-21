<div class="form-group">
    <label for="name"> Name </label>

    <input type="text" name="name" value="{{old('name') ?? $customer->name }}" class="form-control">
    <div> {{$errors->first('name')}} </div>

</div>

<div class="form-group pb-2">
    <label for="name"> Email </label>

    <input type="text" name="email" value="{{old('email') ?? $customer->email}}" class="form-control">
    <div> {{$errors->first('email')}} </div>

</div>
<div class="form-group">
    <label for="name"> Status </label>

    <select name="active" id="active">
        <option value="" disabled> Select Customer Status</option>

        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
        <option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected' : ''}}> {{$activeOptionValue}}</option>
        @endforeach

    </select>
    <div> {{$errors->first('active')}} </div>

</div>
<div class="form-group pb-2">
    <label for="company_id"> Company </label>

    <select name="company_id" id="company_id">
        @foreach($companies as $company)

            <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>

        @endforeach

    </select>

</div>


@csrf



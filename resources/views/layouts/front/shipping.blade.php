@extends('layouts.master')
@section('contant')

    <section class="content">
        <h1 align="center">Shipping Address</h1><hr><br>

                <div class="col-lg-8" style="margin-left: 95px;">
                    <form action="{{route('shipping_data_submit')}}"  method="post" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="company_name" placeholder="company mane" class="form-control">
                            <p class="error" {{$errors->has('company_name') ? $errors->first('company_name') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <input type="text" name="shipping_name" placeholder="Enter your name" class="form-control">
                            <p class="error" {{$errors->has('shipping_name') ? $errors->first('shipping_name') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <input type="text" name="shipping_address" placeholder="Enter street address,P.O.box,District,Country" class="form-control">
                            <p class="error" {{$errors->has('shipping_address') ? $errors->first('shipping_address') : ''}}></p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address_optional" placeholder="Enter apartment,Suite,Unit,Buliding,floor,etc" class="form-control">
                            <p class="error" {{$errors->has('address_optional') ? $errors->first('address_optional') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <input type="text" name="shipping_city" placeholder="Enter your shipping_city" class="form-control">
                            <p class="error" {{$errors->has('shipping_city') ? $errors->first('shipping_city') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <input type="email" name="shipping_email" placeholder="Enter your email" class="form-control">
                            <p class="error" {{$errors->has('shipping_email') ? $errors->first('shipping_email') : ''}}></p>
                        </div>
                        <div class="form-group">
                            <input type="number" name="shipping_number" placeholder="Enter your number" class="form-control">
                            <p class="error" {{$errors->has('shipping_number') ? $errors->first('shipping_number') : ''}}></p>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-danger " type="reset">Reset</button>
                            <button class="btn btn-primary " style="margin-top: 0px;" type="submit">Submit</button>


                        </div>

                    </form>
                </div>



    </section>


@endsection
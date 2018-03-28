@extends('Lameck\Smartcart::layouts.app')

@section('title', 'Checkout')

@section('content')

    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Total: R${{$total}}</h4>
            <form action="{{route('shop.postcheckout')}}" method="POST" id="checkout-form">
                
                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name">Nome no cartão</label>
                            <input type="text" value="Jenny Rosen" id="cardname" name="cardname" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-number">Número do cartão</label>
                            <input type="text" value="4242 4242 4242 4242" id="cardnumber" name="cardnumber" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="card-expiry-month">Mês de vencimento do cartão</label>
                            <input type="text" value="12" id="cardexpirymonth" name="cardexpirymonth" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="card-expiry-year">Ano de vencimento do cartão</label>
                            <input type="text" value="19" id="cardexpiryyear" name="cardexpiryyear" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <input type="text" value="123" id="cardcvc" name="cardcvc" class="form-control" required>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />                
                <input type="submit" class="form-control btn btn-success" value="Pagar">

            </form>
        </div>
    </div>

@endsection
@extends('Lameck\Smartcart::layouts.app')

@section('title', 'SMC')

@section('content')

    <div class="row">
       
      
      @if($product)
        @foreach($product as $prd)
          <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="{{$prd->imgproduct}}" alt="notebook mac" width="200px" height="200px">
                <div class="caption clearfix">
                  <h3>{{ $prd->nameproduct }}</h3>
                  <p>{{ $prd->descriptionproduct }}</p>
                  <div class="pull-left">
                    <h4><span class="label label-default">${{$prd->outunitaryprice}}</span></h4>
                  </div>
                  <p><a href="{{ route('shop.addToCart',['id'=>$prd->idproduct]) }}" class="btn btn-success pull-right" role="button"><i class="fas fa-plus"></i> ADD </a></p>
                </div>
              </div>
            </div>
          @endforeach
        @endif

        


    </div>


    
@endsection
@extends('master')
@section('content')

<div class="custom-product">
    
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Resut for Products Search</h4>
            <div class="carousel-inner">
                @foreach($products as $item)
                    <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->galary}}" >
                            
                        </a> 
                    </div> 
                    <div class="col-sm-4">
                          <div class=" ">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                         
                    </div> 
                    <div class="col-sm-3">
                       <button class="btn btn-warning">Remove from Cart</button>
                    </div> 
                </div> 
            @endforeach
            </div>
        </div>
    </div>
</div>


@endsection
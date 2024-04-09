@extends('layout.main-layout');
@section('layout')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                            @foreach($categorys as $cate)
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            {{ $cate->name }}
                                        </a>
                                    </h4>
                                </div>
                                @endforeach
                            
                        </div>
                        
                    </div><!--/category-products-->
                
                    
                </div>
            </div>
            
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                     <div class="col-sm-5">
                        <div class="view-product">
                            
                             <img src="{{ asset($product->image)  }}" alt="">
                        </div>
                        

                    </div>
 
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2>Name : {{ $product->name }}</h2>
                            <p> ID: {{ $product->id }}</p>
                            <img src="images/product-details/rating.png" alt="" />
                            <span>
                                <span>{{ $product->price }}</span>
                                 
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </button>
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Description</b> {{ $product->description }}</p>
                            <p><b>Category</b> {{ $product->category->name }}</p>
                            <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
                
                
                
                
                
            </div>
        </div>
    </div>
</section>

@endsection
@extends('masterpage')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
                <a href="#">Search Result</a>
        </div>
        <div class="col-sm-4">
               
            <div class="trending-wrapper">
                <h4>Results for Products</h4>
                <br>
                @foreach($products as $item)
                <div class="searched-item">
                    <a href="detail/{{$item['id']}}">
                    <img class="trending-img" src="{{$item['photo']}}" >
                <div class="">
                        <h4>{{$item['name']}}</h4>
                        <h5>{{$item['details']}}</h5>
                        <br>
                </div>
                    </a>
            </div>

                @endforeach
        </div>
    </div>
</div>
@endsection
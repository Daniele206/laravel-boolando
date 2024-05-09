@extends('layout.main')

@section('contet')
<div class="my_container">
    @foreach ($products as $product)
    <div class="my_card">
        <div class="my_card_img">
            <img class="my_img_first" src="/img/{{$product['frontImage']}}" alt="img1">
            <div class="like">
                <i class="{{ $product['isInFavorites'] === true ? 'red fa-solid fa-heart' : 'fa-solid fa-heart' }}"></i>
            </div>
            <div class="product_info">
                @foreach ($product['badges'] as $badge)
                <span class="{{ $badge['type'] === 'tag' ? 'sostenibility' : 'discount'}}">{{$badge['value']}}</span>
                @endforeach
            </div>
            </div>
            <div class="description">
            <span>{{$product['brand']}}</span>
            <span class="product-name">{{$product['name']}}</span>
            <span>{{$product['price']}} &euro;</span>
        </div>
    </div>
    @endforeach
</div>
@endsection

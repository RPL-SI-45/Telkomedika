@extends('layoutrumahsakit.rs')


@section('main-section')
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="container">
        <form role='form' action ="{{ route('store-rating')}}" method="POST">
            @csrf
            @method('post')
            <div class="rate form-group">
                <input type="radio" name="star_rating" id="rate-5" value="5">
                <label dusk="rate-5" for="rate-5" class="fas fa-star"></label>
                <input type="radio" name="star_rating" id="rate-4" value="4">
                <label for="rate-4" class="fas fa-star"></label>
                <input type="radio" name="star_rating" id="rate-3" value="3">
                <label dusk="rate-3" for="rate-3" class="fas fa-star"></label>
                <input dusk="rate-2" type="radio" name="star_rating" id="rate-2" value="2">
                <label for="rate-2" class="fas fa-star"></label>
                <input dusk="rate-1" type="radio" name="star_rating" id="rate-1" value="1">
                <label for="rate-1" class="fas fa-star"></label>
            <div class="textarea">
                <textarea name="ulasan" cols="30" placeholder="Describe your experience..."></textarea>
            </div>
            <button dusk="submit" type="submit">submit</button>
            </div>
        </form>
    </div>
    
        <!-- <script>
        const btn = document.querySelector("button");
        const post = document.querySelector(".post");
        const widget = document.querySelector(".star-widget");
        </script> -->

@endsection
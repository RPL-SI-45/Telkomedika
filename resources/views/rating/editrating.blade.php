@extends('layoutrumahsakit.rs')


@section('main-section')
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="container">
        <form role='form' action ='/rating/{{$rating->id}}' method="POST">
            @csrf
            @method('put')
            <div class="rate form-group">
                <input type="radio" name="star_rating" id="rate-5" value="5" {{ $rating->star_rating == 5 ? 'checked' : '' }}>
                <label for="rate-5" class="fas fa-star"></label>
                <input type="radio" name="star_rating" id="rate-4" value="4" {{ $rating->star_rating == 4 ? 'checked' : '' }}>
                <label for="rate-4" class="fas fa-star"></label>
                <input type="radio" name="star_rating" id="rate-3" value="3" {{ $rating->star_rating == 3 ? 'checked' : '' }}>
                <label dusk="rate-3" for="rate-3" class="fas fa-star"></label>
                <input type="radio" name="star_rating" id="rate-2" value="2" {{ $rating->star_rating == 2 ? 'checked' : '' }}>
                <label for="rate-2" class="fas fa-star"></label>
                <input type="radio" name="star_rating" id="rate-1" value="1" {{ $rating->star_rating == 1 ? 'checked' : '' }}>
                <label for="rate-1" class="fas fa-star"></label>
            <div class="textarea">
                <textarea name="ulasan" cols="30" placeholder="Describe your experience..hhyyy">{{$rating->ulasan}}</textarea>
            </div>
            <button dusk = "submit" type="submit">submit</button>
            </div>
        </form>
    </div>
    
        <!-- <script>
        const btn = document.querySelector("button");
        const post = document.querySelector(".post");
        const widget = document.querySelector(".star-widget");
        </script> -->

@endsection
@extends('layouts.elemen')

@section('main-section')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <div class="content flex-1 p-20">
    <div class="container mt-5">
        <div class="h2 text-center mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">
            Berikan Rating dan Ulasan Anda
        </div>

        <form role="form" action="{{ route('store-rating') }}" method="POST">
            @csrf
            @method('post')
            <div class="form-group text-center">
                <div class="rate">
                    <input type="radio" name="star_rating" id="rate-5" value="5">
                    <label dusk ="rate-5" for="rate-5" class="fas fa-star"></label>
                    <input type="radio" name="star_rating" id="rate-4" value="4">
                    <label for="rate-4" class="fas fa-star"></label>
                    <input type="radio" name="star_rating" id="rate-3" value="3">
                    <label for="rate-3" class="fas fa-star"></label>
                    <input type="radio" name="star_rating" id="rate-2" value="2">
                    <label for="rate-2" class="fas fa-star"></label>
                    <input type="radio" name="star_rating" id="rate-1" value="1">
                    <label for="rate-1" class="fas fa-star"></label>
                </div>
            </div>

            <div class="form-group mt-4">
                <textarea name="ulasan" class="form-control" rows="5" placeholder="Ceritakan pengalaman Anda..."></textarea>
            </div>

            <div class="text-center mt-4">
                <button dusk="submit" type="submit" class="btn btn-primary" style="background-color: #B6252A; border: none;">Kirim Ulasan</button>
            </div>
        </form>
    </div>
</div>


    <style>
        .rate {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }

        .rate input {
            display: none;
        }

        .rate label {
            font-size: 2rem;
            color: #ddd;
            cursor: pointer;
            transition: color 0.2s;
        }

        .rate input:checked ~ label,
        .rate label:hover,
        .rate label:hover ~ label {
            color: #ffc107;
        }

        .rate input:checked ~ label:hover,
        .rate input:checked ~ label:hover ~ label,
        .rate input:checked ~ label:hover ~ input:checked ~ label {
            color: #ffeb3b;
        }

        textarea {
            resize: none;
        }
    </style>
@endsection

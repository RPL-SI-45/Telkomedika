@extends('layouts.elemen')

@push('head')
    <style>
        .rate {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .rate input[type="radio"] {
            display: none;
        }
        .rate label {
            font-size: 30px;
            color: lightgray;
            cursor: pointer;
            transition: color 0.3s, transform 0.3s;
        }
        .rate label:hover,
        .rate label:hover ~ label,
        .rate input[type="radio"]:checked ~ label {
            color: gold;
        }
        .rate label:hover {
            transform: scale(1.2);
        }
        .rate input[type="radio"]:checked + label {
            color: gold;
        }
    </style>
@endpush

@section('main-section')
<div class="content flex-1 p-20">
    <div class="container mt-5">
            <h2 class="text-center" style="font-family: 'Montserrat', sans-serif; font-weight: bold; color: #2D3748;">
                Edit Rating dan Ulasan
            </h2>
            <form role="form" action="/rating/{{$rating->id}}" method="POST" class="mt-4">
                @csrf
                @method('put')
                <div class="form-group mb-4">
                    <label for="star_rating" style="font-weight: bold; color: #2D3748;"></label>
                    <div class="rate">
                        @for ($i = 1; $i <= 5; $i++)
                            <input type="radio" name="star_rating" id="rate-{{ $i }}" value="{{ $i }}" {{ $rating->star_rating == $i ? 'checked' : '' }}>
                            <label for="rate-{{ $i }}" class="fas fa-star"></label>
                        @endfor
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="ulasan" style="font-weight: bold; color: #2D3748;">Ulasan:</label>
                    <textarea name="ulasan" id="ulasan" cols="30" rows="5" class="form-control" style="border-radius: 5px; border: 1px solid #ccc; padding: 10px;" placeholder="Describe your experience...">{{$rating->ulasan}}</textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="background-color: #B6252A; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px;">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.rate label');
            const radios = document.querySelectorAll('.rate input[type="radio"]');

            // Initialize star colors based on the checked radio input
            const checkedInput = document.querySelector('.rate input[type="radio"]:checked');
            if (checkedInput) {
                const checkedIndex = Array.from(radios).indexOf(checkedInput);
                updateStarsColor(checkedIndex);
            }

            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    updateStarsColor(index);
                });
            });

            function updateStarsColor(checkedIndex) {
                stars.forEach((s, i) => {
                    if (i <= checkedIndex) {
                        s.style.color = 'gold';
                    } else {
                        s.style.color = 'lightgray';
                    }
                });
            }
        });
    </script>
@endsection

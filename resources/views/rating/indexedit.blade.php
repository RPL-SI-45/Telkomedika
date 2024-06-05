@extends('layouts.elemen')

@section('main-section')
<div class="content flex-1 p-10">
    <div class="container mt-5">
        <br>
        <div class="h2 text-center mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">
            Rating dan Ulasan
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center" style="background-color: #B6252A;">
                            <h5 class="m-0 font-weight-bold text-white">Ulasan</h5>
                            <a href="/rating" style="color: white; text-decoration: none; border-bottom: none; transition: font-weight 0.3s;" onmouseover="this.style.fontWeight='bold';" onmouseout="this.style.fontWeight='normal';">Lihat Rating</a>
                        </div>
                    <div class="card-body mb-4" style="background-color: #f0f0f0">
                        <div class="row">
                            @foreach ($rating as $r)
                                <div class="col-md-4 mb-4">
                                    <div class="card shadow-sm" style="height: 100%; border: 0px solid black;">
                                        <div class="card h-100 shadow-sm border-0">
                                            <div class="card-body d-flex flex-column align-items-center text-center">
                                                <h5 class="card-title mb-2">{{ $r->name }}</h5>
                                                <div class="star-rating mb-2">
                                                    @for ($i = 0; $i < 5; $i++)
                                                        <span class="fa fa-star{{ $i < $r->star_rating ? '' : '-o' }}"></span>
                                                    @endfor
                                                </div>
                                                <p class="card-text">{{ $r->star_rating }}/5</p>
                                                <p class="card-text">{{ $r->ulasan }}</p>
                                            </div>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example" style="padding: 10px;">
                                            <a dusk ="edit" class="btn btn-warning btn-sm" href="/rating/{{$r->id}}/edit">Edit</a>
                                            <form action="/rating/{{$r->id}}" method="post" style="display: inline;">
                                                @csrf
                                                @method('delete')
                                                <input dusk ="delete" type="submit" class="btn btn-danger btn-sm" value="Delete">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
        .card-title {
            font-family: Montserrat, sans-serif;
            font-weight: bold;
        }
        .star-rating {
            font-size: 1.5rem;
            color: #ffc107;
        }
        .fa-star {
            color: #ffc107;
        }
        .fa-star-o {
            color: #dcdcdc;
        }
        .card-body {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .text-muted {
            font-size: 1.2rem;
        }
    </style>
@endsection


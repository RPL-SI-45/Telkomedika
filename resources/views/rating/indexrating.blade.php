@extends('layoutrumahsakit.rs')

@section('main-section')
    <div class="container">
        <br>
        <div class="h2 text-center mt-5 mb-4" style="font-family: Montserrat, sans-serif; font-weight: bold;">
            Rating dan Ulasan
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3" style="background-color: #B6252A;">
                        <div class="d-flex justify-content-between align-items-center my-3">
                        <h5 class="m-0 font-weight-bold text-white">Ulasan</h5>
                        <div></div>
                            <a dusk ="tambahrating" class="btn btn-secondary" href="/rating/createrating" style="background-color: #f0f0f0; color: black;">Beri Rating dan Ulasan</a>
                        </div>
                    </div>
                    <div class="card-body mb-4" style="background-color: #f0f0f0">
                        <div class="row">
                            @foreach ($rating as $r)
                                <div class="col-md-4 mb-4">
                                    <div class="card shadow-sm" style="height: 100%; border: 0px solid black;">
                                        <div class="card-body text-center">
                                            <h5 class="card-text" style="margin-top: 20px;">{{ $r->name }}</h5>
                                            <p class="card-text">★{{ $r->star_rating }}/5</p>
                                            <p class="card-text">{{ $r->ulasan }}</p>
                                            
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
@endsection


@extends('layouts.main')

@section('content')
<style>
    .package-header {
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('./im');
        background-size: cover;
        background-position: center;
        padding: 100px 0;
        color: white;
        text-align: center;
    }

    .package-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        margin-bottom: 30px;
        transition: transform 0.3s;
        overflow: hidden;
    }

    .package-card:hover {
        transform: translateY(-10px);
    }

    .package-image {
        height: 250px;
        object-fit: cover;
    }

    .package-price {
        font-size: 24px;
        color: #e67e22;
        font-weight: bold;
    }

    .package-features {
        list-style: none;
        padding-left: 0;
    }

    .package-features li {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
    }

    .package-features li i {
        color: #2ecc71;
        margin-right: 10px;
    }

    .book-now-btn {
        background: #e67e22;
        color: white;
        padding: 12px 30px;
        border-radius: 25px;
        border: none;
        transition:background 0.3s;
    }

    .book-now-btn:hover {
        background: #d35400;
    }

    .filter-section {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
    }
</style>

<div class="package-header">
    <div class="container">
        <h1 class="display-4">Travel Packages</h1>
        <p class="lead">Find your perfect vacation package</p>
    </div>
</div>

<div class="container my-5">
    <div class="filter-section">
        <div class="row">
            <div class="col-md-3">
                <select class="form-select">
                    <option>Price Range</option>
                    <option>$0 - $1000</option>
                    <option>$1000 - $2000</option>
                    <option>$2000+</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option>Duration</option>
                    <option>1-3 Days</option>
                    <option>4-7 Days</option>
                    <option>7+ Days</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option>Destination</option>
                    <option>Europe</option>
                    <option>Asia</option>
                    <option>Americas</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary w-100">Apply Filters</button>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Package Card 1 -->
        <div class="col-md-4">
            <div class="package-card card">
                <img src="/images/package1.jpg" class="package-image card-img-top" alt="Paris Package">
                <div class="card-body">
                    <h5 class="card-title">Paris Explorer</h5>
                    <p class="package-price">$1,299</p>
                    <ul class="package-features">
                        <li><i class="fas fa-clock"></i> 5 Days / 4 Nights</li>
                        <li><i class="fas fa-utensils"></i> Breakfast Included</li>
                        <li><i class="fas fa-hotel"></i> 4-Star Hotel</li>
                    </ul>
                    <button class="book-now-btn w-100">Book Now</button>
                </div>
            </div>
        </div>

        <!-- Package Card 2 -->
        <div class="col-md-4">
            <div class="package-card card">
                <img src="/images/package2.jpg" class="package-image card-img-top" alt="Bali Package">
                <div class="card-body">
                    <h5 class="card-title">Bali Paradise</h5>
                    <p class="package-price">$1,599</p>
                    <ul class="package-features">
                        <li><i class="fas fa-clock"></i> 7 Days / 6 Nights</li>
                        <li><i class="fas fa-utensils"></i> All-Inclusive</li>
                        <li><i class="fas fa-hotel"></i> 5-Star Resort</li>
                    </ul>
                    <button class="book-now-btn w-100">Book Now</button>
                </div>
            </div>
        </div>

        <!-- Package Card 3 -->
        <div class="col-md-4">
            <div class="package-card card">
                <img src="/images/package3.jpg" class="package-image card-img-top" alt="Dubai Package">
                <div class="card-body">
                    <h5 class="card-title">Dubai Luxury</h5>
                    <p class="package-price">$2,499</p>
                    <ul class="package-features">
                        <li><i class="fas fa-clock"></i> 6 Days / 5 Nights</li>
                        <li><i class="fas fa-utensils"></i> Half Board</li>
                        <li><i class="fas fa-hotel"></i> Luxury Hotel</li>
                    </ul>
                    <button class="book-now-btn w-100">Book Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="text-center">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection

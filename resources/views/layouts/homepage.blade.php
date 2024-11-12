@extends('layouts.main')

@section('content')
<div class="hero-section">
    <div class="container">
        <h1 class="display-3 mb-4">UnDiscover Your Next Adventure</h1>
        <p class="lead mb-4">Explore the world's most beautiful destinations with us</p>
        <a href="{{ route('packages.index') }}" class="btn-explore">View Packages</a>
    </div>
</div>

<section class="featured-destinations">
    <div class="container">
        <h2 class="text-center mb-5">Popular Destinations</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="destination-card">
                    <img src="/images/dest1.jpg" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Bali, Indonesia</h5>
                        <p class="card-text">Experience paradise on Earth with pristine beaches and rich culture.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="destination-card">
                    <img src="/images/dest2.jpg" class="card-img-top" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Santorini, Greece</h5>
                        <p class="card-text">White-washed buildings and stunning Mediterranean views.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="destination-card">
                    <img src="/images/dest3.jpg" class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Machu Picchu, Peru</h5>
                        <p class="card-text">Ancient wonders and breathtaking mountain landscapes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section text-center">
    <div class="container">
        <h2 class="mb-4">Ready to Start Your Journey?</h2>
        <p class="mb-4">Book your dream vacation today and get exclusive deals!</p>
        <a href="{{ route('booking.index') }}" class="btn-explore">Book Now</a>
    </div>
</section>

<section class="features py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                <h4>Handpicked Destinations</h4>
                <p>Carefully selected locations for the best experience</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-dollar-sign fa-3x mb-3"></i>
                <h4>Best Price Guarantee</h4>
                <p>We offer the most competitive prices in the market</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-headset fa-3x mb-3"></i>
                <h4>24/7 Support</h4>
                <p>Our team is always here to help you</p>
            </div>
        </div>
    </div>
</section>
@endsection

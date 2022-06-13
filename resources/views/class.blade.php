@extends('layouts.main')

@section('dashboard')

<div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-lg-4">
                    <div class="class p-0">
                        <div class="class-image"> <img
                                src="https://images.pexels.com/photos/2746187/pexels-photo-2746187.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt=""> </div>
                        <div class="class-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>
                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1"> <a href="#"> <span class="fab fa-facebook"></span> </a>
                                </li>
                                <li style="--i:2"> <a href="#"> <span class="fab fa-twitter"></span> </a> </li>
                                <li style="--i:3"> <a href="#"> <span class="fab fa-instagram"></span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="class p-0">
                        <div class="class-image"> <img
                                src="https://images.pexels.com/photos/381843/pexels-photo-381843.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt=""> </div>
                        <div class="class-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>
                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1"> <a href="#"> <span class="fab fa-facebook"></span> </a>
                                </li>
                                <li style="--i:2"> <a href="#"> <span class="fab fa-twitter"></span> </a> </li>
                                <li style="--i:3"> <a href="#"> <span class="fab fa-instagram"></span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="class p-0">
                        <div class="class-image"> <img
                                src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt=""> </div>
                        <div class="class-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>
                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1"> <a href="#"> <span class="fab fa-facebook"></span> </a>
                                </li>
                                <li style="--i:2"> <a href="#"> <span class="fab fa-twitter"></span> </a> </li>
                                <li style="--i:3"> <a href="#"> <span class="fab fa-instagram"></span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.main')

@section('dashboard')
<div class="pagetitle">
    <h1>Welcome back {{ Str::ucfirst( Auth::user()->name) }}</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body ps-0">
                            <h5 class="card-title ps-5">Top Selling <span>| Today</span></h5>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Preview</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Sold</th>
                                        <th scope="col">Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="img/product-1.jpg" alt=""></a>
                                        </th>
                                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas
                                                nulla</a></td>
                                        <td>$64</td>
                                        <td class="fw-bold">124</td>
                                        <td>$5,828</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="img/product-2.jpg" alt=""></a>
                                        </th>
                                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique
                                                doloremque</a></td>
                                        <td>$46</td>
                                        <td class="fw-bold">98</td>
                                        <td>$4,508</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="img/product-3.jpg" alt=""></a>
                                        </th>
                                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                exercitationem</a></td>
                                        <td>$59</td>
                                        <td class="fw-bold">74</td>
                                        <td>$4,366</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="img/product-4.jpg" alt=""></a>
                                        </th>
                                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint
                                                rerum error</a></td>
                                        <td>$32</td>
                                        <td class="fw-bold">63</td>
                                        <td>$2,016</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="img/product-5.jpg" alt=""></a>
                                        </th>
                                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus
                                                repellendus</a></td>
                                        <td>$79</td>
                                        <td class="fw-bold">41</td>
                                        <td>$3,239</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->

            </div>
        </div>

        <!-- Right side columns -->
        <div class="col-lg-4">
            <div class="row">
                <div class="card">
                    <div class="calendar">
                        <div id="dycalendar"></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">To Do List <span>| Today</span></h5>
                    </div>
                </div><!-- End Recent Activity -->
            </div>
        </div>

    </div>
</section>
@endsection
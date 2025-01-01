{{-- home page --}}
@extends('layouts.app')

@section('title', 'home page')

@section('content')
    <!-- Home Slider -->
    <section class="hero-slider">
        <!-- Carousel wrapper -->
        <div class="hero-slides">
            <!-- Item 1 -->
            <div class="hero-slide">
                <div class="container">
                    <div class="slide-content">
                        <h1 class="hero-slider-title">
                            Buy <strong>The Best Cars</strong> <br />
                            in your region
                        </h1>
                        <div class="hero-slider-content">
                            <p>
                                Use powerful search tool to find your desired cars based on
                                multiple search criteria: Maker, Model, Year, Price Range, Car
                                Type, etc...
                            </p>

                            <button class="btn btn-hero-slider">Find the car</button>
                        </div>
                    </div>
                    <div class="slide-image">
                        <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hero-slide">
                <div class="flex container">
                    <div class="slide-content">
                        <h2 class="hero-slider-title">
                            Do you want to <br />
                            <strong>sell your car?</strong>
                        </h2>
                        <div class="hero-slider-content">
                            <p>
                                Submit your car in our user friendly interface, describe it,
                                upload photos and the perfect buyer will find it...
                            </p>

                            <button class="btn btn-hero-slider">Add Your Car</button>
                        </div>
                    </div>
                    <div class="slide-image">
                        <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
            <button type="button" class="hero-slide-prev">
                <svg style="width: 18px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button" class="hero-slide-next">
                <svg style="width: 18px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>
    <!--/ Home Slider -->

    <main>
        <!-- Find a car form -->
        <section class="find-a-car">
            <div class="container">
                <form action="/s.html" method="GET" class="find-a-car-form card flex p-medium">
                    <div class="find-a-car-inputs">
                        <div>
                            <select id="makerSelect" name="maker_id">
                                <option value="">Maker</option>
                                <option value="4">Chevrolet</option>
                                <option value="2">Ford</option>
                                <option value="3">Honda</option>
                                <option value="6">Lexus</option>
                                <option value="5">Nissan</option>
                                <option value="1">Toyota</option>
                            </select>
                        </div>
                        <div>
                            <select id="modelSelect" name="model_id">
                                <option value="" style="display: block">Model</option>
                                <option value="50" data-parent="5" style="display: none">
                                    370Z
                                </option>
                                <option value="6" data-parent="1" style="display: none">
                                    4Runner
                                </option>
                                <option value="22" data-parent="3" style="display: none">
                                    Accord
                                </option>
                                <option value="41" data-parent="5" style="display: none">
                                    Altima
                                </option>
                                <option value="23" data-parent="3" style="display: none">
                                    CR-V
                                </option>
                                <option value="37" data-parent="4" style="display: none">
                                    Camaro
                                </option>
                                <option value="1" data-parent="1" style="display: none">
                                    Camry
                                </option>
                                <option value="21" data-parent="3" style="display: none">
                                    Civic
                                </option>
                                <option value="36" data-parent="4" style="display: none">
                                    Colorado
                                </option>
                                <option value="2" data-parent="1" style="display: none">
                                    Corolla
                                </option>
                                <option value="35" data-parent="4" style="display: none">
                                    Cruze
                                </option>
                                <option value="54" data-parent="6" style="display: none">
                                    ES350
                                </option>
                                <option value="17" data-parent="2" style="display: none">
                                    Edge
                                </option>
                                <option value="32" data-parent="4" style="display: none">
                                    Equinox
                                </option>
                                <option value="12" data-parent="2" style="display: none">
                                    Escape
                                </option>
                                <option value="18" data-parent="2" style="display: none">
                                    Expedition
                                </option>
                                <option value="13" data-parent="2" style="display: none">
                                    Explorer
                                </option>
                                <option value="11" data-parent="2" style="display: none">
                                    F-150
                                </option>
                                <option value="28" data-parent="3" style="display: none">
                                    Fit
                                </option>
                                <option value="20" data-parent="2" style="display: none">
                                    Flex
                                </option>
                                <option value="47" data-parent="5" style="display: none">
                                    Frontier
                                </option>
                                <option value="15" data-parent="2" style="display: none">
                                    Fusion
                                </option>
                                <option value="58" data-parent="6" style="display: none">
                                    GS350
                                </option>
                                <option value="57" data-parent="6" style="display: none">
                                    GX460
                                </option>
                                <option value="26" data-parent="3" style="display: none">
                                    HR-V
                                </option>
                                <option value="3" data-parent="1" style="display: none">
                                    Highlander
                                </option>
                                <option value="56" data-parent="6" style="display: none">
                                    IS300
                                </option>
                                <option value="34" data-parent="4" style="display: none">
                                    Impala
                                </option>
                                <option value="29" data-parent="3" style="display: none">
                                    Insight
                                </option>
                                <option value="55" data-parent="6" style="display: none">
                                    LS500
                                </option>
                                <option value="60" data-parent="6" style="display: none">
                                    LX570
                                </option>
                                <option value="33" data-parent="4" style="display: none">
                                    Malibu
                                </option>
                                <option value="44" data-parent="5" style="display: none">
                                    Maxima
                                </option>
                                <option value="45" data-parent="5" style="display: none">
                                    Murano
                                </option>
                                <option value="14" data-parent="2" style="display: none">
                                    Mustang
                                </option>
                                <option value="59" data-parent="6" style="display: none">
                                    NX300
                                </option>
                                <option value="25" data-parent="3" style="display: none">
                                    Odyssey
                                </option>
                                <option value="30" data-parent="3" style="display: none">
                                    Passport
                                </option>
                                <option value="46" data-parent="5" style="display: none">
                                    Pathfinder
                                </option>
                                <option value="24" data-parent="3" style="display: none">
                                    Pilot
                                </option>
                                <option value="5" data-parent="1" style="display: none">
                                    Prius
                                </option>
                                <option value="4" data-parent="1" style="display: none">
                                    RAV4
                                </option>
                                <option value="62" data-parent="6" style="display: none">
                                    RC350
                                </option>
                                <option value="53" data-parent="6" style="display: none">
                                    RX350
                                </option>
                                <option value="51" data-parent="6" style="display: none">
                                    RX400
                                </option>
                                <option value="52" data-parent="6" style="display: none">
                                    RX450
                                </option>
                                <option value="16" data-parent="2" style="display: none">
                                    Ranger
                                </option>
                                <option value="27" data-parent="3" style="display: none">
                                    Ridgeline
                                </option>
                                <option value="43" data-parent="5" style="display: none">
                                    Rogue
                                </option>
                                <option value="42" data-parent="5" style="display: none">
                                    Sentra
                                </option>
                                <option value="10" data-parent="1" style="display: none">
                                    Sequoia
                                </option>
                                <option value="7" data-parent="1" style="display: none">
                                    Sienna
                                </option>
                                <option value="31" data-parent="4" style="display: none">
                                    Silverado
                                </option>
                                <option value="40" data-parent="4" style="display: none">
                                    Suburban
                                </option>
                                <option value="39" data-parent="4" style="display: none">
                                    Tahoe
                                </option>
                                <option value="19" data-parent="2" style="display: none">
                                    Taurus
                                </option>
                                <option value="48" data-parent="5" style="display: none">
                                    Titan
                                </option>
                                <option value="38" data-parent="4" style="display: none">
                                    Traverse
                                </option>
                                <option value="9" data-parent="1" style="display: none">
                                    Tundra
                                </option>
                                <option value="61" data-parent="6" style="display: none">
                                    UX200
                                </option>
                                <option value="49" data-parent="5" style="display: none">
                                    Versa
                                </option>
                                <option value="8" data-parent="1" style="display: none">
                                    Yaris
                                </option>
                            </select>
                        </div>
                        <div>
                            <select id="stateSelect" name="state_id">
                                <option value="">State/Region</option>
                                <option value="4">California</option>
                                <option value="2">Kansas</option>
                                <option value="1">Ohio</option>
                                <option value="5">Oregon</option>
                            </select>
                        </div>
                        <div>
                            <select id="citySelect" name="city_id">
                                <option value="" style="display: block">City</option>
                                <option value="3" data-parent="1" style="display: none">
                                    Carmelstad
                                </option>
                                <option value="8" data-parent="2" style="display: none">
                                    Cormierville
                                </option>
                                <option value="14" data-parent="3" style="display: none">
                                    Dareville
                                </option>
                                <option value="13" data-parent="3" style="display: none">
                                    Demarcotown
                                </option>
                                <option value="10" data-parent="2" style="display: none">
                                    Doylebury
                                </option>
                                <option value="18" data-parent="4" style="display: none">
                                    East Alfonso
                                </option>
                                <option value="9" data-parent="2" style="display: none">
                                    East Ladarius
                                </option>
                                <option value="23" data-parent="5" style="display: none">
                                    Kelvinmouth
                                </option>
                                <option value="24" data-parent="5" style="display: none">
                                    Kemmerchester
                                </option>
                                <option value="25" data-parent="5" style="display: none">
                                    Kunzeview
                                </option>
                                <option value="6" data-parent="2" style="display: none">
                                    Lake Kelsi
                                </option>
                                <option value="16" data-parent="4" style="display: none">
                                    Larsonview
                                </option>
                                <option value="2" data-parent="1" style="display: none">
                                    Lindstad
                                </option>
                                <option value="5" data-parent="1" style="display: none">
                                    Loganshire
                                </option>
                                <option value="15" data-parent="3" style="display: none">
                                    Maximilliaberg
                                </option>
                                <option value="7" data-parent="2" style="display: none">
                                    Monroeside
                                </option>
                                <option value="17" data-parent="4" style="display: none">
                                    Muellerville
                                </option>
                                <option value="12" data-parent="3" style="display: none">
                                    New Bennieville
                                </option>
                                <option value="1" data-parent="1" style="display: none">
                                    New Britneystad
                                </option>
                                <option value="21" data-parent="5" style="display: none">
                                    New Devenmouth
                                </option>
                                <option value="22" data-parent="5" style="display: none">
                                    North Alvah
                                </option>
                                <option value="20" data-parent="4" style="display: none">
                                    Port Johnson
                                </option>
                                <option value="19" data-parent="4" style="display: none">
                                    South Shanellefort
                                </option>
                                <option value="11" data-parent="3" style="display: none">
                                    Toyport
                                </option>
                                <option value="4" data-parent="1" style="display: none">
                                    West Lulu
                                </option>
                            </select>
                        </div>
                        <div>
                            <select name="car_type_id">
                                <option value="">Type</option>
                                <option value="2">Hatchback</option>
                                <option value="6">Jeep</option>
                                <option value="5">Minivan</option>
                                <option value="4">Pickup Truck</option>
                                <option value="3">SUV</option>
                                <option value="1">Sedan</option>
                            </select>
                        </div>
                        <div>
                            <input type="number" placeholder="Year From" name="year_from" />
                        </div>
                        <div>
                            <input type="number" placeholder="Year To" name="year_to" />
                        </div>
                        <div>
                            <input type="number" placeholder="Price From" name="price_from" />
                        </div>
                        <div>
                            <input type="number" placeholder="Price To" name="price_to" />
                        </div>
                        <div>
                            <select name="fuel_type_id">
                                <option value="">Fuel Type</option>
                                <option value="2">Diesel</option>
                                <option value="3">Electric</option>
                                <option value="1">Gasoline</option>
                                <option value="4">Hybrid</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-find-a-car-reset">
                            Reset
                        </button>
                        <button class="btn btn-primary btn-find-a-car-submit">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!--/ Find a car form -->

        <!-- New Cars -->
        <section>
            <div class="container">
                <h2>Latest Added Cars</h2>
                <div class="car-items-listing">
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                    <div class="car-item card">
                        <a href="/view.html">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt=""
                                class="car-item-img rounded-t" />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">New Jersey</small>
                                <button class="btn-heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                            <p class="car-item-price">$25,000</p>
                            <hr />
                            <p class="m-0">
                                <span class="car-item-badge">SUV</span>
                                <span class="car-item-badge">Electric</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ New Cars -->
    </main>
@endsection

@extends('layout.app')



@section('contents')

    <main id="main">
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single text-white">Car Listing</h1>
                <span class="color-text-a">Grid Properties</span>
                <body style="background-color:  #FFFF;">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Single-->

      <!-- ======= Property Grid ======= -->
      <section class="property-grid grid">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="grid-option">
                <form>
                  <h6 class="justify-content-start text-white">Sort by</h6>
                  <select class="custom-select">
                    <option value="1">Highest Price</option>
                    <option value="2">Lowest Price</option>
                  </select>
                </form>
              </div>
            </div>
            <div class="container-fluid justify">
              <div class="row">
                <div class="col">
                  <h4 class="text-white"><b>Car Search</b></h4>
                  <form class="form-inline" role="search">
                    <!-- Search input section -->
                    <div class="search-input-section">
                      <input
                        class="form-control-sm"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                      />
                      <button class="btn btn-outline-success" type="submit">
                        Search
                      </button>
                    </div>
                    <br />
                    <!-- Filter options section -->
                    <div class="filter-options-section">
                      <h4 class="text-white"><b>Car Filter</b></h4>
                      <select class="form-control-sm" name="vehicle" id="car_body_style">
                        <option value="">Select Vehicle</option>
                        
                      </select>

                      <select class="form-control-sm" name="vin">
                        <option value="">Select VIN</option>
                        <option value="">JTDBE32KX35012345</option>
                        <option value="">1GNKVJKD4HJ123456</option>
                        <option value="">5YJ3E1EB2KF123456</option>
                        <option value="">1N4AZ0CP6FC123456</option>
                        <option value="">1FTYR10U97PA12345</option>
                        <option value="">1GTN2LEH9HZ123456</option>
                        <option value="">1GTN2LEH9HZ123456</option>
                        <option value="">1FA6P8TH6J5101234</option>
                        <option value="">KNDMB5C1XF6091234</option>
                        <option value="">2C4RDGBG8FR123456</option>
                      </select>

                      <select class="form-control-sm" name="brand">
                        <option value="">Select Brand</option>
                        <option value="">Toyota</option>
                        <option value="">Chevrolet</option>
                        <option value="">Tesla</option>
                        <option value="">Nissan</option>
                        <option value="">Ford</option>
                        <option value="">GMC</option>
                        <option value="">Mazda</option>
                        <option value="">Kian</option>
                        <option value="">Dodge</option>
                      </select>

                      <select class="form-control-sm" name="model">
                        <option value="">Select Model</option>
                        <option value="Toyota Rav4">Toyota Rav4</option>
                        <option value="Chevrolet Traverse">
                          Chevrolet Traverse
                        </option>
                        <option value="Tesla Model">Tesla Model 3</option>
                        <option value="Nissan Leaf">Nissan Leaf</option>
                        <option value="Ford Ranger">Ford Ranger</option>
                        <option value="GMC Sierra">GMC Sierra</option>
                        <option value="Ford Mustang">Ford Mustang</option>
                        <option value="TMazda MX-5 Miata">
                          TMazda MX-5 Miata
                        </option>
                        <option value="Kia Sedona<">Kia Sedona</option>
                        <option value="Dodge Grand Caravan">
                          Dodge Grand Caravan
                        </option>
                      </select>

                      <select class="form-control-sm" name="transmission">
                        <option value="">Select Transmission</option>
                        <option value="automatic">Automatic</option>
                        <option value="manual">Manual</option>
                        <option value="manual">direct-drive system</option>
                        <option value="manual">single-speed</option>
                      </select>

                      <select class="form-control-sm" name="engine">
                        <option value="">Select Engine</option>
                        <option value="2.5L Inline-4 ">2.5L Inline-4</option>
                        <option value="V6">V6</option>
                        <option value="Electric motors">Electric motors</option>
                        <option value="four-cylinder">four-cylinder</option>
                        <option value="V8">V8</option>
                      </select>

                      <select class="form-control-sm" name="color">
                        <option value="">Select Color</option>
                        <option value="Black">Black</option>
                        <option value="Red">Red</option>
                        <option value="Deep Blue Metallic">
                          Deep Blue Metallic
                        </option>
                        <option value="Brilliant Silver">
                          Brilliant Silver
                        </option>
                        <option value="Oxford White">Oxford White</option>
                        <option value="Fire Red">Fire Red</option>
                        <option value="Ceramic Metallic">
                          Ceramic Metallic
                        </option>
                        <option value="Shadow Black">Shadow Black</option>
                        <option value="Snow white pearl">
                          Snow white pearl
                        </option>
                        <option value="Granite Pearlcoat">
                          Granite Pearlcoat
                        </option>
                      </select>

                      <!-- Reset Filters button -->
                      <button
                        class="btn btn-outline-success"
                        type="button"
                        onclick="resetFilters()"
                      >
                        Reset Filters
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>



            @foreach($cars as $car)

            <div class="col-md-4 mt-5">
              <div class="card card-box-a card-shadow">
                <div class="img-box-a">
                  <img
                   src="{{ asset('storage/carscontainer/' . $car->image) }}" 
                    alt=""
                    class="img-a"
                    width="500"
                    height="200"
                  />
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="#">{{$car->brand_name}}<br />{{$car->model_name}}</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">price | ${{$car->price}}</span>
                      </div>
                      <a  href="{{route('cardetail',['id' => $car->inventory_id])}}" class="link-a">
                        Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Vehicle</h4>
                          <span>{{$car->body_style}}</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Brand</h4>
                          <span>{{$car->brand_name}}</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Model</h4>
                          <span>{{$car->model_name}}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          @endforeach
           
           
      </section>
      <!-- End Property Grid Single-->
    </main>
    <!-- End #main -->


    @endsection
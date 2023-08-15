@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
{{-- <main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="justify-content-around">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Paket Travel
                </li>
                <li class="breadcrumb-item active">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Nusa Peninda</h1>
              <p>Republic of Indonesia Raya</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="frontend/images/details1.jpeg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/details1.jpeg">
                </div>
                <div class="xzoom-thumbs">
                  <a href="frontend/images/details1.jpg">
                    <img src="frontend/images/details1.jpeg" class="xzoom-gallery" width="120"
                    xpreview="frontend/images/details1.jpeg">
                  </a>
                  <a href="frontend/images/details2.jpg">
                    <img src="frontend/images/details2.jpeg" class="xzoom-gallery" width="120"
                    xpreview="frontend/images/details2.jpeg">
                  </a>
                  <a href="frontend/images/details1.jpg">
                    <img src="frontend/images/details3.jpeg" class="xzoom-gallery" width="120"
                    xpreview="frontend/images/details3.jpeg">
                  </a>
                  <a href="frontend/images/details1.jpg">
                    <img src="frontend/images/details4.jpeg" class="xzoom-gallery" width="120"
                    xpreview="frontend/images/details4.jpeg">
                  </a>
                  <a href="frontend/images/details1.jpg">
                    <img src="frontend/images/details5.jpeg" class="xzoom-gallery" width="120"
                    xpreview="frontend/images/details5.jpeg">
                  </a>
                </div>
              </div>
                <h2>Tentang Wisata</h2>
                <p>Nusa Peninda is an island southeast of Indonesia's island Bali and a district of klungkung
                  Regency that includes the neighbouring small island of Nusa Lembongan. The Badung
                  Strait separetes the island and Bali. The interior Of Nusa Peninda is hilly with a maximum 
                  altitude of 524 metres. it is drier than the nearby island of Bali.
                </p>
                <p>Bali and a district of klungkung Regency that includes the neighbouring small island of
                  Nusa Lembongan. The Badung strait separetes the island and Bali.
                </p>
                <div class="features row">
                  <div class="col-md-4">
                    <img src="frontend/images/event.png" alt="" class="features-image">
                    <div class="description">
                      <h3>Featured Event</h3>
                      <p>Tari Kecak</p>
                    </div>
                  </div>
                  <div class="col-md-4 ">
                    <img src="frontend/images/languages.png" alt="" class="features-image">
                    <div class="description">
                      <h3>Language</h3>
                      <p>Bahasa Indonesia</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <img src="frontend/images/hamburger.png" alt="" class="features-image">
                    <div class="description">
                      <h3>Foods</h3>
                      <p>Local Foods</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="member my-2">
                <img src="frontend/images/member-1.png" class="member-image mr-1 rounded-circle">
                <img src="frontend/images/member-2.png" class="member-image mr-1 rounded-circle">
                <img src="frontend/images/member-3.png" class="member-image mr-1 rounded-circle">
                <img src="frontend/images/tetstimonial 3.png" class="member-image mr-1 rounded-circle">
                <img src="frontend/images/member-4.png" class="member-image mr-1 rounded-circle">
              </div>
              <hr>
              <h2>Trip Informations</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width="50%" class="text-right">22 Aug, 2019</td>
                </tr>
                <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-right">4D 3N</td>
                </tr>
                <tr>
                  <th width="50%">Type</th>
                  <td width="50%" class="text-right">Open Trip</td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">$80,00 / Person</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2" style="width: 356px;">
                Join Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
</main> --}}
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                Paket Travel
              </li>
              <li class="breadcrumb-item active">
                Details
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>{{ $item->title }}</h1>
            <p>
              {{ $item->location }}
            </p>
            @if($item->galleries->count() > 0)
                  <div class="gallery">
                      <div class="xzoom-container">
                          <img
                              src="{{ Storage::url($item->galleries->first()->image) }}"
                              class="xzoom"
                              id="xzoom-default"
                              xoriginal="{{ Storage::url($item->galleries->first()->image) }}"
                          />
                      </div>
                      <div class="xzoom-thumbs">
                          @foreach($item->galleries as $gallery)
                              <a href="{{ Storage::url($gallery->image) }}">
                                  <img
                                      src="{{ Storage::url($gallery->image) }}"
                                      class="xzoom-gallery"
                                      width="128"
                                      xpreview="{{ Storage::url($gallery->image) }}"
                                  />
                              </a>
                          @endforeach
                      </div>
                  </div>
            @endif
            <h2>Tentang Wisata</h2>
            {!! $item->about !!}
            <div class="features row">
              <div class="col-md-4">
                <img src="{{ url('../frontend/images/event.png') }}" alt="" class="features-image"/>
                <div class="description">
                  <h3>Featured Event</h3>
                  <p>{{ $item->featured_event }}</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img src="{{ url('../frontend/images/languages.png') }}" alt="" class="features-image"/>
                  <div class="description">
                    <h3>Language</h3>
                    <p>{{ $item->language }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img src="{{ url('../frontend/images/hamburger.png') }}" alt="" class="features-image"/>
                  <div class="description">
                    <h3>Foods</h3>
                    <p>{{ $item->foods }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Members are going</h2>
            <div class="member my-2">
              <img src="{{ url('frontend/images/member-1.png') }}" class="member-image mr-1 rounded-circle">
              <img src="{{ url('frontend/images/member-2.png') }}" class="member-image mr-1 rounded-circle">
              <img src="{{ url('frontend/images/member-3.png') }}" class="member-image mr-1 rounded-circle">
              <img src="{{ url('frontend/images/tetstimonial 3.png') }}" class="member-image mr-1 rounded-circle">
              <img src="{{ url('frontend/images/member-4.png') }}" class="member-image mr-1 rounded-circle">
            </div>
            <hr />
            <h2>Trip Informations</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Date of Departure</th>
                <td width="50%" class="text-right">
                    {{ \Carbon\Carbon::create($item->date_of_departure)->format('F n, Y') }}
                </td>
              </tr>
              <tr>
                <th width="50%">Duration</th>
                <td width="50%" class="text-right">
                  {{ $item->duration }}
                </td>
              </tr>
              <tr>
                <th width="50%">Type</th>
                <td width="50%" class="text-right">
                  {{ $item->type }}
                </td>
              </tr>
              <tr>
                <th width="50%">Price</th>
                <td width="50%" class="text-right">
                  ${{ $item->price }} / person
                </td>
              </tr>
            </table>
          </div>
          <div class="join-container">
              @auth
              <form action="{{ route('checkout_process', $item->id) }}" method="POST">
                  @csrf
                  <button class="btn btn-block btn-join-now mt-3 py-2" type="submit" style="width: 356px;">
                      Join Now
                  </button>
              </form>
              @endauth
              @guest
                  <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2" style="width: 356px;">
                      Login or Register to Join
                  </a>
              @endguest
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: 500,
      title: false,
      tint: '#333',
      Xoffset: 15
    });
  });
</script>
@endpush
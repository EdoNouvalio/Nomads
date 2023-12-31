@extends('layouts.success')

@section('title', 'Success')

@section('content')
<main>
    <div class="section-succes d-flex align-items-center">
      <div class="col text-center">
        <img src="{{ url('frontend/images/send.png') }}" alt="" class="send-image">
        <h1>Yay! Success</h1>
        <p>We've sent you email for trip instruction<br/>please read it as well</p>
        <a href="{{ url('/') }}" class="btn btn-homepage mt-3 px-5">Home Page</a>
      </div>
    </div>
</main>
@endsection
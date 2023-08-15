@extends('layouts.checkout')

@section('title', 'Checkout')

@section('content')
{{-- <main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="justify-content-between">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Paket Travel
                </li>
                <li class="breadcrumb-item">
                  Details
                </li>
                <li class="breadcrumb-item active">
                  Chekout
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Who is Going?</h1>
              <p>Trip to ubud, Bali, Indonesia</p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Nationality</td>
                      <td>Visa</td>
                      <td>Passport</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="{{ url('frontend/images/testimonial 1.png') }}" height="60" class="rounded-circle">
                      </td>
                      <td class="align-middle">Asep</td>
                      <td class="align-middle">CN</td>
                      <td class="align-middle">N/A</td>
                      <td class="align-middle">Active</td>
                      <td class="align-middle">
                        <a href="#">
                          <img src="{{ url('frontend/images/remove.png') }}" height="30px" alt="">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{ url('frontend/images/testimonial 2.png') }}" height="60" class="rounded-circle">
                      </td>
                      <td class="align-middle">Rani</td>
                      <td class="align-middle">SG</td>
                      <td class="align-middle">30 Days</td>
                      <td class="align-middle">Active</td>
                      <td class="align-middle">
                        <a href="#">
                          <img src="{{ url('frontend/images/remove.png') }}" height="30px" alt="">
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Add Member</h2>
                <table>

                  <tbody>
                    <tr>
                      <td>
                        <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username" style="width: 150px;">
                      </td>
                      <td style="padding: 10px;">
                        <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2" style="height: 37px; border-radius: 4px;">
                          <option value="VISA" selected>VISA</option>
                          <option value="30 Days">30 Days</option>
                          <option value="N/A">N/A</option>
                        </select>
                      </td>
                      <td>
                        <div class="input-group mb-2 mr-sm-2" style="width: 150px;">
                          <input type="date" class="form-control datepicker" id="deoPassport" placeholder="Date">
                        </div>
                      </td>
                      <td style="padding: 10px;">
                        <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <h3 class="mt-2 mb-0">Note</h3>
                <p class="disclaimer mb-0">
                  You are only able to invite member that has registered is Nomads.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Checkout Informations</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Members</th>
                  <td width="50%" class="text-right">2 Person</td>
                </tr>
                <tr>
                  <th width="50%">Additional Visa</th>
                  <td width="50%" class="text-right">$190,00</td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-right">$80,00 / Person</td>
                </tr>
                <tr>
                  <th width="50%">Sub Total</th>
                  <td width="50%" class="text-right">$280,00</td>
                </tr>
                <tr>
                  <th width="50%">Total (+unique)</th>
                  <td width="50%" class="text-right text-total">
                    <span class="text-blue">$279,</span>
                    <span class="text-orange">33</span>
                  </td>
                </tr>
              </table>
              <hr>
              <h2>Payment Instructions</h2>
              <p class="payment-instructions">please complete your payment before to contineu the wonderful trip</p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/card.png') }}" alt="" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>0881 8829 8800<br>Bank Central Asia</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/card.png') }}" alt="" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>0899 8501 7888<br>Bank HSBC</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="join-container">
              <a href="{{ route('success') }}" class="btn btn-block btn-join-now mt-3 py-2" style="width: 356px;">
                I Have Made Payment
              </a>
            </div>
            <div class="text-center mt-3">
              <a href="{{ route('detail') }}" class="text-muted"> Cancel Booking</a>
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
              <li class="breadcrumb-item">
                Details
              </li>
              <li class="breadcrumb-item active">
                Checkout
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <h1>Who is Going?</h1>
            <p>
              Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->location }}
            </p>
            <div class="attendee">
              <table class="table table-responsive-sm text-center">
                <thead>
                  <tr>
                    <td>Picture</td>
                    <td>Name</td>
                    <td>Nationality</td>
                    <td>Visa</td>
                    <td>Passport</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  @forelse($item->details as $detail)
                      <tr>
                          <td>
                              <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60" class="rounded-circle"/>
                          </td>
                          <td class="align-middle">
                              {{ $detail->username }}
                          </td>
                          <td class="align-middle">
                              {{ $detail->nationality }}
                          </td>
                          <td class="align-middle">
                              {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                          </td>
                          <td class="align-middle">
                              {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                          </td>
                          <td class="align-middle">
                              <a href="{{ route('checkout-remove', $detail->id) }}">
                                  <img src="{{ url('frontend/images/ic_remove.png') }}" alt="" />
                              </a>
                          </td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan="6" class="text-center">
                              No Visitor
                          </td>
                      </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            <div class="member mt-3">
              <h2>Add Member</h2>
              <form class="form-inline" method="POST" action="{{ route('checkout-create', $item->id) }}">
                @csrf
                <table>
                  <tbody>
                    <tr>
                      <td>
                        <label for="username" class="sr-only">Name</label>
                        <input type="text" name="username" class="form-control mb-2 mr-sm-2" id="username" placeholder="Username" style="width: 150px;" required>
                      </td>
                      <td>
                        <label for="nationality" class="sr-only">Nat</label>
                        <input type="text" name="nationality" class="form-control m-2 mb-2 mr-sm-2" id="nationality" placeholder="Nationality" style="width: 50px;" required>
                      </td>
                      <td style="padding: 10px;">
                        <label for="is_visa" class="sr-only">Visa</label>
                        <select name="is_visa" id="is_visa" class="custom-select mb-2 mr-sm-2" style="height: 37px; border-radius: 4px;" required>
                          <option value="" selected>VISA</option>
                          <option value="1">30 Days</option>
                          <option value="0">N/A</option>
                        </select>
                      </td>
                      <td>
                        <label for="doe_passport">DOE Passport</label>
                        <div class="input-group mb-2 mr-sm-2" style="width: 150px;">
                          <input type="date" class="form-control datepicker"name="doe_passport" id="doePassport" placeholder="Date">
                        </div>
                      </td>
                      <td style="padding: 10px;">
                        <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form>
              <h3 class="mt-2 mb-0">Note</h3>
              <p class="disclaimer mb-0">
                You are only able to invite member that has registered in
                Nomads.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Checkout Informations</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Members</th>
                <td width="50%" class="text-right">
                  {{ $item->details->count() }} person
                </td>
              </tr>
              <tr>
                <th width="50%">Additional VISA</th>
                <td width="50%" class="text-right">
                  $ {{ $item->additional_visa }},00
                </td>
              </tr>
              <tr>
                <th width="50%">Trip Price</th>
                <td width="50%" class="text-right">
                  $ {{ $item->travel_package->price }},00 / person
                </td>
              </tr>
              <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-right">
                  $ {{ $item->transactions_total }},00
                </td>
              </tr>
              <tr>
                <th width="50%">Total (+Unique)</th>
                <td width="50%" class="text-right text-total">
                  <span class="text-blue">$ {{ $item->transactions_total }},</span
                  ><span class="text-orange">{{ mt_rand(0,99) }}</span>
                </td>
              </tr>
            </table>

            <hr />
            <h2>Payment Instructions</h2>
            <p class="payment-instructions">please complete your payment before to contineu the wonderful trip</p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/card.png') }}" alt="" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>0881 8829 8800<br>Bank Central Asia</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/card.png') }}" alt="" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>0899 8501 7888<br>Bank HSBC</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
          </div>
          <div class="join-container">
            <a href="{{ route('success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2" style="width: 356px;">
              Continue to Payment
            </a>
          </div>
          <div class="text-center mt-3">
            <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">
              Cancel Booking
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.datepicker').datepickker({
      format: 'yyyy-MM-dd',
      uiLibrary: 'bootstrap5',
      icons: {
        rightIcont: '<img src="{{ url('frontend/images/calendar.png') }}"/>'
      }
    })
  });
</script>
@endpush
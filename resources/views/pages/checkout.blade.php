@extends('layouts.checkout')

@section('content')
<div class="container">
  <nav class="row navbar navbar-expand-lg navbar-light bg-white">
    <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
      <a class="navbar-brand" href="{{ route('home')}}">
        <img src="frontend/images/logo.png" alt="" />
      </a>
    </div>
    <ul class="navbar-nav mr-auto d-none d-lg-block">
      <li>
        <span class="text-muted">| &nbsp; Beyond the explorer of the world</span>
      </li>
    </ul>
  </nav>
</div>
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0 pl-3 pl-lg-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page">
                Paket Travel
              </li>
              <li class="breadcrumb-item" aria-current="page">
                Details
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Checkout
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details mb-3">
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <h1>Who is Going?</h1>
            <p>
              Trip to {{$item->travel_package->title}}, {{$item->travel_package->location}}
            </p>
            <div class="attendee">
              <table class="table table-responsive-sm text-center">
                <thead>
                  <tr>
                    <td scope="col">Picture</td>
                    <td scope="col">Name</td>
                    <td scope="col">Nationality</td>
                    <td scope="col">Visa</td>
                    <td scope="col">Passport</td>
                    <td scope="col"></td>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($item->details as $detail)
                  <tr>
                    <td>
                      <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" class="rounded-circle"
                        height="60" />
                    </td>
                    <td class="align-middle">{{ $detail->username }}</td>
                    <td class="align-middle">{{ $detail->nationality }}</td>
                    <td class="align-middle">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                    <td class="align-middle">
                      {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive'}}
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
                      No visitor
                    </td>
                  </tr>
                  @endforelse

                </tbody>
              </table>
            </div>
            <div class="member mt-3">
              <h2>Add Member</h2>
              <form class="form-inline" method="POST" action="{{ route('checkout-create', $item->id)}}">
                @csrf
                <label class="sr-only" for="username">Name</label>
                <input type="text" class="form-control mb-2 mr-sm-2" name="username" id="username"
                  placeholder="Username" />
                <label class="sr-only" for="nationality">Nationality</label>
                <input type="text" class="form-control mb-2 mr-sm-2" required name="nationality" id="nationality"
                  placeholder="Nationality" style="width: 50px" />
                <label class="sr-only" class="mr-2" for="inlineFormCustomSelectPref">Preference</label>
                <select class="custom-select mb-2 mr-sm-2" name="is_visa" required id="is_visa">
                  <option selected value="">VISA</option>
                  <option value="1">30 Days</option>
                  <option value="0">N/A</option>
                </select>

                <label class="sr-only" for="doePassport">DOE Passport</label>
                <div class="input-group mb-2 mr-sm-2">
                  <input type="text" class="form-control datepicker" name="doe_passport" id="doePassport"
                    placeholder="DOE Passport" />
                </div>

                <button type="submit" class="btn btn-add-now mb-2 px-4">
                  Add Now
                </button>
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
            <h2>Checkout Information</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Members</th>
                <td width="50%" class="text-right">{{ $item->details->count()}}</td>
              </tr>
              <tr>
                <th width="50%">Additional Visa</th>
                <td width="50%" class="text-right">$ {{ $item->additional_visa}}</td>
              </tr>
              <tr>
                <th width="50%">Trip Price</th>
                <td width="50%" class="text-right">$ {{$item->travel_package->price}},00 / person</td>
              </tr>
              <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-right">$ {{ $item->transaction_total}}</td>, 00
              </tr>
              <tr>
                <th width="50%">Total (+Unique)</th>
                <td width="50%" class="text-right text-total">
                  <span class="text-blue">$ {{ $item->transaction_total}},</span><span
                    class="text-orange">{{ mt_rand(0,99) }}</span>
                </td>
              </tr>
            </table>

            <hr />
            <h2>Payment Instructions</h2>
            <p class="payment-instructions">
              Please complete your payment before to continue the wonderful
              trip
            </p>
            <div class="bank">
              <div class="bank-item pb-3">
                <img src="frontend/images/ic_bank.png" alt="" class="bank-image" />
                <div class="description">
                  <h3>PT Nomads ID</h3>
                  <p>
                    0881 8829 8800
                    <br />
                    Bank Central Asia
                  </p>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="bank-item">
                <img src="frontend/images/ic_bank.png" alt="" class="bank-image" />
                <div class="description">
                  <h3>PT Nomads ID</h3>
                  <p>
                    0899 8501 7888
                    <br />
                    Bank HSBC
                  </p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="join-container">
            <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">I Have
              Made
              Payment</a>
          </div>
          <div class="text-center mt-3">
            <a href="{{ route('details', $item->travel_package->slug) }}" class="text-muted">Cancel Booking</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection
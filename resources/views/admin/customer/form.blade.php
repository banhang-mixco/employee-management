@extends('layouts.app')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="change-tab" data-toggle="tab" href="#change-information" role="tab" aria-controls="change-information"
                   aria-selected="true">Change Information Type</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact-information" role="tab" aria-controls="contact-information"
                   aria-selected="false">Contact Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer-channel" role="tab" aria-controls="customer-channel"
                   aria-selected="false">Customer Channel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="license-tab" data-toggle="tab" href="#license-number" role="tab" aria-controls="license-number"
                   aria-selected="false">License Number</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="address-tab" data-toggle="tab" href="#address-information" role="tab" aria-controls="address-information"
                   aria-selected="false">Address Information</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active" id="change-information" role="tabpanel" aria-labelledby="change-tab">
                @include('admin.customer.change-information-tab')
            </div>
            <div class="tab-pane fade" id="contact-information" role="tabpanel" aria-labelledby="contact-tab">
                @include('admin.customer.contact-information-tab')
            </div>
            <div class="tab-pane fade" id="customer-channel" role="tabpanel" aria-labelledby="customer-tab">
                @include('admin.customer.customer-channel')
            </div>
            <div class="tab-pane fade" id="license-number" role="tabpanel" aria-labelledby="license-tab">
                @include('admin.customer.license-number')
            </div>
            <div class="tab-pane fade" id="address-information" role="tabpanel" aria-labelledby="address-tab">
                @include('admin.customer.address-information')
            </div>
        </div>
    </div>
@endsection
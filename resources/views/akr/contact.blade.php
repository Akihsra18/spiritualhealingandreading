@extends('layouts.app')

@section('title', 'Contact Hannah')

@section('content')

        <div class="container-fluid parallax_CONTACT_1 d-flex align-items-center g-0">
            <div class="row transbox col-12 g-0">
                <!-- <div class="card rounded-5 col-xl-3 col-lg-4 col-md-6 col-12 mx-auto m-2">
                    <div class="card-header rounded-5 h_texte text-center bg-info-subtle">
                        Hannah
                    </div>
                    <img id="img_hannah" src="{{ asset('assets/images/Page_Contact/Hannah.jpeg') }}" class="mt-2 card-img-top mx-auto d-block img-fluid img-thumbnail">
                    <div class="card-body text-center overflow-auto">
                        <div 
                            class="fb-page" 
                            data-href="https://www.facebook.com/profile.php?id=61568798812651" 
                            data-tabs="timeline" 
                            data-width="325"
                            data-height="125" 
                            data-adapt-container-width="true" 
                            data-show-facepile="false"
                        >
                        </div>
                    </div>
                </div> -->
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 p-5">
                <div class="row align-items-center text-center h-100">
                        <p class="h_texte fw-bold text-uppercase">Contact Hannah</p>
                    </div>
                    <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div class="row form-group">
                        <div class="col-6">
                            <label class="form-label p_texte fs-6 mt-3 col-6" for="fName">First Name*</label>
                            <input type="text" class="form-control mt-1 mb-1 col-6" id="fName" placeholder="First Name" name="fName" value="{{ old('fName') }}" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label p_texte fs-6 mt-3 col-6" for="lName">Last Name</label>
                            <input type="text" class="form-control mt-1 mb-1 col-6" id="lName" placeholder="Last Name" name="lName" value="{{ old('lName') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label p_texte fs-6 mt-3" for="email">Email*</label>
                            <input type="email" class="form-control mt-1 mb-1" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label p_texte fs-6 mt-3" for="service">Service</label>
                            <select class="form-select" id="service" name="service" value="{{ old('service') }}" required>
                                <option value="" disabled selected>Choose a service</option>
                                <option value="1">Akashic Records Reading</option>
                                <option value="2">Space Healing</option>
                                <option value="3">Higher Self Reading</option>
                                <option value="4">Tarot Card Reading</option>
                                <option value="5">Shamanic Reading</option>
                                <option value="6">Seven Energy Crescent Reading</option>
                                <option value="7">Chakra Reading and Healing</option>
                            </select>                        
                        </div>
                        <div class="col-12">
                            <label class="form-label p_texte fs-6 mt-3" for="message">Message(optional)</label>
                            <textarea class="form-control mt-1 mb-1" id="message" name="message" value="{{ old('message') }}" rows="3"></textarea>
                        </div>
                    </div>
                        <div class="text-center m-4 mb-0">
                            <button type="submit" class="btn btn-outline-light btn-lg col-4 text-center ms-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        


@endsection
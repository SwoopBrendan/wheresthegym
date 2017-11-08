@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card card-user">
                    <div class="image">
                        <img src="{{ isset($user->profile_picture) ? $user->profile_picture : asset('paper-dashboard/assets/img/background.jpg') }}" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                            <img class="avatar border-white upload-thumb" src="{{ isset($user->profile_picture) ? $user->profile_picture : asset('paper-dashboard/assets/img/faces/face-2.jpg') }}" alt="..."/>

                            <input type='file' id="img-upload" name="profileImage" class="hidden" />

                            <h4 class="title">{{ $user->name }}</h4>
                            <br/>
                            <p><small>{{ $user->email }}</small></p>
                        </div>
                        <p class="description text-center">
                            {{ $user->description }}
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control border-input" value="{{ $user->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control border-input" value="{{ $user->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control border-input" value="{{ $user->description }}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card card-map">
                    <div class="header">
                        <h4 class="title">My Address</h4>
                    </div>
                    <div class="content">
                        <div class="tab-content clearfix">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Number</label>
                                        <input type="text" class="form-control border-input" value="{{ isset($user->location) ? $user->location->number : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Street</label>
                                        <input type="text" class="form-control border-input" value="{{ isset($user->location) ? $user->location->street_one : '' }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Street 2</label>
                                        <input type="text" class="form-control border-input" value="{{ isset($user->location) ? $user->location->street_two : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Street 3</label>
                                        <input type="text" class="form-control border-input" value="{{ isset($user->location) ? $user->location->street_three : '' }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Suburb</label>
                                        <input type="text" class="form-control border-input" value="{{ isset($user->location) ? $user->location->suburb : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control border-input" value="{{ isset($user->location) ? $user->location->city : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="number" class="form-control border-input" placeholder="ZIP Code" value="{{ isset($user->location) ? $user->location->postal_code : '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-map">
                    <div class="header">
                        <h4 class="title">Map</h4>
                    </div>
                    <div class="content">
                        <div class="tab-content clearfix">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.
        var map, infoWindow, marker;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -33.9249, lng: 18.4241},
                zoom: 6
            });
            infoWindow = new google.maps.InfoWindow;

            // Place a draggable marker on the map
            marker = new google.maps.Marker({
                position: {lat: -33.9249, lng: 18.4241},
                map: map,
                draggable:true
            });

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuX_28SHN9KZ0qsjTyU3xy-qKgxEEG1Wc&callback=initMap">
    </script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            function readURL(input, preview) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        preview.attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(document).on('click', '.upload-thumb', function (e) {
                e.preventDefault();

                var preview = $(this);
                $("#img-upload").trigger('click');

                $("#img-upload").change(function(){
                    readURL(this, preview);
                });
            });

        });
    </script>
@endsection

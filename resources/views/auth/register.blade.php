@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="wizard-container">
                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="wizard-header">
                            <h3>
                                <b>BUILD</b> YOUR PROFILE <br>
                                <small>This information will let us know more about you.</small>
                            </h3>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li><a href="#about" data-toggle="tab">About</a></li>
                                <li><a href="#account" data-toggle="tab">Account</a></li>
                                <li><a href="#address" data-toggle="tab">Address</a></li>
                                <li><a href="#password" data-toggle="tab">Password / TC's</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                                <div class="row">
                                    <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="picture">
                                                <img src="{{ asset('bootstrap-wizard/assets/img/default-avatar.png') }}" class="picture-src" id="wizardPicturePreview" title=""/>
                                                <input type="file" id="wizard-picture">
                                            </div>
                                            <h6>Choose Picture</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name <small>(required)</small></label>
                                            <input name="name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email <small>(required)</small></label>
                                            <input name="email" type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input name="description" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> You are a... </h4>
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-6">
                                            <div class="choice" data-toggle="wizard-radio">
                                                <input type="radio" name="type" value="2" checked>
                                                <div class="icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <h6>Member</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="choice" data-toggle="wizard-radio">
                                                <input type="radio" name="type" value="3">
                                                <div class="icon">
                                                    <i><img src="{{ asset('bootstrap-wizard/assets/img/dumbell-icon.png') }}" class="picture-src" id="wizardPicturePreview" title=""/></i>
                                                </div>
                                                <h6>Gym</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Where are you? </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Street Name <small>(required)</small></label>
                                            <input type="text" name="street" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Street Number <small>(required)</small></label>
                                            <input type="text" name="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Suburb <small>(required)</small></label>
                                            <input type="text" name="suburb" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Postal Code <small>(required)</small></label>
                                            <input type="text" name="postalCode" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>City <small>(required)</small></label>
                                            <input type="text" name="city" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="password">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password"> Password </label>
                                                <input name="password" type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password-confirm"> Confirm Password </label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-lg-offset-4">
                                        <div class="choice" data-toggle="wizard-checkbox">
                                            <input type="checkbox" name="tcs" value="1">
                                            <div class="icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <h6>I agree to the T's and C's</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
    </div><!-- end row -->
</div> <!--  big container -->
@endsection

@section('scripts')

@endsection

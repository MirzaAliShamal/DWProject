@extends('layouts.admin')

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Window Configuration</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Window Configuration</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="row">
        <div class="col-md-3">
            <div class="card config-card">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Your Configuration</h4>
                        <div class="text-center mt-2">
                            <p class="font-weight-bold">Inside View:</p>
                            <img src="{{ asset('images/opening-type/one-f.png') }}" class="img-fluid" alt="">
                        </div>
                        <hr>
                        <h4 class="card-title">Details</h4>
                        <ul class="configuration-list">
                            <li><strong>Material: </strong><span class="selected-material">plastic</span></li>
                            <li><strong>Profile: </strong><span class="selected-profile">IDEAL 4000</span></li>
                            <li><strong>Color and decors: </strong><span class="selected-color">white</span></li>
                            <li><strong>Window Type: </strong><span class="selected-window">one piece</span></li>
                            <li><strong>Opening Type: </strong><span class="selected-opening">1 part fixed glazing</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="step-1">
                {{-- Material --}}
                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body p-1" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <p class="font-weight-bold mb-0 pb-0">MATERIAL</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 pb-0">More Details</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                        caramels tiramisu.

                                        Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                                        Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label for="plastic" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/material/plastic.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Plastic</p>
                                    </div>
                                </div>
                                <input type="radio" name="material" id="plastic" value="plastic" class="radiobutton" checked hidden>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Profile --}}
                <div class="configurationn-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body p-1">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <p class="font-weight-bold mb-0 pb-0">PROFILE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label for="ideal-4000" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/profile/ideal-4000.png') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Ideal 4000</p>
                                        <ul class="feature-listing">
                                            <li><i class="fa fa-check"></i> Angular Optics</li>
                                            <li><i class="fa fa-check"></i> 70 mm installation depth</li>
                                            <li><i class="fa fa-check"></i> 2 seals</li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="radio" name="profile" id="ideal-4000" value="Ideal 4000" class="radiobutton" checked hidden>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label for="ideal-5000" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/profile/ideal-5000.png') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Ideal 5000</p>
                                        <ul class="feature-listing">
                                            <li><i class="fa fa-check"></i> Rounded Look</li>
                                            <li><i class="fa fa-check"></i> 70 mm installation depth</li>
                                            <li><i class="fa fa-check"></i> 3 seals</li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="radio" name="profile" id="ideal-5000" value="Ideal 5000" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Color & Decors --}}
                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body p-1" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <p class="font-weight-bold mb-0 pb-0">COLOR AND DECORS</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 pb-0">More Details</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                        caramels tiramisu.

                                        Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                                        Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="white" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/white.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">White</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="white" value="White" class="radiobutton" checked hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="mahogany" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/mahogany.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Mahogany</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="mahogany" value="Mahogany" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="golden-oak" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/golden-oak.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Golden Oak</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="golden-oak" value="Golden Oak" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="walnut" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/walnut.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Walnut</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="walnut" value="Walnut" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="anthracite" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/anthracite.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Anthracite</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="anthracite" value="Anthracite" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="gray" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/gray.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Gray</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="gray" value="Gray" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="basalt-gray" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/basalt-gray.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Basalt Gray</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="basalt-gray" value="Basalt Gray" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="db-703" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/db-703.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">DB 703</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="db-703" value="DB 703" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="bog-oak" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/bog-oak.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Bog oak</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="bog-oak" value="Bog oak" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="brown" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/brown.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Brown Decor</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="brown" value="Brown Decor" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                            <label for="dark-green" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/color/dark-green.jpg') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Dark Gareen</p>
                                    </div>
                                </div>
                                <input type="radio" name="color" id="dark-green" value="Dark Gareen" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Window TYpe --}}
                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body p-1" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <p class="font-weight-bold mb-0 pb-0">WINDOW TYPE</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 pb-0">More Details</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                        caramels tiramisu.

                                        Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                                        Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <label for="one-piece" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/window-type/one-piece.png') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">One Piece</p>
                                    </div>
                                </div>
                                <input type="radio" name="window_type" id="one-piece" value="One Piece" data-target="#one-piece-group" class="radiobutton" checked hidden>
                            </label>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <label for="two-part" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/window-type/two-part.png') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Two Part</p>
                                    </div>
                                </div>
                                <input type="radio" name="window_type" id="two-part" value="Two Part" data-target="#two-part-group" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <label for="three-part" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/window-type/three-part.png') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Three Part</p>
                                    </div>
                                </div>
                                <input type="radio" name="window_type" id="three-part" value="Three Part" data-target="#three-part-group" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <label for="special-types" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/window-type/special-types.png') }}" class="img-fluid" alt="">
                                        <p class="font-weight-bold mb-0 mt-2">Special Types</p>
                                    </div>
                                </div>
                                <input type="radio" name="window_type" id="special-types" value="Special Types" data-target="#special-types-group" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Upper Lower Light --}}
                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body p-1">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <p class="font-weight-bold mb-0 pb-0">UPPER / LOWER LIGHT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('admin.components.upper_lower_light')
                </div>

                {{-- Opening Type --}}
                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body p-1" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <p class="font-weight-bold mb-0 pb-0">OPENING TYPE</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 pb-0">More Details</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                        caramels tiramisu.

                                        Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                                        Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row opening-type" id="one-light-group">
                        @include('admin.components.opening_type.one_light')
                    </div>

                    <div class="row opening-type" id="one-skylight-group" style="display: none;">
                        @include('admin.components.opening_type.one_skylight')
                    </div>

                    <div class="row opening-type" id="one-lowerlight-group" style="display: none;">
                        @include('admin.components.opening_type.one_lowerlight')
                    </div>

                    <div class="row opening-type" id="two-light-group" style="display: none;">
                        @include('admin.components.opening_type.two_light')
                    </div>

                    <div class="row opening-type" id="two-skylight-group" style="display: none;">
                        @include('admin.components.opening_type.two_skylight')
                    </div>

                    <div class="row opening-type" id="two-skylight-divided-group" style="display: none;">
                        @include('admin.components.opening_type.two_skylight_divided')
                    </div>

                    <div class="row opening-type" id="two-lowerlight-group" style="display: none;">
                        @include('admin.components.opening_type.two_lowerlight')
                    </div>

                    <div class="row opening-type" id="two-lowerlight-divided-group" style="display: none;">
                        @include('admin.components.opening_type.two_lowerlight_divided')
                    </div>

                    <div class="row opening-type" id="three-light-group" style="display: none;">
                        @include('admin.components.opening_type.three_light')
                    </div>

                    <div class="row opening-type" id="three-skylight-group" style="display: none;">
                        @include('admin.components.opening_type.three_skylight')
                    </div>

                    <div class="row opening-type" id="three-skylight-divided-group" style="display: none;">
                        @include('admin.components.opening_type.three_skylight_divided')
                    </div>

                    <div class="row opening-type" id="three-lowerlight-group" style="display: none;">
                        @include('admin.components.opening_type.three_lowerlight')
                    </div>

                    <div class="row opening-type" id="three-lowerlight-divided-group" style="display: none;">
                        @include('admin.components.opening_type.three_lowerlight_divided')
                    </div>

                    <div class="row opening-type" id="special-one-stumf-group" style="display: none;">
                        @include('admin.components.opening_type.special_one_stumf')
                    </div>

                    <div class="row opening-type" id="special-trapez-3eck-group" style="display: none;">
                        @include('admin.components.opening_type.special_trapez_3eck')
                    </div>

                    <div class="row opening-type" id="special-one-spitz-group" style="display: none;">
                        @include('admin.components.opening_type.special_one_spitz')
                    </div>

                    <div class="row opening-type" id="special-two-spitz-group" style="display: none;">
                        @include('admin.components.opening_type.special_two_spitz')
                    </div>

                    <div class="row opening-type" id="special-two-stumpf-group" style="display: none;">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-stumpf-f-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-stumpf-f-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-stumpf-f-f" value="Special Two Stumpf F F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-stumpf-f-dkl" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-stumpf-f-dkl.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-stumpf-f-dkl" value="Special Two Stumpf F DKL" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-stumpf-dkr-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-stumpf-dkr-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-stumpf-dkr-f" value="Special Two Stumpf DKR F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-stumpf-dkr-dkl" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-stumpf-dkr-dkl.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-stumpf-dkr-dkl" value="Special Two Stumpf DKR DKL" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>

                    <div class="row opening-type" id="special-one-rundb-group" style="display: none;">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rundb-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rundb-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rundb-f" value="Special Rundb F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rundb-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rundb-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rundb-dkr" value="Special Rundb DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rundb-dkl" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rundb-dkl.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rundb-dkl" value="Special Rundb DKL" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>

                    <div class="row opening-type" id="special-one-rundb-skylight-group" style="display: none;">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rundb-skylight-f-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rundb-skylight-f-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rundb-skylight-f-f" value="Special Rundb Skylight F F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rundb-skylight-f-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rundb-skylight-f-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rundb-skylight-f-dkr" value="Special Rundb Skylight F DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rundb-skylight-f-dkl" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rundb-skylight-f-dkl.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rundb-skylight-f-dkl" value="Special Rundb Skylight F DKL" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rundb-skylight-k-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rundb-skylight-k-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rundb-skylight-k-f" value="Special Rundb Skylight K F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rundb-skylight-k-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rundb-skylight-k-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rundb-skylight-k-dkr" value="Special Rundb Skylight K DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rundb-skylight-k-dkl" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rundb-skylight-k-dkl.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rundb-skylight-k-dkl" value="Special Rundb Skylight K DKL" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>

                    <div class="row opening-type" id="special-one-segmentb-group" style="display: none;">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-segmentb-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-segmentb-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-segmentb-f" value="Special Segmentb F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-segmentb-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-segmentb-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-segmentb-dkr" value="Special Segmentb DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-segmentb-dkl" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-segmentb-dkl.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-segmentb-dkl" value="Special Segmentb DKL" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>

                    <div class="row opening-type" id="special-two-rundb-group" style="display: none;">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-f-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-f-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-f-f" value="Special Two Rundb F F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-dl-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-dl-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-dl-dkr" value="Special Two Rundb DL DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-dkl-dr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-dkl-dr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-dkl-dr" value="Special Two Rundb DKL DR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-dkl-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-dkl-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-dkl-dkr" value="Special Two Rundb DKL DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>

                    <div class="row opening-type" id="special-two-rundb-skylight-group" style="display: none;">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-f-f-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-f-f-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-f-f-f" value="Special Two Rundb Skylight F F F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-f-f-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-f-f-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-f-f-dkr" value="Special Two Rundb Skylight F F DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-f-dkl-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-f-dkl-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-f-dkl-f" value="Special Two Rundb Skylight F DKL F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-f-dl-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-f-dl-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-f-dl-dkr" value="Special Two Rundb Skylight F DL DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-f-dkl-dr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-f-dkl-dr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-f-dkl-dr" value="Special Two Rundb Skylight F DKL DR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-f-dkl-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-f-dkl-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-f-dkl-dkr" value="Special Two Rundb Skylight F DKL DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-k-f-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-k-f-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-k-f-f" value="Special Two Rundb Skylight K F F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-k-f-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-k-f-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-k-f-dkr" value="Special Two Rundb Skylight K F DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-k-dkl-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-k-dkl-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-k-dkl-f" value="Special Two Rundb Skylight K DKL F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-k-dl-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-k-dl-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-k-dl-dkr" value="Special Two Rundb Skylight K DL DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-k-dkl-dr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-k-dkl-dr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-k-dkl-dr" value="Special Two Rundb Skylight K DKL DR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-rundb-skylight-k-dkl-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-rundb-skylight-k-dkl-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-rundb-skylight-k-dkl-dkr" value="Special Two Rundb Skylight K DKL DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>

                    <div class="row opening-type" id="special-two-segmentb-group" style="display: none;">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-segmentb-f-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-segmentb-f-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-segmentb-f-f" value="Special Tow Segmentb F F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-segmentb-f-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-segmentb-f-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-segmentb-f-dkr" value="Special Two Segmentb F DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-segmentb-dkl-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-segmentb-dkl-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-segmentb-dkl-f" value="Special Two Segmentb DKL F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-segmentb-dl-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-segmentb-dl-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-segmentb-dl-dkr" value="Special Two Segmentb DL DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-segmentb-dkl-dr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-segmentb-dkl-dr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-segmentb-dkl-dr" value="Special Two Segmentb DKL DR" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-two-segmentb-dkl-dkr" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-two-segmentb-dkl-dkr.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-two-segmentb-dkl-dkr" value="Special Two Segmentb DKL DKR" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>

                    <div class="row opening-type" id="special-one-rund-group" style="display: none;">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rund-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rund-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rund-f" value="Special Rund F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rund-oben-k-unten-f" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rund-oben-k-unten-f.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rund-oben-k-unten-f" value="Special Rund Oben K Unten F" class="radiobutton" hidden>
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 sort">
                            <label for="special-rund-schwingfluegel" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center text-center">
                                        <img src="{{ asset('images/opening-type/special-rund-schwingfluegel.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <input type="radio" name="opening_type" id="special-rund-schwingfluegel" value="Special Rund Schwingfluegel" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Size --}}
                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body p-1" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <p class="font-weight-bold mb-0 pb-0">SIZE</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 pb-0">More Details</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                        caramels tiramisu.

                                        Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                                        Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="width">Total Width <small>(m)</small></label>
                                <input type="text" id="width" class="form-control text-center calculation" value="0" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="height">Total Height <small>(m)</small></label>
                                <input type="text" id="height" class="form-control text-center calculation" value="0" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <p><strong>Scope:</strong> <span class="scope"></span></p>
                            <p><strong>Area:</strong> <span class="area"></span></p>
                        </div>
                    </div>
                </div>

                <div class="row mt-2 mb-4">
                    <div class="col-12 text-center">
                        <button class="btn btn-primary next">Next Step</button>
                    </div>
                </div>
            </div>

            <div class="step-2" style="display: none;">
                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body p-1" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <p class="font-weight-bold mb-0 pb-0">SOUNDPROOF GLAZING</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 pb-0">More Details</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                        caramels tiramisu.

                                        Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                                        Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="soundproof_glazing_no" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center">
                                        <strong>No</strong>
                                    </div>
                                </div>
                                <input type="radio" name="soundproof_glazing" id="soundproof_glazing_no" value="no" class="radiobutton" checked hidden>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="soundproof_glazing_yes" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center">
                                        <strong>Yes</strong>
                                    </div>
                                </div>
                                <input type="radio" name="soundproof_glazing" id="soundproof_glazing_yes" value="yes" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body p-1" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <p class="font-weight-bold mb-0 pb-0">SAFETY GLAZING</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 pb-0">More Details</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                        caramels tiramisu.

                                        Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                                        Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="safety_glazing_no" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center">
                                        <strong>No</strong>
                                    </div>
                                </div>
                                <input type="radio" name="safety_glazing" id="safety_glazing_no" value="no" class="radiobutton" checked hidden>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="safety_glazing_yes" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center">
                                        <strong>Yes</strong>
                                    </div>
                                </div>
                                <input type="radio" name="safety_glazing" id="safety_glazing_yes" value="yes" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body p-1" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <p class="font-weight-bold mb-0 pb-0">ORNAMENT-UND STRUKTURGLAS</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 pb-0">More Details</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                        caramels tiramisu.

                                        Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                                        Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="ornament_no" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center">
                                        <strong>No</strong>
                                    </div>
                                </div>
                                <input type="radio" name="ornament" id="ornament_no" value="no" class="radiobutton" checked hidden>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="ornament_yes" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center">
                                        <strong>Yes</strong>
                                    </div>
                                </div>
                                <input type="radio" name="ornament" id="ornament_yes" value="yes" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body p-1" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <p class="font-weight-bold mb-0 pb-0">SPROUTS</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 pb-0">More Details</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                        caramels tiramisu.

                                        Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                                        Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="sprouts_no" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center">
                                        <strong>No</strong>
                                    </div>
                                </div>
                                <input type="radio" name="sprouts" id="sprouts_no" value="no" class="radiobutton" checked hidden>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="sprouts_yes" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center">
                                        <strong>Yes</strong>
                                    </div>
                                </div>
                                <input type="radio" name="sprouts" id="sprouts_yes" value="yes" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="configuration-section">
                    <div class="card">
                        <div class="card-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card-body p-1" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <p class="font-weight-bold mb-0 pb-0">MOUNTAINING HOLES PRE-DRILLED</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 pb-0">More Details</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                        caramels tiramisu.

                                        Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                                        Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="mountaining_holes_no" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center">
                                        <strong>No</strong>
                                    </div>
                                </div>
                                <input type="radio" name="mountaining_holes" id="mountaining_holes_no" value="no" class="radiobutton" checked hidden>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="mountaining_holes_yes" class="card">
                                <div class="card-content">
                                    <div class="card-body justify-content-center">
                                        <strong>Yes</strong>
                                    </div>
                                </div>
                                <input type="radio" name="mountaining_holes" id="mountaining_holes_yes" value="yes" class="radiobutton" hidden>
                            </label>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        labelSelect();
        function labelSelect() {
            $("label").removeClass("selected");
            $(".radiobutton:checked").each(function (index, element) {
                $(element).closest("label").addClass("selected");
                if ($(element).attr('name') == "material") {
                    $('.selected-material').text($(element).val());
                }

                if ($(element).attr('name') == "profile") {
                    $('.selected-profile').text($(element).val());
                }

                if ($(element).attr('name') == "color") {
                    $('.selected-color').text($(element).val());
                }

                if ($(element).attr('name') == "window_type") {
                    $('.selected-window').text($(element).val());
                }
            });
        }

        function upperLowerLight() {
            $(".upper-lower-light").find('input[type="radio"]').prop('checked', false);
            $(".upper-lower-light").hide();
            var id = $('[name="window_type"]:checked').data('target');
            $(id).show();
            $(id+" .sort:eq(0)").find("input").prop("checked", true);
            labelSelect();
        }

        function openingType() {
            $(".opening-type").find('input[type="radio"]').prop('checked', false);
            $(".opening-type").hide();
            var id = $('[name="upper_lower"]:checked').data('target');
            $(id).show();
            $(id+" .sort:eq(0)").find("input").prop("checked", true);
            labelSelect();
        }

        $(document).on("change", ".radiobutton", function(){
            labelSelect();
        });

        $(document).on("change", "[name='window_type']", function(){
            upperLowerLight();
            openingType();
        });

        $(document).on("change", "[name='upper_lower']", function(){
            openingType();
        });

        $(document).on("keyup", ".calculation", function() {
            calcScope();
            calcArea();
        });

        function calcScope() {
            var width = $("#width").val();
            var height = $("#height").val();

            var scope = (2 * height) + (2 * width);
            $(".scope").html(scope);
        }

        function calcArea() {
            var width = $("#width").val();
            var height = $("#height").val();

            var area = height * width;
            $(".area").html(area+" qm<sup>2</sup>");
        }

        $(document).on("click", ".next", function() {
            $(".step-1").hide();
            $(".step-2").fadeIn();
        });
    </script>
@endsection

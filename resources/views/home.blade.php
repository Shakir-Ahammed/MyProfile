@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">About Me</h3>
                    <h6 class="theme-color lead">Backend devloper.</h6>

                    <div class="row about-list">
                        <div class="col-md-4">
                            <h3>welcome to my world</h3>
                            <h3>PHP LARAVEL</h3>

                        </div>
                        <div class="col-md-8 ">
                            <div class="media">
                                <label>NAME :</label>
                                <p>{{ Auth::user()->name }}</p>

                            </div>

                            <div class="media">
                                <label>E-mail :</label>
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                            <div class="media">
                                <label>Phone : </label>
                                <p>{{ Auth::user()->phone }}</p>
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-profile-modal">Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar ">

                    <img src="{{ Storage::url('public/' . Auth::user()->dp) }}" title="" alt="">

                </div>

            </div>
        </div>
    </div>




    <!-- modal -->
    <div class="modal fade" id="edit-profile-modal" tabindex="-1" role="dialog" aria-labelledby="edit-profile-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-profile-modal-label">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-profile-form" action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class=" form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-form-label">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ Auth::user()->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="profile-image" class="col-form-label">Profile Image:</label>
                            <input type="file" class="form-control-file" id="profile-image" name="image">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="edit-profile-form">Update</button>
                </div>
            </div>
        </div>
    </div>




</section>
@endsection
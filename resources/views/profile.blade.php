@extends('layouts.profile')

@section('content')
<div class="container my-5">
    <div class="profile-card text-center bg-dark-blue text-white">
        <img src="{{ asset('asset/profile.png') }}" alt="Profile Image">
        <div class="profile-details">
            <h2>Profile</h2>
            <p>Name: Tristan L. Parijas</p>
            <p>Course: BSIT-2</p>
            <p>Address: Prk 2, Tambacan Iligan City</p>
            <p>Religion: Roman Catholic</p>
            <p>Birthday: January 2, 2004</p>
            <p>Contact Number: 09518429817</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">
                Edit Profile
            </button>
        </div>
    </div>


    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="inputName" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="inputName" value="Tristan L. Parijas">
                    </div>
                    <div class="form-group">
                        <label for="inputCourse" class="col-form-label">Course:</label>
                        <input type="text" class="form-control" id="inputCourse" value="BSIT-2">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" id="inputAddress" value="Prk 2, Tambacan Iligan City">
                    </div>
                    <div class="form-group">
                        <label for="inputReligion" class="col-form-label">Religion:</label>
                        <input type="text" class="form-control" id="inputReligion" value="Roman Catholic">
                    </div>
                    <div class="form-group">
                        <label for="inputBirthday" class="col-form-label">Birthday:</label>
                        <input type="text" class="form-control" id="inputBirthday" value="January 2, 2004">
                    </div>
                    <div class="form-group">
                        <label for="inputContactNumber" class="col-form-label">Contact Number:</label>
                        <input type="text" class="form-control" id="inputContactNumber" value="09518429817">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection

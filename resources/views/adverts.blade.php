@extends('layouts.adverts')

@section('content')
<div class="container">
    <section class="form-container">
        <h2>Add a New Entry</h2>
        <form>
            <div class="mb-3">
                <label for="found-lost" class="form-label">Found/Lost:</label>
                <select id="found-lost" name="found_lost" class="form-select">
                    <option value="found">Found</option>
                    <option value="lost">Lost</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="item-name" class="form-label">Item Name:</label>
                <input type="text" id="item-name" name="item-name" class="form-control" placeholder="Enter item name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control" placeholder="Enter item description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="contact-number" class="form-label">Contact Number:</label>
                <input type="tel" id="contact-number" name="contact_number" class="form-control" placeholder="Enter contact number" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location:</label>
                <input type="text" id="location" name="location" class="form-control" placeholder="Enter location" required>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo:</label>
                <input type="file" id="photo" name="photo" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</div>

<footer>
    <p>&copy; 2024 Lost & Found. All rights reserved.</p>
</footer>


@endsection

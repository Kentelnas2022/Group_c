@extends('layouts.adverts')

@section('content')
    <div class="container">
        <section class="form-container">
            <h2>Add a New Entry</h2>

                <div class="input-group">
                    <label for="found-lost">Found/Lost:</label>
                    <select id="found-lost" name="found_lost">
                        <option value="found">Found</option>
                        <option value="lost">Lost</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="item-name">Item Name:</label>
                    <input type="text" id="item-name" name="item-name" placeholder="Enter item name" required>
                </div>
                <div class="input-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" placeholder="Enter item description" required></textarea>
                </div>
                <div class="input-group">
                    <label for="contact-number">Contact Number:</label>
                    <input type="tel" id="contact-number" name="contact_number" placeholder="Enter contact number" required>
                </div>
                <div class="input-group">
                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location" placeholder="Enter location" required>
                </div>
                <div class="input-group">
                    <label for="photo">Photo:</label>
                    <input type="file" id="photo" name="photo">
                </div>
                <button type="submit">Submit</button>
            </form>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Lost & Found. All rights reserved.</p>
    </footer>


@endsection

@extends('layouts.lostitem')

@section('content')
<div class="container">
    <nav>
      <ul>
        <li><a href="#lost">Lost Items</a></li>
        <li><a href="#found">Found Items</a></li>
      </ul>
    </nav>

    <section id="lost" class="items-section">
      <h2>Lost Items</h2>
      <ul class="item-list">
        <li>Lost item 1</li>
        <li>Lost item 2</li>
        <li>Lost item 3</li>
      </ul>
    </section>

    <section id="found" class="items-section">
      <h2>Found Items</h2>
      <ul class="item-list">
        <li>Found item 1</li>
        <li>Found item 2</li>
        <li>Found item 3</li>
      </ul>
    </section>
  </div>

  <footer>
    <p>&copy; 2024 Lost & Found. All rights reserved.</p>
  </footer>
</body>
</html>
@endsection

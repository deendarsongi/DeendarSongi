
@extends('frontend.sidebar')
@section('dashboard_content')
<div class="dsdb-content">
    <div class="dsdb-content-inner">
      <div class="dsdb-sub-header">
        <h2>রিপোর্টসমূহ</h2>
      </div>
      <div class="row dsdb-item-container">
        <div class="col-12 dsdb--list-item-container-inner">
          <table class="dsdb-list-item-container">
            <tbody><tr class="dsdb-list-item-head">
              <th>#</th>
              <th>রিপোর্ট নাম্বার</th>
              <th>বায়োডাটা আইডি</th>
              <th>তারিখ</th>
              <th>স্ট্যাটাস</th>
            </tr>
            <tr class="dsdb-list-each-item">
              <td>1</td>
              <td>546821</td>
              <td>DSB5468</td>
              <td>Feb 25, 2024</td>
              <td></td>
            </tr>
          </tbody></table>
        </div>
      </div>
    </div>
  </div>
@endsection

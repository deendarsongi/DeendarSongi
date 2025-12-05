@extends('backend.admin')

@section('des_content')


<div class="ap-container">
<div class="ap-topbar-field">
      <h1 class="ap-title">Manage Users</h1>
        <!-- <div class="search-box">
          <span><img src="uploads/Search.svg" alt=""></span>
      <input type="text" placeholder="Search" />
    </div> -->
</div>
   <div class="ap-navbar-field">
     <div class="tabs" id="tabs">
      <span class="tab active">All Users<span class="badge">{{ $users->count() }}</span></span>
      <span class="tab">Reported<span class="badge">5</span></span>
    </div>
    <!-- Indicator under line -->
    <div class="indicator-container">
      <div class="divider"></div>
      <div class="indicator" id="indicator"></div>
    </div>
   </div>
 <div class="ap-content-field">
   <table class="ap-table-field">
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Gender</th>
        <th>Gmail/ Phone</th>
        <th> Biodata Status</th>
        <th>Profile Reported</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody class="ap-tbody-field">
@foreach ($users as $index => $user)
<tr>
    <td>{{ $index + 1 }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->gender == 1 ? 'Male' : ($user->gender == 2 ? 'Female' : 'N/A') }}</td>
    <td class="user-login-data">
        <span class="user-mail-data">{{ $user->email }}</span>
        <span class="user-phone-data">{{ $user->phone }}</span>
    </td>
    <td>
        @if($user->biodata)
             @if($user->biodata->status == 'approved')
                <span class="biodata-status status-approved">Approved</span>
            @endif
            @if($user->biodata->status == 'in_review')
                <span class="biodata-status status-in_review">In Review</span>
            @endif
            @if($user->biodata->status == 'in_complete')
                <span class="biodata-status status-not-submitted">In Complete</span>
            @endif
            @if($user->biodata->status == 'reject')
                <span class="biodata-status status-rejected">Reject</span>
            @endif
        @else
            <span class="biodata-status status-not-created">Not Created</span>
        @endif
    </td>


    <td>{{ $user->reported_count ?? 0 }}</td>
    <td>
        <div class="ap-more-option">
            <img src="{{ asset('backend') }}/uploads/Three-Dots.svg" alt="" class="ap-more-option-item">
            <div class="ap-option-dropdown-menu">
                <a href="#">Block</a>
                <a href="#">Verification Info</a>
                <a href="#">Login as User</a>
                <a href="#">Delete</a>
            </div>
        </div>
    </td>
</tr>
@endforeach
</tbody>

    {{-- <tbody class="ap-tbody-field">
      <tr>
        <td>1</td>
        <td>Sayem Sadat</td>
        <td>Male</td>
        <td class="user-login-data">
          <span class="user-mail-data">iamsayemsadat@gmail.com</span>
          <span class="user-phone-data">01815663355</span>
        </td>
        <td><span class=" biodata-status status-not-created">Not Created</span></td>
        <td>0</td>
     <td>
  <div class="ap-more-option">
    <img src="{{ asset('backend') }}/uploads/Three-Dots.svg" alt="" class="ap-more-option-item">
    <div class="ap-option-dropdown-menu">
      <a href="">Block</a>
      <a href="">Verification Info</a>
      <a href="">Login as User</a>
      <a href="">Delete</a>
    </div>
  </div>
</td>


      </tr>
    </tbody> --}}
  </table>
 </div>

    </div>
@endsection

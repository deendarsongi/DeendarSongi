@extends('backend.admin')

@section('des_content')
    <div class="ap-container">
<div class="ap-topbar-field">
            <h1 class="ap-title">Manage Biodatas</h1>
                <div class="search-box">
                <span><img src="{{ asset('backend') }}/uploads/Search.svg" alt=""></span>
            <input type="text" placeholder="Search" />
            </div>
        </div>
        <div class="ap-navbar-field">
            <div class="tabs" id="tabs">
            <span class="tab active">All<span class="badge">{{ $biodatas->count() }}</span></span>
            <span class="tab">In Review<span class="badge">{{ $biodatas->where('status', 'in_review')->count() }}</span></span>
            <span class="tab">Approved<span class="badge">{{ $biodatas->where('status', 'approved')->count() }}</span></span>
            <span class="tab">Rejected<span class="badge">{{ $biodatas->where('status', 'rejected')->count() }}</span></span>
            <span class="tab">Hidden<span class="badge">{{ $biodatas->where('status', 'hidden')->count() }}</span></span>
            <span class="tab">Blocked<span class="badge">{{ $biodatas->where('status', 'blocked')->count() }}</span></span>
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
                <th>Biodata Code</th>
                <th>Gender</th>
                <th>Created At</th>
                <th>Submitted Count</th>
                <th>Biodata Status</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody class="ap-tbody-field">
{{--  --}}
            @foreach ($biodatas as $index => $biodata)
                {{-- @if ($biodata->status != 'in_complete' ) --}}
                    <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $biodata->biodata_id }}</td>
                    <td>{{ $biodata->biodata_type }}</td>
                    <td>{{ $biodata->created_at->format('d-m-Y') }}</td>
                    <td>0</td>
                    <td>
                        @if($biodata->status == 'approved')
                            <span class="biodata-status status-approved">Approved</span>
                        @elseif($biodata->status == 'in_review')
                            <span class="biodata-status status-in_review">In Review</span>
                        @elseif($biodata->status == 'reject')
                            <span class="biodata-status status-rejected">Reject</span>
                        @elseif($biodata->status == 'in_complete')
                            <span class="biodata-status status-not-submitted ">In Complete</span>
                        @endif
                    </td>

                    <td>
                        <div class="ap-more-option">
                            <img src="{{ asset('backend') }}/uploads/Three-Dots.svg" alt="" class="ap-more-option-item">
                            <div class="ap-option-dropdown-menu">
                            <a href="{{ route('view.biodata', $biodata->id) }}">View Biodata</a>
                            <a href="">Block</a>
                            <a href="">User Details</a>
                            <a href="">Login as User</a>
                            <a href="">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                {{-- @endif --}}
            @endforeach
            </tbody>
        </table>
        </div>

    </div>
@endsection

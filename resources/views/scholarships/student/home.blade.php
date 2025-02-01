@extends('layouts.app', ['title' => 'Scholarships'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Beasiswa</h1>
            {{-- @if (Auth::user()->position_id == 3)
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Download Excel
                </a>
            @endif --}}
        </div>
    </div>
    @include('scholarships.student.table')
    {{ $scholarships->links() }}
@endsection

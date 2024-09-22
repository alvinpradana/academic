@extends('layouts.app', ['title' => 'Lessons'])

@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Mata Pelajaran</h1>
            @if (Auth::user()->position_id == 3)
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Export to Excel
                </a>
            @endif
        </div>
    </div>
    @include('lessons.table')
    {{ $lessons->links() }}
@endsection

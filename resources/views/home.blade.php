@extends('layouts.template')

@section('page-title')
    Dashboard Admin    
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   Halaman Admin
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

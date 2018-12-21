@extends('dashboard.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Static Pages</div>

                    <div class="card-body">
                        <a href="{{ route('static.get', ['pagePath' => 'roadmap']) }}">Roadmap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

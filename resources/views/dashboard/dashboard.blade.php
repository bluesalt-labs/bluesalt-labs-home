@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <hr />
                    <h2>Temporary</h2>
                    <ul>
                        <li>
                            <a href="{{ route('static.index') }}">Static Pages</a>
                            <ul>
                                <li><a href="{{ route('static.get', ['pagePath' => 'roadmap']) }}">Roadmap</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('data-items.{type}.create', ['type' => 'star-rating']) }}">
                                Create Star Rating Data Items
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('data-items.{type}.create', ['type' => 'time-journal-entry']) }}">
                                Create Time Journal Entry Items
                            </a>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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

                        <li><a href="{{ route('data-items.create') }}">Create Data Items</a></li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

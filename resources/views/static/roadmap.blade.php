@extends('layouts.app')

@section('content')
    <div class="container">
        <a role="button" class="btn btn-outline-dark" href="/static">
            <i class="fa fa-arrow-left"></i> Back to Static Pages
        </a>
    </div>
    <hr />
    <div class="container">
        <h1>Roadmap</h1>

        <hr />

        <h2>To Do</h2>
        <ul>
            <li>Develop my own theme and get rid of bootstrap/jquery.</li>
            <li>set up the static index page to dynamically retrieve static pages (get file list?)</li>
            <li>set up this roadmap page to be a markdown file. </li>
            <ul>
                <li>
                    see
                    <a href="https://laravel.com/docs/mail#generating-markdown-mailables" target="_blank">
                        Laravel - Generating Markdown Mailables
                    </a>
                    for more information.
                </li>
            </ul>
        </ul>
    </div>
@endsection
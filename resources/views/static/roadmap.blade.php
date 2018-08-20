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
            <li>
                <span>Develop my own theme and get rid of bootstrap/jquery.</span>
                <ul>
                    <li>Develop a light and dark theme and add a toggle switch</li>
                </ul>
            </li>
            <li>
                <span>Add the ability to save user preferences.</span>
                <ul>
                    <li>Maybe save these prefrerences in the <code>user.json_data</code> array?</li>
                </ul>
            </li>
            <li>set up the static index page to dynamically retrieve static pages (get file list?)</li>
            <li>
                <span>set up this roadmap page to be a markdown file.</span>
                <ul>
                    <li>
                        see
                        <a href="https://laravel.com/docs/mail#generating-markdown-mailables" target="_blank">
                            Laravel - Generating Markdown Mailables
                        </a>
                        for more information.
                    </li>
                </ul>
            </li>
            <li>Set up a way to share tasks and notes between users. (shared_with pivot table?)</li>
            <li>set up <a href="https://laravel.com/docs/socialite" target="_blank">Laravel Socialite</a></li>
            <li>set up <a href="https://laravel.com/docs/authorization" target="_blank">Laravel Authorization</a></li>
        </ul>
    </div>
@endsection
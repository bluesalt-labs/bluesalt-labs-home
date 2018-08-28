@extends('layouts.app')

@section('content')
<div class="container">
    <a role="button" class="btn btn-outline-dark" href="/static">
        <i class="fa fa-arrow-left"></i> Back to Static Pages
    </a>
</div>
<hr />
<div class="container">
    <div class="row no-gutters">
        <div class="col-md-4 order-sm-0">
            <ul id="sidebar-links"></ul>
            <hr class="d-md-none" />
        </div>
        <div class="col-md-8 order-md-0 order-sm-2">
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
                        <li>Maybe save these preferences in the <code>user.json_data</code> array?</li>
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
                <li>
                    <span>set up <a href="https://laravel.com/docs/authorization" target="_blank">Laravel Authorization</a></span>
                    <ul>
                        <li>Set up some basic CRUD functionality for administrators. like, user management, etc.</li>
                    </ul>
                </li>
                <li>Figure out a way for individual users to customize their dashboard.</li>
                <li>Create data item type seeds (i.e. built-in default types).</li>
                <li><del>Get Mailgun working,</del> set up test welcome email.</li>
                <li>Set up a way to import/export all of your own data.</li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script src="{{ asset('js/sidebar-links.min.js') }}"></script>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        sidebarLinks();
    });
</script>
@endsection
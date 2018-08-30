<ul id="left-nav" class="nav flex-column nav-pills">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('notes') }}">Notes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('tasks') }}">Tasks</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('data-items') }}">Data Items</a>
    </li>
</ul>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        var activeNav = document.querySelector('#left-nav a[href="' + location.href + '"].nav-link');

        if(activeNav) { activeNav.className = "nav-link active"; }
    });
</script>
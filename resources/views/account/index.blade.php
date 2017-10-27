<h2> Welcome, {{ \Auth::user()->email }}</h2>
<br>

@if(\Auth::user()->isAdmin == 1)
    <a href="{{ route('admin') }}">In admin</a><br>
@endif

<a href="{{ route('logout') }}">Sign out</a>


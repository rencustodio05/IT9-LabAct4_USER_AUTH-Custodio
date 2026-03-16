<link rel="stylesheet" href="/css/style.css">

<div class="container" style="max-width: 500px; margin-top: 60px;">
    <div class="post-card">
        <h1>Welcome, {{ auth()->user()->name }}!</h1>
        <p>You are logged in as {{ auth()->user()->email }}</p>
        <form method="POST" action="/logout" style="margin-top: 24px;">
            @csrf
            <button type="submit" class="btn btn-red" style="width:100%;">Logout</button>
        </form>
    </div>
</div>
<link rel="stylesheet" href="/css/style.css">

<div class="container" style="max-width: 400px; margin-top: 60px;">
    <div class="form-card">
        <form method="POST" action="/login">
            @csrf
            <h1 style="text-align:center; margin-bottom: 24px;">Login</h1>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-blue" style="width:100%; margin-top: 10px;">Login</button>
            <div style="text-align:center; margin-top: 14px;">
                <a href="/register" style="color:#60a5fa; text-decoration:underline; background:none; border:none; font-size:14px; cursor:pointer;">Register</a>
            </div>
        </form>
    </div>
</div>
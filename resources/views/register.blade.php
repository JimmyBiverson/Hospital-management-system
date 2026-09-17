<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create account | Bayanno</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            font-family: Inter, sans-serif;
            background: linear-gradient(135deg, #ebf8f7, #f5f8ff);
            color: #112233;
        }
        .panel {
            width: min(540px, 92vw);
            background: rgba(255,255,255,0.9);
            border: 1px solid rgba(17,34,51,0.08);
            border-radius: 24px;
            box-shadow: 0 30px 70px rgba(17, 34, 51, 0.12);
            padding: 32px 28px;
        }
        h1 { margin: 0 0 12px; font-size: 2rem; }
        p { margin: 0 0 22px; color: #617089; }
        form { display: grid; gap: 16px; }
        input {
            height: 50px; border-radius: 12px; border: 1px solid rgba(17,34,51,0.08);
            background: #f5f9ff; padding: 0 14px; font: inherit;
        }
        .row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .btn {
            height: 52px; border: 0; border-radius: 12px; background: linear-gradient(135deg, #1eb7a6, #0d8d80);
            color: white; font-weight: 700; cursor: pointer;
        }
        .muted { margin-top: 14px; color: #617089; font-size: 0.95rem; }
        a { color: #0d8d80; text-decoration: none; }
        @media (max-width: 560px) { .row { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <div class="panel">
        <h1>Create account</h1>
        <p>Join Bayanno to book appointments and manage your care.</p>
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="row">
                <input type="text" name="first_name" placeholder="First name" required>
                <input type="text" name="last_name" placeholder="Last name" required>
            </div>
            <input type="email" name="email" placeholder="Email address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="hidden" name="role" value="patient">
            <button class="btn" type="submit">Create account</button>
        </form>
        <div class="muted">Already have an account? <a href="{{ route('login') }}">Sign in</a></div>
    </div>
</body>
</html>

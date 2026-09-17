<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Bayanno</title>
    <style>
        :root {
            --bg: #f3f7fb;
            --panel: #ffffff;
            --text: #112233;
            --muted: #617089;
            --line: rgba(17,34,51,0.08);
            --primary: #1eb7a6;
            --primary-light: rgba(30,183,166,0.12);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0; font-family: Inter, sans-serif; background: var(--bg); color: var(--text);
        }
        .topbar {
            display: flex; justify-content: space-between; align-items: center; padding: 18px 32px;
            background: #fff; border-bottom: 1px solid var(--line);
        }
        .brand { font-weight: 800; font-size: 1.2rem; }
        .nav { display: flex; gap: 22px; color: var(--muted); font-weight: 600; }
        .nav a { color: inherit; text-decoration: none; }
        .layout { max-width: 1180px; margin: 28px auto; padding: 0 18px; }
        .hero {
            background: linear-gradient(135deg, #0f1b2b, #1b2d40); color: white; border-radius: 22px; padding: 28px 26px;
            display: flex; justify-content: space-between; gap: 20px; align-items: center;
        }
        .hero h1 { margin: 0 0 6px; font-size: clamp(2rem, 4vw, 3rem); letter-spacing: -0.05em; }
        .hero p { margin: 0; color: rgba(255,255,255,0.8); }
        .badge {
            background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.16); border-radius: 999px;
            padding: 10px 16px; font-weight: 700; }
        .grid {
            margin-top: 26px; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px;
        }
        .card {
            background: white; border: 1px solid var(--line); border-radius: 18px; padding: 22px;
            box-shadow: 0 12px 30px rgba(17,34,51,0.04);
        }
        .card h3 { margin: 0 0 10px; font-size: 1.1rem; }
        .card p { margin: 0; color: var(--muted); line-height: 1.6; }
        .pill {
            display: inline-block; background: var(--primary-light); color: var(--primary); font-weight: 700;
            border-radius: 999px; padding: 8px 12px; margin-bottom: 12px; font-size: 0.8rem;
        }
        @media (max-width: 820px) { .grid { grid-template-columns: 1fr; } .topbar { flex-direction: column; gap: 12px; } .hero { flex-direction: column; align-items: flex-start; } }
    </style>
</head>
<body>
    <header class="topbar">
        <div class="brand">Bayanno Health</div>
        <nav class="nav">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </nav>
    </header>

    <main class="layout">
        <section class="hero">
            <div>
                <div class="pill">{{ $role }}</div>
                <h1>Welcome back</h1>
                <p>{{ $email }}</p>
            </div>
            <div class="badge">Secure portal</div>
        </section>

        <section class="grid">
            <article class="card">
                <h3>Appointments</h3>
                <p>Review upcoming schedules, approve requests, and manage patient visits without leaving the dashboard.</p>
            </article>
            <article class="card">
                <h3>Patients</h3>
                <p>Access patient records, care details, and wellness notes from a single place.</p>
            </article>
            <article class="card">
                <h3>Reports</h3>
                <p>Track diagnostics, prescription updates, and care actions in real time.</p>
            </article>
        </section>
    </main>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Bayanno Hospital Management System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f3f7fb;
            --panel: #ffffff;
            --soft: #eef3f9;
            --text: #112233;
            --muted: #617089;
            --primary: #1eb7a6;
            --primary-dark: #0d8d80;
            --line: rgba(17, 34, 51, 0.08);
            --shadow: 0 24px 60px rgba(13, 22, 32, 0.12);
        }

        * { box-sizing: border-box; }
        html, body { height: 100%; }
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f4fbfa 0%, #edf3fb 100%);
            color: var(--text);
        }
        a { color: inherit; text-decoration: none; }
        button, input { font: inherit; }

        .page {
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 28px;
        }

        .card {
            width: min(980px, 100%);
            background: rgba(255,255,255,0.78);
            backdrop-filter: blur(6px);
            border: 1px solid var(--line);
            border-radius: 28px;
            box-shadow: var(--shadow);
            overflow: hidden;
            display: grid;
            grid-template-columns: 1.1fr 1fr;
        }

        .brand-panel {
            position: relative;
            min-height: 620px;
            background:
                linear-gradient(180deg, rgba(13,22,31,0.42), rgba(13,22,31,0.66)),
                url('https://images.unsplash.com/photo-1538108149393-fbbd81895977?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
            color: white;
            padding: 40px 34px 28px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .brand-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .brand-name {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            letter-spacing: 0.02em;
        }
        .brand-mark {
            width: 36px;
            height: 36px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: rgba(30, 183, 166, 0.9);
            color: #032d2a;
            font-weight: 800;
        }

        .hero-copy {
            padding: 0 10px 10px;
        }
        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: rgba(255,255,255,0.8);
            font-size: 12px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 700;
        }
        .eyebrow::before {
            content: '';
            width: 28px;
            height: 1px;
            background: rgba(255,255,255,0.6);
        }
        h1 {
            margin: 18px 0 0;
            font-size: clamp(2.5rem, 4vw, 4.1rem);
            line-height: 1.04;
            letter-spacing: -0.07em;
            max-width: 380px;
        }
        .tagline {
            margin-top: 16px;
            max-width: 380px;
            color: rgba(255,255,255,0.82);
            line-height: 1.7;
            font-size: 1rem;
        }

        .mini-cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            margin-top: 28px;
        }
        .mini-card {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 16px;
            padding: 16px 14px;
        }
        .mini-card strong {
            display: block;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }
        .mini-card span {
            font-size: 0.75rem;
            color: rgba(255,255,255,0.7);
        }

        .login-panel {
            background: #fff;
            padding: 38px 38px 28px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }
        .header h2 {
            margin: 0;
            font-size: 2rem;
            letter-spacing: -0.05em;
        }
        .header .status-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #2ad1b1;
            box-shadow: 0 0 0 6px rgba(42, 209, 177, 0.12);
        }

        form {
            display: grid;
            gap: 18px;
        }
        .field {
            display: grid;
            gap: 8px;
        }
        label {
            font-weight: 600;
            font-size: 0.8rem;
            color: var(--muted);
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }
        input {
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 12px;
            height: 52px;
            padding: 0 16px;
            color: var(--text);
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        input:focus {
            border-color: rgba(30,183,166,0.7);
            box-shadow: 0 0 0 5px rgba(30,183,166,0.1);
        }
        .primary-btn {
            margin-top: 8px;
            border: 0;
            border-radius: 12px;
            height: 54px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
            box-shadow: 0 16px 26px rgba(30,183,166,0.22);
        }
        .primary-btn:hover { transform: translateY(-1px); }

        .helper {
            margin-top: 12px;
            color: var(--muted);
            font-size: 0.93rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }
        .helper a {
            color: var(--primary-dark);
            font-weight: 600;
        }

        .role-pills {
            margin-top: 14px;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }
        .role-btn {
            border: 1px solid var(--line);
            background: #f7fafc;
            color: var(--text);
            border-radius: 12px;
            min-height: 42px;
            padding: 10px 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.15s ease;
        }
        .role-btn.active {
            background: rgba(30,183,166,0.12);
            border-color: rgba(30,183,166,0.55);
            color: var(--primary-dark);
        }

        @media (max-width: 820px) {
            .card { grid-template-columns: 1fr; }
            .brand-panel { min-height: 300px; }
            .login-panel { padding: 28px 22px 24px; }
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="card">
            <aside class="brand-panel">
                <div class="brand-top">
                    <div class="brand-name"><span class="brand-mark">+</span> Bayanno</div>
                    <span style="font-size:0.8rem; opacity:0.8;">Care, connected</span>
                </div>

                <div class="hero-copy">
                    <div class="eyebrow">Trusted healthcare</div>
                    <h1>Better access to the care you need.</h1>
                    <p class="tagline">A secure and friendly system for patients, staff, and clinicians to manage appointments, records, and communication in one place.</p>

                    <div class="mini-cards">
                        <div class="mini-card"><strong>24/7</strong><span>Support</span></div>
                        <div class="mini-card"><strong>150+</strong><span>Doctors</span></div>
                        <div class="mini-card"><strong>98%</strong><span>Satisfaction</span></div>
                    </div>
                </div>
            </aside>

            <main class="login-panel">
                <div class="header">
                    <h2>Login</h2>
                    <span class="status-dot" aria-label="secure status"></span>
                </div>

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="you@example.com" required>
                    </div>

                    <div class="field">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" placeholder="Enter your password" required>
                    </div>

                    <input type="hidden" name="role" id="selected-role" value="admin">

                    <div class="role-pills" aria-label="Select user role">
                        <button type="button" class="role-btn active" data-role="admin">Admin</button>
                        <button type="button" class="role-btn" data-role="doctor">Doctor</button>
                        <button type="button" class="role-btn" data-role="patient">Patient</button>
                        <button type="button" class="role-btn" data-role="nurse">Nurse</button>
                        <button type="button" class="role-btn" data-role="receptionist">Receptionist</button>
                        <button type="button" class="role-btn" data-role="laboratorist">Laboratorist</button>
                        <button type="button" class="role-btn" data-role="pharmacist">Pharmacist</button>
                        <button type="button" class="role-btn" data-role="accountant">Accountant</button>
                    </div>

                    <button type="submit" class="primary-btn">Login</button>
                </form>

                <div class="helper">
                    <span>Forgot your password?</span>
                    <a href="{{ route('home') }}">Back to home</a>
                </div>
            </main>
        </div>
    </div>

    <script>
        const buttons = [...document.querySelectorAll('.role-btn')];
        const hiddenRole = document.getElementById('selected-role');
        buttons.forEach((btn) => {
            btn.addEventListener('click', () => {
                buttons.forEach((b) => b.classList.toggle('active', b === btn));
                hiddenRole.value = btn.dataset.role;
            });
        });
    </script>
</body>
</html>

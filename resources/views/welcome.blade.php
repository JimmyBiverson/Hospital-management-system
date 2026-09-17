<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Bayanno') }} | Care, connected</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@700;800&display=swap');
        :root { --ink: #e9edf5; --muted: #9ca7bc; --line: rgba(255,255,255,.12); --panel: rgba(20,29,46,.82); --teal: #43d4c2; }
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; color: var(--ink); background: #111827 url('/assets/login_page/img/bg.jpg') center / cover fixed; font: 15px/1.5 'DM Sans', sans-serif; }
        body::before { content: ''; position: fixed; inset: 0; background: rgba(13, 20, 34, .38); pointer-events: none; }
        a { color: inherit; text-decoration: none; }
        .shell { position: relative; width: min(1180px, calc(100% - 48px)); margin: auto; }
        header { display: flex; align-items: center; justify-content: space-between; padding: 27px 0; border-bottom: 1px solid var(--line); }
        .brand { display: flex; align-items: center; gap: 12px; font: 800 19px 'Manrope', sans-serif; letter-spacing: -.04em; }
        .brand-mark { display: grid; place-items: center; width: 38px; height: 38px; border-radius: 12px; color: #10232e; background: var(--teal); font-size: 21px; }
        nav { display: flex; align-items: center; gap: 30px; color: var(--muted); font-size: 13px; font-weight: 600; }
        nav a:first-child, nav a:hover { color: var(--ink); }
        .access { display: flex; align-items: center; gap: 13px; font-size: 13px; font-weight: 600; }
        .login { color: var(--muted); }
        .outline, .primary { display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; padding: 11px 17px; font-weight: 700; }
        .outline { border: 1px solid var(--line); }
        .primary { color: #10232e; background: var(--teal); box-shadow: 0 8px 24px rgba(67,212,194,.18); }
        main { padding: 75px 0 80px; }
        .hero { display: grid; grid-template-columns: minmax(0, 1.15fr) minmax(360px, .85fr); align-items: center; gap: 72px; }
        .eyebrow { display: flex; align-items: center; gap: 10px; color: var(--teal); font-size: 12px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; }
        .eyebrow::before { content: ''; width: 28px; height: 1px; background: var(--teal); }
        h1 { max-width: 650px; margin: 19px 0; color: #f5f7fb; font: 800 clamp(42px, 6vw, 76px)/1.02 'Manrope', sans-serif; letter-spacing: -.065em; }
        h1 span { color: var(--teal); }
        .lede { max-width: 500px; margin: 0 0 30px; color: var(--muted); font-size: 17px; }
        .hero-actions { display: flex; align-items: center; gap: 20px; }
        .text-link { color: #d6deeb; font-size: 13px; font-weight: 700; }
        .text-link::after { content: '  →'; color: var(--teal); }
        .booking { position: relative; padding: 26px; border: 1px solid var(--line); border-radius: 16px; background: var(--panel); box-shadow: 0 22px 50px rgba(0,0,0,.2); backdrop-filter: blur(14px); }
        .booking::after { content: ''; position: absolute; top: 22px; right: 24px; width: 8px; height: 8px; border-radius: 50%; background: var(--teal); box-shadow: 0 0 0 5px rgba(67,212,194,.13); }
        .booking h2 { margin: 0 0 5px; font: 700 22px 'Manrope', sans-serif; letter-spacing: -.04em; }
        .booking p { margin: 0 0 22px; color: var(--muted); font-size: 13px; }
        label { display: block; margin: 15px 0 7px; color: #c7cfdd; font-size: 12px; font-weight: 600; }
        .field { display: flex; align-items: center; gap: 10px; padding: 12px 13px; border: 1px solid var(--line); border-radius: 8px; color: var(--muted); background: rgba(255,255,255,.045); font-size: 13px; }
        .field strong { margin-left: auto; color: var(--ink); font-size: 15px; }
        .booking .primary { width: 100%; margin-top: 22px; }
        .section-head { display: flex; align-items: end; justify-content: space-between; margin: 85px 0 20px; }
        .section-head h2 { margin: 0; font: 700 24px 'Manrope', sans-serif; letter-spacing: -.04em; }
        .section-head p { margin: 0; color: var(--muted); font-size: 13px; }
        .services { display: grid; grid-template-columns: repeat(4, 1fr); gap: 13px; }
        .service { padding: 22px; border: 1px solid var(--line); border-radius: 12px; background: rgba(19,29,46,.68); transition: transform .2s ease, border-color .2s ease; }
        .service:hover { transform: translateY(-4px); border-color: rgba(67,212,194,.55); }
        .service-icon { display: grid; place-items: center; width: 39px; height: 39px; margin-bottom: 24px; border-radius: 10px; color: var(--teal); background: rgba(67,212,194,.11); font-size: 19px; }
        .service h3 { margin: 0 0 6px; font-size: 15px; }
        .service p { margin: 0; color: var(--muted); font-size: 12px; }
        footer { display: flex; justify-content: space-between; padding: 25px 0 35px; border-top: 1px solid var(--line); color: var(--muted); font-size: 12px; }
        @media (max-width: 800px) { .shell { width: min(100% - 32px, 600px); } nav { display: none; } .hero { grid-template-columns: 1fr; gap: 45px; } main { padding-top: 55px; } h1 { font-size: clamp(43px, 13vw, 66px); } .services { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 480px) { header { padding: 20px 0; } .access .login { display: none; } .outline { padding: 9px 12px; } .hero-actions { align-items: flex-start; flex-direction: column; gap: 15px; } .booking { padding: 20px; } .section-head { align-items: start; flex-direction: column; gap: 5px; margin-top: 62px; } .services { grid-template-columns: 1fr; } footer { gap: 10px; flex-direction: column; } }
    </style>
</head>
<body>
    <div class="shell">
        <header>
            <a class="brand" href="{{ url('/') }}"><span class="brand-mark">+</span> Bayanno Health</a>
            <nav aria-label="Main navigation"><a href="#home">Overview</a><a href="#services">Services</a><a href="#contact">Contact</a></nav>
            <div class="access"><a class="login" href="{{ url('/login') }}">Sign in</a><a class="outline" href="{{ url('/register') }}">Create account</a></div>
        </header>
        <main id="home">
            <section class="hero">
                <div>
                    <div class="eyebrow">Care that moves with you</div>
                    <h1>A clearer path to <span>better care.</span></h1>
                    <p class="lede">One connected place for patients, clinicians, and the teams who keep care moving forward.</p>
                    <div class="hero-actions"><a class="primary" href="{{ url('/register') }}">Book an appointment</a><a class="text-link" href="#services">Explore services</a></div>
                </div>
                <aside class="booking" aria-label="Appointment finder">
                    <h2>Find your care team</h2>
                    <p>Start with a specialty or a clinician.</p>
                    <label for="specialty">Specialty</label><div class="field" id="specialty">Choose a specialty <strong>⌄</strong></div>
                    <label for="location">Location</label><div class="field" id="location">Any location <strong>⌄</strong></div>
                    <a class="primary" href="{{ url('/login') }}">Search availability <span aria-hidden="true">&nbsp;→</span></a>
                </aside>
            </section>
            <section id="services">
                <div class="section-head"><h2>Everything in one place</h2><p>Built for the rhythm of modern care.</p></div>
                <div class="services">
                    <article class="service"><div class="service-icon">⌁</div><h3>Appointments</h3><p>Find a time that works for you.</p></article>
                    <article class="service"><div class="service-icon">▣</div><h3>Patient records</h3><p>Keep your health history close.</p></article>
                    <article class="service"><div class="service-icon">⌕</div><h3>Care directory</h3><p>Meet the right specialist.</p></article>
                    <article class="service"><div class="service-icon">✦</div><h3>Care insights</h3><p>Make informed decisions together.</p></article>
                </div>
            </section>
        </main>
        <footer id="contact"><span>Bayanno Health Management System</span><span>Available around the clock&nbsp; · &nbsp;Privacy first</span></footer>
    </div>
</body>
</html>

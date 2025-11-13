<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Priyanka pintu | Portfolio</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-light: #dbeafe;
            --secondary: #64748b;
            --background: #0f172a;
            --card-bg: #111c32;
            --text: #e2e8f0;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(180deg, var(--background) 0%, #060d1f 100%);
            color: var(--text);
            line-height: 1.6;
        }

        header {
            background: rgba(15, 23, 42, 0.9);
            padding: 2.5rem 1.5rem 5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: "";
            position: absolute;
            top: -40%;
            left: 50%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.25), transparent 60%);
            transform: translateX(-50%);
            z-index: 0;
        }

        header h1,
        header p {
            position: relative;
            z-index: 1;
        }

        header h1 {
            font-size: clamp(2.5rem, 6vw, 3.5rem);
            margin-bottom: 0.5rem;
        }

        header p {
            font-size: 1.1rem;
            max-width: 640px;
            margin: 0 auto;
            color: var(--secondary);
        }

        main {
            max-width: 960px;
            margin: -3rem auto 3rem;
            padding: 0 1.5rem;
        }

        section {
            background: rgba(15, 23, 42, 0.85);
            border: 1px solid rgba(37, 99, 235, 0.15);
            border-radius: 18px;
            padding: 2.5rem 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 20px 45px -25px rgba(37, 99, 235, 0.6);
            backdrop-filter: blur(12px);
        }

        section h2 {
            margin-top: 0;
            font-size: 1.9rem;
            color: var(--primary);
            letter-spacing: 0.03em;
        }

        .about p {
            margin: 0.75rem 0;
        }

        .skills-list,
        .projects-list {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0 0;
            display: grid;
            gap: 1rem;
        }

        .skills-list {
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        }

        .skills-list li {
            background: var(--card-bg);
            border: 1px solid rgba(37, 99, 235, 0.15);
            border-radius: 12px;
            padding: 1rem;
            text-align: center;
            font-weight: 600;
        }

        .projects-list li {
            border-left: 4px solid var(--primary);
            background: var(--card-bg);
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
        }

        .projects-list h3 {
            margin: 0 0 0.4rem;
        }

        .projects-list p {
            margin: 0;
            color: var(--secondary);
        }

        .contact a {
            display: inline-block;
            margin-right: 1rem;
            margin-bottom: 1rem;
            padding: 0.75rem 1.4rem;
            border-radius: 999px;
            border: 1px solid rgba(37, 99, 235, 0.25);
            color: var(--text);
            text-decoration: none;
            transition: transform 0.25s ease, background 0.25s ease;
        }

        .contact a:hover {
            background: rgba(37, 99, 235, 0.15);
            transform: translateY(-3px);
        }

        footer {
            text-align: center;
            padding: 2rem 0;
            color: var(--secondary);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Priyanka pintu</h1>
        <p>Full-stack enthusiast passionate about crafting delightful experiences on the web.</p>
    </header>

    <main>
        <section class="about">
            <h2>About</h2>
            <p>Hello! I’m Priyanka, a developer who loves turning complex ideas into elegant, user-friendly interfaces.</p>
            <p>My journey blends design intuition with engineering discipline, letting me ship experiences that feel just right.</p>
        </section>

        <section class="skills">
            <h2>Skills</h2>
            <ul class="skills-list">
                <li>HTML &amp; CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>React</li>
                <li>Node.js</li>
                <li>REST APIs</li>
            </ul>
        </section>

        <section class="projects">
            <h2>Projects</h2>
            <ul class="projects-list">
                <li>
                    <h3>Design System Kit</h3>
                    <p>A reusable component library that helps teams ship consistent interfaces faster.</p>
                </li>
                <li>
                    <h3>Insight Dashboard</h3>
                    <p>Analytics dashboard with real-time data visualizations for business metrics.</p>
                </li>
                <li>
                    <h3>Community Hub</h3>
                    <p>Social platform focused on neighborhood events, resources, and collaborations.</p>
                </li>
            </ul>
        </section>

        <section class="contact">
            <h2>Contact</h2>
            <p>Let’s build something amazing. Reach out via:</p>
            <a href="mailto:Priyanka@example.com">Email</a>
            <a href="https://www.linkedin.com" target="_blank" rel="noopener">LinkedIn</a>
            <a href="https://github.com" target="_blank" rel="noopener">GitHub</a>
        </section>
    </main>

    <footer>
        &copy; <?php echo date('Y'); ?> Priyanka pintu. Crafted with passion.
    </footer>
</body>
</html>



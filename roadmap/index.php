<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bug Bounty Roadmap</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* --- CSS Variables (GitHub Dark Theme) --- */
        :root {
            --primary-bg-color: #0d1117;
            --secondary-bg-color: #161b22;
            --card-bg-color: #21262d;
            --primary-text-color: #c9d1d9;
            --secondary-text-color: #8b949e;
            --accent-color: #58a6ff;
            --accent-hover-color: #79c0ff;
            --border-color: #30363d;
            --shadow-color: rgba(0, 0, 0, 0.7);
            --success-color: #3fb950;
            --warning-color: #f85149;
            --highlight-color: #d29922;
            --purple-color: #a371f7;
        }

        /* --- Global Styles --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Noto Sans", Helvetica, Arial, sans-serif;
            background-color: var(--primary-bg-color);
            color: var(--primary-text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
        }

        a { text-decoration: none; color: var(--accent-color); transition: color 0.3s; }
        a:hover { color: var(--accent-hover-color); text-decoration: underline; }

        /* Custom Utilities for Footer Link */
        .text-blue-400 { color: #60a5fa !important; }
        .hover\:text-blue-300:hover { color: #93c5fd !important; }
        .transition-colors { transition: color 0.3s ease; }
        .mt-4 { margin-top: 1rem; }

        /* --- Hero Section --- */
        .hero {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(rgba(13, 17, 23, 0.95), rgba(13, 17, 23, 0.95)), url('https://www.transparenttextures.com/patterns/cubes.png');
            border-bottom: 1px solid var(--border-color);
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            background: linear-gradient(45deg, var(--accent-color), var(--success-color), var(--purple-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: glow 3s ease-in-out infinite alternate;
            opacity: 0;
            transform: translateY(30px);
            font-weight: 900;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--secondary-text-color);
            max-width: 800px;
            margin: 0 auto 40px auto;
            opacity: 0;
            transform: translateY(30px);
        }

        .hero h1.animate, .hero p.animate {
            animation: fadeInUp 1s ease forwards;
        }
        .hero p.animate { animation-delay: 0.3s; }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes glow {
            from { text-shadow: 0 0 10px rgba(88, 166, 255, 0.1); }
            to { text-shadow: 0 0 20px rgba(88, 166, 255, 0.3); }
        }

        .cta-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-button {
            padding: 12px 30px;
            background-color: var(--accent-color);
            color: var(--primary-bg-color);
            border-radius: 6px;
            font-weight: bold;
            box-shadow: 0 4px 15px var(--shadow-color);
        }
        .cta-button:hover {
            background-color: var(--accent-hover-color);
            transform: translateY(-2px);
            text-decoration: none;
        }
        .cta-button.secondary {
            background-color: transparent;
            color: var(--accent-color);
            border: 2px solid var(--accent-color);
        }
        .cta-button.secondary:hover {
            background-color: var(--accent-color);
            color: var(--primary-bg-color);
        }

        /* --- Sections --- */
        .content-section {
            padding: 80px 0;
        }
        .content-section:nth-child(even) {
            background-color: var(--secondary-bg-color);
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            border-bottom: 2px solid var(--border-color);
            display: inline-block;
            padding-bottom: 10px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        /* --- Roadmap Timeline --- */
        .roadmap-timeline {
            position: relative;
            padding: 20px 0;
        }

        .roadmap-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--border-color);
            transform: translateX(-50%);
        }

        .timeline-item {
            padding: 20px 40px;
            position: relative;
            width: 50%;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
            box-sizing: border-box;
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .timeline-item.left { left: 0; }
        .timeline-item.right { left: 50%; }

        .timeline-item::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: var(--primary-bg-color);
            border: 4px solid var(--accent-color);
            top: 30px;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-item.left::before { right: -12px; }
        .timeline-item.right::before { left: -12px; }

        .timeline-content {
            padding: 30px;
            background-color: var(--card-bg-color);
            border-radius: 12px;
            border: 1px solid var(--border-color);
            box-shadow: 0 5px 15px var(--shadow-color);
        }
        .timeline-content:hover {
            border-color: var(--accent-color);
            transform: scale(1.02);
            transition: 0.3s;
        }

        .timeline-content h3 { color: var(--accent-color); margin-bottom: 10px; font-size: 1.5rem; }
        .subtitle { color: var(--secondary-text-color); font-style: italic; margin-bottom: 20px; display: block; border-bottom: 1px solid var(--border-color); padding-bottom: 10px;}
        
        .timeline-content ul { list-style: none; }
        .timeline-content ul li { margin-bottom: 15px; display: flex; align-items: start; line-height: 1.6; }
        .timeline-content ul li i { color: var(--success-color); margin-right: 12px; margin-top: 5px; min-width: 20px; }
        .timeline-content ul li strong { color: var(--primary-text-color); display: block; margin-bottom: 4px; }

        /* --- Cards & Grid --- */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 25px;
        }

        .card {
            background-color: var(--card-bg-color);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px var(--shadow-color);
            opacity: 0;
            transform: translateY(20px);
            transition: 0.3s;
            display: flex;
            flex-direction: column;
        }
        .card.visible { opacity: 1; transform: translateY(0); }
        .card:hover { border-color: var(--accent-color); transform: translateY(-5px); }

        .card h3 { color: var(--accent-color); margin-bottom: 15px; display: flex; align-items: center; gap: 10px; font-size: 1.3rem; border-bottom: 1px solid var(--border-color); padding-bottom: 10px; }
        .card ul { list-style: none; }
        .card ul li { margin-bottom: 12px; border-bottom: 1px solid rgba(48, 54, 61, 0.3); padding-bottom: 8px; font-size: 0.95rem; }
        .card ul li:last-child { border-bottom: none; }
        .card ul li a { font-weight: bold; }
        
        /* Badges */
        .price-badge {
            font-size: 0.7rem;
            padding: 2px 8px;
            border-radius: 4px;
            margin-left: auto;
            font-weight: bold;
            text-transform: uppercase;
        }
        .price-badge.free { background-color: var(--success-color); color: #000; }
        .price-badge.paid { background-color: var(--warning-color); color: #fff; }
        .price-badge.freemium { background-color: var(--highlight-color); color: #000; }
        .price-badge.community { background-color: var(--purple-color); color: #fff; }

        /* Severity Badges for Logic Flaws */
        .severity-badge {
            font-size: 0.7rem;
            padding: 2px 8px;
            border-radius: 4px;
            margin-left: auto;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
        }
        .severity-badge.critical { background-color: #da3633; }
        .severity-badge.high { background-color: #d29922; }
        .severity-badge.medium { background-color: #8957e5; }

        /* Code Block inside Cards */
        .code-block {
            display: block;
            background-color: #000;
            color: var(--success-color);
            padding: 10px;
            border-radius: 6px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 0.85rem;
            margin-top: 10px;
            white-space: pre-wrap;
            border: 1px solid #30363d;
        }

        /* --- Tabs --- */
        .tabs-container { width: 100%; }
        .tab-buttons { display: flex; justify-content: center; gap: 10px; margin-bottom: 30px; flex-wrap: wrap; }
        .tab-button {
            background: var(--secondary-bg-color);
            border: 1px solid var(--border-color);
            color: var(--secondary-text-color);
            padding: 12px 25px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 1rem;
            font-weight: 600;
        }
        .tab-button:hover, .tab-button.active {
            background: var(--accent-color);
            color: var(--primary-bg-color);
            border-color: var(--accent-color);
        }
        .tab-content { display: none; animation: fadeIn 0.5s; }
        .tab-content.active { display: block; }

        /* --- Footer --- */
        footer {
            text-align: center;
            padding: 40px;
            border-top: 1px solid var(--border-color);
            margin-top: 50px;
            color: var(--secondary-text-color);
        }

        /* --- Responsive --- */
        @media (max-width: 992px) {
            .timeline-item { width: 100%; padding-left: 50px; padding-right: 10px; }
            .timeline-item.left, .timeline-item.right { left: 0; }
            .timeline-item::before { left: 15px; }
            .timeline-item.right::before { left: 15px; }
            .roadmap-timeline::before { left: 24px; }
            .card-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header class="hero">
        <div class="container">
            <h1>Bug Bounty Roadmap</h1>
            <p>From foundational Networking concepts to Advanced Expert Exploitation. Complete, Detailed, and Actionable.</p>
            <div class="cta-buttons">
                <a href="#roadmap" class="cta-button">Full Roadmap <i class="fas fa-sitemap"></i></a>
                <a href="#tools" class="cta-button secondary">Tools Arsenal <i class="fas fa-toolbox"></i></a>
                <a href="#resources" class="cta-button secondary">Library <i class="fas fa-book-open"></i></a>
            </div>
        </div>
    </header>

    <main>
        
        <section id="roadmap" class="content-section">
            <div class="container">
                <h2 class="section-title">The Master Roadmap</h2>
                <div class="roadmap-timeline">
                    
                    <div class="timeline-item left">
                        <div class="timeline-content">
                            <h3>Phase 1: Infrastructure & OS</h3>
                            <span class="subtitle">You cannot hack what you do not understand. Build the base.</span>
                            <ul>
                                <li>
                                    <i class="fas fa-network-wired"></i> 
                                    <div>
                                        <strong>Network+:</strong>
                                        Understand OSI Model layers, TCP/IP handshakes, IP addressing, Subnetting, DNS resolution, and HTTP/HTTPS protocols deeply.
                                    </div>
                                </li>
                                <li>
                                    <i class="fab fa-linux"></i> 
                                    <div>
                                        <strong>Linux Mastery (LPIC-1 & LPIC-2):</strong>
                                        Master the command line, file permissions (chmod/chown), bash scripting, process management, and networking tools in Linux.
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-terminal"></i> 
                                    <div>
                                        <strong>Shell Scripting:</strong>
                                        Automate tasks using Bash. Write scripts to loop through domains, grep for patterns, and pipe commands.
                                    </div>
                                </li>
                                <li>
                                    <i class="fab fa-windows"></i> 
                                    <div>
                                        <strong>Windows Server:</strong>
                                        Understand Active Directory basics, PowerShell, and common Windows services (SMB, RDP).
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="timeline-item right">
                        <div class="timeline-content">
                            <h3>Phase 2: Web Technologies</h3>
                            <span class="subtitle">Think like a Developer. Understand the Code.</span>
                            <ul>
                                <li>
                                    <i class="fab fa-html5"></i> 
                                    <div>
                                        <strong>Front-End Tech:</strong>
                                        Deep dive into HTML structure, CSS, and JavaScript syntax. Understand the DOM, SOP (Same Origin Policy), and CORS.
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-server"></i> 
                                    <div>
                                        <strong>Back-End Logic:</strong>
                                        Understand architectural patterns like MVC (Model-View-Controller). Learn how APIs (REST/GraphQL) handle data.
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-database"></i> 
                                    <div>
                                        <strong>Databases:</strong>
                                        <strong>Relational (SQL):</strong> Syntax, Joins, Unions (MySQL/PostgreSQL).<br>
                                        <strong>Non-Relational (NoSQL):</strong> Structure and querying (MongoDB).
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-layer-group"></i> 
                                    <div>
                                        <strong>Frameworks:</strong>
                                        Familiarize yourself with popular stacks: PHP (Laravel), Python (Django), or Node.js.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="timeline-item left">
                        <div class="timeline-content">
                            <h3>Phase 3: Web Penetration Testing</h3>
                            <span class="subtitle">The Art of Breaking. Identifying vulnerabilities.</span>
                            <ul>
                                <li>
                                    <i class="fas fa-book-dead"></i> 
                                    <div>
                                        <strong>Core Vulnerabilities:</strong>
                                        Master the OWASP Top 10 (Injection, Broken Auth, XSS, IDOR, Misconfiguration, Deserialization, etc.).
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-microscope"></i> 
                                    <div>
                                        <strong>Tools Proficiency:</strong>
                                        Become an expert in Burp Suite (Interceptor, Repeater, Intruder). Use Nmap for scanning and Browser DevTools for debugging.
                                    </div>
                                </li>
                                <li>
                                    <i class="fab fa-python"></i> 
                                    <div>
                                        <strong>Exploit Development:</strong>
                                        Use Python to write custom exploits and automate attacks. Don't just rely on tools; build them.
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-flask"></i> 
                                    <div>
                                        <strong>Practice Labs:</strong>
                                        Spend hours on DVWA, WebGoat, and PortSwigger Labs to exploit bugs in a safe environment.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="timeline-item right">
                        <div class="timeline-content">
                            <h3>Phase 4: Bug Bounty Hunting</h3>
                            <span class="subtitle">Real World Targets & Reconnaissance.</span>
                            <ul>
                                <li>
                                    <i class="fas fa-binoculars"></i> 
                                    <div>
                                        <strong>Advanced Reconnaissance:</strong>
                                        Subdomain enumeration, finding live assets, port scanning large ranges, and content discovery (directories/files).
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-bug"></i> 
                                    <div>
                                        <strong>Finding Logic Bugs:</strong>
                                        Look for Business Logic Errors, Race Conditions, and Account Takeovers that scanners miss.
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-file-invoice"></i> 
                                    <div>
                                        <strong>Reporting:</strong>
                                        Write professional reports. Include: Impact, Reproduction Steps, and Proof of Concept (PoC).
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-globe"></i> 
                                    <div>
                                        <strong>Platforms:</strong>
                                        Start hacking on platforms like HackerOne, Bugcrowd, or regional ones like Ravro.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="timeline-item left">
                        <div class="timeline-content">
                            <h3>Phase 5: Expert & Red Teaming</h3>
                            <span class="subtitle">Advanced certifications and complex scenarios.</span>
                            <ul>
                                <li>
                                    <i class="fas fa-certificate"></i> 
                                    <div>
                                        <strong>Certifications:</strong>
                                        Aim for SANS (SEC542/SEC642) or Offensive Security (OSWE/AWAE) for whitebox testing.
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-code"></i> 
                                    <div>
                                        <strong>Source Code Review:</strong>
                                        Analyze source code to find hidden vulnerabilities (Whitebox testing).
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-chess-king"></i> 
                                    <div>
                                        <strong>Advanced Scenarios:</strong>
                                        Chaining vulnerabilities (e.g., XSS to CSRF to RCE) to maximize impact.
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-share-alt"></i> 
                                    <div>
                                        <strong>Community:</strong>
                                        Read write-ups, publish your findings, and contribute to open-source tools.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="tools" class="content-section">
            <div class="container">
                <h2 class="section-title">The Hacker's Arsenal</h2>
                <p style="text-align: center; color: var(--secondary-text-color); margin-bottom: 40px;">A complete list of industry-standard tools for every stage of testing.</p>
                
                <div class="card-grid">
                    
                    <div class="card">
                        <h3><i class="fas fa-eye"></i> Reconnaissance</h3>
                        <ul>
                            <li><a href="https://github.com/projectdiscovery/subfinder" target="_blank">Subfinder</a>: Fast passive subdomain enumeration tool.</li>
                            <li><a href="https://github.com/owasp-amass/amass" target="_blank">Amass</a>: In-depth attack surface mapping and asset discovery.</li>
                            <li><a href="https://github.com/projectdiscovery/httpx" target="_blank">httpx</a>: Fast and multi-purpose HTTP toolkit.</li>
                            <li><a href="https://nmap.org/" target="_blank">Nmap</a>: The standard for network discovery and security auditing.</li>
                            <li><a href="https://github.com/ffuf/ffuf" target="_blank">FFuf</a>: Fast web fuzzer written in Go (Directory bruteforcing).</li>
                            <li><a href="https://github.com/tomnomnom/waybackurls" target="_blank">Waybackurls</a>: Fetch all URLs from the Wayback Machine.</li>
                        </ul>
                    </div>

                    <div class="card">
                        <h3><i class="fas fa-radar"></i> Scanners & Proxies</h3>
                        <ul>
                            <li><a href="https://portswigger.net/burp" target="_blank">Burp Suite</a>: The #1 tool for web application security testing.</li>
                            <li><a href="https://github.com/projectdiscovery/nuclei" target="_blank">Nuclei</a>: Template-based vulnerability scanner (Highly recommended).</li>
                            <li><a href="https://www.zaproxy.org/" target="_blank">OWASP ZAP</a>: The world's most popular free web security scanner.</li>
                            <li><a href="https://sqlmap.org/" target="_blank">SQLMap</a>: Automatic SQL injection and database takeover tool.</li>
                            <li><a href="https://cirt.net/Nikto2" target="_blank">Nikto</a>: Web server scanner for dangerous files/CGIs.</li>
                            <li><a href="https://wpscan.com/wordpress-security-scanner" target="_blank">WPScan</a>: WordPress security scanner.</li>
                        </ul>
                    </div>

                    <div class="card">
                        <h3><i class="fas fa-microchip"></i> Reverse Engineering</h3>
                        <ul>
                            <li><a href="https://ghidra-sre.org/" target="_blank">Ghidra</a>: Software reverse engineering suite by NSA.</li>
                            <li><a href="https://hex-rays.com/ida-pro/" target="_blank">IDA Pro</a>: The premier disassembler and debugger (Commercial).</li>
                            <li><a href="https://github.com/radareorg/radare2" target="_blank">Radare2</a>: UNIX-like reverse engineering framework.</li>
                            <li><a href="https://ibotpeaches.github.io/Apktool/" target="_blank">Apktool</a>: A tool for reverse engineering Android APK files.</li>
                            <li><a href="https://frida.re/" target="_blank">Frida</a>: Dynamic instrumentation toolkit for developers/reversers.</li>
                            <li><a href="https://github.com/skylot/jadx" target="_blank">Jadx</a>: Dex to Java decompiler (GUI & CLI).</li>
                        </ul>
                    </div>

                    <div class="card">
                        <h3><i class="fas fa-key"></i> Cryptography & Hashing</h3>
                        <ul>
                            <li><a href="https://gchq.github.io/CyberChef/" target="_blank">CyberChef</a>: The "Swiss Army Knife" for encoding/decoding.</li>
                            <li><a href="https://hashcat.net/hashcat/" target="_blank">Hashcat</a>: World's fastest and most advanced password recovery utility.</li>
                            <li><a href="https://www.openwall.com/john/" target="_blank">John the Ripper</a>: Fast password cracker.</li>
                            <li><a href="https://www.openssl.org/" target="_blank">OpenSSL</a>: Toolkit for TLS/SSL protocols.</li>
                            <li><a href="https://gnupg.org/" target="_blank">GnuPG</a>: A complete and free implementation of the OpenPGP standard.</li>
                        </ul>
                    </div>

                    <div class="card">
                        <h3><i class="fas fa-mobile-alt"></i> Mobile Security</h3>
                        <ul>
                            <li><a href="https://github.com/MobSF/Mobile-Security-Framework-MobSF" target="_blank">MobSF</a>: Automated all-in-one mobile application pen-testing framework.</li>
                            <li><a href="https://github.com/WithSecureLabs/drozer" target="_blank">Drozer</a>: Comprehensive security audit framework for Android.</li>
                            <li><a href="https://github.com/sensepost/objection" target="_blank">Objection</a>: Runtime mobile exploration toolkit.</li>
                        </ul>
                    </div>

                    <div class="card">
                        <h3><i class="fas fa-bomb"></i> Exploitation & Misc</h3>
                        <ul>
                            <li><a href="https://www.metasploit.com/" target="_blank">Metasploit</a>: Penetration testing framework.</li>
                            <li><a href="https://github.com/commixproject/commix" target="_blank">Commix</a>: Automated OS command injection exploiter.</li>
                            <li><a href="https://github.com/s0md3v/XSStrike" target="_blank">XSStrike</a>: Advanced XSS detection suite.</li>
                            <li><a href="https://github.com/s0md3v/Arjun" target="_blank">Arjun</a>: HTTP parameter discovery suite.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="labs" class="content-section">
            <div class="container">
                <h2 class="section-title">Labs & Practice Grounds</h2>
                <div class="card-grid">
                    
                    <div class="card">
                        <h3><i class="fas fa-graduation-cap"></i> PortSwigger Academy</h3>
                        <p>The <strong>Gold Standard</strong> for web security training. Created by the Burp Suite team.</p>
                        <ul>
                            <li><a href="https://portswigger.net/web-security" target="_blank">Web Security Academy</a> <span class="price-badge free">Free</span></li>
                            <li><a href="https://portswigger.net/burp/documentation/desktop/scanning" target="_blank">Burp Scanner Labs</a></li>
                        </ul>
                    </div>

                    <div class="card">
                        <h3><i class="fas fa-flag"></i> CTF Platforms</h3>
                        <p>Gamified hacking challenges to test your skills.</p>
                        <ul>
                            <li><a href="https://hackthebox.com/" target="_blank">Hack The Box</a> <span class="price-badge freemium">Premium</span></li>
                            <li><a href="https://tryhackme.com/" target="_blank">TryHackMe</a> <span class="price-badge freemium">Premium</span></li>
                            <li><a href="https://root-me.org/" target="_blank">Root Me</a> <span class="price-badge free">Free</span></li>
                            <li><a href="https://picoctf.org/" target="_blank">picoCTF</a> <span class="price-badge free">Free</span></li>
                        </ul>
                    </div>

                    <div class="card">
                        <h3><i class="fas fa-bug"></i> Vulnerable Apps</h3>
                        <p>Intentionally broken applications to practice on localhost.</p>
                        <ul>
                            <li><a href="https://dvwa.co.uk/" target="_blank">DVWA (Damn Vulnerable Web App)</a></li>
                            <li><a href="https://owasp.org/www-project-juice-shop/" target="_blank">OWASP Juice Shop</a></li>
                            <li><a href="https://github.com/WebGoat/WebGoat" target="_blank">WebGoat</a></li>
                            <li><a href="https://pentesterlab.com/" target="_blank">PentesterLab</a> <span class="price-badge paid">Paid</span></li>
                        </ul>
                    </div>

                     <div class="card">
                        <h3><i class="fas fa-terminal"></i> Wargames</h3>
                        <p>Focus on specific skills like Linux or Cryptography.</p>
                        <ul>
                            <li><a href="https://overthewire.org/wargames/natas/" target="_blank">OverTheWire (Natas)</a> - Web Security</li>
                            <li><a href="https://overthewire.org/wargames/bandit/" target="_blank">OverTheWire (Bandit)</a> - Linux Basics</li>
                            <li><a href="https://cryptopals.com/" target="_blank">Cryptopals</a> - Cryptography</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <section id="resources" class="content-section">
            <div class="container">
                <h2 class="section-title">Resources Library</h2>
                
                <div class="tabs-container">
                    <div class="tab-buttons">
                        <button class="tab-button active" onclick="showTab('courses')"><i class="fas fa-video"></i> Courses</button>
                        <button class="tab-button" onclick="showTab('books')"><i class="fas fa-book"></i> Books Library</button>
                        <button class="tab-button" onclick="showTab('platforms')"><i class="fas fa-globe"></i> Platforms</button>
                        <button class="tab-button" onclick="showTab('logicflaws')"><i class="fas fa-brain"></i> Logic Flaws</button>
                    </div>

                    <div id="courses" class="tab-content active">
                        <div class="card-grid">
                            <div class="card">
                                <h3><a href="https://www.pentesteracademy.com/" target="_blank">Pentester Academy</a></h3>
                                <ul>
                                    <li>Web Application Pentesting</li>
                                    <li>Web Application Challenges</li>
                                    <li>JavaScript for Pentesters</li>
                                </ul>
                            </div>
                            <div class="card">
                                <h3><a href="https://ine.com/" target="_blank">eLearnSecurity (INE)</a></h3>
                                <ul>
                                    <li>eWPT (Web App Penetration Tester)</li>
                                    <li>eWPTX (Advanced Web App Penetration Tester)</li>
                                </ul>
                            </div>
                            <div class="card">
                                <h3><a href="https://www.offensive-security.com/" target="_blank">Offensive Security</a></h3>
                                <ul>
                                    <li>AWAE (OSWE Certification) - Advanced Web Attacks.</li>
                                </ul>
                            </div>
                            <div class="card">
                                <h3><a href="https://www.pluralsight.com/" target="_blank">Pluralsight</a></h3>
                                <ul>
                                    <li>Advanced Web Application Penetration Testing with Burp Suite.</li>
                                </ul>
                            </div>
                            <div class="card">
                                <h3><a href="https://www.sans.org/" target="_blank">SANS Institute</a></h3>
                                <ul>
                                    <li>SEC542: Web App Penetration Testing</li>
                                    <li>SEC642: Advanced Web App Penetration Testing</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="books" class="tab-content">
                        <div class="card-grid">
                            <div class="card">
                                <h3>Essential Reads</h3>
                                <ul>
                                    <li><a href="https://portswigger.net/web-security/web-application-hackers-handbook" target="_blank">The Web Application Hacker's Handbook</a></li>
                                    <li><a href="https://nostarch.com/webhacking101" target="_blank">Web Hacking 101</a></li>
                                    <li><a href="https://www.amazon.com/Real-World-Bug-Hunting-Field-Guide/dp/1593278616" target="_blank">Real-World Bug Hunting</a></li>
                                    <li><a href="https://nostarch.com/tangledweb" target="_blank">The Tangled Web</a></li>
                                </ul>
                            </div>
                            <div class="card">
                                <h3>Advanced & Specific</h3>
                                <ul>
                                    <li><a href="https://owasp.org/www-project-web-security-testing-guide/" target="_blank">OWASP Testing Guide (WSTG 4.2)</a></li>
                                    <li><a href="https://nostarch.com/browserhackershandbook" target="_blank">The Browser Hacker's Handbook</a></li>
                                    <li><a href="https://www.amazon.com/Advanced-API-Security-Securing-Architectures/dp/1484220498" target="_blank">Advanced API Security</a></li>
                                    <li><a href="https://www.packtpub.com/product/mastering-modern-web-penetration-testing/9781785284588" target="_blank">Mastering Modern Web Penetration Testing</a></li>
                                </ul>
                            </div>
                            <div class="card">
                                <h3>Language & Reference</h3>
                                <ul>
                                    <li><a href="https://flaviocopes.com/page/javascript-handbook/" target="_blank">JavaScript Beginner's Handbook</a></li>
                                    <li><a href="https://www.amazon.com/HTTP-Definitive-Guide-David-Gourley/dp/1565925092" target="_blank">HTTP: The Definitive Guide</a></li>
                                    <li><a href="https://nostarch.com/blackhatpython" target="_blank">Black Hat Python</a></li>
                                    <li><a href="https://www.amazon.com/Rtfm-Red-Team-Field-Manual/dp/1494295504" target="_blank">RTFM: Red Team Field Manual</a></li>
                                </ul>
                            </div>
                            <div class="card">
                                <h3>Field Guides</h3>
                                <ul>
                                    <li><a href="https://github.com/trietptm/bug-bounty-playbook" target="_blank">Bug Bounty Playbook (v1 & v2)</a></li>
                                    <li><a href="https://www.amazon.com/Web-Security-Developers-Real-Threats/dp/1593279949" target="_blank">Web Security for Developers</a></li>
                                    <li><a href="https://brutelogic.com.br/blog/cheat-sheet/" target="_blank">XSS Cheat Sheet (2019)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="platforms" class="tab-content">
                        <div class="card-grid">
                            <div class="card">
                                <h3><i class="fas fa-globe-americas"></i> Global Platforms</h3>
                                <ul>
                                    <li><a href="https://www.hackerone.com/" target="_blank">HackerOne</a></li>
                                    <li><a href="https://www.bugcrowd.com/" target="_blank">Bugcrowd</a></li>
                                    <li><a href="https://www.intigriti.com/" target="_blank">Intigriti</a></li>
                                    <li><a href="https://www.yeswehack.com/" target="_blank">YesWeHack</a></li>
                                    <li><a href="https://www.synack.com/" target="_blank">Synack</a></li>
                                    <li><a href="https://hackenproof.com/" target="_blank">HackenProof</a></li>
                                </ul>
                            </div>
                            <div class="card">
                                <h3><i class="fas fa-map-marker-alt"></i> Iranian Platforms</h3>
                                <ul>
                                    <li><a href="https://ravro.ir/" target="_blank">Ravro</a></li>
                                    <li><a href="https://bugdasht.ir/" target="_blank">Bugdasht</a></li>
                                    <li><a href="https://sooton.ir/" target="_blank">Sooton</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="logicflaws" class="tab-content">
                        <div style="text-align: center; margin-bottom: 20px;">
                            <p style="font-size: 1.1rem; color: var(--secondary-text-color);">
                                Logic Flaws are often the most lucrative vulnerabilities in bug bounty programs because they cannot be easily detected by automated scanners and require critical thinking.
                            </p>
                        </div>
                        <div class="card-grid">
                            <div class="card">
                                <h3>Race Conditions <span class="severity-badge critical">Critical</span></h3>
                                <p>Occurs when two or more concurrent requests cause an unintended state. Common in payment systems, reservations, and inventory management.</p>
                                <code class="code-block">GET /api/withdraw?amount=1000
// Sending multiple requests simultaneously</code>
                            </div>

                            <div class="card">
                                <h3>Business Logic Bypass <span class="severity-badge high">High</span></h3>
                                <p>Circumventing business rules by manipulating parameters or the order of operations (e.g., purchasing a product with a negative or zero price).</p>
                                <code class="code-block">POST /api/cart/update 
{"product_id": "123", "price": -100}</code>
                            </div>

                            <div class="card">
                                <h3>Authorization Flaws <span class="severity-badge high">High</span></h3>
                                <p>Failures in access control (IDOR/BAC) that allow a user to access resources or perform actions they should not be authorized to.</p>
                                <code class="code-block">GET /api/user/456/orders
// Accessing another user's data</code>
                            </div>

                            <div class="card">
                                <h3>Session Management <span class="severity-badge high">High</span></h3>
                                <p>Weaknesses in session handling that allow sessions to be predicted, hijacked, or fail to expire properly.</p>
                                <code class="code-block">Set-Cookie: sessionid=000001
// Predictable sequence</code>
                            </div>

                            <div class="card">
                                <h3>Input Validation <span class="severity-badge medium">Medium</span></h3>
                                <p>Flaws in input validation logic that allow unauthorized or malicious data to be processed by the system.</p>
                                <code class="code-block">POST /api/register 
{"email": "test@.com", "password": "123"}</code>
                            </div>

                            <div class="card">
                                <h3>API Rate Limiting <span class="severity-badge medium">Medium</span></h3>
                                <p>Lack of request limits, allowing attackers to repeat operations (brute force) or exhaust resources.</p>
                                <code class="code-block">POST /api/login 
// No rate limit implemented</code>
                            </div>
                        </div>

                        <div class="card" style="margin-top: 30px; border-left: 4px solid var(--accent-color);">
                            <h3><i class="fas fa-search"></i> Key Hunting Tips</h3>
                            <ul style="columns: 2;">
                                <li><strong>Understand the Business:</strong> Fully understand how the application works and its business model before testing.</li>
                                <li><strong>Test Boundaries:</strong> Always test logical boundaries (e.g., negative values, zero, extremely large numbers).</li>
                                <li><strong>Concurrency:</strong> Test simultaneous requests to identify Race Conditions.</li>
                                <li><strong>Order of Operations:</strong> Try executing steps in different orders (e.g., skipping a verification step).</li>
                                <li><strong>Parameter Manipulation:</strong> Manipulate all parameters, even those hidden in the frontend/UI.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Bug Bounty Roadmap.</p>
            <div class="mt-4">
                <span style="color: var(--secondary-text-color);">Designed by</span>
                <a href="https://t.me/m4sh_wacker" target="_blank" rel="noopener noreferrer" class="text-blue-400 hover:text-blue-300 transition-colors">Mohammd Hosein Sadeghain</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- Animations ---
            const heroTitle = document.querySelector('.hero h1');
            const heroText = document.querySelector('.hero p');
            if(heroTitle) heroTitle.classList.add('animate');
            if(heroText) heroText.classList.add('animate');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.timeline-item, .card').forEach(el => observer.observe(el));
        });

        // --- Tabs Functionality ---
        function showTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
            document.querySelectorAll('.tab-button').forEach(b => b.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');
            
            if (event && event.currentTarget) {
                event.currentTarget.classList.add('active');
            }
        }
    </script>
</body>
</html>
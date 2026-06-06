<!DOCTYPE html>
<html lang="en" class="scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bug Bounty Roadmap | Mohammad Hosein Sadeghian</title>
    <meta name="description" content="A complete Bug Bounty Roadmap — from foundational Networking to Advanced Red Teaming. Tools, labs, books and logic-flaw playbooks.">
    <link rel="icon" href="/assets/logo.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;700&family=Vazirmatn:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        background: '#030303',
                        surface: '#0A0A0A',
                        primary: '#FF2E2E',
                        primaryDark: '#cc0000',
                        secondary: '#888888',
                        accent: '#3b82f6',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', '"Vazirmatn"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                }
            }
        }
    </script>
    <style>
        body { background-color: #030303; color: #ffffff; overflow-x: hidden; }

        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 1px rgba(0,0,0,0.2), 0 8px 40px rgba(0,0,0,0.4);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .glass-panel-bright {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .glass-panel:hover, .glass-panel-bright:hover {
            background: rgba(255, 255, 255, 0.07);
            border-color: rgba(255, 46, 46, 0.25);
            transform: translateY(-3px);
            box-shadow: 0 0 0 1px rgba(255, 46, 46, 0.2), 0 20px 60px rgba(0,0,0,0.5);
        }

        .text-gradient {
            background: linear-gradient(135deg, #FFFFFF 0%, #A0A0A0 100%);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }
        .text-gradient-red {
            background: linear-gradient(135deg, #FF2E2E 0%, #ff8a3d 60%, #ffffff 100%);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }

        .mesh-bg {
            position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
            background:
                radial-gradient(circle at 15% 20%, rgba(255, 46, 46, 0.06), transparent 25%),
                radial-gradient(circle at 85% 60%, rgba(59, 130, 246, 0.04), transparent 25%);
            z-index: 0; pointer-events: none;
        }

        .lang-hidden { display: none !important; }

        /* Scroll reveal */
        .reveal { opacity: 0; transform: translateY(24px); transition: all 0.7s cubic-bezier(0.2, 0.8, 0.2, 1); }
        .reveal.visible { opacity: 1; transform: translateY(0); }

        /* Timeline */
        .tl { position: relative; }
        .tl::before { content: ''; position: absolute; left: 19px; top: 8px; bottom: 8px; width: 2px; background: linear-gradient(180deg, #FF2E2E, rgba(255,46,46,0.1)); }
        .tl-node { position: relative; padding-left: 56px; }
        .tl-node::before {
            content: ''; position: absolute; left: 11px; top: 26px;
            width: 18px; height: 18px; background: #030303;
            border: 4px solid #FF2E2E; border-radius: 50%; z-index: 1;
            box-shadow: 0 0 14px rgba(255,46,46,0.5);
        }

        /* List items */
        .feat-li { display: flex; gap: 12px; align-items: flex-start; }
        .feat-li i { color: #FF2E2E; margin-top: 4px; min-width: 20px; text-align: center; }
        .link-li a { color: #ff8a6b; font-weight: 700; }
        .link-li a:hover { color: #fff; }

        /* Badges */
        .badge { font-size: 0.65rem; padding: 3px 9px; border-radius: 99px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.04em; white-space: nowrap; }
        .badge-free { background: rgba(63,185,80,0.18); color: #6fdf86; border: 1px solid rgba(63,185,80,0.35); }
        .badge-paid { background: rgba(255,46,46,0.18); color: #ff7b72; border: 1px solid rgba(255,46,46,0.35); }
        .badge-premium { background: rgba(210,153,34,0.18); color: #e3b341; border: 1px solid rgba(210,153,34,0.35); }
        .badge-community { background: rgba(163,113,247,0.18); color: #c4a7fb; border: 1px solid rgba(163,113,247,0.35); }

        .sev { font-size: 0.62rem; padding: 3px 9px; border-radius: 99px; font-weight: 800; text-transform: uppercase; color: #fff; letter-spacing: 0.04em; }
        .sev-critical { background: #da3633; }
        .sev-high { background: #d29922; color:#000; }
        .sev-medium { background: #8957e5; }

        .code-block {
            display: block; background: #000; color: #6fdf86;
            padding: 12px 14px; border-radius: 12px;
            font-family: 'JetBrains Mono', monospace; font-size: 0.78rem;
            margin-top: 12px; white-space: pre-wrap; border: 1px solid rgba(255,255,255,0.08);
        }

        /* Tabs */
        .tab-btn { transition: all 0.3s; }
        .tab-content { display: none; animation: fadeIn 0.4s ease; }
        .tab-content.active { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="font-sans antialiased selection:bg-primary selection:text-black">

    <div class="mesh-bg"></div>

    <!-- NAV -->
    <nav class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
        <div class="glass-panel !rounded-full px-5 py-3 flex items-center gap-4 md:gap-8 !bg-black/60 shadow-2xl">
            <a href="/" class="flex items-center gap-2 text-gray-300 hover:text-white transition-colors">
                <span class="material-symbols-rounded text-[20px]">arrow_back</span>
                <span class="text-sm font-bold hidden sm:inline" data-lang="en">Home</span>
                <span class="text-sm font-bold hidden sm:inline lang-hidden" data-lang="fa">خانه</span>
            </a>
            <div class="w-px h-5 bg-white/10"></div>
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full bg-primary shadow-[0_0_10px_#FF2E2E] animate-pulse"></div>
                <span class="font-bold tracking-tight text-sm" data-lang="en">Bug Bounty Roadmap</span>
                <span class="font-bold tracking-tight text-sm lang-hidden" data-lang="fa">نقشه راه باگ‌بانتی</span>
            </div>
            <div class="w-px h-5 bg-white/10 hidden md:block"></div>
            <div class="hidden md:flex bg-white/5 rounded-full p-1 border border-white/5">
                <button id="btn-en" onclick="setLang('en')" class="px-3 py-1 rounded-full text-xs font-bold transition-all bg-primary text-black">EN</button>
                <button id="btn-fa" onclick="setLang('fa')" class="px-3 py-1 rounded-full text-xs font-bold transition-all text-gray-400 hover:text-white">FA</button>
            </div>
        </div>
    </nav>

    <main class="relative z-10 pt-32 pb-20 px-4 max-w-[1200px] mx-auto space-y-20">

        <!-- HERO -->
        <header class="glass-panel rounded-[40px] p-10 md:p-16 text-center relative overflow-hidden reveal">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[300px] bg-primary/10 rounded-full blur-[120px] -translate-y-1/3"></div>
            <div class="relative z-10">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold uppercase tracking-wider mb-6">
                    <span class="material-symbols-rounded text-[16px]">route</span>
                    <span data-lang="en">Career Path</span><span class="lang-hidden" data-lang="fa">مسیر یادگیری</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-black text-gradient-red tracking-tight mb-5">Bug Bounty Roadmap</h1>
                <p class="text-gray-300 max-w-2xl mx-auto text-base md:text-lg leading-relaxed" data-lang="en">
                    From foundational Networking concepts to Advanced Expert Exploitation. Complete, detailed, and actionable.
                </p>
                <p class="text-gray-300 max-w-2xl mx-auto text-base md:text-lg leading-relaxed lang-hidden" data-lang="fa">
                    از مفاهیم پایه‌ی شبکه تا اکسپلویت‌نویسی پیشرفته. کامل، دقیق و عملی.
                </p>
                <div class="flex flex-wrap gap-3 justify-center mt-8">
                    <a href="#roadmap" class="px-6 py-3 rounded-xl bg-primary text-black font-bold text-sm hover:scale-105 transition-transform flex items-center gap-2 shadow-lg shadow-primary/20">
                        <span class="material-symbols-rounded">account_tree</span>
                        <span data-lang="en">Full Roadmap</span><span class="lang-hidden" data-lang="fa">نقشه کامل</span>
                    </a>
                    <a href="#tools" class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-bold text-sm hover:bg-white/10 transition-colors flex items-center gap-2">
                        <span class="material-symbols-rounded text-primary">construction</span>
                        <span data-lang="en">Tools Arsenal</span><span class="lang-hidden" data-lang="fa">جعبه‌ابزار</span>
                    </a>
                    <a href="#resources" class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-bold text-sm hover:bg-white/10 transition-colors flex items-center gap-2">
                        <span class="material-symbols-rounded text-primary">menu_book</span>
                        <span data-lang="en">Library</span><span class="lang-hidden" data-lang="fa">کتابخانه</span>
                    </a>
                </div>
            </div>
        </header>

        <!-- ================= MASTER ROADMAP ================= -->
        <section id="roadmap" class="scroll-mt-28">
            <div class="flex items-center gap-3 mb-10 px-2 reveal">
                <span class="material-symbols-rounded text-primary">account_tree</span>
                <h2 class="text-3xl font-black text-gradient tracking-tight">The Master Roadmap</h2>
            </div>

            <div class="tl space-y-8">
                <!-- Phase 1 -->
                <div class="tl-node reveal">
                    <div class="glass-panel rounded-3xl p-7">
                        <h3 class="text-xl font-bold text-primary mb-1">Phase 1: Infrastructure &amp; OS</h3>
                        <p class="text-sm text-gray-400 italic border-b border-white/10 pb-3 mb-4">You cannot hack what you do not understand. Build the base.</p>
                        <ul class="space-y-3 text-sm text-gray-300">
                            <li class="feat-li"><i class="fas fa-network-wired"></i><div><strong class="text-white block">Network+:</strong> Understand OSI Model layers, TCP/IP handshakes, IP addressing, Subnetting, DNS resolution, and HTTP/HTTPS protocols deeply.</div></li>
                            <li class="feat-li"><i class="fab fa-linux"></i><div><strong class="text-white block">Linux Mastery (LPIC-1 &amp; LPIC-2):</strong> Master the command line, file permissions (chmod/chown), bash scripting, process management, and networking tools in Linux.</div></li>
                            <li class="feat-li"><i class="fas fa-terminal"></i><div><strong class="text-white block">Shell Scripting:</strong> Automate tasks using Bash. Write scripts to loop through domains, grep for patterns, and pipe commands.</div></li>
                            <li class="feat-li"><i class="fab fa-windows"></i><div><strong class="text-white block">Windows Server:</strong> Understand Active Directory basics, PowerShell, and common Windows services (SMB, RDP).</div></li>
                        </ul>
                    </div>
                </div>

                <!-- Phase 2 -->
                <div class="tl-node reveal">
                    <div class="glass-panel rounded-3xl p-7">
                        <h3 class="text-xl font-bold text-primary mb-1">Phase 2: Web Technologies</h3>
                        <p class="text-sm text-gray-400 italic border-b border-white/10 pb-3 mb-4">Think like a Developer. Understand the Code.</p>
                        <ul class="space-y-3 text-sm text-gray-300">
                            <li class="feat-li"><i class="fab fa-html5"></i><div><strong class="text-white block">Front-End Tech:</strong> Deep dive into HTML structure, CSS, and JavaScript syntax. Understand the DOM, SOP (Same Origin Policy), and CORS.</div></li>
                            <li class="feat-li"><i class="fas fa-server"></i><div><strong class="text-white block">Back-End Logic:</strong> Understand architectural patterns like MVC (Model-View-Controller). Learn how APIs (REST/GraphQL) handle data.</div></li>
                            <li class="feat-li"><i class="fas fa-database"></i><div><strong class="text-white block">Databases:</strong> <strong>Relational (SQL):</strong> Syntax, Joins, Unions (MySQL/PostgreSQL). <strong>Non-Relational (NoSQL):</strong> Structure and querying (MongoDB).</div></li>
                            <li class="feat-li"><i class="fas fa-layer-group"></i><div><strong class="text-white block">Frameworks:</strong> Familiarize yourself with popular stacks: PHP (Laravel), Python (Django), or Node.js.</div></li>
                        </ul>
                    </div>
                </div>

                <!-- Phase 3 -->
                <div class="tl-node reveal">
                    <div class="glass-panel rounded-3xl p-7">
                        <h3 class="text-xl font-bold text-primary mb-1">Phase 3: Web Penetration Testing</h3>
                        <p class="text-sm text-gray-400 italic border-b border-white/10 pb-3 mb-4">The Art of Breaking. Identifying vulnerabilities.</p>
                        <ul class="space-y-3 text-sm text-gray-300">
                            <li class="feat-li"><i class="fas fa-book-dead"></i><div><strong class="text-white block">Core Vulnerabilities:</strong> Master the OWASP Top 10 (Injection, Broken Auth, XSS, IDOR, Misconfiguration, Deserialization, etc.).</div></li>
                            <li class="feat-li"><i class="fas fa-microscope"></i><div><strong class="text-white block">Tools Proficiency:</strong> Become an expert in Burp Suite (Interceptor, Repeater, Intruder). Use Nmap for scanning and Browser DevTools for debugging.</div></li>
                            <li class="feat-li"><i class="fab fa-python"></i><div><strong class="text-white block">Exploit Development:</strong> Use Python to write custom exploits and automate attacks. Don't just rely on tools; build them.</div></li>
                            <li class="feat-li"><i class="fas fa-flask"></i><div><strong class="text-white block">Practice Labs:</strong> Spend hours on DVWA, WebGoat, and PortSwigger Labs to exploit bugs in a safe environment.</div></li>
                        </ul>
                    </div>
                </div>

                <!-- Phase 4 -->
                <div class="tl-node reveal">
                    <div class="glass-panel rounded-3xl p-7">
                        <h3 class="text-xl font-bold text-primary mb-1">Phase 4: Bug Bounty Hunting</h3>
                        <p class="text-sm text-gray-400 italic border-b border-white/10 pb-3 mb-4">Real World Targets &amp; Reconnaissance.</p>
                        <ul class="space-y-3 text-sm text-gray-300">
                            <li class="feat-li"><i class="fas fa-binoculars"></i><div><strong class="text-white block">Advanced Reconnaissance:</strong> Subdomain enumeration, finding live assets, port scanning large ranges, and content discovery (directories/files).</div></li>
                            <li class="feat-li"><i class="fas fa-bug"></i><div><strong class="text-white block">Finding Logic Bugs:</strong> Look for Business Logic Errors, Race Conditions, and Account Takeovers that scanners miss.</div></li>
                            <li class="feat-li"><i class="fas fa-file-invoice"></i><div><strong class="text-white block">Reporting:</strong> Write professional reports. Include: Impact, Reproduction Steps, and Proof of Concept (PoC).</div></li>
                            <li class="feat-li"><i class="fas fa-globe"></i><div><strong class="text-white block">Platforms:</strong> Start hacking on platforms like HackerOne, Bugcrowd, or regional ones like Ravro.</div></li>
                        </ul>
                    </div>
                </div>

                <!-- Phase 5 -->
                <div class="tl-node reveal">
                    <div class="glass-panel rounded-3xl p-7">
                        <h3 class="text-xl font-bold text-primary mb-1">Phase 5: Expert &amp; Red Teaming</h3>
                        <p class="text-sm text-gray-400 italic border-b border-white/10 pb-3 mb-4">Advanced certifications and complex scenarios.</p>
                        <ul class="space-y-3 text-sm text-gray-300">
                            <li class="feat-li"><i class="fas fa-certificate"></i><div><strong class="text-white block">Certifications:</strong> Aim for SANS (SEC542/SEC642) or Offensive Security (OSWE/AWAE) for whitebox testing.</div></li>
                            <li class="feat-li"><i class="fas fa-code"></i><div><strong class="text-white block">Source Code Review:</strong> Analyze source code to find hidden vulnerabilities (Whitebox testing).</div></li>
                            <li class="feat-li"><i class="fas fa-chess-king"></i><div><strong class="text-white block">Advanced Scenarios:</strong> Chaining vulnerabilities (e.g., XSS to CSRF to RCE) to maximize impact.</div></li>
                            <li class="feat-li"><i class="fas fa-share-alt"></i><div><strong class="text-white block">Community:</strong> Read write-ups, publish your findings, and contribute to open-source tools.</div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= TOOLS ARSENAL ================= -->
        <section id="tools" class="scroll-mt-28">
            <div class="flex items-center gap-3 mb-3 px-2 reveal">
                <span class="material-symbols-rounded text-primary">construction</span>
                <h2 class="text-3xl font-black text-gradient tracking-tight">The Hacker's Arsenal</h2>
            </div>
            <p class="text-gray-400 mb-10 px-2 text-sm reveal">A complete list of industry-standard tools for every stage of testing.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="glass-panel rounded-3xl p-6 reveal">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-eye text-primary"></i> Reconnaissance</h3>
                    <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                        <li><a href="https://github.com/projectdiscovery/subfinder" target="_blank">Subfinder</a>: Fast passive subdomain enumeration tool.</li>
                        <li><a href="https://github.com/owasp-amass/amass" target="_blank">Amass</a>: In-depth attack surface mapping and asset discovery.</li>
                        <li><a href="https://github.com/projectdiscovery/httpx" target="_blank">httpx</a>: Fast and multi-purpose HTTP toolkit.</li>
                        <li><a href="https://nmap.org/" target="_blank">Nmap</a>: The standard for network discovery and security auditing.</li>
                        <li><a href="https://github.com/ffuf/ffuf" target="_blank">FFuf</a>: Fast web fuzzer written in Go (Directory bruteforcing).</li>
                        <li><a href="https://github.com/tomnomnom/waybackurls" target="_blank">Waybackurls</a>: Fetch all URLs from the Wayback Machine.</li>
                    </ul>
                </div>

                <div class="glass-panel rounded-3xl p-6 reveal">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-satellite-dish text-primary"></i> Scanners &amp; Proxies</h3>
                    <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                        <li><a href="https://portswigger.net/burp" target="_blank">Burp Suite</a>: The #1 tool for web application security testing.</li>
                        <li><a href="https://github.com/projectdiscovery/nuclei" target="_blank">Nuclei</a>: Template-based vulnerability scanner (Highly recommended).</li>
                        <li><a href="https://www.zaproxy.org/" target="_blank">OWASP ZAP</a>: The world's most popular free web security scanner.</li>
                        <li><a href="https://sqlmap.org/" target="_blank">SQLMap</a>: Automatic SQL injection and database takeover tool.</li>
                        <li><a href="https://cirt.net/Nikto2" target="_blank">Nikto</a>: Web server scanner for dangerous files/CGIs.</li>
                        <li><a href="https://wpscan.com/wordpress-security-scanner" target="_blank">WPScan</a>: WordPress security scanner.</li>
                    </ul>
                </div>

                <div class="glass-panel rounded-3xl p-6 reveal">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-microchip text-primary"></i> Reverse Engineering</h3>
                    <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                        <li><a href="https://ghidra-sre.org/" target="_blank">Ghidra</a>: Software reverse engineering suite by NSA.</li>
                        <li><a href="https://hex-rays.com/ida-pro/" target="_blank">IDA Pro</a>: The premier disassembler and debugger (Commercial).</li>
                        <li><a href="https://github.com/radareorg/radare2" target="_blank">Radare2</a>: UNIX-like reverse engineering framework.</li>
                        <li><a href="https://ibotpeaches.github.io/Apktool/" target="_blank">Apktool</a>: A tool for reverse engineering Android APK files.</li>
                        <li><a href="https://frida.re/" target="_blank">Frida</a>: Dynamic instrumentation toolkit for developers/reversers.</li>
                        <li><a href="https://github.com/skylot/jadx" target="_blank">Jadx</a>: Dex to Java decompiler (GUI &amp; CLI).</li>
                    </ul>
                </div>

                <div class="glass-panel rounded-3xl p-6 reveal">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-key text-primary"></i> Cryptography &amp; Hashing</h3>
                    <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                        <li><a href="https://gchq.github.io/CyberChef/" target="_blank">CyberChef</a>: The "Swiss Army Knife" for encoding/decoding.</li>
                        <li><a href="https://hashcat.net/hashcat/" target="_blank">Hashcat</a>: World's fastest and most advanced password recovery utility.</li>
                        <li><a href="https://www.openwall.com/john/" target="_blank">John the Ripper</a>: Fast password cracker.</li>
                        <li><a href="https://www.openssl.org/" target="_blank">OpenSSL</a>: Toolkit for TLS/SSL protocols.</li>
                        <li><a href="https://gnupg.org/" target="_blank">GnuPG</a>: A complete and free implementation of the OpenPGP standard.</li>
                    </ul>
                </div>

                <div class="glass-panel rounded-3xl p-6 reveal">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-mobile-alt text-primary"></i> Mobile Security</h3>
                    <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                        <li><a href="https://github.com/MobSF/Mobile-Security-Framework-MobSF" target="_blank">MobSF</a>: Automated all-in-one mobile application pen-testing framework.</li>
                        <li><a href="https://github.com/WithSecureLabs/drozer" target="_blank">Drozer</a>: Comprehensive security audit framework for Android.</li>
                        <li><a href="https://github.com/sensepost/objection" target="_blank">Objection</a>: Runtime mobile exploration toolkit.</li>
                    </ul>
                </div>

                <div class="glass-panel rounded-3xl p-6 reveal">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-bomb text-primary"></i> Exploitation &amp; Misc</h3>
                    <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                        <li><a href="https://www.metasploit.com/" target="_blank">Metasploit</a>: Penetration testing framework.</li>
                        <li><a href="https://github.com/commixproject/commix" target="_blank">Commix</a>: Automated OS command injection exploiter.</li>
                        <li><a href="https://github.com/s0md3v/XSStrike" target="_blank">XSStrike</a>: Advanced XSS detection suite.</li>
                        <li><a href="https://github.com/s0md3v/Arjun" target="_blank">Arjun</a>: HTTP parameter discovery suite.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ================= LABS ================= -->
        <section id="labs" class="scroll-mt-28">
            <div class="flex items-center gap-3 mb-10 px-2 reveal">
                <span class="material-symbols-rounded text-primary">science</span>
                <h2 class="text-3xl font-black text-gradient tracking-tight">Labs &amp; Practice Grounds</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="glass-panel rounded-3xl p-6 reveal">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-graduation-cap text-primary"></i> PortSwigger Academy</h3>
                    <p class="text-sm text-gray-300 mb-3">The <strong class="text-white">Gold Standard</strong> for web security training. Created by the Burp Suite team.</p>
                    <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                        <li class="flex items-center gap-2"><a href="https://portswigger.net/web-security" target="_blank">Web Security Academy</a> <span class="badge badge-free">Free</span></li>
                        <li><a href="https://portswigger.net/burp/documentation/desktop/scanning" target="_blank">Burp Scanner Labs</a></li>
                    </ul>
                </div>

                <div class="glass-panel rounded-3xl p-6 reveal">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-flag text-primary"></i> CTF Platforms</h3>
                    <p class="text-sm text-gray-300 mb-3">Gamified hacking challenges to test your skills.</p>
                    <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                        <li class="flex items-center gap-2"><a href="https://hackthebox.com/" target="_blank">Hack The Box</a> <span class="badge badge-premium">Premium</span></li>
                        <li class="flex items-center gap-2"><a href="https://tryhackme.com/" target="_blank">TryHackMe</a> <span class="badge badge-premium">Premium</span></li>
                        <li class="flex items-center gap-2"><a href="https://root-me.org/" target="_blank">Root Me</a> <span class="badge badge-free">Free</span></li>
                        <li class="flex items-center gap-2"><a href="https://picoctf.org/" target="_blank">picoCTF</a> <span class="badge badge-free">Free</span></li>
                    </ul>
                </div>

                <div class="glass-panel rounded-3xl p-6 reveal">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-bug text-primary"></i> Vulnerable Apps</h3>
                    <p class="text-sm text-gray-300 mb-3">Intentionally broken applications to practice on localhost.</p>
                    <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                        <li><a href="https://dvwa.co.uk/" target="_blank">DVWA (Damn Vulnerable Web App)</a></li>
                        <li><a href="https://owasp.org/www-project-juice-shop/" target="_blank">OWASP Juice Shop</a></li>
                        <li><a href="https://github.com/WebGoat/WebGoat" target="_blank">WebGoat</a></li>
                        <li class="flex items-center gap-2"><a href="https://pentesterlab.com/" target="_blank">PentesterLab</a> <span class="badge badge-paid">Paid</span></li>
                    </ul>
                </div>

                <div class="glass-panel rounded-3xl p-6 reveal">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-terminal text-primary"></i> Wargames</h3>
                    <p class="text-sm text-gray-300 mb-3">Focus on specific skills like Linux or Cryptography.</p>
                    <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                        <li><a href="https://overthewire.org/wargames/natas/" target="_blank">OverTheWire (Natas)</a> - Web Security</li>
                        <li><a href="https://overthewire.org/wargames/bandit/" target="_blank">OverTheWire (Bandit)</a> - Linux Basics</li>
                        <li><a href="https://cryptopals.com/" target="_blank">Cryptopals</a> - Cryptography</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ================= RESOURCES LIBRARY ================= -->
        <section id="resources" class="scroll-mt-28">
            <div class="flex items-center gap-3 mb-10 px-2 reveal">
                <span class="material-symbols-rounded text-primary">menu_book</span>
                <h2 class="text-3xl font-black text-gradient tracking-tight">Resources Library</h2>
            </div>

            <div class="reveal">
                <div class="flex justify-center flex-wrap gap-2 mb-8">
                    <button class="tab-btn active px-5 py-2.5 rounded-xl bg-primary text-black border border-primary font-bold text-sm flex items-center gap-2" data-tab="courses" onclick="showTab('courses')"><i class="fas fa-video"></i> Courses</button>
                    <button class="tab-btn px-5 py-2.5 rounded-xl bg-white/5 text-gray-300 border border-white/10 font-bold text-sm flex items-center gap-2 hover:bg-white/10" data-tab="books" onclick="showTab('books')"><i class="fas fa-book"></i> Books Library</button>
                    <button class="tab-btn px-5 py-2.5 rounded-xl bg-white/5 text-gray-300 border border-white/10 font-bold text-sm flex items-center gap-2 hover:bg-white/10" data-tab="platforms" onclick="showTab('platforms')"><i class="fas fa-globe"></i> Platforms</button>
                    <button class="tab-btn px-5 py-2.5 rounded-xl bg-white/5 text-gray-300 border border-white/10 font-bold text-sm flex items-center gap-2 hover:bg-white/10" data-tab="logicflaws" onclick="showTab('logicflaws')"><i class="fas fa-brain"></i> Logic Flaws</button>
                </div>

                <!-- Courses -->
                <div id="courses" class="tab-content active">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold mb-3 border-b border-white/10 pb-3"><a href="https://www.pentesteracademy.com/" target="_blank" class="text-primary hover:text-white">Pentester Academy</a></h3>
                            <ul class="space-y-2 text-sm text-gray-300 list-disc list-inside">
                                <li>Web Application Pentesting</li>
                                <li>Web Application Challenges</li>
                                <li>JavaScript for Pentesters</li>
                            </ul>
                        </div>
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold mb-3 border-b border-white/10 pb-3"><a href="https://ine.com/" target="_blank" class="text-primary hover:text-white">eLearnSecurity (INE)</a></h3>
                            <ul class="space-y-2 text-sm text-gray-300 list-disc list-inside">
                                <li>eWPT (Web App Penetration Tester)</li>
                                <li>eWPTX (Advanced Web App Penetration Tester)</li>
                            </ul>
                        </div>
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold mb-3 border-b border-white/10 pb-3"><a href="https://www.offensive-security.com/" target="_blank" class="text-primary hover:text-white">Offensive Security</a></h3>
                            <ul class="space-y-2 text-sm text-gray-300 list-disc list-inside">
                                <li>AWAE (OSWE Certification) - Advanced Web Attacks.</li>
                            </ul>
                        </div>
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold mb-3 border-b border-white/10 pb-3"><a href="https://www.pluralsight.com/" target="_blank" class="text-primary hover:text-white">Pluralsight</a></h3>
                            <ul class="space-y-2 text-sm text-gray-300 list-disc list-inside">
                                <li>Advanced Web Application Penetration Testing with Burp Suite.</li>
                            </ul>
                        </div>
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold mb-3 border-b border-white/10 pb-3"><a href="https://www.sans.org/" target="_blank" class="text-primary hover:text-white">SANS Institute</a></h3>
                            <ul class="space-y-2 text-sm text-gray-300 list-disc list-inside">
                                <li>SEC542: Web App Penetration Testing</li>
                                <li>SEC642: Advanced Web App Penetration Testing</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Books -->
                <div id="books" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white mb-3 border-b border-white/10 pb-3">Essential Reads</h3>
                            <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                                <li><a href="https://portswigger.net/web-security/web-application-hackers-handbook" target="_blank">The Web Application Hacker's Handbook</a></li>
                                <li><a href="https://nostarch.com/webhacking101" target="_blank">Web Hacking 101</a></li>
                                <li><a href="https://www.amazon.com/Real-World-Bug-Hunting-Field-Guide/dp/1593278616" target="_blank">Real-World Bug Hunting</a></li>
                                <li><a href="https://nostarch.com/tangledweb" target="_blank">The Tangled Web</a></li>
                            </ul>
                        </div>
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white mb-3 border-b border-white/10 pb-3">Advanced &amp; Specific</h3>
                            <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                                <li><a href="https://owasp.org/www-project-web-security-testing-guide/" target="_blank">OWASP Testing Guide (WSTG 4.2)</a></li>
                                <li><a href="https://nostarch.com/browserhackershandbook" target="_blank">The Browser Hacker's Handbook</a></li>
                                <li><a href="https://www.amazon.com/Advanced-API-Security-Securing-Architectures/dp/1484220498" target="_blank">Advanced API Security</a></li>
                                <li><a href="https://www.packtpub.com/product/mastering-modern-web-penetration-testing/9781785284588" target="_blank">Mastering Modern Web Penetration Testing</a></li>
                            </ul>
                        </div>
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white mb-3 border-b border-white/10 pb-3">Language &amp; Reference</h3>
                            <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                                <li><a href="https://flaviocopes.com/page/javascript-handbook/" target="_blank">JavaScript Beginner's Handbook</a></li>
                                <li><a href="https://www.amazon.com/HTTP-Definitive-Guide-David-Gourley/dp/1565925092" target="_blank">HTTP: The Definitive Guide</a></li>
                                <li><a href="https://nostarch.com/blackhatpython" target="_blank">Black Hat Python</a></li>
                                <li><a href="https://www.amazon.com/Rtfm-Red-Team-Field-Manual/dp/1494295504" target="_blank">RTFM: Red Team Field Manual</a></li>
                            </ul>
                        </div>
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white mb-3 border-b border-white/10 pb-3">Field Guides</h3>
                            <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                                <li><a href="https://github.com/trietptm/bug-bounty-playbook" target="_blank">Bug Bounty Playbook (v1 &amp; v2)</a></li>
                                <li><a href="https://www.amazon.com/Web-Security-Developers-Real-Threats/dp/1593279949" target="_blank">Web Security for Developers</a></li>
                                <li><a href="https://brutelogic.com.br/blog/cheat-sheet/" target="_blank">XSS Cheat Sheet (2019)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Platforms -->
                <div id="platforms" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-globe-americas text-primary"></i> Global Platforms</h3>
                            <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                                <li><a href="https://www.hackerone.com/" target="_blank">HackerOne</a></li>
                                <li><a href="https://www.bugcrowd.com/" target="_blank">Bugcrowd</a></li>
                                <li><a href="https://www.intigriti.com/" target="_blank">Intigriti</a></li>
                                <li><a href="https://www.yeswehack.com/" target="_blank">YesWeHack</a></li>
                                <li><a href="https://www.synack.com/" target="_blank">Synack</a></li>
                                <li><a href="https://hackenproof.com/" target="_blank">HackenProof</a></li>
                            </ul>
                        </div>
                        <div class="glass-panel-bright rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white flex items-center gap-2 border-b border-white/10 pb-3 mb-4"><i class="fas fa-map-marker-alt text-primary"></i> Iranian Platforms</h3>
                            <ul class="space-y-2.5 text-sm text-gray-300 link-li">
                                <li><a href="https://ravro.ir/" target="_blank">Ravro</a></li>
                                <li><a href="https://bugdasht.ir/" target="_blank">Bugdasht</a></li>
                                <li><a href="https://sooton.ir/" target="_blank">Sooton</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Logic Flaws -->
                <div id="logicflaws" class="tab-content">
                    <p class="text-center text-gray-400 text-sm max-w-3xl mx-auto mb-8">
                        Logic Flaws are often the most lucrative vulnerabilities in bug bounty programs because they cannot be easily detected by automated scanners and require critical thinking.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="glass-panel rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white flex items-center justify-between gap-2 mb-3">Race Conditions <span class="sev sev-critical">Critical</span></h3>
                            <p class="text-sm text-gray-300">Occurs when two or more concurrent requests cause an unintended state. Common in payment systems, reservations, and inventory management.</p>
                            <code class="code-block">GET /api/withdraw?amount=1000
// Sending multiple requests simultaneously</code>
                        </div>
                        <div class="glass-panel rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white flex items-center justify-between gap-2 mb-3">Business Logic Bypass <span class="sev sev-high">High</span></h3>
                            <p class="text-sm text-gray-300">Circumventing business rules by manipulating parameters or the order of operations (e.g., purchasing a product with a negative or zero price).</p>
                            <code class="code-block">POST /api/cart/update
{"product_id": "123", "price": -100}</code>
                        </div>
                        <div class="glass-panel rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white flex items-center justify-between gap-2 mb-3">Authorization Flaws <span class="sev sev-high">High</span></h3>
                            <p class="text-sm text-gray-300">Failures in access control (IDOR/BAC) that allow a user to access resources or perform actions they should not be authorized to.</p>
                            <code class="code-block">GET /api/user/456/orders
// Accessing another user's data</code>
                        </div>
                        <div class="glass-panel rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white flex items-center justify-between gap-2 mb-3">Session Management <span class="sev sev-high">High</span></h3>
                            <p class="text-sm text-gray-300">Weaknesses in session handling that allow sessions to be predicted, hijacked, or fail to expire properly.</p>
                            <code class="code-block">Set-Cookie: sessionid=000001
// Predictable sequence</code>
                        </div>
                        <div class="glass-panel rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white flex items-center justify-between gap-2 mb-3">Input Validation <span class="sev sev-medium">Medium</span></h3>
                            <p class="text-sm text-gray-300">Flaws in input validation logic that allow unauthorized or malicious data to be processed by the system.</p>
                            <code class="code-block">POST /api/register
{"email": "test@.com", "password": "123"}</code>
                        </div>
                        <div class="glass-panel rounded-3xl p-6">
                            <h3 class="text-base font-bold text-white flex items-center justify-between gap-2 mb-3">API Rate Limiting <span class="sev sev-medium">Medium</span></h3>
                            <p class="text-sm text-gray-300">Lack of request limits, allowing attackers to repeat operations (brute force) or exhaust resources.</p>
                            <code class="code-block">POST /api/login
// No rate limit implemented</code>
                        </div>
                    </div>

                    <div class="glass-panel rounded-3xl p-6 mt-6 border-l-4 !border-l-primary">
                        <h3 class="text-base font-bold text-white flex items-center gap-2 mb-4"><i class="fas fa-search text-primary"></i> Key Hunting Tips</h3>
                        <ul class="grid sm:grid-cols-2 gap-x-8 gap-y-3 text-sm text-gray-300 list-disc list-inside">
                            <li><strong class="text-white">Understand the Business:</strong> Fully understand how the application works and its business model before testing.</li>
                            <li><strong class="text-white">Test Boundaries:</strong> Always test logical boundaries (e.g., negative values, zero, extremely large numbers).</li>
                            <li><strong class="text-white">Concurrency:</strong> Test simultaneous requests to identify Race Conditions.</li>
                            <li><strong class="text-white">Order of Operations:</strong> Try executing steps in different orders (e.g., skipping a verification step).</li>
                            <li><strong class="text-white">Parameter Manipulation:</strong> Manipulate all parameters, even those hidden in the frontend/UI.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="py-12 text-center relative z-10 border-t border-white/10 bg-black/40 backdrop-blur-md mt-10">
        <div class="flex justify-center gap-5 mb-4">
            <a href="https://github.com/m4sh-wacker" target="_blank" class="text-gray-500 hover:text-primary transition-colors"><span class="material-symbols-rounded">code</span></a>
            <a href="https://t.me/m4sh_wacker" target="_blank" class="text-gray-500 hover:text-primary transition-colors"><span class="material-symbols-rounded">send</span></a>
            <a href="/" class="text-gray-500 hover:text-primary transition-colors"><span class="material-symbols-rounded">home</span></a>
        </div>
        <p class="text-xs text-gray-500 font-mono tracking-wider">
            © 2026 Bug Bounty Roadmap · Mohammad Hosein Sadeghian · m4sh.ir
        </p>
    </footer>

    <script>
        // Language toggle
        function setLang(lang) {
            const btnEn = document.getElementById('btn-en');
            const btnFa = document.getElementById('btn-fa');
            const en = document.querySelectorAll('[data-lang="en"]');
            const fa = document.querySelectorAll('[data-lang="fa"]');
            if (lang === 'fa') {
                document.documentElement.setAttribute('dir', 'rtl');
                en.forEach(el => el.classList.add('lang-hidden'));
                fa.forEach(el => el.classList.remove('lang-hidden'));
                btnFa.classList.add('bg-primary','text-black'); btnFa.classList.remove('text-gray-400','hover:text-white');
                btnEn.classList.remove('bg-primary','text-black'); btnEn.classList.add('text-gray-400','hover:text-white');
            } else {
                document.documentElement.setAttribute('dir', 'ltr');
                fa.forEach(el => el.classList.add('lang-hidden'));
                en.forEach(el => el.classList.remove('lang-hidden'));
                btnEn.classList.add('bg-primary','text-black'); btnEn.classList.remove('text-gray-400','hover:text-white');
                btnFa.classList.remove('bg-primary','text-black'); btnFa.classList.add('text-gray-400','hover:text-white');
            }
        }
        setLang('en');

        // Tabs
        function showTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
            document.querySelectorAll('.tab-btn').forEach(b => {
                b.classList.remove('active','bg-primary','text-black','border-primary');
                b.classList.add('bg-white/5','text-gray-300','border-white/10');
            });
            document.getElementById(tabId).classList.add('active');
            const btn = document.querySelector('.tab-btn[data-tab="' + tabId + '"]');
            if (btn) {
                btn.classList.add('active','bg-primary','text-black','border-primary');
                btn.classList.remove('bg-white/5','text-gray-300','border-white/10');
            }
        }

        // Scroll reveal
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) { entry.target.classList.add('visible'); observer.unobserve(entry.target); }
                });
            }, { threshold: 0.08 });
            document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>

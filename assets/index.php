<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Access Denied</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

        :root {
            --bg-color: #0f172a;
            --text-color: #e2e8f0;
            --accent-color: #3b82f6;
            --secondary-text: #94a3b8;
        }

        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .container {
            padding: 2rem;
            max-width: 600px;
        }

        .lock-icon {
            width: 120px;
            height: 120px;
            margin-bottom: 1.5rem;
            color: var(--accent-color);
            filter: drop-shadow(0 0 15px rgba(59, 130, 246, 0.5));
            animation: pulse 2s infinite ease-in-out;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.8; }
            100% { transform: scale(1); opacity: 1; }
        }

        h1 {
            font-size: 4rem;
            margin: 0;
            font-weight: 700;
            line-height: 1;
            color: var(--accent-color);
        }

        h2 {
            font-size: 2rem;
            margin: 0.5rem 0 1rem;
        }

        p {
            font-size: 1.1rem;
            color: var(--secondary-text);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: var(--accent-color);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .btn:hover {
            background-color: transparent;
            border-color: var(--accent-color);
            color: var(--accent-color);
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
        }

    </style>
</head>
<body>
    <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" class="lock-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
        </svg>
        
        <h1>403</h1>
        <h2>Access Denied</h2>
        <p>Sorry, you don't have permission to access this area.<br>If you believe this is an error, please contact the administrator.</p>
        <a href="/" class="btn">Return Home</a>
    </div>
</body>
</html>
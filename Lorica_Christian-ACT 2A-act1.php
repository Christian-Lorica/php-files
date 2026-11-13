<!Lorica_Christian-ACT 2A-act1.php html>
<html>
<head>
    <title>Student Portal</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Inter', Arial, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            background:
                radial-gradient(circle at 15% 20%, rgba(34, 211, 238, .22), transparent 30%),
                radial-gradient(circle at 85% 80%, rgba(129, 140, 248, .24), transparent 32%),
                linear-gradient(135deg, #101827, #172554 55%, #312e81);
            color: #e5e7eb;
        }

        .container {
            width: 100%;
            max-width: 410px;
            padding: 38px 34px;
            border: 1px solid rgba(255, 255, 255, .16);
            border-radius: 24px;
            background: rgba(15, 23, 42, .82);
            box-shadow: 0 24px 70px rgba(0, 0, 0, .38);
            backdrop-filter: blur(16px);
            text-align: center;
        }

        .logo {
            width: 62px;
            height: 62px;
            margin: 0 auto 18px;
            display: grid;
            place-items: center;
            border-radius: 19px;
            background: linear-gradient(135deg, #22d3ee, #6366f1);
            color: #0f172a;
            font-size: 27px;
            font-weight: 800;
            box-shadow: 0 10px 25px rgba(34, 211, 238, .2);
        }

        h2 {
            margin: 0 0 8px;
            color: #f8fafc;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: -.6px;
        }

        h3 {
            margin: 0 0 24px;
            color: #a5b4fc;
            font-size: 15px;
            font-weight: 500;
        }

        .subtitle {
            margin: 0 0 25px;
            color: #94a3b8;
            font-size: 13px;
            line-height: 1.6;
        }

        input {
            width: 100%;
            padding: 14px 15px;
            margin: 8px 0;
            border: 1px solid #334155;
            border-radius: 11px;
            outline: none;
            background: #111c31;
            color: #f8fafc;
            font-size: 14px;
            transition: border-color .2s, box-shadow .2s;
        }

        input::placeholder {
            color: #8290a5;
        }

        input:focus {
            border-color: #22d3ee;
            box-shadow: 0 0 0 3px rgba(34, 211, 238, .13);
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 16px;
            border: 0;
            border-radius: 11px;
            background: linear-gradient(100deg, #06b6d4, #6366f1);
            color: #fff;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 9px 22px rgba(6, 182, 212, .18);
            transition: transform .2s, filter .2s;
        }

        button:hover {
            filter: brightness(1.1);
            transform: translateY(-2px);
        }

        p {
            margin: 24px 0 0;
            color: #aab6c8;
            font-size: 13px;
        }

        a {
            color: #22d3ee;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
        }

        a:hover {
            color: #a5b4fc;
            text-decoration: underline;
        }

        .hidden {
            display: none;
        }

        @media (max-width: 480px) {
            body {
                padding: 16px;
            }

            .container {
                padding: 32px 23px;
                border-radius: 20px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- LOGIN FORM -->
    <div id="login">
        <h2>Student Portal</h2>
        <h3>Sign In</h3>

        <form onsubmit="loginUser(event)">
            <input type="email" id="loginEmail"
                   placeholder="Email Address" required>

            <input type="password" id="loginPassword"
                   placeholder="Password" required>

            <button type="submit">Sign In</button>
        </form>

        <p>Don't have an account?
            <a onclick="showRegister()">Register</a>
        </p>
    </div>

    <!-- REGISTER FORM -->
    <div id="register" class="hidden">
        <h2>Create Account</h2>

        <form onsubmit="registerUser(event)">
            <input type="text" id="name"
                   placeholder="Full Name" required>

            <input type="email" id="email"
                   placeholder="Email Address" required>

            <input type="password" id="password"
                   placeholder="Create Password"
                   minlength="6" required>

            <button type="submit">Register</button>
        </form>

        <p>Already have an account?
            <a onclick="showLogin()">Sign In</a>
        </p>
    </div>

</div>

<script>
    function showRegister() {
        document.getElementById("login").classList.add("hidden");
        document.getElementById("register").classList.remove("hidden");
    }

    function showLogin() {
        document.getElementById("register").classList.add("hidden");
        document.getElementById("login").classList.remove("hidden");
    }

    function registerUser(event) {
        event.preventDefault();

        alert("Registration successful!");
        showLogin();
    }

    function loginUser(event) {
        event.preventDefault();

        alert("Login button clicked!");
    }
</script>

</body>
</html>
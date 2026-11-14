<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Portal — Activity 2</title>
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
            align-items: flex-start;
            background:
                radial-gradient(circle at 15% 20%, rgba(34, 211, 238, .22), transparent 30%),
                radial-gradient(circle at 85% 80%, rgba(129, 140, 248, .24), transparent 32%),
                linear-gradient(135deg, #101827, #172554 55%, #312e81);
            color: #e5e7eb;
        }
        .container {
            width: 100%;
            max-width: 800px;
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
        .btn-danger {
            background: linear-gradient(100deg, #ef4444, #f97316);
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #334155;
            padding: 10px;
            font-size: 13px;
        }
        th {
            color: #22d3ee;
        }
        .edit-btn {
            display: inline-block;
            background: #22c55e;
            color: white;
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 11px;
            margin: 2px;
        }
        .del-btn {
            display: inline-block;
            background: #ef4444;
            color: white;
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 11px;
            margin: 2px;
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
    <div class="logo">SP</div>

    <!-- LOGIN FORM -->
    <div id="login">
        <h2>Student Portal</h2>
        <h3>Sign In</h3>
        <form onsubmit="loginUser(event)">
            <input type="email" id="loginEmail" placeholder="Email Address" required>
            <input type="password" id="loginPassword" placeholder="Password" required>
            <button type="submit">Sign In</button>
        </form>
        <p>Don't have an account? <a onclick="showRegister()">Register</a></p>
    </div>

    <!-- REGISTER FORM -->
    <div id="register" class="hidden">
        <h2>Create Account</h2>
        <form onsubmit="registerUser(event)">
            <input type="text" id="name" placeholder="Full Name" required>
            <input type="email" id="email" placeholder="Email Address" required>
            <input type="password" id="password" placeholder="Create Password" minlength="6" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a onclick="showLogin()">Sign In</a></p>
    </div>

    <!-- DASHBOARD / USER MANAGEMENT (CRUD) -->
    <div id="dashboard" class="hidden">
        <h2>Welcome, <span id="userName"></span>!</h2>
        <button class="btn-danger" onclick="logout()">Logout</button>

        <h3>User List (CRUD)</h3>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="userTableBody"></tbody>
        </table>
    </div>
</div>

<script>
// === HELPER FUNCTIONS ===
function getUsers() {
    return JSON.parse(localStorage.getItem('users')) || [];
}
function saveUsers(users) {
    localStorage.setItem('users', JSON.stringify(users));
}

// === SHOW FORMS ===
function showRegister() {
    document.getElementById("login").classList.add("hidden");
    document.getElementById("register").classList.remove("hidden");
}
function showLogin() {
    document.getElementById("register").classList.add("hidden");
    document.getElementById("dashboard").classList.add("hidden");
    document.getElementById("login").classList.remove("hidden");
}

// === CREATE (REGISTER) ===
function registerUser(event) {
    event.preventDefault();
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;

    const users = getUsers();
    const exist = users.find(u => u.email === email);
    if(exist) {
        alert("Email already registered!");
        return;
    }
    users.push({ name, email, password });
    saveUsers(users);
    alert("Registration successful!");
    showLogin();
}

// === READ + ACCESS CONTROL (LOGIN) ===
function loginUser(event) {
    event.preventDefault();
    const email = document.getElementById("loginEmail").value.trim();
    const password = document.getElementById("loginPassword").value;
    const users = getUsers();
    const foundUser = users.find(u => u.email === email && u.password === password);

    if(foundUser) {
        localStorage.setItem("loggedInUser", JSON.stringify(foundUser));
        loadDashboard();
    } else {
        alert("Invalid email or password!");
    }
}

// === DASHBOARD (READ ALL USERS) ===
function loadDashboard() {
    const currentUser = JSON.parse(localStorage.getItem("loggedInUser"));
    if(!currentUser) {
        showLogin();
        return;
    }
    document.getElementById("login").classList.add("hidden");
    document.getElementById("register").classList.add("hidden");
    document.getElementById("dashboard").classList.remove("hidden");
    document.getElementById("userName").textContent = currentUser.name;

    renderUserTable();
}

// === RENDER USER TABLE — AYOS NA YUNG APOSTROPHE BUG ===
function renderUserTable() {
    const users = getUsers();
    const tbody = document.getElementById("userTableBody");
    tbody.innerHTML = "";
    users.forEach(u => {
        // Ginamit natin template literals na maayos, wala nang sobrang '
        const tr = document.createElement("tr");
        tr.innerHTML = `
            <td>${u.name}</td>
            <td>${u.email}</td>
            <td>
                <a class="edit-btn" onclick="editUser('${u.email.replaceAll("'", "\\'")}')">Edit</a>
                <a class="del-btn" onclick="deleteUser('${u.email.replaceAll("'", "\\'")}')">Delete</a>
            </td>
        `;
        tbody.appendChild(tr);
    })
}

// === UPDATE (EDIT USER) ===
function editUser(email) {
    const users = getUsers();
    const user = users.find(u => u.email === email);
    if(!user) return;
    const newName = prompt("Enter new name:", user.name);
    const newPass = prompt("Enter new password:", user.password);
    if(newName && newPass) {
        user.name = newName;
        user.password = newPass;
        saveUsers(users);
        renderUserTable();
        alert("User updated!");
    }
}

// === DELETE USER ===
function deleteUser(email) {
    if(!confirm("Are you sure you want to delete this user?")) return;
    let users = getUsers();
    users = users.filter(u => u.email !== email);
    saveUsers(users);
    renderUserTable();
    alert("User deleted!");
}

// === LOGOUT ===
function logout() {
    localStorage.removeItem("loggedInUser");
    showLogin();
}

// === CHECK IF USER IS ALREADY LOGGED IN ===
window.onload = function() {
    if(localStorage.getItem("loggedInUser")) {
        loadDashboard();
    }
}
</script>
</body>
</html>

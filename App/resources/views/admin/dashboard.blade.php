<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .dashboard {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .nav {
            background-color: #333;
        }
        
        .nav ul {
            list-style-type: none;
            padding: 0;
        }
        
        .nav ul li {
            display: inline;
        }
        
        .nav ul li a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            display: inline-block;
        }
        
        .nav ul li a:hover {
            background-color: #575757;
        }
        
        .main-content {
            padding: 20px;
            flex: 1;
            overflow-y: auto;
        }
        
        h2 {
            margin-top: 0;
        }
        
        .add-user-btn, .add-test-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-bottom: 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        
        .add-user-btn:hover, .add-test-btn:hover {
            background-color: #45a049;
        }
        
        .search-bar {
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .user-table, .test-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .user-table th, .test-table th,
        .user-table td, .test-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        .user-table th, .test-table th {
            background-color: #f2f2f2;
        }
        
        .user-table tr:nth-child(even), .test-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .user-table tr:hover, .test-table tr:hover {
            background-color: #ddd;
        }
        
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="dashboard">

        <header class="header">
            <h1>Admin Dashboard</h1>
            <div class="user-profile">
                <span>Admin</span>
                <img src="profile-icon.png" alt="Profile" />
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: white; cursor: pointer;">Logout</button>
                </form>
            </div>
        </header>

        <nav class="nav">
            <ul>
                <li><a href="#manage-users">Manage Users</a></li>
                <li><a href="#manage-tests">Manage Tests</a></li>
                <li><a href="#reports">Reports</a></li>
                <li><a href="#settings">Settings</a></li>
            </ul>
        </nav>

        <main class="main-content">
            <section id="manage-users">
                <h2>Manage Users</h2>
                <button class="add-user-btn">Add New User</button>
                <input type="text" placeholder="Search users..." class="search-bar" />
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample User Row -->
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>User</td>
                            <td>Active</td>
                            <td>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <!-- More user rows can be added here -->
                    </tbody>
                </table>
            </section>
            <section id="manage-tests">
                <h2>Manage Tests</h2>
                <button class="add-test-btn">Add New Test</button>
                <input type="text" placeholder="Search tests..." class="search-bar" />
                <table class="test-table">
                    <thead>
                        <tr>
                            <th>Test ID</th>
                            <th>Test Name</th>
                            <th>Description</th>
                            <th>Created By</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Test Row -->
                        <tr>
                            <td>101</td>
                            <td>Math Test</td>
                            <td>Basic Math Concepts</td>
                            <td>Admin</td>
                            <td>2023-10-01</td>
                            <td>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <!-- More test rows can be added here -->
                    </tbody>
                </table>
            </section>
        </main>

    </div>
</body>
</html>

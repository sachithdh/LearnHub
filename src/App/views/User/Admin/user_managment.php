<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/User/Admin/user_managment.css">

</head>
<section class="admin-dashboard">
    <div class="admin-main-container">
        <div class="admin-content">
            <div class="admin-header">
                <h1>User Management</h1>
                <div class="header-actions">
                    <div class="search-form">
                        <input type="text" class="search-input" id="searchInput" placeholder="Search users...">
                        <button class="search-btn" onclick="searchUsers()">Search</button>
                    </div>
                    <button class="add-user-btn" onclick="toggleModal()">Add New User</button>
                </div>
            </div>

            <!-- User Table -->
            <div class="user-table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Joined Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <!-- <tr>
                                <td>1</td>
                                <td>john_doe</td>
                                <td>john@example.com</td>
                                <td>2024-01-15</td>
                                <td>
                                    <button class="delete-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>john_doe</td>
                                <td>john@example.com</td>
                                <td>2024-01-15</td>
                                <td>
                                    <button class="delete-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>john_doe</td>
                                <td>john@example.com</td>
                                <td>2024-01-15</td>
                                <td>
                                    <button class="delete-btn">Delete</button>
                                </td>
                            </tr> -->
                    </tbody>
                </table>
            </div>

            <div id="addUserModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="toggleModal()">&times;</span>
                    <h2>Add New User</h2>
                    <form id="addUserForm" onsubmit="addUser(event)">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" required>
                        </div>
                        <button type="submit" class="add-user-btn">Add User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Sample user data
    let users = [{
            id: 1,
            username: "john_doe",
            email: "john@example.com",
            joinedDate: "2024-01-15"
        },
        {
            id: 2,
            username: "jane_smith",
            email: "jane@example.com",
            joinedDate: "2024-02-01"
        },
        {
            id: 3,
            username: "mike_johnson",
            email: "mike@example.com",
            joinedDate: "2024-02-15"
        },
        {
            id: 4,
            username: "sarah_wilson",
            email: "sarah@example.com",
            joinedDate: "2024-03-01"
        },
        {
            id: 5,
            username: "tom_brown",
            email: "tom@example.com",
            joinedDate: "2024-03-15"
        }
    ];

    // Function to render users table
    function renderUsers(usersToRender = users) {
        const tableBody = document.getElementById('userTableBody');
        tableBody.innerHTML = usersToRender.map(user => `
                <tr>
                    <td>${user.id}</td>
                    <td>${user.username}</td>
                    <td>${user.email}</td>
                    <td>${new Date(user.joinedDate).toLocaleDateString()}</td>
                    <td>
                        <button class="delete-btn" onclick="deleteUser(${user.id})">Delete</button>
                    </td>
                </tr>
            `).join('');
    }

    // Function to handle user search
    function searchUsers() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const filteredUsers = users.filter(user =>
            user.username.toLowerCase().includes(searchTerm) ||
            user.email.toLowerCase().includes(searchTerm)
        );
        renderUsers(filteredUsers);
    }

    // Function to add new user
    function addUser(event) {
        event.preventDefault();
        const newUser = {
            id: users.length + 1,
            username: document.getElementById('username').value,
            email: document.getElementById('email').value,
            joinedDate: new Date().toISOString().split('T')[0]
        };
        users.push(newUser);
        renderUsers();
        toggleModal();
        event.target.reset();
    }

    // Function to delete user
    function deleteUser(id) {
        if (confirm('Are you sure you want to delete this user?')) {
            users = users.filter(user => user.id !== id);
            renderUsers();
        }
    }

    // Function to toggle modal
    function toggleModal() {
        const modal = document.getElementById('addUserModal');
        modal.style.display = modal.style.display === 'block' ? 'none' : 'block';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        const modal = document.getElementById('addUserModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    // Initial render
    renderUsers();
</script>


<?php include $this->resolve("partials/_footer.php"); ?>
<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/Course/course_participant.css">

</head>
<section class="user-dashboard">
    <div class="user-main-container">
        <div class="user-content">
            <div class="user-header">
                <h1>Course Participant</h1>
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
                            <th>Registered Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <?php foreach ($users as $user) : ?>

                            <tr onclick="window.location.href='participant/stats/<?php echo e($user['user_id']) ?>';" style="cursor: pointer;">
                                <td><?php echo $user['user_id']; ?></td>
                                <td><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td>2024-01-15</td>
                                <td>
                                    <button class="delete-btn" onclick="event.stopPropagation();">Remove</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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
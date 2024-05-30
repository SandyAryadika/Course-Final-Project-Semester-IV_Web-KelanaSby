<?php include("adminHeader.php")?>
            <h2>Users</h2>
            <button class="add-new-btn">Add New User</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="user-table">
                    <!-- User rows will be rendered here by JavaScript -->
                </tbody>
            </table>
        </main>
    </div>
    <script src="../js/user-script.js"></script>
</body>
</html>

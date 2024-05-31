$(document).ready(function() {
    // Example user data
    const users = [
        { idUser: 1, usernameUser: 'user1', passwordUser: 'pass1', namaUser: 'User One', emailUser: 'user1@example.com', noUser: '1234567890' },
        { idUser: 2, usernameUser: 'user2', passwordUser: 'pass2', namaUser: 'User Two', emailUser: 'user2@example.com', noUser: '0987654321' }
    ];

    function renderTable(data) {
        const tableBody = $('#user-table');
        tableBody.empty();
        data.forEach(user => {
            tableBody.append(`
                <tr>
                    <td>${user.idUser}</td>
                    <td>${user.usernameUser}</td>
                    <td>${user.passwordUser}</td>
                    <td>${user.namaUser}</td>
                    <td>${user.emailUser}</td>
                    <td>${user.noUser}</td>
                    <td>
                        <button class="edit-btn" onclick="editUser(${user.idUser})">Edit</button>
                        <button class="delete-btn" onclick="deleteUser(${user.idUser})">Delete</button>
                    </td>
                </tr>
            `);
        });
    }

    window.editUser = function(id) {
        const user = users.find(user => user.idUser === id);
        if (user) {
            const newName = prompt('Enter new name:', user.namaUser);
            if (newName) {
                user.namaUser = newName;
                renderTable(users);
            }
        }
    };

    window.deleteUser = function(id) {
        const index = users.findIndex(user => user.idUser === id);
        if (index !== -1) {
            users.splice(index, 1);
            renderTable(users);
        }
    };

    $('#search-input').on('input', function() {
        const keyword = $(this).val().toLowerCase();
        const filteredUsers = users.filter(user => user.usernameUser.toLowerCase().includes(keyword));
        renderTable(filteredUsers);
    });

    // Render the table with default user data
    renderTable(users);
});

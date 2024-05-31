const editButtons = document.querySelectorAll('.edit-btn');
const deleteButtons = document.querySelectorAll('.delete-btn');
const modals = document.querySelectorAll('.modal');

// Show editing modal when edit button is clicked
editButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const id = button.getAttribute('data-id');
        const modal = document.getElementById(`edit-modal-${id}`);
        const form = modal.querySelector('form');

        // Set the form action and input values
        form.action = `?edit_user&id=${id}`;
        form.querySelector('#edit-id').value = id;
        form.querySelector('#username').value = button.parentElement.parentElement.querySelector('td:nth-child(2)').innerText;
        form.querySelector('#password').value = button.parentElement.parentElement.querySelector('td:nth-child(3)').innerText;
        form.querySelector('#name').value = button.parentElement.parentElement.querySelector('td:nth-child(4)').innerText;
        form.querySelector('#email').value = button.parentElement.parentElement.querySelector('td:nth-child(5)').innerText;
        form.querySelector('#phone').value = button.parentElement.parentElement.querySelector('td:nth-child(6)').innerText;

        // Show the modal
        modal.style.display = 'block';
    });
});

// Show deletion modal when delete button is clicked
deleteButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const id = button.getAttribute('data-id');
        const modal = document.getElementById(`delete-modal-${id}`);

        // Set the form action
        modal.querySelector('form').action = `?delete_user&id=${id}`;

        // Show the modal
        modal.style.display = 'block';
    });
});

// Close the modals when clicking outside or pressing Esc
document.addEventListener('click', (e) => {
    modals.forEach((modal) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
});

document.addEventListener('keydown', (e) => {
    modals.forEach((modal) => {
        if (e.key === 'Escape') {
            modal.style.display = 'none';
        }
    });
});
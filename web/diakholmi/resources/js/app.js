import './bootstrap';

// Student Delete Modal
const StudentDeleteModal = document.getElementById('deleteModal')
if (StudentDeleteModal) {
    StudentDeleteModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-studentname')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalName = document.getElementById("studentname")
    const modalBodyInput = StudentDeleteModal.querySelector('.modal-body input')

    modalName.textContent = `${recipient}`
    modalBodyInput.value = recipient;
  })
}

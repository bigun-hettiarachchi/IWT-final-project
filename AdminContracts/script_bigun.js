function redirectToUpdateForm(id) {
  window.location.href = "edit_contract.php?id=" + id;
}

function deleteContract(id) {
  if (confirm("Are you sure you want to delete this contract?")) {
    window.location.href = "delete_contract.php?id=" + id;
  }
}

const btnAddStudent = document.querySelector('.add-student');
const dialogAddStudent = document.querySelector('#dialog-add-student');
const formAddStudent = document.querySelector('#form-add-student');

btnAddStudent.addEventListener('click', () => {
  dialogAddStudent.classList.toggle('open');
})

document.addEventListener('click', (event) => {

  console.log(event.target)
  if (dialogAddStudent.classList.contains('open') && !btnAddStudent.contains(event.target) &&  !formAddStudent.contains(event.target)) {
    dialogAddStudent.classList.toggle('open');
  }
});
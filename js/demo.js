window.onload = function() {
  document.querySelector('#sample1').addEventListener('click', sample1)
}

function sample1() {
  swal.withForm({
      title: 'Iniciar Sesión',
      showCancelButton: true,
      confirmButtonColor: '#F44336',
      confirmButtonText: 'Enviar',
      closeOnConfirm: true,
      formFields: [
          { id: 'email', placeholder:'Email' },
          { id: 'password', placeholder:'Contraseña' }
      ]
  }, function(isConfirm) {
      // do whatever you want with the form data
      console.log(this.swalForm); // { name: 'user name', nickname: 'what the user sends' }
  })
}
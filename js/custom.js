$(function(){
  $('#loginForm').on('submit',function(e){
    if($('#email').val()==''||$('#password').val()==''){
      e.preventDefault();
      alert('Completa todos los campos');
    }
  });
  $('#regForm').on('submit',function(e){
    if($('#nombre').val()==''||$('#email').val()==''||$('#password').val()==''){
      e.preventDefault();
      alert('Completa todos los campos');
    }
  });
  $('#contactForm').on('submit',function(e){
    if($('#nombre').val()==''||$('#correo').val()==''||$('#mensaje').val()==''){
      e.preventDefault();
      alert('Completa el formulario');
    }
  });
});

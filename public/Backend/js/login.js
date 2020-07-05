$(document).ready(function(){
  $('#btn-login').on('click', function(e){
     e.preventDefault();
    var email = $("input[name=email]").val();
    var password = $("input[name=password]").val();
    var _token = $("input[name=_token]").val();
    $.ajax({
      url:'/panel/login',
      method:'POST',
      dataType:'JSON',
      data:{
        email : email,
        password : password,
        _token: _token,
      },
      success:function(data){
        if(data.error){
          Swal({
            title: 'Kesalahan Input Data',
            text:data.error,
            type:'error'
          })
        }else{
          Swal({
            title: data.success,
            text:'Silahkan Tunggu, Halaman Segera dialihkan',
            type:'success'
          }).then(function(){
            window.location.href = '/admin';
          })
        }
      }
    })

  });
});
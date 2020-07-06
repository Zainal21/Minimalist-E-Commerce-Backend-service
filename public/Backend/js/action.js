$(document).ready(function(){
  // ajax setup
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });


  // save data
  function savedata(_BaseUrl,data, redirect){
    $.ajax({
      url:_BaseUrl,
      data:data,
      dataType:'JSON',
      method:'POST',
      success: function(data){
          if(data.error){
            Swal({
              title: 'Kesalahan Input Data',
              text:data.error,
              type:'error'
            })
          }else{
            Swal({
              title: 'Berhasil !',
              text:data.success,
              type:'success'
            }).then(function(){
              window.location.href = redirect;
            })
          }
      }
    });
  }


  function deletedata(_url, redirect){
    Swal({
      title:'Apakah Anda Yakin?',
      text:'Data ini akan dihapus',
      type:'warning',
      showCancelButton: true,
      confirmButtonColor: 'red',
      cancelButtonColor:'$d33',
      confirmButtonText:'hapus Data'
    }).then((result)=>{
        if(result.value){
          $.ajax({
            url : _url,
            method:'GET',
            success:function(data){
              Swal({
                title: 'Berhasil',
                text:data.success,
                type:'success',
              }).then(()=>{
                  window.location.href = redirect
              });
            }
          });
        }
      })
    }
  
  
    

function DataIMG(_base, FData) {
  $.ajax({
    url:_base,
    method:'POST',
    data:FData,
    contentType:false,
    processData:false,
    dataType:'JSON',
    success:function(data) {
      if(data.error){
        Swal({
          title:'Kesalahan Input Data',
          text:data.error,
          type:'error'
        })
      }else{
        Swal({
          title:'Berhasil',
          text:data.success,
          type:'success'
        }).then(function(){
          setTimeout(() => {
              window.location.reload();
          }, 2000);
        })
      }
    }
  })
}
    

// produk

$('#FProduk').on('submit', function(e){
  e.preventDefault();
  if($('#btn-produk').val() == "Simpan"){
    var data = $(this).serialize();
    savedata('/admin/product/create', data, '/admin/product')
  }
})


$('#FProduk').on('submit', function(e){
  e.preventDefault();
  if($('.btn-produk').val() == "Ubah"){
    var data = $(this).serialize();
    var id = $(this).attr('id');
    savedata('/admin/product/update/' + id, data, '/admin/product')
  }
});



$('.btn-produk-hapus').on('click', function(e){
  e.preventDefault();
  var id = $(this).attr('id');
  deletedata('/admin/product/delete/' + id,'/admin/product')
});






















});
















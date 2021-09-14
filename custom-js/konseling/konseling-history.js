$(function () {
    $("#example1").DataTable();
    var successMessage = $('#success-trigger').val();
    var dangerMessage = $('#danger-trigger').val();
    var warningMessage = $('#warning-trigger').val();

    if (successMessage){
      toastr.success(successMessage,'',{ "progressBar": true });
    }

    if (dangerMessage){
      toastr.error(dangerMessage,'',{ "progressBar": true });
    }

    if (warningMessage){
      Toast.fire({
        type: 'error',
        title: warningMessage,
        progressBar : true
      })
    }
  });

  function uploadResi(){
    var id = event.target.value;
    $('#uploadresi-modal').modal('show');
    $('#idbookingrs').val(id);
  }

  function isiFormKonseling(){
    var id = event.target.value;
    $('#formkonseling-modal').modal('show');
    $('#idbooking2').val(id);
  }

  function gantiJadwal(){
    var id = event.target.value;
    $('#reupload-modal').modal('show');
    $('#idx').val(id);
  }
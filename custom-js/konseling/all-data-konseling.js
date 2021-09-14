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


    function inputHasilDiagnosa(){
      var id = event.target.value;
      $('#isiHasilKonsultasi-modal').modal('show');
      $('#idkonsul').val(id);
    }
  
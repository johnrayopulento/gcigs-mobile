$('.btnSubmit').click(function(){
    var formValues = $("#form-serialize").serialize();
  //      console.log(formValues)

    var apiUrl = "http://localhost/gc-igs-thesis/admin/api/";
    $.ajax({
        method: "post",
        url: apiUrl+"saveBilling.php",
        data : formValues,
        success: function(result){
         console.log(result)
        },
       error:function (xhr, status, error){
              alert( "status=" + xhr.responseText + ", error=" + status + ", error=" + error );
          }
      });

});
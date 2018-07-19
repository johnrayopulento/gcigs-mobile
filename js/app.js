var userUrl = "http://localhost/gc-igs-thesis/";

var adminrUrl = "http://localhost/gc-igs-thesis/admin/";

var apiUrl = "https://gordoncollegeigs.000webhostapp.com/admin/api/";

//var apiUrl = "https://johnrayopulento.000webhostapp.com/gc-igs-thesis-mob/admin/api/";



$(document).ready(function () {

    getStudentInfo()

});



function getStudentInfo(){

    var studentno = localStorage.getItem("adminuser");

    console.log(studentno);

    $.ajax({
        method: "get",
        
        url: apiUrl+"getStudentById.php?studentno=" + studentno ,
        
        dataType: "json",

        success: function (result) {
             console.log(result);

            for (i=0; i < result.length; i++){

                $('.profile-usertitle-name').html(result[i].fname + " " + result[i].lname)

            }
                $('.studentno').text(result[0].student_no)
                $('.studno').val(result[0].student_no)
                $('.studentname').text(result[0].lname +", " + result[0].fname + " "+ result[0].mname )
                $('.studentcourse').text(result[0].degree)
                $('.studentst').text(result[0].scholarship)


                $('.fname').val(result[0].fname);
                $('.mname').val(result[0].mname);
                $('.lname').val(result[0].lname);
                $('.address').val(result[0].address);
                $('.tel').val(result[0].contact);


        },

        error: function (xhr, status, error) {

            alert("status=" + xhr.responseText + ", error=" + status + ", error=" + error);

        }

    });

}

function getBillingDetails(snum){

    var studentno;

   

        studentno = snum != undefined ? localStorage.getItem("adminuser") : snum; 

console.log(snum)

        $.ajax({

        url: apiUrl+"getBillingById.php?studentno="+studentno,
        method: "get",
        dataType: "json",

        success: function(result){

            var data = " ";

            var dec = ".00";

            for (i=0; i < result.length; i++){

                $('.td-tuition').html(result[0].tuition_fee +dec)

                $('.td-lab').html(result[0].lab_fee +dec)

                $('.td-lab').html(result[0].registration_fee +dec)



            }

           

          },

       error:function (xhr, status, error){

              alert( "status=" + xhr.responseText + ", error=" + status + ", error=" + error );

          }

      });





}

function getPaymentDetails(){

    var studentno = localStorage.getItem("adminuser");

    $.ajax({

        url: apiUrl+"getPaymentDetails.php?studentno="+studentno,
        method: "get",
        dataType: "json",

        success: function(result){

            var data = " ";

            var dec = ".00";

            for (i=0; i < result.length; i++){

                $('.td-orno').html(result[0].or_no )

                $('.td-amountpaid').html(result[0].amount +dec)

          



            }

           

          },

       error:function (xhr, status, error){

              alert( "status=" + xhr.responseText + ", error=" + status + ", error=" + error );

          }

      });





}

function showStudentInfo(){
    $('.display-student-info').hide()
}








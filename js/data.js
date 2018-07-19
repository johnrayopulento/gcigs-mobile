
var apiUrl = "https://gordoncollegeigs.000webhostapp.com/admin/api/";
//var apiUrl = "http://localhost/gc-igs-thesis-mob/gc-igs-thesis-mob/admin/api/";

var student_no = localStorage.getItem("adminuser");

               




function getStudentInfo(student_no){

    $.ajax({
        method: "get",

        url: apiUrl+"getStudentById.php?studentno="+student_no+"",

        dataType: "json",

        success: function(result){
            
            if(result.length != 0){

                localStorage.setItem("studentinfo",student_no)


                $('.studentno').text(student_no)

                $('.studno').val(result[0].student_no)

                $('.studentname').text(result[0].lname +", " + result[0].fname + " "+ result[0].mname )

                $('.studentcourse').text(result[0].degree)

                $('.studentst').text(result[0].scholarship)

                $('.profile-usertitle-name').text(result[0].lname +", " + result[0].fname)


                $('.fname').val(result[0].fname);

                $('.mname').val(result[0].mname);

                $('.lname').val(result[0].lname);

                $('.email').val(result[0].email);

                $('.address').val(result[0].address);
                
                $('.degree').val(result[0].degree);

                $('.tel').val(result[0].contact);

                $('.scholarship').val(result[0].scholarship);


                $('.sched').show();


                

                getChecklist(result[0].degree);
            }            

        },

        error:function (xhr, status, error){

            alert( "status=" + xhr.responseText + ", error=" + status + ", error=" + error );

        }

    });

}


function getPreviousBalance(studentno){
    $.ajax({

        method: "get",

        url: "api/getBalance.php?studentno="+studentno,

        dataType: "json",

        success: function(result){

            console.log(result)

        }
    });
}

function getBillingDetails(studentno,sem){
    getPreviousBalance(studentno);


    $.ajax({

        method: "get",

        url: apiUrl+"getBillingById.php?studentno="+studentno+"&sem="+sem,

        dataType: "json",

        success: function(result){

            console.log(result)

            

            var data = " ";

            var dec = ".00";

            if(result.length != 0){

                

                $.each(result, function(k,v){

                    localStorage.setItem("billing_id",v.id)

                    localStorage.setItem("pay_total",v.total_fee)

                    

                    $('.tuition').val(v.tuition_fee)

                    $('.misc').val(v.misc_fee)

                    $('.totalfees').text("P " +v.total_fee+ ".00")

                    $('.pay-total').val(v.total_fee)

                    localStorage.setItem("balance",v.total_fee);

                });

                $('.btnSubmit').hide()

                $('.btnUpdate').hide()

            }else{




                    var getUnits = localStorage.getItem("units");

                    if(getUnits != ""){

                        $('.units').val(getUnits);

                    }else{

                        $('.units').val("0");

                    }

                    

           

                $('.misc').val()



                $('#form-payment').hide();

                $('#dataTable2').hide()

                $('.btnSubmit').show()

                $('.btnUpdate').hide()

            }

            

            

        },

        error:function (xhr, status, error){

            alert( "status=" + xhr.responseText + ", error=" + status + ", error=" + error );

        }

    });

    

}





function showPayment(studno,sem){

    $.ajax({
        method: "get",

        url: apiUrl+"getPaymentDetails.php?studentno="+studno+"&sem="+sem,

        dataType: "json",

        success: function(result){

     //       console.log(result)

            var total_paid = 0;

            var balance = localStorage.getItem("balance");

          if(result.length == 0 ){            

              $('.balance').val(0)

          }

           else{

            $(result).each(function (k,v) {

                total_paid += parseInt(v.amount);                                

                var p = balance - total_paid;

             

              $('.balance').val(p)



                if(p == 0){

                 //   $('#form-payment').hide();

                }

                $('#tbody-payment').append("<tr>"+

                "<td class=td-orno>"+v.or_no+"</td>"+

                "<td class=td-amountpaid>"+v.amount+"</td>"+

                "<td class=td-date>"+v.paid_date+"</td>"+

                "<td class=td-balance>"+p+"</td>"+

           
                "</tr>");

                

            });

           }

            var tp  =  parseInt(total_paid) != NaN ? 0 : parseInt(total_paid);                       

            

            var data = " ";

            var dec = ".00";

            

      //      getBillingDetails(studno,sem)

        },  

        error:function (xhr, status, error){

            alert( "status=" + xhr.responseText + ", error=" + status + ", error=" + error );

        }

    });

    

}



function getCourseCode(){

    $.ajax({
        method: "get",

        url: apiUrl+"getCourseCode.php",

        dataType: "json",

        success: function(result){

            console.log(result)

            var opt = "";

            $(result).each(function(k,v){

                opt += "<option value='"+v.course_code+"'>"+v.course_code+"</option>";

            });

            $('.course_code').append(opt)

        },

        error:function (xhr, status, error){

            alert( "status=" + xhr.responseText + ", error=" + status + ", error=" + error );

        }

    });

}



function getUnits(){

    localStorage.setItem("units", "3");

}



function getEformData(studentno,semester){



    $.ajax({

        dataType: "json",

        url: apiUrl+"getSchedule.php",

        data : {studentno : studentno, semester : semester},

        success: function(result){

        //console.log(result)

            var data = "";

            if (result.length != 0) {

            $('#scheduleTable').show()

               

            $( result ).each(function( k,v) {

                    data += "<tr class='eform'>";

                    data += "<td>"+v.code+"</td>";

                    data += "<td>"+v.course_code+"</td>";



                    data += "<td>"+v.sched_day+"</td>";

                    data += "<td>"+v.sched_time+"</td>";

                    data += "<td>"+v.room+"</td>";

                    data += "</tr>";

                    

                    $('.sched-row').html(data);

                    

              });

              

               

            }   

            else{

                $('.sched-row').empty()

            }

        },

        error:function (xhr, status, error){

            alert( "status=" + xhr.responseText + ", error=" + status + ", error=" + error );

        }

    });

    

}

function getStudentById(){

    $.ajax({

        method: "get",

        dataType: "json",

        url: apiUrl + "getStudentById.php?studentno=" + student_no,

        success: function (result) {

            degree = result[0].degree;

            //  console.log(degree)

        },

        error: function (xhr, status, error) {

            alert("status=" + xhr.responseText + ", error=" + status + ", error=" + error);

        }

    });

    

}

function printRep(response){
    $('.print-sched').hide();
    $('#form-payment').hide();

    $('.datasss').show();

    $('.update-grade').hide();
     $('.input-grade').hide();
     $('.select-remarks').hide();
     $('.span-grade').show();

     if($('.srem').text() == "undefined"){

        $('.srem').text("");
     }

    var printContents = document.getElementById(response).innerHTML;
    var originalContents = document.body.innerHTML;
    var temp = "";
    //temp += "<center><h1>SAMPLE CODE</h1></center>";
    document.body.innerHTML = printContents;
    document.body.innerHTML = temp + printContents;
    window.print()
    document.body.innerHTML = originalContents;
    
}

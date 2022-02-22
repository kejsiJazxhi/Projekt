
   $("#butsave").on('click',function(){
      var brand = $('#full_name').val();
      var type = $('#email').val();
      var production_year = $('#salary').val();
      var engine = $('#working_date').val();
      var fuel = $('#role').val();
      var km_done = $('#statuss').val();
      if( full_name !="" && email !="" && salary !="" && working_date !=""&& role !="" && statuss !=""){
         $.ajax({
            url: "" ,
            type: "POST",
            data:{
                thename:full_name,
                theemail:email,
                thesalary: salary,
                thedate: working_date,
                therole: role,
                thestatus: statuss,
                theprice: price,
            },
            cache: false,
            success: function(dataResult){
               var dataResult = JSON.parse(dataResult);
               if(dataResult.statusCode == 200 ){
                  alert("Te dhenat u shtuan me sukses")
               }else if(dataResult.statusCode == 201){
                  alert("Ka nje problem ne shtim");
               }
            }
         });
      }else{
         alert("Ju lutem mbushni te gjitha fushat !!!") ;
      }

   })





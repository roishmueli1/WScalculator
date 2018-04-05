$(document).ready(function(){
    $("button").click(function(){
        
        var num1 = $('#n1').val();
        var num2 = $('#n2').val();
        var num3 = $('#n3').val();
        var func=$('input[name=func]:checked').val();
        var methodType = $("input[name='methodType']:checked").val();

        switch(methodType){

            case "GET":
            $.get("http://shenkar.html5-book.co.il/2017-2018/dcs/dev_37/service_calculator/getPostPut.php?num1="+num1+"&num2="+num2+"&num3="+num3+"&func="+func,
                function( data ){

                  $(".result").append(data.retVal);
                  console.log( "Return data: " + data.retVal); });
                    break;

            case "POST":
            $.post("http://shenkar.html5-book.co.il/2017-2018/dcs/dev_37/service_calculator/getPostPut.php/",
                {func:func ,num1:num1,num2:num2,num3:num3},
                function( data ){

              $(".result").append(data.retVal);
              console.log( "Return data: " + data.retVal); });
            break;

            case "PUT":
            var dataObj = {'func': func, 'num1':num1, 'num2':num2, 'num3':num3};
            $.ajax({
                url: "http://shenkar.html5-book.co.il/2017-2018/dcs/dev_37/service_calculator//getPostPut.php/",
                data:dataObj,
                type: 'PUT',
                success: function( data ){

                    $(".result").append(data.retVal);
                    console.log( "Return data: " + data.retVal);
                }
            });

        }
    });
});
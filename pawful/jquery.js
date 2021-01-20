$(document).ready(function(){
        $("#futureButton").click(function()
        {
            if ( $('#future').css('display') == 'none') {
        $("#future").show();
        $("#current").hide();
        $("#past").hide();
        $("#futureButton").css({"background-color": "#76b45d"});
        $("#currentButton").css({"background-color": "#e2e2e2"});
        $("#pastButton").css({"background-color": "#e2e2e2"});

    }
        else {

        }
        })

        
    });

  
    $(document).ready(function(){
        $("#currentButton").click(function()
        {
            if ( $('#current').css('display') == 'none') {
        $("#current").show();
        $("#future").hide();
        $("#past").hide();
        $("#currentButton").css({"background-color": "#76b45d"});
        $("#futureButton").css({"background-color": "#e2e2e2"});
        $("#pastButton").css({"background-color": "#e2e2e2"});


    }
        else {

        }
        })

        
    });

    $(document).ready(function(){
        $("#pastButton").click(function()
        {
            if ( $('#past').css('display') == 'none') {
        $("#current").hide();
        $("#future").hide();
        $("#past").show();
        $("#pastButton").css({"background-color": "#76b45d"});
        $("#futureButton").css({"background-color": "#e2e2e2"});
        $("#currentButton").css({"background-color": "#e2e2e2"});
    }
        else {

        }
        })

        
    });
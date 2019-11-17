
      $(document).ready(function() 
      {

      $('#login').click(function()
      {
        var cedula=$("#cedula").val();

        if($.trim(username).length>0 )
          {
            $.ajax({
            type: "POST",
            url: "app/getUser.php",
            data: cedula,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
              if(data)
                {
                    $("body").load("app/Tarea.php").hide().fadeIn(1500).delay(6000);
                    //or
                    window.location.href = "app/Tarea.php";
                }
              else
              {
                  alert("Ingrese una cedula valida");
              }
            }
          });

        }
      return false;
      });

    });
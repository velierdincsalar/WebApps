<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $.ajax({url: "test",
                    type: 'POST',
                    success: function(result){
                        $("#div1").html(result);
                    }});
            });
        });
    </script>
    <title>@yield('title')</title>
</head>
<body>
@yield('content')
</body>
</html>
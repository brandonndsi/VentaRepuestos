<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Page</title>
    </head>
    <body>
        <% //session.invalidate();
           session=request.getSession();
           session.removeAttribute("usuario");
           session.invalidate();
       %>
       
       <jsp:forward page="/Welcome.do"/>
    </body>
</html>


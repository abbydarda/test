<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<?php 
?>
<body>
    <a href="http://localhost:8000/api">HOME API</a>
    <a href="http://localhost:8000/home/web">HOME WEB</a>
    <h2 id="title"></h2>
    <p id="user"></p>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script>
    $.ajax({
     type: "GET",
     url: 'http://localhost:8000/home/api',
     success: function(response){
         $("#title").html(response.title);
         let user = response.user;
         user = user.map(item => {
             return `${item.id} - ${item.name} `
         });
         
         $("#user").html(user);

     }
});
</script>
</html>
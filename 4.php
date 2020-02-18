<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Tutorial</title>
</head>
<body>
    <?php 
    include('navigation.php');
    ?>
    <h2>2 Way Data Binding</h2>
    <div id="root">
    <input type="text" v-model="fruit">
    <br>
    {{ fruit }}
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>

    <script>
       var v = new Vue({
           el: '#root',
           data:{
               fruit:'mango'
           },
       });
    </script>
</body>
</html>
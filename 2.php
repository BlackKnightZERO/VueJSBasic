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
    <h2>V-Bind</h2>

    <div id="d1">
    <h2 v-bind:title='messege'>Come Here</h2>

    </div>
    <div id="d2">
    <h2 v-bind:title='local'>good bye</h2>

    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>

    <script>
        new Vue({
            el:'#d1',
            data:{
                messege: `time is ${new Date()}` 
            }
        
        })
        new Vue({
            el:'#d2',
            data:{
                local: `time is ${new Date().toLocaleString()}` 
            }
        
        })
    </script>
</body>
</html>
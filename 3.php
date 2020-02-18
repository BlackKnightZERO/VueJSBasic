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
    <h2>V-If</h2>
    <div id="root">

    <h3 v-if="show">Learn New</h3>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>

    <script>
        var app = new Vue({
            el: '#root',
            data:{
                show:true
            }
        })
    </script>
</body>
</html>
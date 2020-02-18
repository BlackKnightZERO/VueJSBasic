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
    <h2>Attr & Class Binding</h2>
    <div id="root">
    <ul>
        <li>
        <a :href="fruit.image" :title="fruit.color">{{ fruit.name }}</a>
        </li>
        <li>
        <a :href="vegetable.image" :title="vegetable.color">{{ vegetable.name }}</a>
        </li>
    </ul>
    </div>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>

    <script>
       var v = new Vue({
           el: '#root',
           data:{
            fruit:{
                name:"mango",
                color:"green",
                image:"http://ayon.com",
            },
            vegetable:{
                name:"cabage",
                color:"teal",
                image:"http://ayon2.com",
            },
           },
       });
    </script>
</body>
</html>
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
    <h2>For Loop With Condition</h2>
    <div id="root">
    <ul>
        <li v-for="(value,i) in learn" v-if="value.topics>1">
            {{ i+1 }}
            .
            {{ value.name }}
            -
            {{ value.topics }}
        </li>
    </ul>
    <span v-if="name2">Arif</span>
    <span v-else>Faysal</span>
    </div>
    
    <div id="d2">
    <span v-if="name">Faysal</span>
    <span v-else>Arif</span>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>

    <script>
       var v = new Vue({
           el: '#root',
           data:{
            learn:[
                {name:'php',topics:6},
                {name:'bootstrap',topics:4},
                {name:'laravel',topics:3},
                {name:'jquery',topics:2},
                {name:'vue',topics:1},
                {name:'JWT',topics:8},
            ],
            name2:true
           },
       });

       var v2 = new Vue({
        el:'#d2',
        data:{
            name:true
        }
       });
    </script>
</body>
</html>
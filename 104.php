<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js"></script>
    <style>
    .active{
        background: #ccc;
        color:#FFFFFF;
        padding:5px;
    }
    </style>
</head>
<body>
<?php 
    include('navigation.php');
    ?>
    <h3>Filter</h3>
    
    <div id="root">
    <h4>To Upper/Lower Case</h4>
    <p>{{ upperCaseName }}</p>
    <h4>Local Filters</h4>
    <p>{{ profession | lower }}</p>
    <h4>Glocal Filters</h4>
    <p>{{ name | upperG }}</p>
        
    <p> <i> {{ today }} </i> </p>
    <p> <i> {{ today | bdDateFormat }} </i> </p>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
    //global filter
    Vue.filter("upperG", function(s){
        return s.toUpperCase();
    })

        var app = new Vue({
            el: '#root',
            data:{
                name: "Arif Faysal",
                profession: "Software Engineer",
                today: new Date(),
            },
            methods:{
                
            },
            computed:{
                upperCaseName:function(){
                    return this.name.toUpperCase();
                }
            },
            filters:{ //local filter
                lower: function(f){
                    return f.toLowerCase();
                },
                bdDateFormat: function(d){
                    return d.getUTCDate()+"-"+(d.getUTCMonth()+1)+"-"+d.getUTCFullYear();
                }
            },
           
        });
    </script>
</body>
</html>
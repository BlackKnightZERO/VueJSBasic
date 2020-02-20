<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="108style.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js"></script>
    <style type="text/css">
        .foo{
            background: #ACE371;
            text-align: center;
            width: 950px;
            margin: 43px auto;
            min-height:220px;
        }
        .bar-enter-active, .bar-leave-active{
            /* transition: opacity 1s; */
            /* transition: margin-top 1s; */
            transition: transform 1s;

        }
        .bar-enter, .bar-leave-to{
            /* opacity:0; */
            /* margin-top:-555px; */
            transform: rotate(-180deg);
        }
        /* .fade-enter{
            margin-top:-555px;
        }
        .fade-leave-to{
            margin-top:555px;
        } */
    </style>
</head>
<body>
<?php 
    include('navigation.php');
    ?>
    <h3>Transition Animation</h3>
    
    <div id="root">
        <button @click="show = !show">Toggle</button>

        <transition name="bar">
        <div class="foo" v-show="show">
            <h1>Hello World!</h1>
        </div>
        </transition>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script>
        var app = new Vue({
            el: '#root',
            data:{
               show:false
            },       
        });
    </script>
</body>
</html>
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
    <h2>Show Element</h2>
    <div id="learn">
    {{ learn }}
    </div>
    <div id="hunter">
    {{ subscribe }}
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>

    <script>
        new Vue({
            el: '#hunter',
            data:{
                subscribe: 'please subscribe!'
            }
        }),
        new Vue({
            el: '#learn',
            data:{
                learn: 'Here To Teach Vue'
            }
        })
    </script>
</body>
</html>
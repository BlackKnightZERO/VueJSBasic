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
        .bar-enter-active, .bar-leave-active{
            transition:  margin-left 0.6s;
        }
        .bar-enter, .bar-leave-to{
            margin-left: -222px;
        }
    </style>
</head>
<body>
<?php 
    include('navigation.php');
    ?>
    <h3>Transition Animation</h3>
    <div id="root">
    <h4>Skills</h4>
    <hr>
        <input type="text" v-model="newSkill">
        
        <button v-on:click="addNewSkill()">Add</button>
        <ul>
            <transition-group name="bar">
                <li v-for="(skill,i) in skills" :key="i">
                    <p>{{ skill }} <button @click="removeSkill(i)">X</button></p>
                </li>
            </transition-group>
        </ul>
    </div>
    
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script>
       var app = new Vue({
            el: '#root',
            data:{
                skills : [
                    "HTML5", "CSS3", "JavaScript"
                ],
                newSkill: "",
            },
            methods:{
                addNewSkill(){
                    if(this.newSkill!=''){
                    this.skills.push(this.newSkill);
                    this.newSkill='';
                    }
                },
                removeSkill(i){
                    this.skills.splice(i,1);
                },
            },
        });
    </script>
</body>
</html>
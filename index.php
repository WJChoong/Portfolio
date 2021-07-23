<DOCTYPE HTML>
<html lang="en">
<head>
    <?php
    require "head.php";
    ?>
   <style>
        body{
            /*background-image: url('https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'); */
            /*the background image is taken from unsplash website*/
            background-size: 100%;
        }
        img{
            max-width: 50%;
            max-height: 100%;
            display: block;
        }
        strong{
            font-family: "Brush Script MT", cursive;
            font-size: 1.5rem;
        }
        h1,
        h2,
        h5,
        h3{
            font-family: 'Lobster', cursive; 
            font-weight: normal; 
            color:  #E2E5DE;
            line-height: 48px; 
            margin: 0 0 18px; 
            text-shadow: 1px 0 0 #000;
        }
        li{
            margin-right: 5px;
            font-size: 1.3rem;
        }
        #myVideo{
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
    </style>
</head>
    
<body>
    <?php require "navbar.php"; ?>
    <!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.html"><strong>CHOONG WEI JIE</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </div>
    </nav> -->
    <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="index.html"><strong>CHOONG WEI JIE</strong></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </nav> -->
    <br>
    <div class="card-body" style="margin-top: 20px;">
        <div class="card-body row">
            <div class="col-md-6 col-lg-4 col-xl-9" id="intro">
                <h1>Hello,<br></h1>
                <h2> Allow me to have a brief introduction</h2>
                <h3>{{pos}}</h3>
                <h5>
                    {{descript01}}
                    <br>
                    {{descript02}}
                </h5>
            </div>
              
        </div>
        <br>
    </div>    
    <script>
        const app = new Vue({
            el: "#intro",
            data:{
                intro:{
                    msg: "hello", 
                }
            },
            computed:{
                pos:{
                    get:function(){
                        return "2nd year IT student";
                    }
                },
                descript01:{
                    get:function(){
                        return "Passionate about codings and building a software."
                    }
                },
                descript02:{
                    get:function(){
                        return "Currently, I'm working on building websites."
                    }
                }
            }
        })
    </script>
</body>
</html>
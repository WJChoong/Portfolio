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
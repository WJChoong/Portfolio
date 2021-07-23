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
<?php require "navbar.php"; ?>
<body>
    <div class="row">
        <div class="card-body">
            <div class="card ">
                <div class="card-header collapsed card-link"
                    data-toggle="collapse"
                    data-target="#collapseOne">
                    Webs
                </div>
                <div id="collapseOne"
                    class="collapse"
                    data-parent="#accordion">
                    <div class="card-body">
                        Person
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header collapsed card-link"
                    data-toggle="collapse"
                    data-target="#collapseTwo">
                    Java Projects
                </div>
                <div id="collapseTwo"
                    class="collapse"
                    data-parent="#accordion">
                    <div class="card-body">
                        The Java Projects that I had done
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header collapsed card-link"
                    data-toggle="collapse"
                    data-target="#collapseThree">
                    AI Projects
                </div>
                <div id="collapseThree"
                    class="collapse"
                    data-parent="#accordion">
                    <div class="card-body">
                        The AI projects that I had done
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</body>
</html>
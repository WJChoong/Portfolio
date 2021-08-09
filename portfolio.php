<html lang="en">
<head>
    <?php require "head.php";?>
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
        #myVideo {
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
    <div class="row justify-content-center">
        <div class="col-8 col-md-6 px-3">
            <div class="card col-md-8">
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
            <div class="card col-md-8">
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
            <div class="card col-md-8">
                <div class="card-header collapsed card-link"
                    data-toggle="collapse"
                    data-target="#collapseThree">
                    AI Projects
                </div>
                <div id="collapseThree"
                    class="collapse "
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
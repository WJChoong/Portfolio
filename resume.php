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
        .card{
            color: rgba(0, 0, 0, 0.5)
        }
        fieldset {
            background-color: white;
            border-radius: 4px white;
        }
        legend {
            border: 1px solid black;
            border-radius: 10px;
            color: var(--purple);
            font-size: 17px;
            font-weight: bold;
            padding: 3px 5px 3px 7px;
            width: auto;
        }
        span{
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
        }
        #title{
            font-size:1.5rem;
        }
        #space{
            margin-bottom: 1rem;
        }
        #category{
            margin: 1rem;
        }
    </style>
</head>
<?php require "navbar.php"; ?>
<body style="margin-top: 90px;">
    <div class="row justify-content-center" id="category">
        <fieldset class="col-8 col-md-8 px-3 bg-dark">
            <legend class="bg-dark text-light h3">Education</legend>
            <div class="table-dark" id="space">
                <div class="row" style="padding: 1rem;">
                    <div class="col-md-9">
                        <span class="font-weight-bold" id="title">Asia Pacific University(APU)</span>
                        <br>
                        <span>Diploma in ICT Specialism in Software Engineering</span>
                        <br>
                    </div>
                    <div class="col-md-3 font-weight-light text-warning">
                        <span id="duration">May 2019 - September 2021</span>
                    </div>
                </div>
            </div>
            <div class="table-dark">
                <div class="row" style="padding: 1rem; margin-bottom: 1rem;">
                    <div class="col-md-9">
                        <span class=" font-weight-bold" id="title">Poi Lam High School</span>
                        <br>
                        <span>IGSCE(Science Stream)</span>
                    </div>
                    <div class="col-md-3 font-weight-light text-warning">
                        <span>January 2014 - November 2018</span>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="row justify-content-center" id="category">
        <fieldset class="col-8 col-md-8 px-3 bg-dark">
            <legend class="bg-dark text-light h3">Work Experience</legend>
            <div class="table-dark" id="space">
                <div class="row" style="padding: 1rem;">
                    <div class="col-md-9">
                        <span class="font-weight-bold" id="title">Junior Technical Assistant</span>
                        <br>
                        <span>Asia Pacific University(APU)</span>
                    </div>
                    <div class="col-md-3 font-weight-light text-warning">
                        <span>December 2019 - Present</span>
                    </div>
                </div>
            </div>
            <div class="table-dark" id="space">
                <div class="row" style="padding: 1rem;">
                    <div class="col-md-9">
                        <span class=" font-weight-bold" id="title">Junior Event Marshal</span>
                        <br>
                        <span>Archery Atag Malaysia(ATAG)</span>
                    </div>
                    <div class="col-md-3 font-weight-light text-warning">
                        <span>July 2019 - Present</span>
                    </div>
                </div>
            </div>
            <div class="table-dark">
                <div class="row" style="padding: 1rem; margin-bottom: 1rem;">
                    <div class="col-md-9">
                        <span class="font-weight-bold" id="title">Web Developer Intern</span>
                        <br>
                        <span>Blue Ocean IT Sdn. Bhd.</span>
                    </div>
                    <div class="col-md-3 font-weight-light text-warning">
                        <span>1st July 2021 - 26th August 2021</span>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="row justify-content-center" id="category">
        <fieldset class="col-8 col-md-8 px-3 bg-dark">
            <legend class="bg-dark text-light h3">Work Experience</legend>
            <div class="table-dark" id="space">
                <div class="row" style="padding: 1rem;">
                    <div class="col-md-9">
                        <span class="font-weight-bold" id="title">Junior Technical Assistant</span>
                        <br>
                        <span>Asia Pacific University(APU)</span>
                    </div>
                    <div class="col-md-3 font-weight-light text-warning">
                        <span>December 2019 - Present</span>
                    </div>
                </div>
            </div>
            <div class="table-dark" id="space">
                <div class="row" style="padding: 1rem;">
                    <div class="col-md-9">
                        <span class=" font-weight-bold" id="title">Junior Event Marshal</span>
                        <br>
                        <span>Archery Atag Malaysia(ATAG)</span>
                    </div>
                    <div class="col-md-3 font-weight-light text-warning">
                        <span>July 2019 - Present</span>
                    </div>
                </div>
            </div>
            <div class="table-dark">
                <div class="row" style="padding: 1rem; margin-bottom: 1rem;">
                    <div class="col-md-9">
                        <span class="font-weight-bold" id="title">Web Developer Intern</span>
                        <br>
                        <span>Blue Ocean IT Sdn. Bhd.</span>
                    </div>
                    <div class="col-md-3 font-weight-light text-warning">
                        <span>1st July 2021 - 26th August 2021</span>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="row justify-content-center" id="category">
        <fieldset class="col-8 col-md-8 px-3 bg-dark">
            <legend class="bg-dark text-light h3">Skills</legend>
        </fieldset>
    </div>
    <div class="row justify-content-center" id="category">
        <fieldset class="col-8 col-md-8 px-3 bg-dark">
            <legend class="bg-dark text-light h3">Language</legend>
        </fieldset>
    </div>
</body>
</html>
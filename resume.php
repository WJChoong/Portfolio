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
            background-color: rgba(0,0,0, 0.5);
            border-radius: 4px;
        }

        legend {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
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
    </style>
</head>
<?php require "navbar.php"; ?>
<body style="margin-top: 90px;">
    <div class="row justify-content-center">
        <fieldset class="col-8 col-md-8 px-3 bg-dark">
            <legend class="bg-muted">Education</legend>
            <div class="table-dark">
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
            <!-- <table class="table table-dark">
                <thead>
                    <tr class="row">
                        <th class="col-md-8 ml-3">
                            Asia Pacific University
                            <br>
                            <span>Diploma in ICT Specialism in Software Engineering</span>
                        </th>
                        <th class="col-md-4 ml-3">May 2019 - September 2021</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row">
                        <th class="col-md-8 ml-3">
                            Poi Lam High School
                            <br>
                            <span>IGSCE(Science Stream)</span>
                        </th>
                        <th class="col-md-4 ml-3">January 2014 - November 2018</th>
                    <tr>
                </tbody>
            </table> -->
        </fieldset>
    </div>
    <br>
    <br>
    <div class="row justify-content-center">
        <fieldset class="col-8 col-md-8 px-3 bg-dark">
            <legend class="bg-muted">Work Experience</legend>
            <div class="table-dark">
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
            <div class="table-dark">
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
                        <span>Blue Ocean IT</span>
                    </div>
                    <div class="col-md-3 font-weight-light text-warning">
                        <span>1st July 2021 - 26th August 2021</span>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</body>
</html>
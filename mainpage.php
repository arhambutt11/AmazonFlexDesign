<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/mainpage.css" rel="stylesheet">


</head>

<body>


    <section>
        <div class="mainheader">
            <div class="container">
                <div class="mainheaderdata">
                    <div class="headericon">
                        <a href="mainpage.php"><img src="images/icon-33.png"
                                class="img-responsive">
                            <p>Home</p>
                        </a>
                    </div>
                    <div class="headericon">
                        <a href="aboutus.php"><img src="images/icon-34.png"
                                class="img-responsive">
                            <p>About</p>
                        </a>
                    </div>
                    <div class="headericon">
                        <a href="privicypolicy.php"><img src="images/icon-35.png"
                                class="img-responsive">
                            <p>Policy</p>
                        </a>
                    </div>
                    <div class="headericon">
                        <a href="contactus.php"><img src="images/icon-36.png"
                                class="img-responsive">
                            <p>Contact</p>
                        </a>
                    </div>
                    <div class="headericon">
                        <a href="login.php"><img src="images/icon-37.png"
                                class="img-responsive">
                            <p>Logout</p>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="maindata">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="numberclcik">
                            <input type="text" class="mynumber" placeholder="+92 308 272 889"></input>
                            <input type="text" class="mynumber" placeholder="System Active : Not Running"></input>
                        </div>
                        <div class="grayback">
                            <p>10/05/2020 7:57:25PM | Bot Initiated </p>
                            <p>10/05/2020 7:57:25PM | Ignd | DLT 1 | 10/07 5:30PM - 8:30PM | $54 </p>
                            <p>10/05/2020 7:57:25PM | Ignd | DLT 1 | 10/07 8:30PM - 12:30PM | $54 </p>
                            <p>10/05/2020 7:57:25PM | Ignd | DLT 1 | 10/07 12:30PM - 2:30AM | $54 </p>
                            <p>10/05/2020 7:57:25PM | Bot Stopped. User Terminated Session </p>
                        </div>
                        <div class="threeclick">
                            <button type="button" class="btn btn-primary smallclick">Auto</button>
                            <button type="button" class="btn btn-primary smallclick">Standard</button>
                            <button type="button" class="btn btn-primary smallclick">Advanced</button>
                        </div>
                        <div class="settingclick">
                            <button type="button" class="btn btn-primary setting filter_settings_btn">Filter
                                Settings</button>
                        </div>
                        <div id="filter_settings" class="filter_settings" style="display: none;">

                            <button type="button" class="btn btn-primary setting weekdays_btn">Week Days</button>

                            <div class="days">
                                <p>S</p>
                                <p>M</p>
                                <p>T</p>
                                <p>W</p>
                                <p>T</p>
                                <p>F</p>
                                <p>S</p>
                            </div>
                            <div class="station">
                                <input type="text" class="loopdataa" placeholder="Station Filters"></input><span
                                    class="siggn plus">+</span>
                            </div>
                            <div class="fkp">
                                <input type="text" class="loopdatafk" placeholder="FFKP"></input><span
                                    class="on">On</span>
                            </div>
                            <div class="sliderdata">
                                <div style="width:100%;height:150px;overflow:scroll;padding:5px;">
                                    <p>Charlotte Uptown - (C123) Whole Foods</p>
                                    <p>Charlotte Waverly - (C187) Whole Foods</p>
                                    <p> <span class="textblue">Huntersville - (C236) Whole Foods</span></p>
                                    <p>Charlotte - (DLT1) AMZL</p>
                                    <p>Concord - (DLT3) Amazon.com</p>
                                    <p>Charlotte - (UNC3) Fresh</p>
                                </div>
                            </div>
                            <div class="fkp">
                                <input type="text" class="loopdatafk"></input><span class="on">OF</span>
                            </div>
                            <div class="manualclick">
                                <span class="zonei">Offer Start Time</span><button type="button"
                                    class="btn btn-primary highiy">06:00</button>
                                <span class="zoney">AM</span>
                            </div>
                            <div class="manualclick">
                                <span class="zonei">Offer End Time</span><button type="button"
                                    class="btn btn-primary highy">11:00</button>
                                <span class="zoney">PM</span>
                            </div>
                            <div class="manualclick">
                                <span class="zone">Min</span><button type="button"
                                    class="btn btn-primary high">30</button>
                                <span class="zonee">Time</span><button type="button"
                                    class="btn btn-primary high">30</button>
                            </div>
                            <div class="manualclick">
                                <span class="zone">Min</span><button type="button"
                                    class="btn btn-primary high">01</button>
                                <span class="zone">Max</span><button type="button"
                                    class="btn btn-primary high">04</button>
                            </div>
                            <div class="maxclick">
                                <input type="text" class="max" placeholder="Max Accepted Offers"></input>
                                <input type="text" class="max" placeholder=""></input>
                            </div>


                        </div>



                        <div class="loopclick">
                            <button type="button" class="btn btn-primary loop hour_btn">Hour Loop</button>
                        </div>
                    </div>
                </div>

                <div id="hour_div" class="hour_div">
                    <div class="row looparea">
                        <div class="col-sm-4">
                            <input type="text" class="loopdata" placeholder="MM:SS"></input>
                            <input type="text" class="loopdata" placeholder="Speed"></input><span
                                class="siggn plus">+</span>
                            <input type="text" class="loopdata" placeholder="59:59"></input>
                            <input type="text" class="loopdata" placeholder="5/s"></input><span class="siggn">-</span>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="loopdata" placeholder="00:03"></input>
                            <input type="text" class="loopdata" placeholder="1/s"></input><span class="siggn">-</span>
                            <input type="text" class="loopdata" placeholder="02:00"></input>
                            <input type="text" class="loopdata" placeholder="0.25/s"></input><span
                                class="siggn">-</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="requestclick">
                            <button type="button" class="btn btn-primary request request_btn">Request
                                Calculator</button>
                        </div>
                        <div id="request_div" class="request_div">
                            <div class="hourclick">
                                <button type="button" class="btn btn-primary hour">Requests Per Hour</button>
                                <input type="text" class="hours" placeholder="1007"></input>
                            </div>
                        </div>

                        <div class="manualclick">
                            <button type="button" class="btn btn-primary manual manual_btn">Mannual</button>
                            <button type="button" class="btn btn-primary manual shedule_btn">Schedule</button>
                        </div>
                        <div id="manual_div" class="manual_div">

                            <div class="timeclick">
                                <input type="text" class="time" placeholder="10:02:39 AM"></input>
                            </div>
                            <div class="manualclick">
                                <button type="button" class="btn btn-primary manual">DURATION</button>
                                <span class="zone">MIN</span><input type="text" class="manualy"
                                    placeholder="25"></input>
                            </div>
                            <div class="barline">
                                <!-- <h4 class="white">SPEED</h4>
                            <h4 class="grayes">SLOW</h4>
                            <h4 class="blue">MEDIUM</h4>
                            <h4 class="grayes">FAST</h4> -->
                                <button type="white" class="btn btn-primary manual">SPEED</button>
                                <button type="grayes" class="btn btn-primary manual">SLOW</button>
                                <button type="blue" class="btn btn-primary manual">MEDIUM</button>
                                <button type="grayes" class="btn btn-primary manual">FAST</button>
                            </div>


                        </div>

                        <div id="shedule_div" class="shedule_div">
                            <div class="timeclick">
                                <button type="button" class="btn btn-primary time">Schedule Start</button>
                            </div>
                            <div class="manualclick">
                                <span class="zony">AM</span><input type="text" class="manuale"
                                    placeholder="04:30"></input>
                                <span class="zony">PM</span><input type="text" class="manualyy"
                                    placeholder="09:24"></input>
                            </div>
                        </div>
                        <div class="lastgreenclick">
                            <button type="button" class="btn btn-primary green">Start Programmed Run</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script type="text/javascript">


$(document).ready(function() {
    $('.filter_settings').hide();
    $('.shedule_div').hide();
    $('.hour_div').hide();
    $('.request_div').hide();
    $('.manual_div').hide();
    });



    $('.filter_settings_btn').on('click', function() {

        $('.filter_settings').toggle();
    });


    $('.manual_btn').on('click', function() {

        $('.manual_div').toggle();
        $('.shedule_div').hide();
    });


    $('.shedule_btn').on('click', function() {

        $('.shedule_div').toggle();
        $('.manual_div').hide();

    });

    $('.hour_btn').on('click', function() {

        $('.hour_div').toggle();
    });

    $('.request_btn').on('click', function() {

        $('.request_div').toggle();
    });
    </script>


</body>

</html>
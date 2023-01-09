// The data/time we want to countdown to
var counterDate = new Date("Jun 30, 2022 12:00:00").getTime();

 // Run myfunc every second
var myfunc = setInterval(function() {
 
    var now = new Date().getTime();
    var timeleft = now - counterDate;
         
    // Calculating the days, hours, minutes and seconds left
    var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);


    // Concatting from "1" to "01"
    var seconds_str = "";
    var minutes_str = "";
    var hours_str = "";

    if (hours < 10) {
        hours_str = "0" + hours;
    }
    else {
        hours_str = hours;
    }

    if (minutes < 10) {
        minutes_str = "0" + minutes;
    }
    else {
        minutes_str = minutes;
    }

    if (seconds < 10) {
        seconds_str = "0" + seconds;
    }
    else {
        seconds_str = seconds;
    }
         
    // Result is output to the specific element
    document.getElementById("days").innerHTML = days + "d, "
    document.getElementById("hours").innerHTML = hours + "h, " 
    document.getElementById("mins").innerHTML = minutes + "m, " 
    document.getElementById("secs").innerHTML = seconds_str + "s" 
         
}, 1000);
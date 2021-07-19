function displayCalendar(DateVariable){


    var htmlContent ="";
    var FebNumberOfDays ="";
    var counter = 1;


    var dateNow = DateVariable;
    var month = dateNow.getMonth();
    var day = dateNow.getDate();
    var year = dateNow.getFullYear();

    var nextMonth = month+1;
    var prevMonth = month -1;

    var currentMonthIndex = month + 1;



    //Determing if February (28,or 29)
    if (month == 1){
        if ( (year%100!=0) && (year%4==0) || (year%400==0)){
            FebNumberOfDays = 29;
        }else{
            FebNumberOfDays = 28;
        }
    }


    // names of months and week days.
    var monthNames = ["Styczeń","Luty","Marzec","Kwiecień","Maj","Czerwiec","Lipiec","Sierpień","Wrzesień","Październik","Listopad", "Grudzień"];
    // var monthNamesForHours =["Styczenia","Lutego","Marca","Kwietnia","Maja","Czerwca","Lipca","Sierpnia","Września","Października","Listopada", "Grudnia"];
    // var dayNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];
    var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"];


    // days in previous month and next one , and day of week.
    var nextDate = new Date(nextMonth +' 1 ,'+year);
    var weekdays= nextDate.getDay() -1 ;
    var weekdays2 = weekdays;
    var numOfDays = dayPerMonth[month];



    // this leave a white space for days of pervious month.
    while (weekdays>0){
        htmlContent += "<td class='monthPre'></td>";

        weekdays--;
    }

    // loop to build the calendar body.
    while (counter <= numOfDays){

        // When to start new line.
        if (weekdays2 > 6){
            weekdays2 = 0;
            htmlContent += "</tr><tr>";
        }



        // if counter is current day.
        // highlight current day using the CSS defined in header.
        if (counter == day){
            htmlContent +=`<td class='dayNow monthNow dayHover' name="Picked_date" value="${counter +'.'+currentMonthIndex+'.'+year }"  >${counter}  </td>`;
        }else{
            htmlContent +=`<td class='dayNotNow monthNow dayHover' name="Picked_date" value="${counter +'.'+currentMonthIndex+'.'+year }">${counter}</td>`;

        }

        weekdays2++;
        counter++;
    }

    const left = "left";
    const right = "right";

    // building the calendar html body.
    var calendarBody = "<table class='calendar table' id='myTable'> <tr class='monthNow'><th colspan='7'>"
    +`<a class='ArrowLeft' onclick='CalendarSlider(1)'> <i class='fas fa-angle-double-left'></i> </a>`
    +monthNames[month]+" "+ year 
    +`<a class='ArrowRight' onclick='CalendarSlider(2)'><i class='fas fa-angle-double-right'></i></a>`
    +"</th></tr>";
    calendarBody +="<tr class='dayNames'>  <td>Pon</td>  <td>Wt</td> <td>Śr</td>"+
        "<td>Czw</td> <td>Pt</td> <td>Sob</td> <td>Niedz</td> </tr>";
    calendarBody += "<tr>";
    calendarBody += htmlContent;
    calendarBody += "</tr></table>";
    // set the content of div .
    document.getElementById("calendar").innerHTML=calendarBody;
   
    var day_input = document.getElementById("day_input");
    var hour_input = document.getElementById("hour_input");
    

    document.querySelectorAll('#myTable td')
    .forEach(e => e.addEventListener("click", ()=> {
        Picked_date_surr = e.getAttribute('value');
        day_input.setAttribute('value',Picked_date_surr);
    }));


    document.querySelectorAll('#HoursToPick a')
    .forEach(e => e.addEventListener("click", ()=> {
        Picked_date_surr = e.getAttribute('value');
        hour_input.setAttribute('value',Picked_date_surr);
    }));
    

}

// Var defined globaly cause if i define it into a function there is an err => every time function is called
// Variables are defined again and their started value is always the same. 

    var dateNow2 = new Date();
    var CalendarYear = dateNow2.getFullYear();
    var CalendarMonth = dateNow2.getMonth();

function CalendarSlider(side){

    
    if(side == 1){
        if(CalendarMonth != 0){
            CalendarMonth--;
        }else{
            CalendarMonth = 11;
            CalendarYear--;
        }
        
    }

    if(side == 2){
        if(CalendarMonth != 11){
            CalendarMonth++;
        }else{
            CalendarMonth = 0;
            CalendarYear++;
        }
    }

    console.log(CalendarYear);
    console.log(CalendarMonth);

    displayCalendar(new Date(CalendarYear, CalendarMonth));
}
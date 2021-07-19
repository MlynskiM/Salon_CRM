function Choosen_lashes(){
    let lashes = document.getElementById("lashes");
    lashes.classList.toggle("active");
    

    let lashes_input = document.getElementById("lashes_input");
    if (lashes_input.getAttribute('value') == '0') {
        lashes_input.setAttribute("value", "1");
        console.log("Value property of lashes_input box change to: " + lashes_input.getAttribute('value'))
    }else {
        lashes_input.setAttribute("value", "0");
        console.log("Value property of lashes_input box  change to: " +  lashes_input.getAttribute('value'))
    }

}

function Choosen_nails(){
    let nails = document.getElementById("nails");
    nails.classList.toggle("active");


    let nails_input = document.getElementById("nails_input");
    if (nails_input.getAttribute('value') == '0') {
        nails_input.setAttribute("value", "1");
        console.log("Value property of nails_input box change to: " + nails_input.getAttribute('value'))
    }else {
        nails_input.setAttribute("value", "0");
        console.log("Value property of nails_input box change to: " +  nails_input.getAttribute('value'))
    }
}
function Choosen_eyebrew(){
    let eyebrew = document.getElementById("eyebrew");
    eyebrew.classList.toggle("active");
    
    let eyebrew_input = document.getElementById("eyebrew_input");
    if (eyebrew_input.getAttribute('value') == '0') {
        eyebrew_input.setAttribute("value", "1");
        console.log("Value property of eyebrew_input box change to: " + eyebrew_input.getAttribute('value'))
    }else {
        eyebrew_input.setAttribute("value", "0");
        console.log("Value property of eyebrew_input box change to: " +  eyebrew_input.getAttribute('value'))
    }
}


function Choosen_wax(){
    let wax = document.getElementById("wax");
    wax.classList.toggle("active");

    let wax_input = document.getElementById("wax_input");
    if (wax_input.getAttribute('value') == '0') {
        wax_input.setAttribute("value", "1");
        console.log("Value property of wax_input box change to: " + wax_input.getAttribute('value'))
    }else {
        wax_input.setAttribute("value", "0");
        console.log("Value property of wax_input box change to: " +  wax_input.getAttribute('value'))
    }
}



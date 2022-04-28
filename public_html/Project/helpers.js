function flash(message = "", color = "info") {//UCID: jbq2; IT202-010
    let flash = document.getElementById("flash");
    //create a div (or whatever wrapper we want)
    let outerDiv = document.createElement("div");
    outerDiv.className = "row justify-content-center";
    let innerDiv = document.createElement("div");

    //apply the CSS (these are bootstrap classes which we'll learn later)
    innerDiv.className = `alert alert-${color}`;
    //set the content
    innerDiv.innerText = message;

    outerDiv.appendChild(innerDiv);
    //add the element to the DOM (if we don't it merely exists in memory)
    flash.appendChild(outerDiv);
}

function flash (message = "", color = "info") {
    let flash = document.getElementById("flash");
    //create a div (or whatever wrapper we want)
    let outerDiv = document.createElement("div");
    outerDiv.className = "row justify-content-center";
    let innerDiv = document.createElement("div");

    //apply the CSS (these are bootstrap classes which we'll learn later)
    innerDiv.className = `alert alert-${color}`;
    //set the content
    innerDiv.innerText = message;

    outerDiv.appendChild(innerDiv);
    //add the element to the DOM (if we don't it merely exists in memory)
    flash.appendChild(outerDiv);
    clear_flashes();
}
let flash_timeout = null;
function clear_flashes () {
    let flash = document.getElementById("flash");
    if (!flash_timeout && flash) {
        flash_timeout = setTimeout(() => {
            console.log("removing");
            if (flash.children.length > 0) {
                flash.children[0].remove();
            }
            flash_timeout = null;
            if (flash.children.length > 0) {
                clear_flashes();
            }
        }, 3000);
    }
}
window.addEventListener("load", () => setTimeout(clear_flashes, 100));
function isValidUsername (username) {
    const pattern = /^[a-z0-9_-]{3,16}$/;
    return pattern.test(username);
}

function isValidEmail(email){
    if(!/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(email)){
        return false;
    }
    return true;
}

function isValidUsername(username){
    if(!/^[a-z0-9_-]{3,16}$/.test(username)){
        return false;
    }
    return true;
}

function isValidPassword(password){
    if(String(password).length < 8){
        return false;
    }
    return true;
}

function isMatchingPasswords(p1, p2){
    if(p1 !== p2){
        return false;
    }
    return true;
}


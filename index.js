function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

window.addEventListener("load", async function(){
    await sleep(Math.floor(Math.random() * 3000)+1000);
    document.getElementById("loader").style.opacity = 0;
    
    await sleep(700);
    document.getElementById("loader").style.display = "none";
    document.getElementById("intro").classList.add("animating");
    document.getElementById("name").classList.add("animating");
    document.getElementById("icons").classList.add("animating");
    document.getElementById("bio").classList.add("animating");
    document.getElementById("Loader").classList.add("animating");
});

function preloadImages(array) {
    if (!preloadImages.list) {
        preloadImages.list = [];
    }
    var list = preloadImages.list;
    for (var i = 0; i < array.length; i++) {
        var img = new Image();
        img.onload = function() {
            var index = list.indexOf(this);
            if (index !== -1) {
                list.splice(index, 1);
            }
        }
        list.push(img);
        img.src = 'images/'+array[i];
    }
}

preloadImages(['val_bg.jpg'])

function home(tab) {
    if (tab === "home") {
        return
    } else {
        
    }
}

document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    document.getElementById('age').innerText = age('2007/08/04');

    if (getCookie('mode') != null) {
        darkmode(document.title)
    }

    const options = {
        eventType: 'keydown',
        keystrokeDelay: 1000
    };

    keyMapper([Reveal], options);
});

function keyMapper(callbackList, options) {
    const eventType = options && options.eventType;
    const keystrokeDelay = options && options.keystrokeDelay;

    let state = {
        buffer: [],
        lastKeyTime: Date.now()
    };

    document.addEventListener(eventType, event => {
        const key = event.key;
        const currentTime = Date.now();
        let buffer = [];

        if (currentTime - state.lastKeyTime > keystrokeDelay) {
            buffer = [key];
        } else {
            buffer = [...state.buffer, key];
        }

        state = {buffer: buffer, lastKeyTime: currentTime};

        callbackList.forEach(callback => callback(buffer));
    });
}

function Reveal(keySequence) {
    const userInput = keySequence.join('').toLowerCase();
    if (userInput.includes("/dark")) {
        darkmode(document.title)
        setCookie('mode', 'dark', 1)
    }
    else if (userInput.includes("/white")) {
        whitemode(document.title)
        eraseCookie('mode')
    }
}

function age(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}
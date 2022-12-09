let date = new Date();
let procent = Math.floor(Math.random() * (100 - 1)) + 1;
let currency = '$';
let amount = "0,00";
let coma = false;
let afterComa = 0;
let volumeType = ".sound";
let previousSound = 2, previousMusic = 5, previousNotification = 9, previousTouch = 7, previousMuteNotification = 9, previousMuteTouch = 7;
let muted = false;
let volumebarTime = 0;
const audio = {
  ".sound": new Audio("https://zgrajsie.com/codepen/smartphone/audio/sound.m4a"),
  ".notification": new Audio("https://zgrajsie.com/codepen/smartphone/audio/notification.m4a"),
  ".touch": new Audio("https://zgrajsie.com/codepen/smartphone/audio/touch.m4a"),
  ".music": new Audio("https://zgrajsie.com/codepen/smartphone/audio/music.m4a")
};

function mute() {
  muted = true;
  document.querySelector(".notification").style.opacity = ".5";
  document.querySelector(".notification").style.background = "var(--volumebar-nonotification)";
  document.querySelector(".notification").style.backgroundSize = "1em 1em";
  document.querySelector(".notification").onclick = null;
  document.querySelector(".touch").style.opacity = ".5";
  document.querySelector(".touch").style.background = "var(--volumebar-notouch)";
  document.querySelector(".touch").style.backgroundSize = "1em 1em";
  document.querySelector(".touch").onclick = null;
  document.querySelector(".n").disabled = true;
  document.querySelector(".t").disabled = true;
  previousMuteNotification = document.querySelector(".n").value;
  document.querySelector(".n").value = 0;
  previousMuteTouch = document.querySelector(".t").value;
  document.querySelector(".t").value = 0;
}

function unmute() {
  muted = false;
  document.querySelector(".notification").style.opacity = "1";
  document.querySelector(".notification").onclick = notificationOnClick;
  document.querySelector(".touch").style.opacity = "1";
  document.querySelector(".touch").onclick = touchOnClick;
  document.querySelector(".n").disabled = false;
  document.querySelector(".t").disabled = false;
  document.querySelector(".n").value = previousMuteNotification;
  document.querySelector(".t").value = previousMuteTouch;
  document.querySelector(".notification").style.background = ( document.querySelector(".n").value == 0 ? "var(--volumebar-nonotification)" : "var(--volumebar-notification)" );
  document.querySelector(".touch").style.background = ( document.querySelector(".t").value == 0 ? "var(--volumebar-notouch)" : "var(--volumebar-touch)" );
  document.querySelector(".notification").style.backgroundSize = "1em 1em";
  document.querySelector(".touch").style.backgroundSize = "1em 1em";
}

function notificationOnClick() {
  volumeType = ".notification";
  if( document.querySelector(".n").value == 0 ) {
    document.querySelector(".n").value = previousNotification;
    document.querySelector(".notification").style.background = "var(--volumebar-notification)";
    document.querySelector(".notification").style.backgroundSize = "1em 1em";
  } else {
    document.querySelector(".n").value = 0;
    document.querySelector(".notification").style.background = "var(--volumebar-nonotification)";
    document.querySelector(".notification").style.backgroundSize = "1em 1em";
  }
  volumebarTime = 0;
}

function touchOnClick() {
  volumeType = ".touch";
  if( document.querySelector(".t").value == 0 ) {
    document.querySelector(".t").value = previousTouch;
    document.querySelector(".touch").style.background = "var(--volumebar-touch)";
    document.querySelector(".touch").style.backgroundSize = "1em 1em";
  } else {
    document.querySelector(".t").value = 0;
    document.querySelector(".touch").style.background = "var(--volumebar-notouch)";
    document.querySelector(".touch").style.backgroundSize = "1em 1em";
  }
  volumebarTime = 0;
}

let timer = setInterval(function(){
  date = new Date();
  document.querySelector(".time").innerText = date.toTimeString().slice(0,5);
}, 1000);
function procentTimer() {
  procent++;
  document.querySelector(".procent").innerText = procent + '%';
  
  if( procent < 100 ) {
    setTimeout(procentTimer, Math.floor(Math.random() * (procent*10000 - procent*1000)) + procent*1000);
  }
};
let volumebarTimer = setInterval(function() {
  volumebarTime += 100;
  if( volumebarTime >= 3000 ) {
    document.querySelector(".volumebar").style.transform = "scale(1,0)";
    document.querySelector(".volumebar").style.height = "3em";
    document.querySelector(".moresound").style.display = "none";
    document.querySelector(".expandsound").style.transform = "";
    volumeType = ".sound";
  }
}, 100);

function updateAmount() {
  document.querySelector(".amount").innerHTML = `<p>${currency}</p>${amount}`;
  document.querySelector(".amount p").onclick = function() {
    document.querySelector(".currency").style.transform = "scale(1,1)";
    audio['.touch'].currentTime = 0;
    audio['.touch'].volume = document.querySelector(".t").value / 12;
    audio['.touch'].play();
  }
}

updateAmount();
procentTimer();
if( document.querySelector(".s").value == 0 ) {
  document.querySelector(".sound").style.background = "var(--volumebar-nosound)";
  document.querySelector(".sound").style.backgroundSize = "1em 1em";
} else {
  document.querySelector(".sound").style.background = "var(--volumebar-sound)";
  document.querySelector(".sound").style.backgroundSize = "1em 1em";
}
if( document.querySelector(".n").value == 0 ) {
  document.querySelector(".notification").style.background = "var(--volumebar-nonotification)";
  document.querySelector(".notification").style.backgroundSize = "1em 1em";
} else {
  document.querySelector(".notification").style.background = "var(--volumebar-notification)";
  document.querySelector(".notification").style.backgroundSize = "1em 1em";
}
if( document.querySelector(".t").value == 0 ) {
  document.querySelector(".touch").style.background = "var(--volumebar-notouch)";
  document.querySelector(".touch").style.backgroundSize = "1em 1em";
} else {
  document.querySelector(".touch").style.background = "var(--volumebar-touch)";
  document.querySelector(".touch").style.backgroundSize = "1em 1em";
}
if( document.querySelector(".m").value == 0 ) {
  document.querySelector(".music").style.background = "var(--volumebar-nomusic)";
  document.querySelector(".music").style.backgroundSize = "1em 1em";
} else {
  document.querySelector(".music").style.background = "var(--volumebar-music)";
  document.querySelector(".music").style.backgroundSize = "1em 1em";
}

document.querySelector(".time").innerText = date.toTimeString().slice(0,5);
document.querySelector(".procent").innerText = procent + '%';

document.querySelectorAll(".currency p").forEach( function(element) {
  element.onclick = function() {
    currency = this.id;
    updateAmount();
    document.querySelector(".currency").style.transform = "scale(0,0)";
    audio['.touch'].currentTime = 0;
    audio['.touch'].volume = document.querySelector(".t").value / 12;
    audio['.touch'].play();
  };
});

let keyboard = document.querySelectorAll(".keyboard div p");
keyboard.forEach( function(element) {
  element.onclick = function() {
    audio['.touch'].currentTime = 0;
    audio['.touch'].volume = document.querySelector(".t").value / 12;
    audio['.touch'].play();
    if( this.innerText == ',' ) {
      coma = true;
      return;
    }
    if( amount.slice(0,1) == 0 && !coma ) {
      amount = this.innerText + amount.slice(1,amount.length);
    } else if ( amount.slice(0,1) != 0 && !coma && amount.slice(0, amount.indexOf(',') < 13) ) {
      amount = amount.slice(0,amount.indexOf(',')) + this.innerText + amount.slice(amount.indexOf(','), amount.length);
    } else if ( coma && afterComa < 2 ) {
      amount = amount.slice(0, amount.indexOf(',')+1+afterComa) + this.innerText + (afterComa == 0 ? 0 : '' );
      afterComa++;
    }
    updateAmount();
  };
});

document.querySelector(".backspace").onclick = function() {
  audio['.touch'].currentTime = 0;
  audio['.touch'].volume = document.querySelector(".t").value / 12;
  audio['.touch'].play();
  if( coma ) {
    if( afterComa == 0 ) {
      coma = false;
      return;
    }
    amount = amount.slice(0, amount.indexOf(',')+afterComa) + (afterComa == 2 ? 0 : '00');
    afterComa--;
  } else if( amount.slice(0,1) != 0 ) {
    amount = amount.slice(0, amount.indexOf(',')-1) + amount.slice(amount.indexOf(','), amount.lenght);
    if( amount.slice(0,1) == ',' ) {
      amount = 0 + amount;
    }
  }
  updateAmount();
};

document.querySelector(".cancel").onclick = function() {
  amount = "0,00";
  updateAmount();
  audio['.touch'].currentTime = 0;
  audio['.touch'].volume = document.querySelector(".t").value / 12;
  audio['.touch'].play();
};

document.querySelector(".undo").onclick = function() {
  amount = "0,00";
  updateAmount();
  audio['.touch'].currentTime = 0;
  audio['.touch'].volume = document.querySelector(".t").value / 12;
  audio['.touch'].play();
};

document.querySelector(".accept").onclick = function() {
  amount = "0,00";
  updateAmount();
  audio['.touch'].currentTime = 0;
  audio['.touch'].volume = document.querySelector(".t").value / 12;
  audio['.touch'].play();
};

document.querySelector(".volumebar").onmouseover = function() {
  volumebarTime = 0;
};

document.querySelector(".volumebar").onmouseout = function() {
  volumebarTime = 2000;
};

document.querySelector(".s").onchange = function() {
  volumeType = ".sound";
  if( this.value == 0 ) {
    document.querySelector(".sound").style.background = "var(--volumebar-nosound)";
    document.querySelector(".sound").style.backgroundSize = "1em 1em";
    mute();
  } else {
    document.querySelector(".sound").style.background = "var(--volumebar-sound)";
    document.querySelector(".sound").style.backgroundSize = "1em 1em";
    previousSound = this.value;
    if( muted ) unmute();
    audio[volumeType].currentTime = 0;
    audio[volumeType].volume = this.value / 12;
    audio[volumeType].play();
  }
  volumebarTime = 0;
};

document.querySelector(".n").onchange = function() {
  volumeType = ".notification";
  if( this.value == 0 ) {
    document.querySelector(".notification").style.background = "var(--volumebar-nonotification)";
    document.querySelector(".notification").style.backgroundSize = "1em 1em";
  } else {
    document.querySelector(".notification").style.background = "var(--volumebar-notification)";
    document.querySelector(".notification").style.backgroundSize = "1em 1em";
    previousNotification = this.value;
    audio[volumeType].currentTime = 0;
    audio[volumeType].volume = this.value / 12;
    audio[volumeType].play();
  }
  volumebarTime = 0;
};

document.querySelector(".t").onchange = function() {
  volumeType = ".touch";
  if( this.value == 0 ) {
    document.querySelector(".touch").style.background = "var(--volumebar-notouch)";
    document.querySelector(".touch").style.backgroundSize = "1em 1em";
  } else {
    document.querySelector(".touch").style.background = "var(--volumebar-touch)";
    document.querySelector(".touch").style.backgroundSize = "1em 1em";
    previousTouch = this.value;
    audio[volumeType].currentTime = 0;
    audio[volumeType].volume = this.value / 12;
    audio[volumeType].play();
  }
  volumebarTime = 0;
};

document.querySelector(".m").onchange = function() {
  volumeType = ".music";
  if( this.value == 0 ) {
    document.querySelector(".music").style.background = "var(--volumebar-nomusic)";
    document.querySelector(".music").style.backgroundSize = "1em 1em";
  } else {
    document.querySelector(".music").style.background = "var(--volumebar-music)";
    document.querySelector(".music").style.backgroundSize = "1em 1em";
    previousMusic = this.value;
    audio[volumeType].currentTime = 0;
    audio[volumeType].volume = this.value / 12;
    audio[volumeType].play();
  }
  volumebarTime = 0;
};

document.querySelector(".up").onclick = function() {
  volumebarTime = 0;
  document.querySelector(".volumebar").style.transform = "scale(1,1)";
  document.querySelector(volumeType.slice(0,2)).value++;
  if( document.querySelector(volumeType.slice(0,2)).value == 0 ) {
    document.querySelector(volumeType).style.background = "var(--volumebar-no" + volumeType.slice(1,volumeType.length) + ")";
    document.querySelector(volumeType).style.backgroundSize = "1em 1em";
  } else {
    document.querySelector(volumeType).style.background = "var(--volumebar-" + volumeType.slice(1,volumeType.length) + ")";
    document.querySelector(volumeType).style.backgroundSize = "1em 1em";
    switch( volumeType ) {
      case ".sound":
        previousSound = document.querySelector(volumeType.slice(0,2)).value;
        if( muted )  unmute();
        break;
      case ".notification":
        previousNotification = document.querySelector(volumeType.slice(0,2)).value;
        break;
      case ".touch":
        previousTouch = document.querySelector(volumeType.slice(0,2)).value;
        break;
      case ".music":
        previousMusic = document.querySelector(volumeType.slice(0,2)).value;
        break;
    }
    audio[volumeType].currentTime = 0;
    audio[volumeType].volume = document.querySelector(volumeType.slice(0,2)).value / 12;
    audio[volumeType].play();
  }
};

document.querySelector(".down").onclick = function() {
  volumebarTime = 0;
  document.querySelector(".volumebar").style.transform = "scale(1,1)";
  document.querySelector(volumeType.slice(0,2)).value--;
  if( document.querySelector(volumeType.slice(0,2)).value == 0 ) {
    document.querySelector(volumeType).style.background = "var(--volumebar-no" + volumeType.slice(1,volumeType.length) + ")";
    document.querySelector(volumeType).style.backgroundSize = "1em 1em";
    if( volumeType == ".sound" ) {
      mute();
    }
  } else {
    document.querySelector(volumeType).style.background = "var(--volumebar-" + volumeType.slice(1,volumeType.length) + ")";
    document.querySelector(volumeType).style.backgroundSize = "1em 1em";
    switch( volumeType ) {
      case ".sound":
        previousSound = document.querySelector(volumeType.slice(0,2)).value;
        break;
      case ".notification":
        previousNotification = document.querySelector(volumeType.slice(0,2)).value;
        break;
      case ".touch":
        previousTouch = document.querySelector(volumeType.slice(0,2)).value;
        break;
      case ".music":
        previousMusic = document.querySelector(volumeType.slice(0,2)).value;
        break;
    }
    audio[volumeType].currentTime = 0;
    audio[volumeType].volume = document.querySelector(volumeType.slice(0,2)).value / 12;
    audio[volumeType].play();
  }
};

document.querySelector(".sound").onclick = function() {
  volumeType = ".sound";
  if( document.querySelector(".s").value == 0 ) {
    document.querySelector(".s").value = previousSound;
    this.style.background = "var(--volumebar-sound)";
    this.style.backgroundSize = "1em 1em";
    unmute();
    audio[volumeType].currentTime = 0;
    audio[volumeType].volume = document.querySelector(volumeType.slice(0,2)).value / 12;
    audio[volumeType].play();
  } else {
    document.querySelector(".s").value = 0;
    this.style.background = "var(--volumebar-nosound)";
    this.style.backgroundSize = "1em 1em";
    mute();
  }
  volumebarTime = 0;
};

document.querySelector(".notification").onclick = function() {
  volumeType = ".notification";
  if( document.querySelector(".n").value == 0 ) {
    document.querySelector(".n").value = previousNotification;
    this.style.background = "var(--volumebar-notification)";
    this.style.backgroundSize = "1em 1em";
    audio[volumeType].currentTime = 0;
    audio[volumeType].volume = document.querySelector(volumeType.slice(0,2)).value / 12;
    audio[volumeType].play();
  } else {
    document.querySelector(".n").value = 0;
    this.style.background = "var(--volumebar-nonotification)";
    this.style.backgroundSize = "1em 1em";
  }
  volumebarTime = 0;
};

document.querySelector(".touch").onclick = function() {
  volumeType = ".touch";
  if( document.querySelector(".t").value == 0 ) {
    document.querySelector(".t").value = previousTouch;
    this.style.background = "var(--volumebar-touch)";
    this.style.backgroundSize = "1em 1em";
    audio[volumeType].currentTime = 0;
    audio[volumeType].volume = document.querySelector(volumeType.slice(0,2)).value / 12;
    audio[volumeType].play();
  } else {
    document.querySelector(".t").value = 0;
    this.style.background = "var(--volumebar-notouch)";
    this.style.backgroundSize = "1em 1em";
  }
  volumebarTime = 0;
};

document.querySelector(".music").onclick = function() {
  volumeType = ".music";
  if( document.querySelector(".m").value == 0 ) {
    document.querySelector(".m").value = previousMusic;
    this.style.background = "var(--volumebar-music)";
    this.style.backgroundSize = "1em 1em";
    audio[volumeType].currentTime = 0;
    audio[volumeType].volume = document.querySelector(volumeType.slice(0,2)).value / 12;
    audio[volumeType].play();
  } else {
    document.querySelector(".m").value = 0;
    this.style.background = "var(--volumebar-nomusic)";
    this.style.backgroundSize = "1em 1em";
  }
  volumebarTime = 0;
};

document.querySelector(".expandsound").onclick = function() {
  if( this.style.transform == "rotate(180deg)" ) {
    document.querySelector(".volumebar").style.height = "3em";
    document.querySelector(".moresound").style.display = "none";
    this.style.transform = "";
  } else {
    document.querySelector(".volumebar").style.height = "12em";
    document.querySelector(".moresound").style.display = "flex";
    this.style.transform = "rotate(180deg)";
  }
  volumebarTime = 0;
}

document.querySelectorAll("label").forEach(function( element ) {
  element.onclick = function() {
    audio['.touch'].currentTime = 0;
    audio['.touch'].volume = document.querySelector(".t").value / 12;
    audio['.touch'].play();
  }
});

document.querySelectorAll("input[type=number]").forEach(function( element ) {
  element.onchange = function() {
    audio['.touch'].currentTime = 0;
    audio['.touch'].volume = document.querySelector(".t").value / 12;
    audio['.touch'].play();
  }
});

let swipeStart = 0, swipeEnd = 0;
let swipe = false;
let layer = document.querySelector(".terminal-content"), layer2 = document.querySelector(".payment-content");

document.querySelector(".terminal-content").onmousedown = function(event) {
  layer = this;
  swipe = true;
  swipeStart = event.clientX;
};

document.querySelector("body").onmouseup = function(event) {
  swipe = false;
  layer.style.transform = "";
};

document.querySelector("body").onmousemove = function(event) {
  let swipeChange = 0
  if( swipe ) {
    if( swipeStart > event.clientX ) {
      swipeChange = swipeStart - event.clientX;
      layer.style.transform = `translateX(-${swipeChange}px)`
    }
  }
};
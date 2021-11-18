$(() => {
    $("#home").show("slide", {
        direction: "left"
    }, 2000)

    $("body").scroll(() => {
        if($("body").scrollTop()) { //abuse 0 == false :)
            $(".navbar").addClass("with_background")
        }
        else {
            $(".navbar").removeClass("with_background")
        }
    })
})

function goTo(form) {
    let pixels = 0
    if(form == "about") {
        pixels = 600
    }
    if(form == "project") {
        pixels = 1200
    }
    if(form == "contact") {
        var body = document.body
        var height = Math.max( body.scrollHeight, body.offsetHeight);
        pixels = height - 600
    }
    if(form == "facebook") {
        window.open("https://www.facebook.com/rolandchristiantoo.regacho/")
        return
    }
    if(form == "twitter") {
        window.open("https://twitter.com/TooOneFor")
        return
    }
    if(form == "clicktitans") {
        window.open("https://github.com/naseGaming/ClickTitans")
        return
    }
    if(form == "gradeportal") {
        window.open("https://github.com/naseGaming/onlineGrading")
        return
    }
    if(form == "pos") {
        window.open("https://1pos.1teqproviders.com.ph/")
        return
    }
    if(form == "notification") {
        window.open("https://github.com/naseGaming/notification-too")
        return
    }
    $('body').animate({
        scrollTop: pixels
    }, 1000);
}

function showDescription(form) {
    const id = form.id

    $("#" + id + "-show").hide()
    $("#" + id + "-hidden").show()
}

function hideDescription(form) {
    const id = form.id

    $("#" + id + "-hidden").hide()
    $("#" + id + "-show").show()
}

function copyElement(data) {
    if(copyToClipboard(document.getElementById(data))) {
        console.log("copied")
    }
    else {
        console.log("copy failed")
    }
}


//copy to clipboard function https://stackoverflow.com/questions/22581345/click-button-copy-to-clipboard/22581382#22581382
function copyToClipboard(elem) {
    // create hidden text element, if it doesn't already exist
  var targetId = "_hiddenCopyText_";
  var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
  var origSelectionStart, origSelectionEnd;
  if (isInput) {
      // can just use the original source element for the selection and copy
      target = elem;
      origSelectionStart = elem.selectionStart;
      origSelectionEnd = elem.selectionEnd;
  } else {
      // must use a temporary form element for the selection and copy
      target = document.getElementById(targetId);
      if (!target) {
          var target = document.createElement("textarea");
          target.style.position = "absolute";
          target.style.left = "-9999px";
          target.style.top = "0";
          target.id = targetId;
          document.body.appendChild(target);
      }
      target.textContent = elem.outerText;
  }
  // select the content
  var currentFocus = document.activeElement;
  target.focus();
  target.setSelectionRange(0, target.value.length);
  
  // copy the selection
  var succeed;
  try {
        succeed = document.execCommand("copy");
  } catch(e) {
      succeed = false;
  }
  // restore original focus
  if (currentFocus && typeof currentFocus.focus === "function") {
      currentFocus.focus();
  }
  
  if (isInput) {
      // restore prior selection
      elem.setSelectionRange(origSelectionStart, origSelectionEnd);
  } else {
      // clear temporary content
      target.textContent = "";
  }
  return succeed;
}
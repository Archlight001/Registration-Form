//
// // Check if an Image has been selected
//
// document.getElementById("submit").addEventListener("click", function(event) {
//   if (document.querySelector(".imagename").innerHTML==="No Image Selected") {
//     alert("Select a profile picture");
//     event.preventDefault();
//   }
// });
//
// document.getElementById("submitmarsh").addEventListener("click", function(event) {
//   if (document.querySelector(".imagename").innerHTML==="No Image Selected") {
//     alert("Select a profile picture");
//     event.preventDefault();
//   }
// });

//Switch between the divs for both the members and the marshalls form
document.querySelector(".onclickmarshall").addEventListener("click", function(){

  document.querySelector(".formembers").style.display="none";
   document.querySelector(".formarshalls").style.display="block";
});

document.querySelector(".onclickmember").addEventListener("click", function(){

  document.querySelector(".formembers").style.display="block";
  document.querySelector(".formarshalls").style.display="none";
});

//Restrict the input in the phone number field to just numbers

setInputFilter(document.querySelector(".numvalidaton"), function(value) {
  return /^\d*$/.test(value)
});
setInputFilter(document.querySelector(".noknumvalidaton"), function(value) {
  return /^\d*$/.test(value)
});
setInputFilter(document.querySelector(".numvalidatonmarsh"), function(value) {
  return /^\d*$/.test(value)
});

function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  });
}

// //Change the paragraph text beside the image selector button to the image name
//
// $("#files").change(function() {
//   filename = this.files[0].name;
//   $(".imagename").text(filename);
// });
// $("#filesmarsh").change(function() {
//   filename = this.files[0].name;
//   $(".imagename").text(filename);
// });

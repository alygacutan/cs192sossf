<!-- 
Code History
v1.0 - Feb 05, 2019 - Initial file - Javascript [Aly Gacutan]

File Creation Date: Feb 05,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for View All Page.
 -->

function search(){
  var input = document.getElementById("search");
} 
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

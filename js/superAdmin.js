function openEvent(evt, eventType) {
  var i, x, tablinks;
  var head=document.getElementById('head');
  x = document.getElementsByClassName("event");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(eventType).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
  var headData =evt.currentTarget.textContent;

  head.innerHTML=headData;
}

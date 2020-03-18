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

function getUrlParameter(name) {
  name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
  var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
  var results = regex.exec(location.search);
  return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}

$(document).ready(function () {
  if (getUrlParameter('tab') === "testimonials") $('#btn').click();
  if (getUrlParameter('tab') === "Activities") $('#btn').click();
  if (getUrlParameter('tab') === "sermon") $('#btn').click();
  if (getUrlParameter('tab') === "castMessage") $('#btn').click();
  if (getUrlParameter('tab') === "Leadership") $('#btn').click();
  if (getUrlParameter('tab') === "semTheme") $('#btn').click();
  if (getUrlParameter('tab') === "Ministry") $('#btn').click();
});

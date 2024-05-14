// const element=document.getElementById("btn");
// element.addEventListener()
function myfunction() {
  const element = document.getElementById("display");
  const inpt = document.getElementById("input");
  const ip_value = inpt.value;
  element.innerHTML =
    "This is my text" + " " + "<span class='style'>" + ip_value + "</span>";
}

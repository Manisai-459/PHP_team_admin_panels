var d = 2;
document.getElementById("addButton2").addEventListener("click", function () {
  event.preventDefault();

    var container = document.getElementById("pr");
    var newInputFieldWrapper = document.createElement("div");
    newInputFieldWrapper.classList.add("prw");

    var newInputField = document.createElement("input");
    newInputField.setAttribute("type", "url");
    newInputField.setAttribute("name", "url"+d);
    newInputField.setAttribute("placeholder", "Place Project URL");
    newInputField.classList.add("inputField");

    newInputField.setAttribute("style", "width: 350px;");
    var cancelButton = document.createElement("button");
    cancelButton.textContent = "Cancel";
    cancelButton.classList.add("cancelButton");

    cancelButton.addEventListener("click", function () {
      event.preventDefault();
      newInputFieldWrapper.remove();
      d--;
      kaka();
    });
    
    newInputFieldWrapper.appendChild(newInputField);
    newInputFieldWrapper.appendChild(cancelButton);
    container.appendChild(newInputFieldWrapper);
    d++;
});
function kaka(){
  var inputFields = pr.querySelectorAll(".prw input");
  console.log(inputFields.length);
  for (var i = 1; i < inputFields.length; i++) {
    inputFields[i].setAttribute("name", "url" + (i + 1));
  }
}
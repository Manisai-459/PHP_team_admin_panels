document.getElementById("addButton2").addEventListener("click", function () {
  event.preventDefault();
    var x = 1;
    var container = document.getElementById("inputContainer");
    var newInputFieldWrapper = document.createElement("div");
    newInputFieldWrapper.classList.add("inputFieldWrapper");

    var newInputField = document.createElement("input");
    newInputField.setAttribute("type", "url");
    newInputField.setAttribute("name", "url" + x);
    newInputField.setAttribute("placeholder", "Place Project URL");
    newInputField.classList.add("inputField");

    var cancelButton = document.createElement("button");
    cancelButton.textContent = "Cancel";
    cancelButton.classList.add("cancelButton");

    cancelButton.addEventListener("click", function () {
      event.preventDefault();
      newInputFieldWrapper.remove();
      x--;
      updateInputName();
    });
    x++;
    newInputFieldWrapper.appendChild(newInputField);
    newInputFieldWrapper.appendChild(cancelButton);
    container.appendChild(newInputFieldWrapper);
});
function updateInputName() {
    var x = 2;
    var inputFields = inputContainer.querySelectorAll('.inputFieldWrapper input');
    for (var i = 0; i < inputFields.length; i++) {
      inputFields[i].setAttribute("name", "url" + x);
      x++;
    }
  }

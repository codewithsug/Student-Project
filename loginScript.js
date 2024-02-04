function submitForm() {
  var form = document.getElementById("loginForm");
  var formData = new FormData(form);

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById("response").innerHTML = xhr.responseText;
    }
  };

  xhr.open("POST", form.action, true);
  xhr.send(formData);
}
  
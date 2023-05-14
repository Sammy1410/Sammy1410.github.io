
function cleanLogs() {
  const xhr2 = new XMLHttpRequest();
  xhr2.onreadystatechange = function() {
    if (xhr2.readyState === 4 && xhr2.status === 200) {
      console.log('Logs cleaned!');
    }
  };
  xhr2.open('POST', '/includes/orders.php');
  xhr2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr2.send('action=clean');
}



function handleSubmit() {
  // prevent the form from submitting normally
  event.preventDefault();

  // get the form data
  const form = document.getElementById("myForm");
  const formData = new FormData(form);

  // send the form data to the server using AJAX
  const xhr = new XMLHttpRequest();

  xhr.open("POST", "process-form.php");
  xhr.send(formData);

  // handle the server's response
  xhr.onreadystatechange = function () {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      // do something with the response, if needed
      console.log(this.responseText);
    }
  };
  
  // clear the form fields
  form.reset();
}

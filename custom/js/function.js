
function submitOrderForm1() {
    //event.preventDefault();
    
    event.preventDefault(); // prevent form submission

    const form = document.getElementById("OrderForm");
    const formData = new FormData(form);
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "/custom/includes/forms.php");
    formData.append('form', 'orderform1');
    xhr.send(formData);
    xhr.onreadystatechange = function () {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        // do something with the response, if needed
            console.log(this.responseText);
        }
    };
    form.reset();
    
}


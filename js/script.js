
const form = document.getElementById("contactForm");
const messageBox = document.getElementById("confirmationMessage");

form.addEventListener("submit", function(e){
    e.preventDefault(); // Prevent actual submission

    // Get the email input value
    const email = form.email.value;

    // Display dynamic confirmation message
    messageBox.textContent = `Votre message a été envoyé. Nous vous enverrons une réponse à ${email}.`;

    // Clear the form fields

    form.reset();
    
    setTimeout(() => { messageBox.textContent = ""; }, 8000);

});


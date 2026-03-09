document.getElementById("contactForm").addEventListener("submit", function(e)
{
    e.preventDefault();
    alert("Votre message a été envoyé avec succès !");
    this.reset();
});
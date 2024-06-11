document
  .getElementById("contact-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    if (this.checkValidity()) {
      alert("Votre message a été envoyé avec succès !");
      this.reset();
      document.getElementById("char-count").textContent =
        "100 caractères restants";
    } else {
      alert("Veuillez remplir tous les champs obligatoires.");
    }
  });

document.getElementById("message").addEventListener("input", function () {
  const maxLength = 100;
  const currentLength = this.value.length;
  const remaining = maxLength - currentLength;
  document.getElementById(
    "char-count"
  ).textContent = `${remaining} caractères maximum`;
});

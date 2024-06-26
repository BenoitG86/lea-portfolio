const password = Number(1234);

const button = document.querySelector('#buttonAdmin');

button.addEventListener('click', function (event) {
      event.preventDefault();
      console.log('cliqué');
      let guessPassword = prompt("Quel est le mot de passe ? Indice : suite de chiffres");
      if (guessPassword == password) {
            window.location.href = "administration/indexAdmin.php";
      } else {
            alert(`${guessPassword} n'était pas le bon mot de passe`);
      }
}
)
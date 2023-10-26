const btnlogout = document.querySelector('#logout-button');
const dialoglogout = document.querySelector('#dialog-logout');
const divlogout = document.querySelector('#div-logout');

btnlogout.addEventListener('click', () => {
  dialoglogout.classList.toggle('open');
})

document.addEventListener('click', (event) => {

  console.log(event.target)
  if (dialoglogout.classList.contains('open') && !btnlogout.contains(event.target) &&  !divlogout.contains(event.target)) {
    dialoglogout.classList.toggle('open');
  }
});

//Tout d'abord, il y a trois lignes qui déclarent des variables : "btnlogout", "dialoglogout" et "divlogout". Ces variables sont utilisées pour stocker des références à des éléments HTML spécifiques sur la page. Par exemple, "btnlogout" fait référence à un bouton avec l'id "logout-button".

//Ensuite, il y a une ligne qui ajoute un écouteur d'événement au bouton "btnlogout". Cela signifie que lorsque le bouton est cliqué, une fonction sera exécutée. Dans ce cas, la fonction fait basculer la classe "open" sur l'élément avec l'id "dialog-logout". La classe "open" est probablement utilisée pour afficher ou masquer une boîte de dialogue de déconnexion.

//Ensuite, il y a une autre ligne qui ajoute un écouteur d'événement à tout le document. Cela signifie que lorsque n'importe quel élément sur la page est cliqué, une fonction sera exécutée. Cette fonction vérifie si la boîte de dialogue de déconnexion a la classe "open" et si le clic ne s'est pas produit sur le bouton de déconnexion ou sur l'élément avec l'id "div-logout". Si ces conditions sont remplies, la classe "open" est basculée sur la boîte de dialogue de déconnexion.

//En résumé, ce script permet d'afficher ou de masquer une boîte de dialogue de déconnexion lorsque le bouton de déconnexion est cliqué. Il masque également la boîte de dialogue si l'utilisateur clique en dehors de celle-ci.
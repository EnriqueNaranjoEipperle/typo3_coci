let ingredients = ['Eier', 'ml Milch',  'TL Salz', 'g geriebener KÃ¤se', 'EL Butter',
'Bund Schnittlauch', 'StÃ¼ck Basilikum'];
let amount = ['6', '300', '1', '80', '1', '1', '1'];



function showrezept() {
document.getElementById('table').innerHTML = '';
for (let i = 0; i < amount.length; i++) {
    document.getElementById('table').innerHTML += 

<p class="deco">${amount[i]} ${ingredients[i]}</p>
;
}
}

function add() {
document.getElementById('table').innerHTML = ""
person = document.getElementById('inputmenge').value;
if (person < 1) {
    alert("bitte mindestens 1 Portion auswÃ¤hlen");
}
if (person > 10) {
    alert("bitte nicht mehr als 10 Portionen auswÃ¤hlen");
}
else {

    for (i = 0; i < amount.length; i++)

            document.getElementById('table').innerHTML += 
            <p class="deco">${amount[i]/4*person} ${ingredients[i]}</p>;

        }

} 
const wej = document.getElementById("szukaj");
const lis = [...document.querySelectorAll(".k")];
const ul= document.getElementById("wyszukaj");
const szukaj = e => {
    const slowot = e.target.value.toUpperCase();
    let wynik = lis;
    wynik=wynik.filter(lis => lis.textContent.toUpperCase().includes(slowot))
    ul.textContent= '';
    wynik.forEach(name => ul.appendChild(name));
}
wej.addEventListener('input', szukaj);

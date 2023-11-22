let lista = document.querySelectorAll(".btn");
let contador = 0;
function nota(idElementoAudio){
    contador = 0
    while (contador < lista.length) {
        const efeito = lista[contador].classList[1];
        const idAudio = "#nota_" + efeito;
        let audio = document.querySelector(idAudio)
        audio.pause()
        audio.correntTime = 0
        contador++
    }
    document.querySelector(idElementoAudio).play()
}



function nota(idElementoAudio){ document.querySelector(idElementoAudio).play(); }
var botoes = document.querySelectorAll(".btn");
var vez = 0;
while (vez< botoes.length){
    const efeito = botoes[vez].classList[1];
    const som = "#nota_"+efeito;
    botoes[vez].onclick = function(){ nota(som) }
vez++ }
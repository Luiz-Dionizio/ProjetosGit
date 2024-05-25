//Declaração das variaveis
const mario = document.querySelector('.mario');
const cano = document.querySelector('.cano');
const nuvem1 = document.querySelector('.nuvem1');
const nuvem2 = document.querySelector('.nuvem2');
const pontos = document.querySelector('.pontuacao');
const telajogo = document.querySelector('.telajogo');
const reiniciar = document.querySelector('.btnReiniciar button');
const pontosTot = document.querySelector('.pontosTot')
const finalCont = document.querySelector('.contador')
let cont = 0;

//Nesse const ocorrera uma atualização no id do mario, onde sera colocado uma classe(definida no CSS) que adicionará um Keyanimation, realizando o pulo do mario
const pular = () => {
    mario.classList.add('pular');
    setTimeout(() => {mario.classList.remove('pular')} , 500);
}

//Aqui começará a pontuação do jogo
function pontuacao(){
    cont++;
    document.getElementById('contador').innerText = cont;
}

//Aqui é a incrementação da pontuação
pontuacaoTot = setInterval(pontuacao, 1000);

const loop = setInterval(() => {

    const PosicaoCano = cano.offsetLeft;
    const PosicaoMario = +window.getComputedStyle(mario).bottom.replace('px', '');

    if(PosicaoCano <= 170 && PosicaoCano > 50 && PosicaoMario < 170 ){
        
        cano.style.animation = 'none';
        cano.style.left = `100px`;

        mario.style.animation = 'none';
        mario.style.bottom = `${PosicaoMario}px`;

        nuvem1.style.animation = 'none';
        nuvem2.style.animation = 'none';
        
        mario.src = '../imagens/mariomorte.png'
        mario.style.width = '75px'
        mario.style.marginLeft = '100px'

        //Quando o jogo acaba, ambos os styles recebem "Visible" e então aparecem na tela
        reiniciar.style.visibility = 'visible'
        pontosTot.style.visibility = 'visible'

        //
        finalCont.style.marginLeft = '600px'
        finalCont.style.marginTop = '272px'
        finalCont.style.fontSize = '40px'

        //Para a pontuação
        clearInterval(pontuacaoTot);

    }

}, 10);

document.addEventListener('keydown', pular);

//Função para reinciar o jogo
function reiniciarJogo() {
    document.getElementById("reiniciar").addEventListener("click", function() {
        alert("O botão foi clicado!");
        window.location.href = "../telaInicial.html"
    });
}


/**
 * if(contador == 500){
        telajogo.style.background = `rgba(0,212,255,1)`
    }

    if(contador == 1000){
        telajogo.style.background = `linear-gradient( rgb(0, 0, 0) 0%, rgb(107, 141, 141) 40%, rgb(153, 205, 247) 100%)`
    }

    if(contador == 1500){
        telajogo.style.background = `black`
    }

    if(contador == 2000){
        telajogo.style.background = `linear-gradient( rgba(0,212,255,1) 0%, rgba(76,237,238,1) 40%, rgba(255,255,255,1) 100%)`
    }

    if(contador == 2500){
        telajogo.style.background = `rgba(0,212,255,1)`
    }

    if(contador == 3000){
        telajogo.style.background = `linear-gradient( rgb(0, 0, 0) 0%, rgb(107, 141, 141) 40%, rgb(153, 205, 247) 100%)`
    }

    if(contador == 3500){
        telajogo.style.background = `black`
    }

    if(contador == 4000){
        telajogo.style.background = `linear-gradient( rgba(0,212,255,1) 0%, rgba(76,237,238,1) 40%, rgba(255,255,255,1) 100%)`
    }

    if(contador == 4500){
        telajogo.style.background = `rgba(0,212,255,1)`
    }

    if(contador == 5000){
        telajogo.style.background = `linear-gradient( rgb(0, 0, 0) 0%, rgb(107, 141, 141) 40%, rgb(153, 205, 247) 100%)`
    }

    if(contador == 5500){
        telajogo.style.background = `black`
    }

    if(contador == 6000){
        telajogo.style.background = `linear-gradient( rgba(0,212,255,1) 0%, rgba(76,237,238,1) 40%, rgba(255,255,255,1) 100%)`
    }
 */
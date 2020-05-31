//Código JavaScript


//Botão Voltar ao rolar a página
window.onscroll = function(){
    rolarPagina();
}
function rolarPagina(){
    let btn = document.getElementById("btnTop");
    if(document.documentElement.scrollTop > 50){
        btn.style.display = "block";
    } else{
        btn.style.display = "none";
    }
}

//Ação do botão voltar ao Clicar
function voltarAoTopo(){
    document.documentElement.scrollTop = 0;
}
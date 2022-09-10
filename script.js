function validaForm() {
    // Atividade Numéro 1
    if(document.getElementsByName("name")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("name")[0].focus();
        return false;
    }
}
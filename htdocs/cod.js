function gravar(){


    $.ajax({
        type: "POST",
        url: "cadastro.php",
        data: {
            "nome": document.getElementById("nome").value,
            "senha": document.getElementById("senha").value,
            "idade": document.getElementById("idade").value,
            "cpf": document.getElementById("cpf").value,
            "telefone": document.getElementById("telefone").value
        },

       
    });
}

$('#formulario').on('submit', function (event) {
    swal.showLoading()
    //event.preventDefault();

    var formData = new FormData(this)

    let nome = $('#nome').val();
    let telefone = $('#telefone').val();
    let celular = $('#celular').val();
    let email = $('#email').val();
    let cep = $('#cep').val();
    let estado = $('#estado').val();
    let cidade = $('#cidade').val();
    let acao = $('#acao').val();
    let setor = $('#setor').val();
    let tentativas = $('#tentativas').val();
    let feedback = $('#feedback').val();
    let captcha = grecaptcha.getResponse();
    //console.log(captcha);

    /**
     * Validações
     */
    if(captcha == '' || captcha == undefined || captcha == null) {
        return swal.fire({
            icon: 'warning',
            text: 'Marque a caixa \"Não sou um robô\", por favor.'
        })
    }

    if(nome == '' || nome == undefined || nome == null) {
        return swal.fire({
            icon: 'warning',
            text: 'Insira seu nome, por favor.'
        })
    }

    if(telefone == '' || telefone == undefined || telefone == null) {
        return swal.fire({
            icon: 'warning',
            text: 'Insira seu número de telefone, por favor.'
        })
    }
    
    if(email == '' || email == undefined || email == null) {
        return swal.fire({
            icon: 'warning',
            text: 'Insira seu e-mail, por favor.'
        })
    }
    
    if(cep == '' || cep == undefined || cep == null) {
        return swal.fire({
            icon: 'warning',
            text: 'Insira seu CEP, por favor.'
        })
    }

    if(estado == '' || estado == undefined || estado == null || cidade == '' || cidade == undefined || cidade == null) {
        return swal.fire({
            icon: 'warning',
            text: 'Por favor, verifique se o seu CEP foi digitado corretamente.'
        })
    }
    
    if(acao == '' || acao == undefined || acao == null) {
        return swal.fire({
            icon: 'warning',
            text: 'Diga-nos o motivo do contato, por favor. Por favor, selecione uma das opções do campo O QUE VOCÊ DESEJA FAZER?'
        })
    }
    
    if(setor == '' || setor == undefined || setor == null) {
        return swal.fire({
            icon: 'warning',
            text: 'Selecione o setor com o qual você gostaria de falar, por favor.'
        })
    }
    
    if(tentativas == '' || tentativas == undefined || tentativas == null) {
        return swal.fire({
            icon: 'warning',
            text: 'Selecione a quantidade de vezes que tentou contato anteriormente, por favor.'
        })
    }
    
    //      ----------------- Validação dos campos radio ----------------
    let arrayOptions = document.getElementsByName('prefere')
    let cont = 0;
    let metodoContato = '';
    for (let i = 0; i < 3; i++) {
        if(arrayOptions[i].checked == true){
            cont++;
            metodoContato = arrayOptions[i].value;
        }
    }
    if(cont == 0) {
        return swal.fire({
            icon: 'warning',
            text: 'Selecione uma das opções de preferência de contato, por favor.'
        })
    } else if (cont > 1) {
        return swal.fire({
            icon: 'warning',
            text: 'Selecione apenas uma das opções de preferência de contato, por favor.'
        })
    }
    //     ----------------------------------------------------------------
    
    if($('#feedback').val() == '') {
        return swal.fire({
            icon: 'warning',
            text: 'Descreva o seu problema para que possamos atender melhor às vossas necessidades, por favor.'
        })
    }
    
    
    formData.set('nome', nome);
    formData.set('telefone', telefone);
    formData.set('celular', celular);
    formData.set('email', email);
    formData.set('cep', cep);
    formData.set('estado', estado);
    formData.set('cidade', cidade);
    formData.set('acao', acao);
    formData.set('setor', setor);
    formData.set('tentativas', tentativas);
    formData.set('prefere', metodoContato);
    formData.set('feedback', feedback);

    /*
    $.ajax({
        url: "/email",
        method: "POST",
        data: formData,
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            console.log(data)
            return swal.fire({ text: 'Sucesso ao envia email', icon: 'success' })
        },
        error: function (data) {
            console.log(data)
            return swal.fire({ text: 'Erro ao envia email', icon: 'error' })
        },
    })
    */
});

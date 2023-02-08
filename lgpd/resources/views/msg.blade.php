@extends('layouts.head_msg')

@section('msg')

    @if ( $id == "ERRO_a" || $id == "ERRO_b" || $id == "ERRO_c" || $id == "ERRO_d" || $id == "ERRO_e" || $id == "ERRO_f" || $id == "ERRO_g" || $id == "ERRO_h" || $id == "ERRO_i" || $id == "ERRO_j" || $id == "ERRO_k")
    @section('title', 'ERRO')
    <div>
        <h1><strong>ERRO!</strong></h1><br/>
        <p>Formulário não foi enviado por falta de informações!</p><br/>
        <p>Por favor, revise seus dados e tenha certeza de preencher todos os campos obrigatórios.</p><br/><br/>
        <button id="back" class="btn btn-success" type="button">Voltar para o formulário</button>
    </div>
    @endif

    @if ( $id == "ERRO_Mr.Robot" )
    @section('title', 'ERRO Mr. Robot')
    <div>
        <h1><strong>ERROR!</strong></h1><br/>
        <p>Sorry to inform you, but your circuits must be faulty.</p><br/>
        <p>Robots are not allowed here.</p><br/><br/>
        <button id="back" class="btn btn-success" type="button">Back to the form</button>
    </div>
    @endif

    @if ( $id == "ERROR" )
    @section('title', 'ERRO!')
    <div>
        <h1><strong>ERRO!</strong></h1><br/>
        <p>Algo deu errado e não foi possível enviar o seu e-mail.</p><br/>
        <p>Verifique seus dados e certifique-se de preencher o formulário corretamente.</p><br/>
        <p>Caso o erro persista, tente novamente em outro momento.</p><br/><br/>
        <button id="back" class="btn btn-success" type="button">Voltar para o formulário</button>
    </div>
    @endif

    @if ( $id == "SEND" )
    @section('title', 'SEND')
    <div>
        <h1><strong>Sucesso!</strong></h1><br/>
        <p>Seus dados foram enviados com sucesso.</p><br/><br/>
        <button id="back" class="btn btn-success" type="button">Retornar para a página do formulário</button>
    </div>
    @endif

    @endsection
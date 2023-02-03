@extends('layouts.head')

@section('title', 'SAC Ten Brasil')

@section('index')
    
    <div class="row container-fluid align-content-around" id="cabecalho">
        <div class="col-2" id="logo">
            <img id="logo" src="img/logo_cabecalho.png" alt="Logo da Ten Brasil">
        </div>
        <div class="col-6 d-flex" id="navegador">
            <nav class="d-flex justify-content-around">
                <a class="col" href="">Planos</a>
                <a class="col" href="">Onde estamos</a>
                <a class="col" href="">Trabalhe conosco</a>
                <a class="col" href="">Área do cliente</a>
            </nav>
        </div>
    </div>

    <div class="row container-fluid justify-content-center align-content-around" id="superior">
        <h2 class="text-center" style="color: white;">SAC</h2>
        <img src="img/call_center.jpg" alt="" id="imgCallCenter">
    </div>

    <div class="row container-fluid" id="conteudo">
        
        <div class="col-12 col-md-6" id="atendimento">

            <div class="row container-fluid" id="canaisAtendimento">
                <h3>Canais de Atendimento</h3>
                <p class="text-justify">
                    Nós da Ten Brasil nos preocupamos com as opiniões dos nossos clientes e nos esforçamos para que você possa ter a melhor experiência possível com os nossos produtos e serviços.
                </p>
                <p class="text-justify">
                    Havendo algum problema, dúvida, contestação, ou apenas queira nos enviar a sua perspectiva da sua experiência conosco, fique à vontade para nos contactar por qualquer uma das opções à seguir.
                </p>
            </div>
            <div class="row container-fluid" id="enderecos">
                <div class="col-12 d-flex justify-content-around" id="contatos">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                            <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                        </svg>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                            <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                            <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row container-fluid">
                <div id="horariosAtendimento">
                
                    <h3>Horários de Atendimento</h3>

                    <div id="horarios">
                        <div id="seg_sex">
                            <h4>Segunda à sexta</h4>
                            <p>8:00H às 20:00H</p>
                        </div>
                        <div id="sab">
                            <h4>Sábado</h4>
                            <p>8:00H às 11:00hs</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 col-md-6" id="containerFormulario">

            <form class="needs-validation" id="formulario" method="POST" action="/email">

                @csrf
                
                <div class="form-row justify-content-center">
                    <div class="col-12 mb-3">
                        <label class="my-1 mr-2" for="nome">Nome Completo:</label><br/>
                        <input value="Áquila Augusto Anhaia Trindade" type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome completo" autocomplete="off"  pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" required />
                    </div>
                </div>
                <div class="form-row justify-content-between">
                    <div class="col-12 col-md-6 mb-3">
                        <label class="my-1 mr-2" for="telefone">Telefone:</label><br/>
                        <input value="(26) 9 9182 - 7468" type="tel" class="form-control" name="telefone" id="telefone" placeholder=" " autocomplete="off" onkeypress="$(this).mask('(00) 9 0000 - 0000')"  pattern="[0-9, (), -]+$" minlength="18" required />
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label class="my-1 mr-2" for="celular">Celular:</label><br/>
                        <input value="(28) 8 7643 - 3654" type="tel" class="form-control" name="celular" id="celular" placeholder=" " onkeypress="$(this).mask('(00) 9 0000 - 0000')" autocomplete="off" pattern="[0-9, (), -]+$" minlength="18" />
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="col-12 mb-3">
                        <label class="my-1 mr-2" for="email">E-mail</label><br/>
                        <input value="aquila.real0@gmail.com" type="email" class="form-control" name="email" id="email" placeholder=" " autocomplete="off" required />
                    </div>
                </div>
                <div class="form-row justify-content-between">
                    <div class="col-8 col-md-4 mb-3">
                        <label class="my-1 mr-2" for="cep">Cep:</label><br/>
                        <input value="85.801-260" class="form-control" name="cep" type="text" id="cep" size="9" placeholder=" " autocomplete="off" onkeypress="$(this).mask('00.000-000')" pattern="[0-9, ., -]+$" minlength="10" onblur="pesquisacep(this.value);" required />
                    </div>
                    <div class="col-4 col-md-2 mb-3">
                        <label class="my-1 mr-2">Estado:</label><br/>
                        <input value="PR" class="form-control" name="estado" type="text" id="estado" size="2" placeholder=" " autocomplete="off" readonly required />
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label class="my-1 mr-2">Cidade:</label><br/>
                        <input value="Cascavel" class="form-control" name="cidade" type="text" id="cidade" size="20" placeholder=" " autocomplete="off" readonly required />
                    </div>
                </div>
                <div class="form-row justify-content-between">
                    <div class="col-12 col-md-6 col-xl-4 mb-3">
                        <label class="my-1 mr-2" for="acao">O que você deseja fazer?</label><br/>
                        <select class="custom-select my-1 mr-sm-2" name="acao" id="acao" autocomplete="off" required >
                            <option></option>
                            <option value="Denúncia">Denúncia</option>
                            <option value="Informação">Informação</option>
                            <option value="Reclamação" selected>Reclamações</option>
                            <option value="Solicitação">Solicitação</option>
                            <option value="Sugestão">Sugestão</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mb-3">
                        <label class="my-1 mr-2" for="setor">Com quem deseja falar?</label><br/>
                        <select class="custom-select my-1 mr-sm-2" name="setor" id="setor" autocomplete="off" required >
                            <option></option>
                            <option value="Comercial">Comercial</option>
                            <option value="Financeiro">Financeiro</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Novos Projetos" selected>Novos Projetos</option>
                            <option value="Recursos Humanos">Recursos Humanos</option>
                            <option value="Suporte">Suporte</option>
                            <option value="TI">TI</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mb-3">
                        <label class="my-1 mr-2" for="tentativas">Quantas vezes você nos procurou?</label><br/>
                        <select class="custom-select my-1 mr-sm-2" name="tentativas" id="tentativas" autocomplete="off" required >
                            <option></option>
                            <option value="1">Esta é a primeira vez</option>
                            <option value="2" selected>Esta é a segunda vez</option>
                            <option value="3">Esta é a terceira vez</option>
                            <option value="n">mais</option>
                        </select minlength>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12 mb-3">
                        <fieldset>
                            <p class="form-check-label">Como gostaria de ser atendido?</p>
                            <div class="container-fluid">
                                <label class="form-check-label"><input class="form-check-input" type="radio" name="prefere" id="pref-tel" value="Telefonar" required >Telefone</label><br/>
                                <label class="form-check-label"><input class="form-check-input" type="radio" name="prefere" id="pref-whatsApp" value="WhatsApp" checked >WhatsApp</label><br/>
                                <label class="form-check-label"><input class="form-check-input" type="radio" name="prefere" id="pref-mail" value="E-mail" >E-mail</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="col-12 mb-3">
                        <label class="my-1 mr-2" for="feedback">Reclamações, sugestões e/ou observações:</label><br/>
                        <textarea class="form-control" name="feedback" id="feedback" type="msg" maxlength="200" rows="5" placeholder=" " autocomplete="off" required >Exemplo de feedback</textarea>
                    </div>
                </div>
                <div class="form-row mb-3 justify-content-center">
                    <div class="col-12">
                        <div class="g-recaptcha" data-sitekey="6Lcsi04kAAAAAFntoxRZQnIAYQk8TtdPz4FLieqO"></div>
                    </div>
                </div>
                <div class="form-row mb-3 justify-content-between">
                    <div class="col-4 mb-3">
                        <button type="reset" value="reset">Limpar Formulário</button>
                    </div>
                    <div class="col-7"></div>
                    <div class="col-1 mb-3">
                        <button id="submit" type="submit" value="submit">Enviar</button>
                    </div>
                </div>
                
            </form>

        </div>

    </div>

    <div class="row container-fluid" id="inferior">
        <div class="row container-fluid" id="importante">

            <h3 class="text-center"><strong>Importante</strong></h3>

            <p class="text-justify">No caso de reclamação, antes de entrar em contato com a Ouvidoria, é necessário que você já tenha buscado solução junto à nossa Central de Relacionamento e tenha aguardado o prazo informado para o atendimento de sua solicitação. Nesse caso, tenha sempre o protocolo de seu atendimento em mãos.</p>

        </div>
        <div class="row container-fluid" id="exigencias">

            <h3 class="text-center"><strong>Exigências</strong></h3>

            <p class="text-justify">A Ten Brasil está de acordo com as exigências e recomentações dos órgãos regulamentadores.</p>

            <div id="defesaConsumidor">
                <a href="">Código de Defesa do Consumidor</a>
            </div>

        </div>
    </div>
    <div class="row container-fluid" id="redesSociais">

        <div class="container-fluid d-flex justify-content-around" id="social">
            <a class="col" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
            </a>
            <a class="col" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
            </a>
            <a class="col" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                </svg>
            </a>
            <a class="col" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
            </a>
            <a class="col" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                </svg>
            </a>
        </div>
        
    </div>

    <div class="row container-fluid d-flex justify-content-around" id="rodape">
        <div class="col" id="institucional">
            <h4 class="tituloRodape">Institucional</h4>
            <div>
                <a href="">Quem somos</a><br/>
                <a href="">Onde estamos</a><br/>
                <a href="">Trabalhe conosco</a><br/>
                <a href="">Seja nosso parceiro</a><br/>
                <a href="">Benefícios extras</a><br/>
                <a href="">Ten Brasil apoia</a>
            </div>
        </div>
        <div class="col" id="atendimento">
            <h4 class="tituloRodape">Atendimento</h4>
            <div>
                <a href="">Área do Cliente</a><br/>
                <a href="">Empresas</a><br/>
                <a href="">Fale Conosco</a><br/>
                <a href="">Ouvidoria</a><br/>
                <a href="">Acessibilidade</a><br/>
                <a href="">Perguntas Frequentes</a><br/>
                <a href="">Formas de Pagamento</a>
            </div>
        </div>
        <div class="col" id="planos e serviços">
            <h4 class="tituloRodape">Planos e Serviços</h4>
            <div>
                <a href=""></a><br/>
                <a href=""></a><br/>
                <a href=""></a><br/>
                <a href=""></a><br/>
                <a href=""></a><br/>
                <a href="">Privacidade e Segurança</a>
            </div>
        </div>
        <div class="col" id="produtos">
            <h4 class="tituloRodape">Produtos</h4>
            <div>
                <a href="">Placas solares</a><br/>
                <a href="">Motos Elétricas</a><br/>
                <a href=""></a><br/>
                <a href=""></a>
            </div>
        </div>
        <div class="col" id="conhecaMais">
            <h4 class="tituloRodape">Conheça mais do nosso trabalho</h4>
            <div>
                <a href=""></a><br/>
                <a href=""></a><br/>
                <a href=""></a><br/>
                <a href=""></a>
            </div>
        </div>
    </div>
    
@endsection
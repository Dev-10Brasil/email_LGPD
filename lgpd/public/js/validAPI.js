
$('input').not('#submit').keypress(function(e) {
    if(e.which === 13) {
        return false;
    }
});

window.addEventListener("load", function() {
    document.getElementById("submit").onclick = runSubmit;
    document.getElementById("nome").oninput = validateName;
    document.getElementById("telefone").oninput = validatePhone;
    document.getElementById("celular").oninput = validateCell;
    document.getElementById("email").oninput = validateEmail;
    document.getElementById("cep").oninput = validateZip;
    document.getElementById("estado").oninput = validateState;
    document.getElementById("cidade").oninput = validateCity;
    document.getElementById("acao").oninput = validateAction;
    document.getElementById("setor").oninput = validateDepartment;
    document.getElementById("tentativas").oninput = validateAttempts;
    document.getElementById("feedback").oninput = validateFeedback;
    });
    
    //change    =>  Ao mudar de campo
    //input     =>  À cada dígito
    //invalid   =>  Quando o valor for inválido
    //submit    =>  Ao enviar
    
    function runSubmit() {
        validateName();
        validatePhone();
        validateCell();
        validateEmail();
        validateZip();
        validateState();
        validateCity();
        validateAction();
        validateDepartment();
        validateAttempts();
        validateFeedback();
    }
    
    function validateName() {
        var nome = document.getElementById("nome");
        if (nome.validity.valueMissing) {
            nome.setCustomValidity("Enter your name as it appears on your card");
            nome.reportValidity();
        } else if (nome.validity.valid) {
            nome.setCustomValidity('');
        }
    }
    
    function validatePhone() {
        var telefone = document.getElementById("telefone");
        if (telefone.validity.valueMissing) {
            console.log("No card detected")
            telefone.setCustomValidity("Enter your card Number");
        } else if (telefone.validity.patternMismatch) {
            console.log("Invalid card detected")
            telefone.setCustomValidity("Enter a valid card number");
        } else {
            telefone.setCustomValidity("");
        }
    }
    
    function validateCell() {
        var celular = document.getElementById("celular");
        if (celular.validity.valueMissing) {
            console.log("No card detected")
            celular.setCustomValidity("Enter your card Number");
        } else if (celular.validity.patternMismatch) {
            console.log("Invalid card detected")
            celular.setCustomValidity("Enter a valid card number");
        } else {
            celular.setCustomValidity("");
        }
    }
    
    function validateEmail() {
        var email = document.getElementById("email");
        if (email.validity.valueMissing) {
            email.setCustomValidity("Enter your name as it appears on your card");
            email.reportValidity();
        } else {
            email.setCustomValidity(" ");
        }
    }
    
    function validateZip() {
        var cep = document.getElementById("cep");
        if (cep.validity.valueMissing) {
            cep.setCustomValidity("Enter your name as it appears on your card");
            cep.reportValidity();
        } else {
            cep.setCustomValidity(" ");
        }
    }
    
    function validateState() {
        var estado = document.getElementById("estado");
        if (estado.validity.valueMissing) {
            estado.setCustomValidity("Enter your name as it appears on your card");
            estado.reportValidity();
        } else {
            estado.setCustomValidity(" ");
        }
    }
    
    function validateCity() {
        var cidade = document.getElementById("cidade");
        if (cidade.validity.valueMissing) {
            cidade.setCustomValidity("Enter your name as it appears on your card");
            cidade.reportValidity();
        } else {
            cidade.setCustomValidity(" ");
        }
    }
    
    function validateAction() {
        var acao = document.getElementById("acao");
        if (acao.validity.valueMissing) {
            acao.setCustomValidity("Enter your name as it appears on your card");
            acao.reportValidity();
        } else {
            acao.setCustomValidity(" ");
        }
    }
    
    function validateDepartment() {
        var setor = document.getElementById("setor");
        if (setor.validity.valueMissing) {
            setor.setCustomValidity("Enter your name as it appears on your card");
            setor.reportValidity();
        } else {
            setor.setCustomValidity(" ");
        }
    }
    
    function validateAttempts() {
        var tentativas = document.getElementById("tentativas");
        if (tentativas.validity.valueMissing) {
            tentativas.setCustomValidity("Enter your name as it appears on your card");
            tentativas.reportValidity();
        } else {
            tentativas.setCustomValidity(" ");
        }
    }
    
    function validateFeedback() {
        var feedback = document.getElementById("feedback");
        if (feedback.validity.valueMissing) {
            feedback.setCustomValidity("Enter your name as it appears on your card");
            feedback.reportValidity();
        } else {
            feedback.setCustomValidity(" ");
        }
    }
    
    
    /* element.willValidate
    element.setCustomValidity(message)
    element.validity.valueMissing
    element.validity.typeMismatch
    element.validity.patternMismatch
    element.validity.tooLong
    element.validity.tooShort
    element.validity.rangeUnderflow
    element.validity.rangeOverflow
    element.validity.stepMismatch
    element.validity.badInput
    element.validity.customError
    element.validity.valid
    valid = element.checkValidity()
    valid = element.reportValidity()
    element.validationMessage*/

/* const campos = {
    init() {        //Esta função só ocorre após o carregamento da página por completo
        campos.addListeners();
    },
    addListeners() {
        let form = document.formulario;
        let nome = document.getElementById('nome');
        let telefone =  document.getElementById('telefone');
        let celular =  document.getElementById('celular');
        let email =  document.getElementById('email');
        let cep =  document.getElementById('cep');
        let estado =  document.getElementById('estado');
        let cidade =  document.getElementById('cidade');
        let acao =  document.getElementById('acao');
        let setor =  document.getElementById('setor');
        let tentativas =  document.getElementById('tentativas');
        let feedback =  document.getElementById('feedback');

        nome.addEventListener('change', campos.testName);               //Change => Acontece ao clicar fora do campo
        telefone.addEventListener('change', campos.testPhone);
        celular.addEventListener('change', campos.testCell);
        email.addEventListener('change', campos.testEmail);
        cep.addEventListener('change', campos.testZip);
        estado.addEventListener('change', campos.testState);
        cidade.addEventListener('change', campos.testCity);
        acao.addEventListener('change', campos.testAction);
        setor.addEventListener('change', campos.testDepartment);
        tentativas.addEventListener('change', campos.testAttempts);
        feedback.addEventListener('change', campos.testFeedback);

        nome.addEventListener('input', campos.testName);                //Input => Acontece enquanto se está digitando
        telefone.addEventListener('input', campos.testPhone);
        celular.addEventListener('input', campos.testCell);
        email.addEventListener('input', campos.testEmail);
        cep.addEventListener('input', campos.testZip);
        estado.addEventListener('input', campos.testState);
        cidade.addEventListener('input', campos.testCity);
        acao.addEventListener('input', campos.testAction);
        setor.addEventListener('input', campos.testDepartment);
        tentativas.addEventListener('input', campos.testAttempts);
        feedback.addEventListener('input', campos.testFeedback);

        nome.addEventListener('invalid', campos.testName);              //invalid => Acontece 
        telefone.addEventListener('invalid', campos.testPhone);
        celular.addEventListener('invalid', campos.testCell);
        email.addEventListener('invalid', campos.testEmail);
        cep.addEventListener('invalid', campos.testZip);
        estado.addEventListener('invalid', campos.testState);
        cidade.addEventListener('invalid', campos.testCity);
        acao.addEventListener('invalid', campos.testAction);
        setor.addEventListener('invalid', campos.testDepartment);
        tentativas.addEventListener('invalid', campos.testAttempts);
        feedback.addEventListener('invalid', campos.testFeedback);

        form.addEventListener('submit', campos.validate);

    },
    validate(everything) {
        everything.preventDefautl();
        let form = everything.target;
    },
    testName(everything) {
        let nome = everything.target;
        nome.setCustomValidity('');
        if (nome.validity.typeMismatch) {
            nome.setCustomValidity('Consegui"');
            nome.reportValidity();
        }
    },
    testPhone(everything) {
        let telefone = everything.target;
        telefone.setCustomValidity('');
        let currently = telefone.checkValidity();
    },
    testCell(everything) {
        let celular = everything.target;
        celular.setCustomValidity('');
        let currently = celular.checkValidity();
    },
    testEmail(everything) {
        let email = everything.target;
        email.setCustomValidity('');
        let currently = email.checkValidity();
    },
    testZip(everything) {
        let cep = everything.target;
        cep.setCustomValidity('');
        let currently = cep.checkValidity();
    },
    testState(everything) {
        let estado = everything.target;
        estado.setCustomValidity('');
        let currently = estado.checkValidity();
    },
    testCity(everything) {
        let cidade = everything.target;
        cidade.setCustomValidity('');
        let currently = cidade.checkValidity();
    },
    testAction(everything) {
        let acao = everything.target;
        acao.setCustomValidity('');
        let currently = acao.checkValidity();
    },
    testDepartment(everything) {
        let setor = everything.target;
        setor.setCustomValidity('');
        let currently = setor.checkValidity();
    },
    testAttempts(everything) {
        let tentativas = everything.target;
        tentativas.setCustomValidity('');
        let currently = tentativas.checkValidity();
    },
    testFeedback(everything) {
        let feedback = everything.target;
        feedback.setCustomValidity('');
        let currently = feedback.checkValidity();
    }
} */

/* element.willValidate
element.setCustomValidity(message)
element.validity.valueMissing
element.validity.typeMismatch
element.validity.patternMismatch
element.validity.tooLong
element.validity.tooShort
element.validity.rangeUnderflow
element.validity.rangeOverflow
element.validity.stepMismatch
element.validity.badInput
element.validity.customError
element.validity.valid
valid = element.checkValidity()
valid = element.reportValidity()
element.validationMessage

    nome.setCustomValidity("Preencha este campo, por favor... vagabundo!"); */
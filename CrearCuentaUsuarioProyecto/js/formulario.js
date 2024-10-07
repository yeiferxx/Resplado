const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{4,16}$/, // Validación de nombre
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // Validación de correo
    correoAlternativo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // Validación de correo alternativo
    password: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/, // Validación de password
};

const campos = {
    nombre: false,
    correo: false,
    correoAlternativo: false,
    password: false,
};

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;
        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
            break;
        case "correoAlternativo":
            validarCampo(expresiones.correoAlternativo, e.target, 'correoAlternativo');
            break;
        case "password":
            validarCampo(expresiones.password, e.target, 'password');
            break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    if (campos.nombre && campos.correo && campos.correoAlternativo && campos.password) {
        const formData = new FormData(formulario);
        fetch('insertar_usuario.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Datos guardados con éxito');
                formulario.reset();
                // Restablece los estados del formulario
                Object.keys(campos).forEach(campo => {
                    campos[campo] = false;
                    document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
                    document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
                });
            } else {
                alert('Error al guardar los datos');
            }
        })
        .catch(error => console.error('Error:', error));
    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
});






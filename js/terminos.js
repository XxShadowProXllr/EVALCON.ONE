Swal.fire({
	html: 'Por favor acepte nuestros <a target="_blank" href="https://drive.google.com/file/d/1YnXXKfg-HLppNLNbpYPEqbnJrYH_aMqh/view?usp=sharing">terminos y condiciones</a>',
    confirmButtonText: 'Acepto',
    icon: 'info',
    //padding: '1rem',
   // toast: true,
    allowOutsideClick: false,
    allowEscapeKey: false,
    stopKeydownPropagation: false,
    //width: '85%',
    backdrop: true,
    position: 'center',

    showConfirmButton: true,
    showCancelButton: false,
    showCloseButton: false,
    closeButtonAriaLabel: 'Cerrar esta alerta',

    customClass: {
        content: 'content-class'
    }
});
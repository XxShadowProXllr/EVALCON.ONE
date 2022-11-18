Swal.fire({
	html: 'Por favor para continuar acepte los <a target="_blank" href="https://drive.google.com/file/d/1YnXXKfg-HLppNLNbpYPEqbnJrYH_aMqh/view?usp=sharing">Terminos y Condiciones de nuestro servicio</a>',
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
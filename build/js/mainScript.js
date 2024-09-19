function genPDF() {
    var doc = new jsPDF();
    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    let edad = document.getElementById('edad').value;
    let correo = document.getElementById('mail').value;
    let producto = document.getElementById('producto').value;

    doc.text('Asunto: Confirmación de Cotización y Programación de Cita.', 10, 10);
    doc.text(' ', 10, 20);
    doc.text('Estimado/a ' + nombre+',', 10, 30);
    doc.text(' ', 10, 40);
    doc.text('Es un placer para nosotros en "El rincón del mueble" recibir tu solicitud de', 10, 50);
    doc.text('cotización para el producto ' + producto, 10, 60);
    doc.text('Agradecemos tu interés en nuestros servicios y estamos emocionados', 10, 70);
    doc.text('por la oportunidad de trabajar con usted.', 10, 80);
    doc.text('A continuación, le mencionamos un resumen de la información proporcionada:', 10, 90);
    doc.text(' ', 10, 100);
    doc.text('Nombre(s) del Cliente:' + nombre, 10, 110);
    doc.text('Apellido(s) del Cliente:  ' + apellido, 10, 120);
    doc.text('Edad del Cliente: ' + edad, 10, 130);
    doc.text('Correo Electrónico: ' + correo, 10, 140);
    doc.text('Producto Solicitado: ' + producto, 10, 150);
    doc.text(' ', 10, 160);
    doc.text('Le hemos programado una cita para la siguiente fecha: ', 10, 170);
    doc.text('Fecha: Lunes, 18 de diciembre de 2023. ', 10, 180);
    doc.text('Hora: 10:00 a.m. ', 10, 190);
    doc.text(' ', 10, 200);
    doc.text('Usted pude cambiar la fecha y el dia de la reunion llamando al 78764903. ', 10, 210);
    doc.text(' ', 10, 220);
    doc.text('¡Agradecemos nuevamente tu interés en "El rincón del mueble" y  ', 10, 230);
    doc.text('esperamos verte pronto!', 10, 240);

    doc.save('CotizacionProductoTs.pdf');
    
    alert('No olvide llevar el comprobante de cotización.')
}

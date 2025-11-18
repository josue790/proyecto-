document.getElementById('vacacionesForm').addEventListener('submit', function(e){
    e.preventDefault();
    const nombre = document.getElementById('nombre').value;
    const dias = document.getElementById('dias').value;
    const fechaInicio = document.getElementById('fechaInicio').value;
    const resumen = document.getElementById('resumen');
    const fechaFin = new Date(fechaInicio);
    fechaFin.setDate(fechaFin.getDate() + parseInt(dias));
    resumen.innerHTML = `
        <p><strong>Empleado:</strong> ${nombre}</p>
        <p><strong>Días solicitados:</strong> ${dias}</p>
        <p><strong>Fecha de inicio:</strong> ${fechaInicio}</p>
        <p><strong>Fecha de fin:</strong> ${fechaFin.toISOString().slice(0,10)}</p>
        <p style="color:orange;"><strong>Estado:</strong> Pendiente</p>
    `;
    this.submit(); 
});

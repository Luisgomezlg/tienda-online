verEvento=function(ID_EVENTO,TITULO,FECHA_EVENTO,NOMBRE,ID_PERSONA,DESCRIPCION,LINK_IMAGEN){
    
    $('#idEvSee').val(ID_EVENTO);
    $('#TituloSee').val(TITULO);
    $('#FechaSee').val(FECHA_EVENTO);
    $('#PersonaSee').text(NOMBRE).val(ID_PERSONA);
    $('#DescripcionSee').text(DESCRIPCION);
    $('#RutaSee').text(LINK_IMAGEN);
    Uimagen = LINK_IMAGEN.split("/");
    $('#imagenSee').attr("src","storage/"+Uimagen[1]+"/"+Uimagen[2]);
    
    
    var x = "https://proyecto-sian-jsebastian1422.c9users.io/eventos"+"/"+ID_EVENTO;
    $("#form_id_see").attr('action',x)
    
}
function prueba(){ alert("mensaje de prueba")};
$('#calculate').submit(function(e){
    e.preventDefault();
   var datas = $(this).serialize();
$.ajax({
    url:"topsoil.php?action=calculate",
    type:"POST",
    data:datas,
    dataType:"json",
    success:function(e){
        alert(typeof(e));
        var tr = "<td>"+e['dim']+"</td>"+
                 "<td>"+e['bags']+"</td>"+
                 "<td>"+e['bags']*75+"</td>";
        $('#result').html(tr)
    }
});

});
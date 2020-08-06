<script>
$(document).ready(function(){
  $("#findBtn").click(function(){
    var est = $("#catID").val();

    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/productsCat')}}',
      data: 'est_id=' + est,
      success:function(response){
        console.log(response);
        $("#productData").html(response);
      }
    });
  });

});
</script>


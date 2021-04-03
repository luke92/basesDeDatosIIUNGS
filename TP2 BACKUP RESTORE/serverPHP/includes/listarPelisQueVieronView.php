<div class="container"> 
<table class="table table-striped">
    <thead>
      <tr>
        <th>Usuario 1</th>
        <th>Usuario 2</th>
      </tr>
    </thead>
    <tbody id="content">
    </tbody>
  </table>
</div>
<script>
    $.ajax({url: './app/controlador/listarPelisQueVieronController.php', success: function(result)
            {
                document.getElementById('content').innerHTML = result;
            }});
</script>
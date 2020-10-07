$(document).ready(function () {
    
    /* --variables para llamar a los select por el id */
    let $fuec = document.getElementById('fuec')

     // Testing Jquery
  console.log('jquery is working!');
  cargarFuec();
  $('#task-result').hide();

    function cargarFuec() {
        $.ajax({
            url: 'select.php',
            type: 'GET',
            success: function(response) {
                const tasks = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                tasks.forEach(task => {
                    template += `<option class="form-control" value="${task.id}">${task.fuec}</option>`;
                })

                $fuec.innerHTML = template;
            }
            
        })
    }
 
})
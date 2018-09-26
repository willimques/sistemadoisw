<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Estoque Consignado</a>
    </li>
    <li class="breadcrumb-item active">Estoque Consignado</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Estoque Consignado</h3>
                </div>
                <div class="col-md-4">
<!--                    <a href="<?php echo site_url('estoqueconsignado/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> -->
                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body">  
          <table id="tabest" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      
                        <th>Representante</th>
                        <th>Pedido</th>
                        <th>Codigo</th>
                        <th>Produto</th>                       
                        <th>Quantidade</th>                     
                        <th>Valor Unitario</th>                     
                        <th>Valor Total</th>                     
                        
                    </tr>
                </thead>
              <tbody>
                <?php foreach($estoqueconsignado as $E){ ?>
                <tr>
                 
                    <td><?php echo $E['nome']; ?></td>
                    <td><?php echo $E['IDPedido']; ?></td>
                    <td><?php echo $E['codigo']; ?></td>
                    <td><?php echo $E['nome_produto']; ?></td>                  
                    <td><?php echo $E['qtde']; ?></td>                   
                    <td><?php echo $E['valor_unitario']; ?></td>                   
                    <td class=".sum"><?php echo ($E['valor_unitario']*$E['qtde']);?></td>                  
                    
                </tr>
                <?php } ?>
                </tbody>
               <tfoot>
            <tr>
                <th id="dtotal" colspan="6" style="text-align:right">Total:</th>
                <th></th>
            </tr>
        </tfoot>
            </table>
        </div>
    </div>
</div>

<script>

 $(document).ready(function() {
    $('#tabest').DataTable( {
           "dom": '<"row"<"col-md-6 "f><"#btntoogle.col-md-6"B>>t<"row"<"col-4"l><"col-4"i><"col-4"p>> ' ,
        buttons: [
            {
                extend: 'copy',
                text: 'Copiar',
                exportOptions: {
                    modifier: {
                        page: 'current' }}
            },

            {
                extend: 'pdf',
                text: 'PDF',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Gerar PDF dessa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, node, config);
                    }

                }
            },

            {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Exportar essa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.excelHtml5.action.call(this, e, dt, node, config);
                    }

                }
            }, 

            {
                extend: 'print',
                text: 'Imprimir',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Imprimir essa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.print.action.call(this, e, dt, node, config);
                    }

                }
            },
            {
                extend: 'colvis',
                text: 'Colunas'
            }

        ],

        "language": {

            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },
        
       
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 6 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 6, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 6 ).footer() ).html(
                'R$'+pageTotal
            );
        }
    } );
} );
</script>

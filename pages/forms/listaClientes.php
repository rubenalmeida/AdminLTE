<?php include_once "../../menu.php"?>
<?php
include_once '../../administrador/livros/emprestimos/emprestar.php';


$emprestimo = new Emprestar();
$ativos = $emprestimo->recuperarClientes();
$inativos = $emprestimo->recuperarInativos();


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tabela de Clientes
            <small>Açoes</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Tabela de clientes</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>Clientes ativados</b></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>TELEFONE</th>
                                <th>ENDEREÇO</th>
                                <th>Ação</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>TELEFONE</th>
                                <th>ENDEREÇO</th>
                                <th>Ação</th>

                            </tr>
                            </tfoot>
                            <tbody>


                            <!-- ___________________________________TABELA DE CLIENTES ATIVOS ___________________________________________________________________________  -->





                            <?php
                            foreach ($ativos as $cliente){  echo
                                '<tr>
                                <td>'. $cliente['id_cliente'] .'</td>
                                 <td>'. $cliente['nome'] .'</td>
                                 <td>'. $cliente['email'] .'</td>
                                 <td>'. $cliente['telefone'] .'</td>
                                 <td>'. $cliente['endereco'] .'</td>
                                 <td>'.
                                '<div class="btn-group">
                                        <a type="button" class="btn btn-success" href="profile.php?id_cliente='. $cliente['id_cliente'] .'">Emprestar</a>
                                    </div>' .
                                '<div class="btn-group">
                                        <a type="button" class="btn btn-warning" href="../../administrador/cadastros/clientes/processamento.php?acao=desativar&id_cliente='. $cliente['id_cliente'] .'">Desativar</a>
                                    </div>
                                </td></tr>';

                            } ?>


                            <!-- ___________________________________FIM ___________________________________________________________________________  -->




                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.col -->
                <div id="desativados" class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>Clientes desativados</b></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>TELEFONE</th>
                                <th>ENDEREÇO</th>
                                <th>Ação</th>
                            </tr>
                            </thead>
                            <tbody>



                            <!-- ___________________________________TABELA DE CLIENTES INATIVOS ___________________________________________________________________________  -->



                            <?php   foreach ($inativos as $cliente){  echo

                                ' <tr>
                                <td>'.  $cliente['id_cliente'] .'</td>
                                 <td>'.  $cliente['nome'] .'</td>
                                 <td>'.  $cliente['email'] .'</td>
                                 <td>'.  $cliente['telefone'] .'</td>
                                 <td>'.  $cliente['endereco'] .'</td>
                                 <td>'.
                                '<div class="btn-group">
                                        <a type="button" class="btn btn-success" href="../../administrador/cadastros/clientes/processamento.php?acao=ativar&id_cliente='. $cliente['id_cliente'] .'">Ativar</a>
                                    </div>
                                </td></tr>';

                            } ?>




                            <!-- ___________________________________FIM___________________________________________________________________________  -->


                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>TELEFONE</th>
                                <th>ENDEREÇO</th>
                                <th>Ação</th>

                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Versão</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2016-2016 <a href="http://adoa.com.br">Adoa</a>.</strong> All rights
    reserved.
</footer>

<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
</body>
</html>
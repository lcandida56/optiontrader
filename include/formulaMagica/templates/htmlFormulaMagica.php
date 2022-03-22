<style type="text/css">

</style>
<div class="main">
    <label class="fm-label">Fórmula Mágica</label>
    <div style="margin-top: 25px;">
        <table id="example" class="table table-dark">
            <thead>
            <tr>
                <?php for ($i=0; $i < count($dados['header']); $i++) {  ?>
                    <th class="mdl-data-table__cell--non-numeric"><?= $dados['header'][$i] ?></th>                                 
                <?php }?>
                
            </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < count($dados['rows']); $i++) {  ?>
                <tr>
                    <td ><?= $i ?></td>
                    <td ><?= $dados['rows'][$i]['Papel'] ?></td>
                    <td >R$ <?= $dados['rows'][$i]['Cotação'] ?></td>
                    <td ><?= $dados['rows'][$i]['EV/EBIT'] ?></td>
                    <td ><?= number_format($dados['rows'][$i]['ROIC'],2) ?></td>
                    <td ><?= $dados['rows'][$i]['EVOrdenado'] ?></td>
                    <td ><?= $dados['rows'][$i]['ROICOrdenado'] ?></td>
                    <td ><?= $dados['rows'][$i]['Score'] ?></td>
                    <td ><?= $dados['rows'][$i]['sector'] ?></td>
              
                </tr>
                <?php } ?>
                </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json"
        }
    } );
} );
</script>

<!--
04 07 09 10 13 16 23

08 11 12 13 20 57 52 59

16 17 18 28 35 47

15 24 33 49 53 59 

15 40 44 45 47 51 

15 


11 16 13 18 45 52 57 58 

11 57 45 13 16 58
16 58 52 18 13 11
13 11 57 45 18 16
18 16 58 52 45 13
45 13 11 57 52 18
52 18 16 58 57 45-->
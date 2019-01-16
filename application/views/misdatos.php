<?
//$this->load->library('PHP-FineDiff/finediff');
include(APPPATH.'libraries/PHP-FineDiff/finediff.php');
?>
<div class="row">
    <div class="large-12 columns">
		<div class="panel">
            <h1>Bienvenido/a <span class="nombre"><?=$usuario['nombre'].' '.$usuario['apellidos']?></span></h1>
            <h2>Calificación obtenida: <span class="nota"><? echo $usuario['nota'] ?> / 10</span></h2>
            <?
            if(strlen($usuario['comentarios'])>0) {
                echo $usuario['comentarios'];
            }
            ?>
            <div class="row">
                <div class="large-12 columns">
                    <?
                    if( count($usuario['notas_alumnos_ocr']) ) {
                        foreach($usuario['notas_alumnos_ocr'] as $nota) {
                            ?>
                            <h4><?=$nota['descripcion']?></h4>
                            <? if(strlen($nota['comentarios'])>0) { ?><p><?=$nota['comentarios']?></p> <? } ?>
                            <table class="calificaciones">
                                <tr>
                                    <th>Original</th>
                                    <th>Alumno</th>
                                </tr>
                                <tr>
                                    <td><?=htmlspecialchars($nota['original'])?></td>
                                    <td><?=htmlspecialchars($nota['alumno'])?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="diferencias">
                                        <?
                                        $opcodes = \FineDiff::getDiffOpcodes($nota['original'], $nota['alumno']);
                                        echo \FineDiff::renderDiffToHTMLFromOpcodes($nota['original'], $opcodes);
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        <?
                        }
                    }
                    ?>
                </div>
            </div>
		</div>
    </div>
</div>
<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadordeHtmlTrait;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    use RenderizadordeHtmlTrait;
    
    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('cursos/formulario.php', [
            'titulo' => 'Novo curso'
        ]);
    }
}

<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadordeHtmlTrait;

class FormularioLogin implements InterfaceControladorRequisicao{

    use RenderizadordeHtmlTrait;
    
    public function processaRequisicao() : void{

        echo $this->renderizaHtml('login/formulario.php', [
            'titulo' => "Login"
        ]);
    }
}

?>
<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fc9f4bef3b0ee3247b96850ecdf3136b291bffbc4c7cc178f2b0bc7838c9af56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_793065be3ccc2f92a547ddb38b7a101779712dd5f63e72da2fbfefbc7894a08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793065be3ccc2f92a547ddb38b7a101779712dd5f63e72da2fbfefbc7894a08d->enter($__internal_793065be3ccc2f92a547ddb38b7a101779712dd5f63e72da2fbfefbc7894a08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e4c9ec1f74b455185c3dc228d90bae5229a8f625676eb52153fbee094a5915cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c9ec1f74b455185c3dc228d90bae5229a8f625676eb52153fbee094a5915cc->enter($__internal_e4c9ec1f74b455185c3dc228d90bae5229a8f625676eb52153fbee094a5915cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_793065be3ccc2f92a547ddb38b7a101779712dd5f63e72da2fbfefbc7894a08d->leave($__internal_793065be3ccc2f92a547ddb38b7a101779712dd5f63e72da2fbfefbc7894a08d_prof);

        
        $__internal_e4c9ec1f74b455185c3dc228d90bae5229a8f625676eb52153fbee094a5915cc->leave($__internal_e4c9ec1f74b455185c3dc228d90bae5229a8f625676eb52153fbee094a5915cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

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
        $__internal_3611c1452a1df875758a5296f68e89a2a9c0c7b0c6123629c30645b317c8ca6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3611c1452a1df875758a5296f68e89a2a9c0c7b0c6123629c30645b317c8ca6e->enter($__internal_3611c1452a1df875758a5296f68e89a2a9c0c7b0c6123629c30645b317c8ca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5b17feff853888e92c80d06c44a8ca877b9502bd3da3ff92647daefc2af51485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b17feff853888e92c80d06c44a8ca877b9502bd3da3ff92647daefc2af51485->enter($__internal_5b17feff853888e92c80d06c44a8ca877b9502bd3da3ff92647daefc2af51485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3611c1452a1df875758a5296f68e89a2a9c0c7b0c6123629c30645b317c8ca6e->leave($__internal_3611c1452a1df875758a5296f68e89a2a9c0c7b0c6123629c30645b317c8ca6e_prof);

        
        $__internal_5b17feff853888e92c80d06c44a8ca877b9502bd3da3ff92647daefc2af51485->leave($__internal_5b17feff853888e92c80d06c44a8ca877b9502bd3da3ff92647daefc2af51485_prof);

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

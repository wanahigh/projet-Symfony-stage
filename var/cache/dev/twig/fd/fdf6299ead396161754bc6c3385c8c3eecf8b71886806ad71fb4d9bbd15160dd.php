<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_0fc62ecc987763e5411201d5d0f77c1b691b1f96a93ec06d97b8d7ca93c74abb extends Twig_Template
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
        $__internal_bdd2a966f8142059df02fc99c76ad54095e3ec8e3fb7e51ea43ec48355f121ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd2a966f8142059df02fc99c76ad54095e3ec8e3fb7e51ea43ec48355f121ea->enter($__internal_bdd2a966f8142059df02fc99c76ad54095e3ec8e3fb7e51ea43ec48355f121ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4da750dc05a58adc77001c12d00a0ea13c059ee7a705822e0830cb05f5ce1d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da750dc05a58adc77001c12d00a0ea13c059ee7a705822e0830cb05f5ce1d2c->enter($__internal_4da750dc05a58adc77001c12d00a0ea13c059ee7a705822e0830cb05f5ce1d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bdd2a966f8142059df02fc99c76ad54095e3ec8e3fb7e51ea43ec48355f121ea->leave($__internal_bdd2a966f8142059df02fc99c76ad54095e3ec8e3fb7e51ea43ec48355f121ea_prof);

        
        $__internal_4da750dc05a58adc77001c12d00a0ea13c059ee7a705822e0830cb05f5ce1d2c->leave($__internal_4da750dc05a58adc77001c12d00a0ea13c059ee7a705822e0830cb05f5ce1d2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

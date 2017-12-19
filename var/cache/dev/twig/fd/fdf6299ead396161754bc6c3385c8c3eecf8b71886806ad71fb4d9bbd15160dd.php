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
        $__internal_c0e523b52df006215c21cf87e229db159e843e66fec131214bb71bcd52036776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e523b52df006215c21cf87e229db159e843e66fec131214bb71bcd52036776->enter($__internal_c0e523b52df006215c21cf87e229db159e843e66fec131214bb71bcd52036776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d1f7c711f500d2ae53ccebb69200647c87528865860688f1038c2785b50ec06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f7c711f500d2ae53ccebb69200647c87528865860688f1038c2785b50ec06d->enter($__internal_d1f7c711f500d2ae53ccebb69200647c87528865860688f1038c2785b50ec06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c0e523b52df006215c21cf87e229db159e843e66fec131214bb71bcd52036776->leave($__internal_c0e523b52df006215c21cf87e229db159e843e66fec131214bb71bcd52036776_prof);

        
        $__internal_d1f7c711f500d2ae53ccebb69200647c87528865860688f1038c2785b50ec06d->leave($__internal_d1f7c711f500d2ae53ccebb69200647c87528865860688f1038c2785b50ec06d_prof);

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

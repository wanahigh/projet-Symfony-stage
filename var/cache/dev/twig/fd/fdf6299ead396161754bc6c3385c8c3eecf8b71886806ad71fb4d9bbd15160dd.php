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
        $__internal_32ceb4a39b852438cd4db7fb11cef8fff17e03a60ec7681bb74c6f1316c4957b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ceb4a39b852438cd4db7fb11cef8fff17e03a60ec7681bb74c6f1316c4957b->enter($__internal_32ceb4a39b852438cd4db7fb11cef8fff17e03a60ec7681bb74c6f1316c4957b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_23b10dccdea56fe1c8900625044d46b10c87fcf514e540ee6ef71b57356ed71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b10dccdea56fe1c8900625044d46b10c87fcf514e540ee6ef71b57356ed71c->enter($__internal_23b10dccdea56fe1c8900625044d46b10c87fcf514e540ee6ef71b57356ed71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_32ceb4a39b852438cd4db7fb11cef8fff17e03a60ec7681bb74c6f1316c4957b->leave($__internal_32ceb4a39b852438cd4db7fb11cef8fff17e03a60ec7681bb74c6f1316c4957b_prof);

        
        $__internal_23b10dccdea56fe1c8900625044d46b10c87fcf514e540ee6ef71b57356ed71c->leave($__internal_23b10dccdea56fe1c8900625044d46b10c87fcf514e540ee6ef71b57356ed71c_prof);

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

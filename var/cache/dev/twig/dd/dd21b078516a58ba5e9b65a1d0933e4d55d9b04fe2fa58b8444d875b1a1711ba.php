<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0444a4576419cef143920045711c112e304eb0461eb0f429dfc1acb4d56522ec extends Twig_Template
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
        $__internal_f2822a4c60d44e8b99e9aceea73826d01e8175343d54134bb3581a851f1e424a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2822a4c60d44e8b99e9aceea73826d01e8175343d54134bb3581a851f1e424a->enter($__internal_f2822a4c60d44e8b99e9aceea73826d01e8175343d54134bb3581a851f1e424a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_24dbc004a8872cedcaee1645fba750e79c111b56b8251f36da769628a1d4b7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dbc004a8872cedcaee1645fba750e79c111b56b8251f36da769628a1d4b7eb->enter($__internal_24dbc004a8872cedcaee1645fba750e79c111b56b8251f36da769628a1d4b7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f2822a4c60d44e8b99e9aceea73826d01e8175343d54134bb3581a851f1e424a->leave($__internal_f2822a4c60d44e8b99e9aceea73826d01e8175343d54134bb3581a851f1e424a_prof);

        
        $__internal_24dbc004a8872cedcaee1645fba750e79c111b56b8251f36da769628a1d4b7eb->leave($__internal_24dbc004a8872cedcaee1645fba750e79c111b56b8251f36da769628a1d4b7eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

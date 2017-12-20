<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a576560440c51d17bc002033fdaf39de26b05bfb5923eb998b3b6fcdf717dc89 extends Twig_Template
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
        $__internal_7193609650940dad229ba0668fd6b37a99899b7912f3c88a33a0913244be3874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7193609650940dad229ba0668fd6b37a99899b7912f3c88a33a0913244be3874->enter($__internal_7193609650940dad229ba0668fd6b37a99899b7912f3c88a33a0913244be3874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c2e9e51a38f68b0066c2fe0f1baca3fc7bffb594d28e3d28b3f138eb434c5831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e9e51a38f68b0066c2fe0f1baca3fc7bffb594d28e3d28b3f138eb434c5831->enter($__internal_c2e9e51a38f68b0066c2fe0f1baca3fc7bffb594d28e3d28b3f138eb434c5831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7193609650940dad229ba0668fd6b37a99899b7912f3c88a33a0913244be3874->leave($__internal_7193609650940dad229ba0668fd6b37a99899b7912f3c88a33a0913244be3874_prof);

        
        $__internal_c2e9e51a38f68b0066c2fe0f1baca3fc7bffb594d28e3d28b3f138eb434c5831->leave($__internal_c2e9e51a38f68b0066c2fe0f1baca3fc7bffb594d28e3d28b3f138eb434c5831_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

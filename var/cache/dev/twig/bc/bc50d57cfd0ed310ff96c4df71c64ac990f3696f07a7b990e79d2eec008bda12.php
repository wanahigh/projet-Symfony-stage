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
        $__internal_7931a5bd9101b7bf057c7ff05c3bcb95ddfec1c26203733b2776ae60eaaf693e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7931a5bd9101b7bf057c7ff05c3bcb95ddfec1c26203733b2776ae60eaaf693e->enter($__internal_7931a5bd9101b7bf057c7ff05c3bcb95ddfec1c26203733b2776ae60eaaf693e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4e14f87d73b3f82f52dfa363a2f8e4fb478b7c84ac6f4e951367a5ede9817d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e14f87d73b3f82f52dfa363a2f8e4fb478b7c84ac6f4e951367a5ede9817d7f->enter($__internal_4e14f87d73b3f82f52dfa363a2f8e4fb478b7c84ac6f4e951367a5ede9817d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_7931a5bd9101b7bf057c7ff05c3bcb95ddfec1c26203733b2776ae60eaaf693e->leave($__internal_7931a5bd9101b7bf057c7ff05c3bcb95ddfec1c26203733b2776ae60eaaf693e_prof);

        
        $__internal_4e14f87d73b3f82f52dfa363a2f8e4fb478b7c84ac6f4e951367a5ede9817d7f->leave($__internal_4e14f87d73b3f82f52dfa363a2f8e4fb478b7c84ac6f4e951367a5ede9817d7f_prof);

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

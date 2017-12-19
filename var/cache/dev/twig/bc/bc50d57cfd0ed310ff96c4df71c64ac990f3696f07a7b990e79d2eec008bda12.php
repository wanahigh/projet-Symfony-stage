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
        $__internal_17214d1ca3d99aa6864bb3781e97be866ed9922ad43742bfdecacef80591da0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17214d1ca3d99aa6864bb3781e97be866ed9922ad43742bfdecacef80591da0a->enter($__internal_17214d1ca3d99aa6864bb3781e97be866ed9922ad43742bfdecacef80591da0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d330b42b15f246c4aa02157338107038d39048a70806f9c9776e8af28fdc1090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d330b42b15f246c4aa02157338107038d39048a70806f9c9776e8af28fdc1090->enter($__internal_d330b42b15f246c4aa02157338107038d39048a70806f9c9776e8af28fdc1090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_17214d1ca3d99aa6864bb3781e97be866ed9922ad43742bfdecacef80591da0a->leave($__internal_17214d1ca3d99aa6864bb3781e97be866ed9922ad43742bfdecacef80591da0a_prof);

        
        $__internal_d330b42b15f246c4aa02157338107038d39048a70806f9c9776e8af28fdc1090->leave($__internal_d330b42b15f246c4aa02157338107038d39048a70806f9c9776e8af28fdc1090_prof);

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

<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_384065d7fe67edad29d1292b41f63aed61390efe666890b844b71ccf3d15f56b extends Twig_Template
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
        $__internal_e659e5f56bd84921f49542cf46a45031901b92be1e7cb47a263c9a563118ecdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e659e5f56bd84921f49542cf46a45031901b92be1e7cb47a263c9a563118ecdf->enter($__internal_e659e5f56bd84921f49542cf46a45031901b92be1e7cb47a263c9a563118ecdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ed86d67bdecab1295d59fb178cbcf7f84b9a0c151cf6a89fccc02b0c9285b2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed86d67bdecab1295d59fb178cbcf7f84b9a0c151cf6a89fccc02b0c9285b2ac->enter($__internal_ed86d67bdecab1295d59fb178cbcf7f84b9a0c151cf6a89fccc02b0c9285b2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e659e5f56bd84921f49542cf46a45031901b92be1e7cb47a263c9a563118ecdf->leave($__internal_e659e5f56bd84921f49542cf46a45031901b92be1e7cb47a263c9a563118ecdf_prof);

        
        $__internal_ed86d67bdecab1295d59fb178cbcf7f84b9a0c151cf6a89fccc02b0c9285b2ac->leave($__internal_ed86d67bdecab1295d59fb178cbcf7f84b9a0c151cf6a89fccc02b0c9285b2ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

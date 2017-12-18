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
        $__internal_79baf001de9233bc9ed53cee3527b9b59bae004a33cc7be2da6bdf8e276fe1cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79baf001de9233bc9ed53cee3527b9b59bae004a33cc7be2da6bdf8e276fe1cc->enter($__internal_79baf001de9233bc9ed53cee3527b9b59bae004a33cc7be2da6bdf8e276fe1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a5e3a225fee5db442e8c4f4d03704b371fec464b99e2bb7100bf51e959a12d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e3a225fee5db442e8c4f4d03704b371fec464b99e2bb7100bf51e959a12d88->enter($__internal_a5e3a225fee5db442e8c4f4d03704b371fec464b99e2bb7100bf51e959a12d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_79baf001de9233bc9ed53cee3527b9b59bae004a33cc7be2da6bdf8e276fe1cc->leave($__internal_79baf001de9233bc9ed53cee3527b9b59bae004a33cc7be2da6bdf8e276fe1cc_prof);

        
        $__internal_a5e3a225fee5db442e8c4f4d03704b371fec464b99e2bb7100bf51e959a12d88->leave($__internal_a5e3a225fee5db442e8c4f4d03704b371fec464b99e2bb7100bf51e959a12d88_prof);

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

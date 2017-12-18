<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_14c1eca86c8a3c47fdc300b045efac78e80921d6e9d640997cac1bfe67b95683 extends Twig_Template
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
        $__internal_3446f74a20d1bca67c53dd945242f88b3a8c172202750bfbdb5075c5bb5d3d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3446f74a20d1bca67c53dd945242f88b3a8c172202750bfbdb5075c5bb5d3d62->enter($__internal_3446f74a20d1bca67c53dd945242f88b3a8c172202750bfbdb5075c5bb5d3d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ce43a52972de2fedd4adcac05d830daabdfb4c58f6c2a5283f51bc54f3fd9cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce43a52972de2fedd4adcac05d830daabdfb4c58f6c2a5283f51bc54f3fd9cff->enter($__internal_ce43a52972de2fedd4adcac05d830daabdfb4c58f6c2a5283f51bc54f3fd9cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3446f74a20d1bca67c53dd945242f88b3a8c172202750bfbdb5075c5bb5d3d62->leave($__internal_3446f74a20d1bca67c53dd945242f88b3a8c172202750bfbdb5075c5bb5d3d62_prof);

        
        $__internal_ce43a52972de2fedd4adcac05d830daabdfb4c58f6c2a5283f51bc54f3fd9cff->leave($__internal_ce43a52972de2fedd4adcac05d830daabdfb4c58f6c2a5283f51bc54f3fd9cff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}

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
        $__internal_927e6364ac7e3e2dab146c55e932b706ffa79ef359f66a70dfcf43986cbca3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927e6364ac7e3e2dab146c55e932b706ffa79ef359f66a70dfcf43986cbca3ed->enter($__internal_927e6364ac7e3e2dab146c55e932b706ffa79ef359f66a70dfcf43986cbca3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_3153e36d1ca3847c3707c0d2ec232a1abaebe7a7b9fd1f8364cef0eec3883def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3153e36d1ca3847c3707c0d2ec232a1abaebe7a7b9fd1f8364cef0eec3883def->enter($__internal_3153e36d1ca3847c3707c0d2ec232a1abaebe7a7b9fd1f8364cef0eec3883def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_927e6364ac7e3e2dab146c55e932b706ffa79ef359f66a70dfcf43986cbca3ed->leave($__internal_927e6364ac7e3e2dab146c55e932b706ffa79ef359f66a70dfcf43986cbca3ed_prof);

        
        $__internal_3153e36d1ca3847c3707c0d2ec232a1abaebe7a7b9fd1f8364cef0eec3883def->leave($__internal_3153e36d1ca3847c3707c0d2ec232a1abaebe7a7b9fd1f8364cef0eec3883def_prof);

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

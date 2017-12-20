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
        $__internal_b77a6979aab6bcb09e7dad98561ea863ac402ef2e194b8a6f116103e759659ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77a6979aab6bcb09e7dad98561ea863ac402ef2e194b8a6f116103e759659ee->enter($__internal_b77a6979aab6bcb09e7dad98561ea863ac402ef2e194b8a6f116103e759659ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_02f2aeb1a20c5fb21ae82b086517bf42fd057935ea2e91a887eb216bffffa328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f2aeb1a20c5fb21ae82b086517bf42fd057935ea2e91a887eb216bffffa328->enter($__internal_02f2aeb1a20c5fb21ae82b086517bf42fd057935ea2e91a887eb216bffffa328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b77a6979aab6bcb09e7dad98561ea863ac402ef2e194b8a6f116103e759659ee->leave($__internal_b77a6979aab6bcb09e7dad98561ea863ac402ef2e194b8a6f116103e759659ee_prof);

        
        $__internal_02f2aeb1a20c5fb21ae82b086517bf42fd057935ea2e91a887eb216bffffa328->leave($__internal_02f2aeb1a20c5fb21ae82b086517bf42fd057935ea2e91a887eb216bffffa328_prof);

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

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
        $__internal_966dac68b2bcbebcec8531a41551829f42eeafbb705cb2f19c675560a7ef6907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966dac68b2bcbebcec8531a41551829f42eeafbb705cb2f19c675560a7ef6907->enter($__internal_966dac68b2bcbebcec8531a41551829f42eeafbb705cb2f19c675560a7ef6907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9282c1ba825ca8c76d151fdeb5cde223841e8e33c163c2387fff38aee07848fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9282c1ba825ca8c76d151fdeb5cde223841e8e33c163c2387fff38aee07848fa->enter($__internal_9282c1ba825ca8c76d151fdeb5cde223841e8e33c163c2387fff38aee07848fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_966dac68b2bcbebcec8531a41551829f42eeafbb705cb2f19c675560a7ef6907->leave($__internal_966dac68b2bcbebcec8531a41551829f42eeafbb705cb2f19c675560a7ef6907_prof);

        
        $__internal_9282c1ba825ca8c76d151fdeb5cde223841e8e33c163c2387fff38aee07848fa->leave($__internal_9282c1ba825ca8c76d151fdeb5cde223841e8e33c163c2387fff38aee07848fa_prof);

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

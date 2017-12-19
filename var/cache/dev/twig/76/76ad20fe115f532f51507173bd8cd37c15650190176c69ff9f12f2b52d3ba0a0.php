<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4ba636259aa58625e42626aded9d5e70dad2845ca36f5c4cdad59c70d048f3f1 extends Twig_Template
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
        $__internal_08c3b6721b359050d74cd4bb4978c38d51a4a2d97eb61d0960836431de49be3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c3b6721b359050d74cd4bb4978c38d51a4a2d97eb61d0960836431de49be3e->enter($__internal_08c3b6721b359050d74cd4bb4978c38d51a4a2d97eb61d0960836431de49be3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9eb1db308649f1c15a0c7f780163c79914616ff5edadfd7a858877bf4d87c00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb1db308649f1c15a0c7f780163c79914616ff5edadfd7a858877bf4d87c00d->enter($__internal_9eb1db308649f1c15a0c7f780163c79914616ff5edadfd7a858877bf4d87c00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_08c3b6721b359050d74cd4bb4978c38d51a4a2d97eb61d0960836431de49be3e->leave($__internal_08c3b6721b359050d74cd4bb4978c38d51a4a2d97eb61d0960836431de49be3e_prof);

        
        $__internal_9eb1db308649f1c15a0c7f780163c79914616ff5edadfd7a858877bf4d87c00d->leave($__internal_9eb1db308649f1c15a0c7f780163c79914616ff5edadfd7a858877bf4d87c00d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

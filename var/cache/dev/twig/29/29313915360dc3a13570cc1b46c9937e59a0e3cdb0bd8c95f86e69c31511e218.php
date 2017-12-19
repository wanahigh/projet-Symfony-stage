<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4ef70e332dd2d5a0b4fe6a494ed455062fe762c3af96a3c940366955ea2f61f6 extends Twig_Template
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
        $__internal_a0f0a8b2221d0250a6c493ed05e8b958867877bbed6cefbbb89ced115eb6a04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f0a8b2221d0250a6c493ed05e8b958867877bbed6cefbbb89ced115eb6a04c->enter($__internal_a0f0a8b2221d0250a6c493ed05e8b958867877bbed6cefbbb89ced115eb6a04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_427413040d9651af7fdf16d95db232add3b8bffdd456f6ec06382011699cab3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427413040d9651af7fdf16d95db232add3b8bffdd456f6ec06382011699cab3c->enter($__internal_427413040d9651af7fdf16d95db232add3b8bffdd456f6ec06382011699cab3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a0f0a8b2221d0250a6c493ed05e8b958867877bbed6cefbbb89ced115eb6a04c->leave($__internal_a0f0a8b2221d0250a6c493ed05e8b958867877bbed6cefbbb89ced115eb6a04c_prof);

        
        $__internal_427413040d9651af7fdf16d95db232add3b8bffdd456f6ec06382011699cab3c->leave($__internal_427413040d9651af7fdf16d95db232add3b8bffdd456f6ec06382011699cab3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

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
        $__internal_e548d70c46e5e71975f82af211d41b4ec9ac683a6535c4a7ea1e0136039c2285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e548d70c46e5e71975f82af211d41b4ec9ac683a6535c4a7ea1e0136039c2285->enter($__internal_e548d70c46e5e71975f82af211d41b4ec9ac683a6535c4a7ea1e0136039c2285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2c23f96dbc770f215f04f68362e16ea880f1312046be8e81a9b67ddc259b9328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c23f96dbc770f215f04f68362e16ea880f1312046be8e81a9b67ddc259b9328->enter($__internal_2c23f96dbc770f215f04f68362e16ea880f1312046be8e81a9b67ddc259b9328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e548d70c46e5e71975f82af211d41b4ec9ac683a6535c4a7ea1e0136039c2285->leave($__internal_e548d70c46e5e71975f82af211d41b4ec9ac683a6535c4a7ea1e0136039c2285_prof);

        
        $__internal_2c23f96dbc770f215f04f68362e16ea880f1312046be8e81a9b67ddc259b9328->leave($__internal_2c23f96dbc770f215f04f68362e16ea880f1312046be8e81a9b67ddc259b9328_prof);

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

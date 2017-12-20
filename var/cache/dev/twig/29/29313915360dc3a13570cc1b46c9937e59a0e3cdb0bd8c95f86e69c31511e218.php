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
        $__internal_6b85ad164f0c9214e4adbcab3f7c64b22057466308b50076478954cf37b27666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b85ad164f0c9214e4adbcab3f7c64b22057466308b50076478954cf37b27666->enter($__internal_6b85ad164f0c9214e4adbcab3f7c64b22057466308b50076478954cf37b27666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2ae704a59bdd93d76b271e35917127614492f4c6b0f1435e4c5b61ec9a3ad801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae704a59bdd93d76b271e35917127614492f4c6b0f1435e4c5b61ec9a3ad801->enter($__internal_2ae704a59bdd93d76b271e35917127614492f4c6b0f1435e4c5b61ec9a3ad801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6b85ad164f0c9214e4adbcab3f7c64b22057466308b50076478954cf37b27666->leave($__internal_6b85ad164f0c9214e4adbcab3f7c64b22057466308b50076478954cf37b27666_prof);

        
        $__internal_2ae704a59bdd93d76b271e35917127614492f4c6b0f1435e4c5b61ec9a3ad801->leave($__internal_2ae704a59bdd93d76b271e35917127614492f4c6b0f1435e4c5b61ec9a3ad801_prof);

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

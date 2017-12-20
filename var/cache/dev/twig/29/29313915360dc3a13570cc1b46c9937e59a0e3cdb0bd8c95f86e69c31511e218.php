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
        $__internal_4126be44048ed764cd50af485ea5be33d85f03f5144dd7127444b8550731b578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4126be44048ed764cd50af485ea5be33d85f03f5144dd7127444b8550731b578->enter($__internal_4126be44048ed764cd50af485ea5be33d85f03f5144dd7127444b8550731b578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f1eaf89f92ebb3ccf1dd73e0e45128b4ba5b90945e8cae82c6d764255489053b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1eaf89f92ebb3ccf1dd73e0e45128b4ba5b90945e8cae82c6d764255489053b->enter($__internal_f1eaf89f92ebb3ccf1dd73e0e45128b4ba5b90945e8cae82c6d764255489053b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4126be44048ed764cd50af485ea5be33d85f03f5144dd7127444b8550731b578->leave($__internal_4126be44048ed764cd50af485ea5be33d85f03f5144dd7127444b8550731b578_prof);

        
        $__internal_f1eaf89f92ebb3ccf1dd73e0e45128b4ba5b90945e8cae82c6d764255489053b->leave($__internal_f1eaf89f92ebb3ccf1dd73e0e45128b4ba5b90945e8cae82c6d764255489053b_prof);

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

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
        $__internal_32b9a4a4b52a3e91c5c452c8c523cda44a1e7f9da62e222dfa4bfd114d1f75f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b9a4a4b52a3e91c5c452c8c523cda44a1e7f9da62e222dfa4bfd114d1f75f9->enter($__internal_32b9a4a4b52a3e91c5c452c8c523cda44a1e7f9da62e222dfa4bfd114d1f75f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_78e8090ad2d871045c3e1cb048293641ee2af1d9f45d5cd63c9ab81ecacd5ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e8090ad2d871045c3e1cb048293641ee2af1d9f45d5cd63c9ab81ecacd5ce9->enter($__internal_78e8090ad2d871045c3e1cb048293641ee2af1d9f45d5cd63c9ab81ecacd5ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_32b9a4a4b52a3e91c5c452c8c523cda44a1e7f9da62e222dfa4bfd114d1f75f9->leave($__internal_32b9a4a4b52a3e91c5c452c8c523cda44a1e7f9da62e222dfa4bfd114d1f75f9_prof);

        
        $__internal_78e8090ad2d871045c3e1cb048293641ee2af1d9f45d5cd63c9ab81ecacd5ce9->leave($__internal_78e8090ad2d871045c3e1cb048293641ee2af1d9f45d5cd63c9ab81ecacd5ce9_prof);

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

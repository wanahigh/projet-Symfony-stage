<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f201cdf592b498c12e41792fe00aa871f3de79d7aa76f9c9288f078c87864df8 extends Twig_Template
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
        $__internal_e286be88b30f36e73d8d1244cf10d6d7017467902174a87a0485bc8913d9ebcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e286be88b30f36e73d8d1244cf10d6d7017467902174a87a0485bc8913d9ebcc->enter($__internal_e286be88b30f36e73d8d1244cf10d6d7017467902174a87a0485bc8913d9ebcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_46649336268a670aa0a2fe84fe6e35b2db96541406d8ba8d5a3cfb8ad06effca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46649336268a670aa0a2fe84fe6e35b2db96541406d8ba8d5a3cfb8ad06effca->enter($__internal_46649336268a670aa0a2fe84fe6e35b2db96541406d8ba8d5a3cfb8ad06effca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e286be88b30f36e73d8d1244cf10d6d7017467902174a87a0485bc8913d9ebcc->leave($__internal_e286be88b30f36e73d8d1244cf10d6d7017467902174a87a0485bc8913d9ebcc_prof);

        
        $__internal_46649336268a670aa0a2fe84fe6e35b2db96541406d8ba8d5a3cfb8ad06effca->leave($__internal_46649336268a670aa0a2fe84fe6e35b2db96541406d8ba8d5a3cfb8ad06effca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_4e52719f78efc86c7a7eed1c651dac270d14bfd7a0272dc872f3aeaa2aa28b9a extends Twig_Template
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
        $__internal_1dde1bdce0dc7bac541e7f53afa95331c7d34fd0183e2e773fc96cdd6b46bf25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dde1bdce0dc7bac541e7f53afa95331c7d34fd0183e2e773fc96cdd6b46bf25->enter($__internal_1dde1bdce0dc7bac541e7f53afa95331c7d34fd0183e2e773fc96cdd6b46bf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e4164ea38dc01ec78b60a6e51a4de9b250ecb3023fa133e3e814add09a564b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4164ea38dc01ec78b60a6e51a4de9b250ecb3023fa133e3e814add09a564b13->enter($__internal_e4164ea38dc01ec78b60a6e51a4de9b250ecb3023fa133e3e814add09a564b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1dde1bdce0dc7bac541e7f53afa95331c7d34fd0183e2e773fc96cdd6b46bf25->leave($__internal_1dde1bdce0dc7bac541e7f53afa95331c7d34fd0183e2e773fc96cdd6b46bf25_prof);

        
        $__internal_e4164ea38dc01ec78b60a6e51a4de9b250ecb3023fa133e3e814add09a564b13->leave($__internal_e4164ea38dc01ec78b60a6e51a4de9b250ecb3023fa133e3e814add09a564b13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}

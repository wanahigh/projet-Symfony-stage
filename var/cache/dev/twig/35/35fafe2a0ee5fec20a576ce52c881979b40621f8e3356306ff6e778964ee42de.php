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
        $__internal_dfdf46b9d8c525a459c7edd21964e606380dfb13730a3f5af275b13bd70b2b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdf46b9d8c525a459c7edd21964e606380dfb13730a3f5af275b13bd70b2b72->enter($__internal_dfdf46b9d8c525a459c7edd21964e606380dfb13730a3f5af275b13bd70b2b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_84f9fab4d67a17cbd800705c3f3a1e653fac614c6eb67784e678195dd692d9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f9fab4d67a17cbd800705c3f3a1e653fac614c6eb67784e678195dd692d9bd->enter($__internal_84f9fab4d67a17cbd800705c3f3a1e653fac614c6eb67784e678195dd692d9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dfdf46b9d8c525a459c7edd21964e606380dfb13730a3f5af275b13bd70b2b72->leave($__internal_dfdf46b9d8c525a459c7edd21964e606380dfb13730a3f5af275b13bd70b2b72_prof);

        
        $__internal_84f9fab4d67a17cbd800705c3f3a1e653fac614c6eb67784e678195dd692d9bd->leave($__internal_84f9fab4d67a17cbd800705c3f3a1e653fac614c6eb67784e678195dd692d9bd_prof);

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

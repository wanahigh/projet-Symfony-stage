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
        $__internal_2a2b6903f6f1dc97edd573a90d614e75d3828a82311aa7ae1ae0ad099f502911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2b6903f6f1dc97edd573a90d614e75d3828a82311aa7ae1ae0ad099f502911->enter($__internal_2a2b6903f6f1dc97edd573a90d614e75d3828a82311aa7ae1ae0ad099f502911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_dbbd128eb73edc098de69fbcb80597a156689e97d26d316be20ad4e25e82d7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbd128eb73edc098de69fbcb80597a156689e97d26d316be20ad4e25e82d7d5->enter($__internal_dbbd128eb73edc098de69fbcb80597a156689e97d26d316be20ad4e25e82d7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2a2b6903f6f1dc97edd573a90d614e75d3828a82311aa7ae1ae0ad099f502911->leave($__internal_2a2b6903f6f1dc97edd573a90d614e75d3828a82311aa7ae1ae0ad099f502911_prof);

        
        $__internal_dbbd128eb73edc098de69fbcb80597a156689e97d26d316be20ad4e25e82d7d5->leave($__internal_dbbd128eb73edc098de69fbcb80597a156689e97d26d316be20ad4e25e82d7d5_prof);

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

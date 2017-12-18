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
        $__internal_7c19b60fac4106fafe7ddf5a3fba08be653155972af9c5f4f0464c827d88ffe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c19b60fac4106fafe7ddf5a3fba08be653155972af9c5f4f0464c827d88ffe8->enter($__internal_7c19b60fac4106fafe7ddf5a3fba08be653155972af9c5f4f0464c827d88ffe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_67e5022120d0e233b077cddf6ab1ab1773e38912fd36e87152e821a4eec4f75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e5022120d0e233b077cddf6ab1ab1773e38912fd36e87152e821a4eec4f75c->enter($__internal_67e5022120d0e233b077cddf6ab1ab1773e38912fd36e87152e821a4eec4f75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7c19b60fac4106fafe7ddf5a3fba08be653155972af9c5f4f0464c827d88ffe8->leave($__internal_7c19b60fac4106fafe7ddf5a3fba08be653155972af9c5f4f0464c827d88ffe8_prof);

        
        $__internal_67e5022120d0e233b077cddf6ab1ab1773e38912fd36e87152e821a4eec4f75c->leave($__internal_67e5022120d0e233b077cddf6ab1ab1773e38912fd36e87152e821a4eec4f75c_prof);

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

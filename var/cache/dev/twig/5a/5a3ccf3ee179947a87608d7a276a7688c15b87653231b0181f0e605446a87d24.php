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
        $__internal_8906f50df5bdeaf3d2fbf94b8781bc718ad2b5ce94938a89de3bed6ac01c8550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8906f50df5bdeaf3d2fbf94b8781bc718ad2b5ce94938a89de3bed6ac01c8550->enter($__internal_8906f50df5bdeaf3d2fbf94b8781bc718ad2b5ce94938a89de3bed6ac01c8550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_06b9d9b39ebab7beb6fba502859e29df3138c528ff4815ba252cc83856dd5e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b9d9b39ebab7beb6fba502859e29df3138c528ff4815ba252cc83856dd5e23->enter($__internal_06b9d9b39ebab7beb6fba502859e29df3138c528ff4815ba252cc83856dd5e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8906f50df5bdeaf3d2fbf94b8781bc718ad2b5ce94938a89de3bed6ac01c8550->leave($__internal_8906f50df5bdeaf3d2fbf94b8781bc718ad2b5ce94938a89de3bed6ac01c8550_prof);

        
        $__internal_06b9d9b39ebab7beb6fba502859e29df3138c528ff4815ba252cc83856dd5e23->leave($__internal_06b9d9b39ebab7beb6fba502859e29df3138c528ff4815ba252cc83856dd5e23_prof);

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

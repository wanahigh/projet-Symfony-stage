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
        $__internal_4bbe58a06a06473ef48b5581904329fdff9af8a1e2f288dbbcba3c115c97b650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bbe58a06a06473ef48b5581904329fdff9af8a1e2f288dbbcba3c115c97b650->enter($__internal_4bbe58a06a06473ef48b5581904329fdff9af8a1e2f288dbbcba3c115c97b650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_37cdf030abfba8c0c4677dcd74d898cb1734b31066d3fbe16130bac3dce13ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cdf030abfba8c0c4677dcd74d898cb1734b31066d3fbe16130bac3dce13ff8->enter($__internal_37cdf030abfba8c0c4677dcd74d898cb1734b31066d3fbe16130bac3dce13ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4bbe58a06a06473ef48b5581904329fdff9af8a1e2f288dbbcba3c115c97b650->leave($__internal_4bbe58a06a06473ef48b5581904329fdff9af8a1e2f288dbbcba3c115c97b650_prof);

        
        $__internal_37cdf030abfba8c0c4677dcd74d898cb1734b31066d3fbe16130bac3dce13ff8->leave($__internal_37cdf030abfba8c0c4677dcd74d898cb1734b31066d3fbe16130bac3dce13ff8_prof);

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

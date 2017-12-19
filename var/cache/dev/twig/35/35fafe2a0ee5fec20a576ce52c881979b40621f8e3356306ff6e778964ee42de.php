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
        $__internal_fca902e0c43654b30e0f0bc14b1347d582ff68dee28d25400e955d6d13e9dcd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca902e0c43654b30e0f0bc14b1347d582ff68dee28d25400e955d6d13e9dcd1->enter($__internal_fca902e0c43654b30e0f0bc14b1347d582ff68dee28d25400e955d6d13e9dcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_005f31a9ef1390d7229ab67aa212e8d4b8cb031e79106dd254c38a719e161db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005f31a9ef1390d7229ab67aa212e8d4b8cb031e79106dd254c38a719e161db8->enter($__internal_005f31a9ef1390d7229ab67aa212e8d4b8cb031e79106dd254c38a719e161db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fca902e0c43654b30e0f0bc14b1347d582ff68dee28d25400e955d6d13e9dcd1->leave($__internal_fca902e0c43654b30e0f0bc14b1347d582ff68dee28d25400e955d6d13e9dcd1_prof);

        
        $__internal_005f31a9ef1390d7229ab67aa212e8d4b8cb031e79106dd254c38a719e161db8->leave($__internal_005f31a9ef1390d7229ab67aa212e8d4b8cb031e79106dd254c38a719e161db8_prof);

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

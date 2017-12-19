<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f99e02fe4a229633f2654944d416bc22a84dd54593204dce3594ac26214ddfc4 extends Twig_Template
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
        $__internal_7d97bad5f6dcc312a33a3f2a2f8e21a4a930259b465870f9377d4a9ad7df1dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d97bad5f6dcc312a33a3f2a2f8e21a4a930259b465870f9377d4a9ad7df1dc9->enter($__internal_7d97bad5f6dcc312a33a3f2a2f8e21a4a930259b465870f9377d4a9ad7df1dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_919de0cdfacc69164930f516e24d7117033333e88d7b6ef2b11ef8510cfabb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919de0cdfacc69164930f516e24d7117033333e88d7b6ef2b11ef8510cfabb34->enter($__internal_919de0cdfacc69164930f516e24d7117033333e88d7b6ef2b11ef8510cfabb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7d97bad5f6dcc312a33a3f2a2f8e21a4a930259b465870f9377d4a9ad7df1dc9->leave($__internal_7d97bad5f6dcc312a33a3f2a2f8e21a4a930259b465870f9377d4a9ad7df1dc9_prof);

        
        $__internal_919de0cdfacc69164930f516e24d7117033333e88d7b6ef2b11ef8510cfabb34->leave($__internal_919de0cdfacc69164930f516e24d7117033333e88d7b6ef2b11ef8510cfabb34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

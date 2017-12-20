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
        $__internal_60dfacb4dc67225d183b091ece69730f85e4129e673f1e9aacbd6dfc13de1684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60dfacb4dc67225d183b091ece69730f85e4129e673f1e9aacbd6dfc13de1684->enter($__internal_60dfacb4dc67225d183b091ece69730f85e4129e673f1e9aacbd6dfc13de1684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_83eb2ee21e67f4342919b73f936d96248c21b41f0581fd71a810f3cdb1ab8c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83eb2ee21e67f4342919b73f936d96248c21b41f0581fd71a810f3cdb1ab8c6e->enter($__internal_83eb2ee21e67f4342919b73f936d96248c21b41f0581fd71a810f3cdb1ab8c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_60dfacb4dc67225d183b091ece69730f85e4129e673f1e9aacbd6dfc13de1684->leave($__internal_60dfacb4dc67225d183b091ece69730f85e4129e673f1e9aacbd6dfc13de1684_prof);

        
        $__internal_83eb2ee21e67f4342919b73f936d96248c21b41f0581fd71a810f3cdb1ab8c6e->leave($__internal_83eb2ee21e67f4342919b73f936d96248c21b41f0581fd71a810f3cdb1ab8c6e_prof);

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

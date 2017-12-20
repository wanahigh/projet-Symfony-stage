<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0444a4576419cef143920045711c112e304eb0461eb0f429dfc1acb4d56522ec extends Twig_Template
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
        $__internal_a2359a042cb5d8d4608eb37180cbb722a099db50beb2c6c78f77836d72e3a252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2359a042cb5d8d4608eb37180cbb722a099db50beb2c6c78f77836d72e3a252->enter($__internal_a2359a042cb5d8d4608eb37180cbb722a099db50beb2c6c78f77836d72e3a252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_31791648738fea7c2091e704c92762a0b99472b5484e1cfc80c5aa0cf9bd9580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31791648738fea7c2091e704c92762a0b99472b5484e1cfc80c5aa0cf9bd9580->enter($__internal_31791648738fea7c2091e704c92762a0b99472b5484e1cfc80c5aa0cf9bd9580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a2359a042cb5d8d4608eb37180cbb722a099db50beb2c6c78f77836d72e3a252->leave($__internal_a2359a042cb5d8d4608eb37180cbb722a099db50beb2c6c78f77836d72e3a252_prof);

        
        $__internal_31791648738fea7c2091e704c92762a0b99472b5484e1cfc80c5aa0cf9bd9580->leave($__internal_31791648738fea7c2091e704c92762a0b99472b5484e1cfc80c5aa0cf9bd9580_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

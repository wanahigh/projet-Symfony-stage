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
        $__internal_6b30561a71e95816ee5aeb1d70b0b07ebefe2473e0094da3c9a21a8a797cd925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b30561a71e95816ee5aeb1d70b0b07ebefe2473e0094da3c9a21a8a797cd925->enter($__internal_6b30561a71e95816ee5aeb1d70b0b07ebefe2473e0094da3c9a21a8a797cd925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_60190ddfb0093f9ce7499dfd0aee3cafd2b975b0ac8edda51e86fa78d86fad18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60190ddfb0093f9ce7499dfd0aee3cafd2b975b0ac8edda51e86fa78d86fad18->enter($__internal_60190ddfb0093f9ce7499dfd0aee3cafd2b975b0ac8edda51e86fa78d86fad18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6b30561a71e95816ee5aeb1d70b0b07ebefe2473e0094da3c9a21a8a797cd925->leave($__internal_6b30561a71e95816ee5aeb1d70b0b07ebefe2473e0094da3c9a21a8a797cd925_prof);

        
        $__internal_60190ddfb0093f9ce7499dfd0aee3cafd2b975b0ac8edda51e86fa78d86fad18->leave($__internal_60190ddfb0093f9ce7499dfd0aee3cafd2b975b0ac8edda51e86fa78d86fad18_prof);

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

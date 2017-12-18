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
        $__internal_59d59b87e88ef305c45a5617cc522a3efe252f9a846cdb3e13f6e67e311872ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d59b87e88ef305c45a5617cc522a3efe252f9a846cdb3e13f6e67e311872ad->enter($__internal_59d59b87e88ef305c45a5617cc522a3efe252f9a846cdb3e13f6e67e311872ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b77c2b0938101588a8d9b18b96acfed292fa1e0550a675a7c6772d7b54603d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77c2b0938101588a8d9b18b96acfed292fa1e0550a675a7c6772d7b54603d7e->enter($__internal_b77c2b0938101588a8d9b18b96acfed292fa1e0550a675a7c6772d7b54603d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_59d59b87e88ef305c45a5617cc522a3efe252f9a846cdb3e13f6e67e311872ad->leave($__internal_59d59b87e88ef305c45a5617cc522a3efe252f9a846cdb3e13f6e67e311872ad_prof);

        
        $__internal_b77c2b0938101588a8d9b18b96acfed292fa1e0550a675a7c6772d7b54603d7e->leave($__internal_b77c2b0938101588a8d9b18b96acfed292fa1e0550a675a7c6772d7b54603d7e_prof);

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

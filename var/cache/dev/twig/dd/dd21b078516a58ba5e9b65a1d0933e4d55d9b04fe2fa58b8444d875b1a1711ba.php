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
        $__internal_8045dcdce9104e5dc486b2a8989d404ef4ae3fb11db8c28868b2924ae04cf81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8045dcdce9104e5dc486b2a8989d404ef4ae3fb11db8c28868b2924ae04cf81b->enter($__internal_8045dcdce9104e5dc486b2a8989d404ef4ae3fb11db8c28868b2924ae04cf81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_24f6c03e66e8993637f3be164e07dd9e1a9b136df898a29369935270df845a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f6c03e66e8993637f3be164e07dd9e1a9b136df898a29369935270df845a4c->enter($__internal_24f6c03e66e8993637f3be164e07dd9e1a9b136df898a29369935270df845a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8045dcdce9104e5dc486b2a8989d404ef4ae3fb11db8c28868b2924ae04cf81b->leave($__internal_8045dcdce9104e5dc486b2a8989d404ef4ae3fb11db8c28868b2924ae04cf81b_prof);

        
        $__internal_24f6c03e66e8993637f3be164e07dd9e1a9b136df898a29369935270df845a4c->leave($__internal_24f6c03e66e8993637f3be164e07dd9e1a9b136df898a29369935270df845a4c_prof);

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

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
        $__internal_49b8f5bc0ef4ea45e1fa9f59547810df4e8fa24972cc623b6d8953daf007e888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b8f5bc0ef4ea45e1fa9f59547810df4e8fa24972cc623b6d8953daf007e888->enter($__internal_49b8f5bc0ef4ea45e1fa9f59547810df4e8fa24972cc623b6d8953daf007e888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_509144907cf0d7d109bae303d42009d67165d051977e6ea8f8e0080d2a69406a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509144907cf0d7d109bae303d42009d67165d051977e6ea8f8e0080d2a69406a->enter($__internal_509144907cf0d7d109bae303d42009d67165d051977e6ea8f8e0080d2a69406a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_49b8f5bc0ef4ea45e1fa9f59547810df4e8fa24972cc623b6d8953daf007e888->leave($__internal_49b8f5bc0ef4ea45e1fa9f59547810df4e8fa24972cc623b6d8953daf007e888_prof);

        
        $__internal_509144907cf0d7d109bae303d42009d67165d051977e6ea8f8e0080d2a69406a->leave($__internal_509144907cf0d7d109bae303d42009d67165d051977e6ea8f8e0080d2a69406a_prof);

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

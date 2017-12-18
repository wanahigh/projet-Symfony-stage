<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4ba636259aa58625e42626aded9d5e70dad2845ca36f5c4cdad59c70d048f3f1 extends Twig_Template
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
        $__internal_5fcc8a15246182793e3a1ff1c75e23695dd19988df588908611ad535d03102e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcc8a15246182793e3a1ff1c75e23695dd19988df588908611ad535d03102e5->enter($__internal_5fcc8a15246182793e3a1ff1c75e23695dd19988df588908611ad535d03102e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ed55f827dfb73597b1a92cee11c817dfb7719f0f47e757835ebb4d1995cb5cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed55f827dfb73597b1a92cee11c817dfb7719f0f47e757835ebb4d1995cb5cc7->enter($__internal_ed55f827dfb73597b1a92cee11c817dfb7719f0f47e757835ebb4d1995cb5cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5fcc8a15246182793e3a1ff1c75e23695dd19988df588908611ad535d03102e5->leave($__internal_5fcc8a15246182793e3a1ff1c75e23695dd19988df588908611ad535d03102e5_prof);

        
        $__internal_ed55f827dfb73597b1a92cee11c817dfb7719f0f47e757835ebb4d1995cb5cc7->leave($__internal_ed55f827dfb73597b1a92cee11c817dfb7719f0f47e757835ebb4d1995cb5cc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

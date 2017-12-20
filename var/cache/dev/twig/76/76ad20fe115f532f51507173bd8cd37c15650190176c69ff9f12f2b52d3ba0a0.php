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
        $__internal_476cd329303e978b32a4949cd7136d3ff43ea7fda6e942786d5da5b0468942d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476cd329303e978b32a4949cd7136d3ff43ea7fda6e942786d5da5b0468942d9->enter($__internal_476cd329303e978b32a4949cd7136d3ff43ea7fda6e942786d5da5b0468942d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_246718e536ca4f14ab5176cf575214d8259fc736d696db9c91e68590f3aad8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246718e536ca4f14ab5176cf575214d8259fc736d696db9c91e68590f3aad8fa->enter($__internal_246718e536ca4f14ab5176cf575214d8259fc736d696db9c91e68590f3aad8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_476cd329303e978b32a4949cd7136d3ff43ea7fda6e942786d5da5b0468942d9->leave($__internal_476cd329303e978b32a4949cd7136d3ff43ea7fda6e942786d5da5b0468942d9_prof);

        
        $__internal_246718e536ca4f14ab5176cf575214d8259fc736d696db9c91e68590f3aad8fa->leave($__internal_246718e536ca4f14ab5176cf575214d8259fc736d696db9c91e68590f3aad8fa_prof);

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

<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_ac356e5ddff37a98c3bcaba6b0b67707d640239514ba997887b6759132f39d64 extends Twig_Template
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
        $__internal_46e5f5c5c865d7591e267a5573fa4d16fb31315b060e9040e8159b2d0796be66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e5f5c5c865d7591e267a5573fa4d16fb31315b060e9040e8159b2d0796be66->enter($__internal_46e5f5c5c865d7591e267a5573fa4d16fb31315b060e9040e8159b2d0796be66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_0678e6dbbd4d18f41eeaa846e0a56138bc5402d4ee40320533b7fb6a5d65456a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0678e6dbbd4d18f41eeaa846e0a56138bc5402d4ee40320533b7fb6a5d65456a->enter($__internal_0678e6dbbd4d18f41eeaa846e0a56138bc5402d4ee40320533b7fb6a5d65456a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_46e5f5c5c865d7591e267a5573fa4d16fb31315b060e9040e8159b2d0796be66->leave($__internal_46e5f5c5c865d7591e267a5573fa4d16fb31315b060e9040e8159b2d0796be66_prof);

        
        $__internal_0678e6dbbd4d18f41eeaa846e0a56138bc5402d4ee40320533b7fb6a5d65456a->leave($__internal_0678e6dbbd4d18f41eeaa846e0a56138bc5402d4ee40320533b7fb6a5d65456a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}

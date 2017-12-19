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
        $__internal_16617acf2c02f500a2fae7e08f54d1c8650ce05c1c1acb89234da6ee5370f05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16617acf2c02f500a2fae7e08f54d1c8650ce05c1c1acb89234da6ee5370f05e->enter($__internal_16617acf2c02f500a2fae7e08f54d1c8650ce05c1c1acb89234da6ee5370f05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_7b5ac70a11a04f7498364b6901ac64c860b735da95ed6011a4ecf44c959f7337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5ac70a11a04f7498364b6901ac64c860b735da95ed6011a4ecf44c959f7337->enter($__internal_7b5ac70a11a04f7498364b6901ac64c860b735da95ed6011a4ecf44c959f7337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_16617acf2c02f500a2fae7e08f54d1c8650ce05c1c1acb89234da6ee5370f05e->leave($__internal_16617acf2c02f500a2fae7e08f54d1c8650ce05c1c1acb89234da6ee5370f05e_prof);

        
        $__internal_7b5ac70a11a04f7498364b6901ac64c860b735da95ed6011a4ecf44c959f7337->leave($__internal_7b5ac70a11a04f7498364b6901ac64c860b735da95ed6011a4ecf44c959f7337_prof);

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

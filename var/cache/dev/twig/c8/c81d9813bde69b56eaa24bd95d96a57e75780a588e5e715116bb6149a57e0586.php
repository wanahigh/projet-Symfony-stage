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
        $__internal_090c79dc7a898477404dd2791f914a638bfd7f3ace1c90fef4d58ddb91d681d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090c79dc7a898477404dd2791f914a638bfd7f3ace1c90fef4d58ddb91d681d9->enter($__internal_090c79dc7a898477404dd2791f914a638bfd7f3ace1c90fef4d58ddb91d681d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_afa1d592209137e699136e41bcfb2cd3b8ec8f24a8bdce9dc7f1b144a4482a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa1d592209137e699136e41bcfb2cd3b8ec8f24a8bdce9dc7f1b144a4482a34->enter($__internal_afa1d592209137e699136e41bcfb2cd3b8ec8f24a8bdce9dc7f1b144a4482a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_090c79dc7a898477404dd2791f914a638bfd7f3ace1c90fef4d58ddb91d681d9->leave($__internal_090c79dc7a898477404dd2791f914a638bfd7f3ace1c90fef4d58ddb91d681d9_prof);

        
        $__internal_afa1d592209137e699136e41bcfb2cd3b8ec8f24a8bdce9dc7f1b144a4482a34->leave($__internal_afa1d592209137e699136e41bcfb2cd3b8ec8f24a8bdce9dc7f1b144a4482a34_prof);

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
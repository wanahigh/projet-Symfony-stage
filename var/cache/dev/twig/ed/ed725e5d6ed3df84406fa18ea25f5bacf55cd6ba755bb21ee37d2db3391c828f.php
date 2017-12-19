<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_384065d7fe67edad29d1292b41f63aed61390efe666890b844b71ccf3d15f56b extends Twig_Template
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
        $__internal_ab85583fe04191494dd701a2099a9357bbe5cc8710980ba27ec331a850367237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab85583fe04191494dd701a2099a9357bbe5cc8710980ba27ec331a850367237->enter($__internal_ab85583fe04191494dd701a2099a9357bbe5cc8710980ba27ec331a850367237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4d02f2a6481c99da72ea9dddcd96e5711dd373b4c482efdca3dff11c7ef96665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d02f2a6481c99da72ea9dddcd96e5711dd373b4c482efdca3dff11c7ef96665->enter($__internal_4d02f2a6481c99da72ea9dddcd96e5711dd373b4c482efdca3dff11c7ef96665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ab85583fe04191494dd701a2099a9357bbe5cc8710980ba27ec331a850367237->leave($__internal_ab85583fe04191494dd701a2099a9357bbe5cc8710980ba27ec331a850367237_prof);

        
        $__internal_4d02f2a6481c99da72ea9dddcd96e5711dd373b4c482efdca3dff11c7ef96665->leave($__internal_4d02f2a6481c99da72ea9dddcd96e5711dd373b4c482efdca3dff11c7ef96665_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

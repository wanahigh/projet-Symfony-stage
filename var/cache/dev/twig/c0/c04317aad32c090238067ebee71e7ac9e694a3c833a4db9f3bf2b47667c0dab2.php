<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_14c1eca86c8a3c47fdc300b045efac78e80921d6e9d640997cac1bfe67b95683 extends Twig_Template
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
        $__internal_1d11b2cf48bff8665ceceb71b1c5e3f883a89c8e2d7b35a40d902bf898c856a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d11b2cf48bff8665ceceb71b1c5e3f883a89c8e2d7b35a40d902bf898c856a8->enter($__internal_1d11b2cf48bff8665ceceb71b1c5e3f883a89c8e2d7b35a40d902bf898c856a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9bdfa90d1d6f0d20240dbbbe1a6d186cdd248a493943979b233fce59aab7c250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdfa90d1d6f0d20240dbbbe1a6d186cdd248a493943979b233fce59aab7c250->enter($__internal_9bdfa90d1d6f0d20240dbbbe1a6d186cdd248a493943979b233fce59aab7c250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1d11b2cf48bff8665ceceb71b1c5e3f883a89c8e2d7b35a40d902bf898c856a8->leave($__internal_1d11b2cf48bff8665ceceb71b1c5e3f883a89c8e2d7b35a40d902bf898c856a8_prof);

        
        $__internal_9bdfa90d1d6f0d20240dbbbe1a6d186cdd248a493943979b233fce59aab7c250->leave($__internal_9bdfa90d1d6f0d20240dbbbe1a6d186cdd248a493943979b233fce59aab7c250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}

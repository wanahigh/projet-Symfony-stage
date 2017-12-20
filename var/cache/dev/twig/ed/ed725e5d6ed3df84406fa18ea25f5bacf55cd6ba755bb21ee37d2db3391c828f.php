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
        $__internal_d909ce2996e61aaae1996d27dee937f87d9c5255043fbbfb91b035c0209bbe93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d909ce2996e61aaae1996d27dee937f87d9c5255043fbbfb91b035c0209bbe93->enter($__internal_d909ce2996e61aaae1996d27dee937f87d9c5255043fbbfb91b035c0209bbe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_58c07210910bebff574dbe476704cca61c2221ffbfd0c19f3f7fe6cb34a770af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c07210910bebff574dbe476704cca61c2221ffbfd0c19f3f7fe6cb34a770af->enter($__internal_58c07210910bebff574dbe476704cca61c2221ffbfd0c19f3f7fe6cb34a770af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_d909ce2996e61aaae1996d27dee937f87d9c5255043fbbfb91b035c0209bbe93->leave($__internal_d909ce2996e61aaae1996d27dee937f87d9c5255043fbbfb91b035c0209bbe93_prof);

        
        $__internal_58c07210910bebff574dbe476704cca61c2221ffbfd0c19f3f7fe6cb34a770af->leave($__internal_58c07210910bebff574dbe476704cca61c2221ffbfd0c19f3f7fe6cb34a770af_prof);

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

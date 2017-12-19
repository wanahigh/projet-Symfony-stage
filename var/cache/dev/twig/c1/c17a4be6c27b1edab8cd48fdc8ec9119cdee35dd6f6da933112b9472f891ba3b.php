<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8e2991bbff8e70d34881c8fbae6dcefd76e90ebbcf03559f2d2ec293a315ec44 extends Twig_Template
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
        $__internal_6dbce57f934b5796f37ac88ca62546542a22bee22df7b7ba0c2ef053636dcd57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbce57f934b5796f37ac88ca62546542a22bee22df7b7ba0c2ef053636dcd57->enter($__internal_6dbce57f934b5796f37ac88ca62546542a22bee22df7b7ba0c2ef053636dcd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_30d084891155560166a41a4d66b4de29d5812886592682568ab34b94a87e3076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d084891155560166a41a4d66b4de29d5812886592682568ab34b94a87e3076->enter($__internal_30d084891155560166a41a4d66b4de29d5812886592682568ab34b94a87e3076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6dbce57f934b5796f37ac88ca62546542a22bee22df7b7ba0c2ef053636dcd57->leave($__internal_6dbce57f934b5796f37ac88ca62546542a22bee22df7b7ba0c2ef053636dcd57_prof);

        
        $__internal_30d084891155560166a41a4d66b4de29d5812886592682568ab34b94a87e3076->leave($__internal_30d084891155560166a41a4d66b4de29d5812886592682568ab34b94a87e3076_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
